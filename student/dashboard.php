
<?php
require_once __DIR__ . '/../includes/auth.php';
requireRole('student');

$pageTitle = 'Student Dashboard | StudyCircle';
require_once __DIR__ . '/../includes/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard | StudyCircle</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body class="bg-light">

    <section class="container py-5">
        <div class="bg-white rounded-4 shadow-sm p-4 p-md-5">
            <h1 class="fw-bold">
                Welcome,
                <?= htmlspecialchars(
                    $_SESSION['full_name'] ?? 'Student',
                    ENT_QUOTES,
                    'UTF-8'
                ) ?>!
            </h1>

            <p class="text-secondary mb-0">
                Welcome to your NSBM StudyCircle dashboard.
                Learn, connect, and grow with your fellow students.
            </p>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5>StudyCircle Community</h5>
                        <p class="text-secondary">
                            Connect with other students and share knowledge.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5>Learning Resources</h5>
                        <p class="text-secondary">
                            Explore learning materials as the resource feature
                            becomes available.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5>Study Together</h5>
                        <p class="text-secondary">
                            Find opportunities to learn with fellow students.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
