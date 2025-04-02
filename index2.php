<?php
include 'includes/header.php'; ?>

<div class="d-flex flex-column min-vh-100">
    <?php 
    include 'includes/sidebar.php'; 
    include 'includes/navbar.php'; 
    ?>
    <i class="fa fa-bars toggle-btn" id="toggle-btn"></i>
    <i class="fa fa-adjust theme-toggle" id="theme-toggle"></i>

    <div class="content" id="content">
        <div class="container">
            <h1 class="mt-4">Welcome to the Admin Panel</h1>
            <p>This is a professional, colorful, and responsive admin panel template using PHP and Bootstrap 5.3.3.</p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <p class="card-text">Manage all registered users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Courses</h5>
                            <p class="card-text">Add and manage courses easily.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Quizzes</h5>
                            <p class="card-text">Create and analyze quizzes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
