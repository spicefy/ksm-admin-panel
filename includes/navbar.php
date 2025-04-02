<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <!-- Brand Logo (optional) -->
        <!-- <img src="img/logo.png" alt="Brand Logo" height="40"> -->

        <!-- User Info Section -->
        <div class="d-flex align-items-center ms-auto">
            <?php if (!empty($_SESSION['user_name'])): ?>
                <span class="me-3"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
            <?php endif; ?>

            <img 
                src="/assets/img/profile.jpg"  
                alt="User Icon" 
                class="rounded-circle" 
                width="40" 
                height="40"
            >
        </div>
    </div>
</nav>

<!-- Sidebar Toggle Button -->
<i class="fa fa-bars toggle-btn" id="toggle-btn" 
   style="font-size: 1.5rem; cursor: pointer; position: fixed; 
          top: 15px; left: 15px; z-index: 1050; color: #495057;">
</i>
