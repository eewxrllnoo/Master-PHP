<?php require('partials/head.php'); ?>

<!-- Desktop Navigation -->
  <?php require('partials/nav.php'); ?> 
<!-- END Desktop Navigation -->
</div>
<!-- END Left Section -->

<!-- Right Section -->
<div class="flex items-center gap-2">
  <!-- Notifications -->
  <?php require('partials/notif.php'); ?>
  <!-- END Notifications -->

  <!-- User Dropdown -->
  <?php require('partials/user-dropdown.php'); ?>
  <!-- END User Dropdown -->

  <!-- Toggle Mobile Navigation -->
  <?php require('partials/toggle-mobile-nav.php'); ?>
  <!-- END Toggle Mobile Navigation -->
</div>
<!-- END Right Section -->
</div>

<!-- Mobile Navigation -->
<?php require('partials/mobile-nav.php'); ?>
<!-- END Mobile Navigation -->
</div>
</header>
<!-- END Page Header -->

<!-- Page Content -->
<main id="page-content" class="flex max-w-full flex-auto flex-col">
  <!-- Page Heading -->
  <?php require('partials/page-heading.php'); ?>
  <!-- END Page Heading -->

  <!-- Page Section -->
  <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
    <!--

      ADD YOUR MAIN CONTENT BELOW

      -->

    <!-- Placeholder -->
    <div
      class="flex items-center justify-center rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 py-64 text-gray-400 dark:border-gray-700 dark:bg-gray-800">
      Hello welcome to the homepage!
    </div>

    <!--
      
      ADD YOUR MAIN CONTENT ABOVE
            
      -->
  </div>
  <!-- END Page Section -->
</main>
<!-- END Page Content -->

<!-- Page Footer -->
<?php require('partials/footer.php'); ?>
<!-- END Page Footer -->
</div>
<!-- END Page Container -->

</body>

</html>