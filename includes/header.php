
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = $pageTitle ?? 'NSBM StudyCircle';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/NSBM-StudyCircle/assets/css/style.css">
</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <!-- Website Brand -->
        <a class="navbar-brand fw-bold"
           href="/NSBM-StudyCircle/index.php">
            StudyCircle
        </a>

        <!-- Mobile Navbar Toggle -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <?php if (isset($_SESSION['user_id'])): ?>

                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link"
                           href="/NSBM-StudyCircle/index.php">
                            Home
                        </a>
                    </li>

                    <!-- Role-Based Dashboard -->
                    <li class="nav-item">
                        <?php if (($_SESSION['role'] ?? '') === 'admin'): ?>

                            <a class="nav-link"
                               href="/NSBM-StudyCircle/admin/dashboard.php">
                                Dashboard
                            </a>

                        <?php else: ?>

                            <a class="nav-link"
                               href="/NSBM-StudyCircle/student/dashboard.php">
                                Dashboard
                            </a>

                        <?php endif; ?>
                    </li>

                    <!-- Logged-In User -->
                    <li class="nav-item">
                        <span class="navbar-text text-white me-lg-3">
                            Hi,
                            <?= htmlspecialchars(
                                $_SESSION['full_name'] ?? 'Student',
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>
                        </span>
                    </li>

                    <!-- Logout -->
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-lg-2 my-1"
                           href="/NSBM-StudyCircle/auth/logout.php">
                            Logout
                        </a>
                    </li>

                <?php else: ?>

                    <!-- Login -->
                    <li class="nav-item">
                        <a href="/NSBM-StudyCircle/auth/login.php"
                           class="btn btn-outline-light me-lg-2 my-1">
                            Login
                        </a>
                    </li>

                    <!-- Register -->
                    <li class="nav-item">
                        <a href="/NSBM-StudyCircle/auth/register.php"
                           class="btn btn-light my-1">
                            Register
                        </a>
                    </li>

                <?php endif; ?>

            </ul>

        </div>
    </div>
</nav>

<!-- Page Content Starts -->
<main>
