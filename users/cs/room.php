<?php include 'includes/views/head.php'; ?>

<body class="sb-nav-fixed">
  <?php include 'includes/views/nav.php'; ?>
  <!-- END OF TOP NAVIGATION -->

  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <?php include 'includes/views/nav_sidenav.php'; ?>
    </div>

    <div id="layoutSidenav_content">
      <?php 
        if (isset($_GET['source'])) {
          $source = $_GET['source'];
          if ($source == 'updateStatus') { 
            include 'includes/views/content_update_status.php';
          }
        } else {
          include 'includes/views/content_room.php';
        }
      ?>

      <?php include 'includes/views/footer.php' ?>
    </div>
  </div>

<?php include 'includes/views/bottom.php'; ?>