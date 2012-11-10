<?php require_once '__config.php'; ?>
<?php //require_once 'static/maintenance.php'; ?>
<?php require_once 'parts/head.php'; ?>

<body id="top" class="<?php if( is_front_page() ): ?>front <?php endif; ?><?php echo $pagename; ?>">

<?php 
if( !pastry_no_extra_bytes() ) {
    require_once 'parts/topnav.php'; 
}
?>
<?php require_once 'parts/banner.php'; ?>
<?php require_once 'parts/main.php'; ?>
<?php 
if( is_front_page() ) {
    require_once 'parts/complementary.php';
}
?>
<?php 
if( !pastry_no_extra_bytes() ) {
    require_once 'parts/contentinfo-short.php'; 
}
?>
<?php require_once 'parts/footer.php'; ?>

</body>
</html>