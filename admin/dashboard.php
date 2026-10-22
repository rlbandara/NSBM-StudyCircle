
<?php
require_once __DIR__ . '/../includes/auth.php';
requireRole('admin');

$pageTitle = 'Admin Dashboard | StudyCircle';
require_once __DIR__ . '/../includes/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | StudyCircle</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card p-4">
        <h1>StudyCircle Admin Dashboard</h1>
        <p>
            Welcome,
            <?= htmlspecialchars($_SESSION['full_name'], ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Admin access is working.</p>

        <a href="../auth/logout.php" class="btn btn-danger">
            Logout
        </a>
    </div>
</div>

</body>
</html>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>