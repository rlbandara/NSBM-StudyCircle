
<?php
session_start();
require_once __DIR__ . '/../config/database.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['full_name'] ?? '');
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($name === '' || strlen($name) > 100) {
        $error = 'Enter a name (maximum 100 characters).';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)
        || strlen($email) > 150) {
        $error = 'Enter a valid email address.';
    } elseif (strlen($password) < 8) {
        $error = 'Password must contain at least 8 characters.';
    } elseif (strlen($password) > 72) {
        $error = 'Password must be 72 bytes or fewer.';
    } elseif ($password !== $confirmPassword) {
        $error = 'Passwords do not match.';
    } else {
        try {
            $check = $pdo->prepare(
                'SELECT id FROM users WHERE email = ?'
            );
            $check->execute([$email]);

            if ($check->fetch()) {
                $error = 'An account with this email already exists.';
            } else {
                $hashedPassword = password_hash(
                    $password,
                    PASSWORD_DEFAULT
                );

                $stmt = $pdo->prepare(
                    'INSERT INTO users (full_name, email, password, role)
                     VALUES (?, ?, ?, ?)'
                );

                $stmt->execute([
                    $name,
                    $email,
                    $hashedPassword,
                    'student'
                ]);

                $success = 'Registration successful! You can now log in.';
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            $error = 'Registration failed. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration | StudyCircle</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="../index.php">
            NSBM StudyCircle
        </a>
    </div>
</nav>

<div class="container py-5">
    <div class="card mx-auto shadow-sm" style="max-width: 500px;">
        <div class="card-body p-4">
            <h1 class="h3 text-center mb-4">Create Student Account</h1>

            <?php if ($error !== ''): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <?php if ($success !== ''): ?>
                <div class="alert alert-success">
                    <?= htmlspecialchars($success) ?>
                    <a href="login.php">Login here</a>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="full_name" class="form-label">
                        Full Name
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        id="full_name"
                        name="full_name"
                        maxlength="100"
                        autocomplete="name"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email Address
                    </label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        maxlength="150"
                        autocomplete="email"
                        required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password
                    </label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        minlength="8"
                        maxlength="72"
                        autocomplete="new-password"
                        required>
                    <small class="text-muted">
                        Use at least 8 characters.
                    </small>
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        class="form-control"
                        id="confirm_password"
                        name="confirm_password"
                        minlength="8"
                        maxlength="72"
                        autocomplete="new-password"
                        required>
                </div>

                <button class="btn btn-primary w-100" type="submit">
                    Register
                </button>
            </form>

            <p class="text-center mt-3 mb-0">
                Already registered?
                <a href="login.php">Login</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>
