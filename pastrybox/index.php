<?php require_once '__config.php'; ?>
<?php require_once 'static/maintenance.php'; ?>
<?php require_once 'parts/head.php'; ?>

<body id="top"<?php if( is_front_page() ): ?> class="front"<?php endif; ?>>

<?php require_once 'parts/topnav.php'; ?>
<?php require_once 'parts/banner.php'; ?>
<?php require_once 'parts/main.php'; ?>
<?php if( is_front_page() ): ?>
  <?php require_once 'parts/complementary.php'; ?>
<?php endif; ?>
<?php require_once 'parts/contentinfo.php'; ?>
<?php require_once 'parts/footer.php'; ?>

</body>
</html>