<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NSBM StudyCircle</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                StudyCircle
            </a>

            <div class="ms-auto">
                <a href="auth/login.php"
                   class="btn btn-outline-light me-2">Login</a>

                <a href="auth/register.php"
                   class="btn btn-light">Register</a>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <div class="welcome-card text-center p-5 rounded-4">
            <h1 class="display-5 fw-bold">
                Learn Together. Grow Together.
            </h1>

            <p class="lead mt-3">
                Share lecture notes, discover study materials,
                and connect with fellow students.
            </p>

            <a href="#features" class="btn btn-primary btn-lg mt-3">
                Explore Features
            </a>
        </div>

        <section id="features" class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h2 class="h5">Study Materials</h2>
                        <p>Share and access lecture notes.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h2 class="h5">Discussion Forum</h2>
                        <p>Ask questions and help other students.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h2 class="h5">Study Groups</h2>
                        <p>Collaborate and learn together.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center py-4 mt-5">
        <p class="mb-0">
            &copy; 2026 NSBM StudyCircle
        </p>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="assets/js/script.js"></script>
</body>
</html>
