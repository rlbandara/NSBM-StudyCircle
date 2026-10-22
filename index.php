
<?php
$pageTitle = 'NSBM StudyCircle - Learn Together';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Welcome Section -->
<section class="container py-5">

    <div class="welcome-card text-center p-4 p-md-5 rounded-4">

        <h1 class="display-5 fw-bold">
            Learn Together. Grow Together.
        </h1>

        <p class="lead mt-3">
            Share lecture notes, discover study materials,
            and connect with fellow students.
        </p>

        <?php if (!isset($_SESSION['user_id'])): ?>

            <a href="#features"
               class="btn btn-primary btn-lg mt-3">
                Explore Features
            </a>

            <div class="mt-3">
                <a href="/NSBM-StudyCircle/auth/register.php"
                   class="btn btn-outline-primary me-2">
                    Join StudyCircle
                </a>

                <a href="/NSBM-StudyCircle/auth/login.php"
                   class="btn btn-primary">
                    Login
                </a>
            </div>

        <?php else: ?>

            <?php if (($_SESSION['role'] ?? '') === 'admin'): ?>

                <a href="/NSBM-StudyCircle/admin/dashboard.php"
                   class="btn btn-primary btn-lg mt-3">
                    Go to Admin Dashboard
                </a>

            <?php else: ?>

                <a href="/NSBM-StudyCircle/student/dashboard.php"
                   class="btn btn-primary btn-lg mt-3">
                    Go to Student Dashboard
                </a>

            <?php endif; ?>

        <?php endif; ?>

    </div>

    <!-- Features Section -->
    <section id="features" class="row g-4 mt-4">

        <!-- Study Materials -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 p-3 shadow-sm">
                <div class="card-body">
                    <div class="fs-1 mb-3">📚</div>

                    <h2 class="h5 fw-bold">
                        Study Materials
                    </h2>

                    <p class="text-secondary">
                        Share and access lecture notes and
                        useful educational resources.
                    </p>
                </div>
            </div>
        </div>

        <!-- Discussion Forum -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 p-3 shadow-sm">
                <div class="card-body">
                    <div class="fs-1 mb-3">💬</div>

                    <h2 class="h5 fw-bold">
                        Discussion Forum
                    </h2>

                    <p class="text-secondary">
                        Ask questions, exchange ideas, and
                        help other students learn.
                    </p>
                </div>
            </div>
        </div>

        <!-- Study Groups -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 p-3 shadow-sm">
                <div class="card-body">
                    <div class="fs-1 mb-3">👥</div>

                    <h2 class="h5 fw-bold">
                        Study Groups
                    </h2>

                    <p class="text-secondary">
                        Collaborate with classmates and
                        learn together.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <!-- Call to Action -->
    <section class="text-center py-5 mt-4">

        <h2 class="fw-bold">
            Your Learning Community Starts Here
        </h2>

        <p class="text-secondary mt-3">
            Connect with students and make learning
            a collaborative experience.
        </p>

        <?php if (!isset($_SESSION['user_id'])): ?>

            <a href="/NSBM-StudyCircle/auth/register.php"
               class="btn btn-primary btn-lg mt-2">
                Get Started
            </a>

        <?php elseif (($_SESSION['role'] ?? '') === 'admin'): ?>

            <a href="/NSBM-StudyCircle/admin/dashboard.php"
               class="btn btn-primary btn-lg mt-2">
                Open Admin Dashboard
            </a>

        <?php else: ?>

            <a href="/NSBM-StudyCircle/student/dashboard.php"
               class="btn btn-primary btn-lg mt-2">
                Open Student Dashboard
            </a>

        <?php endif; ?>

    </section>

</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
