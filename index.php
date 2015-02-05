
<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();
?>

<?php include_once("./pages/layout/header_padrao.php"); ?>

<?php include_once("./pages/layout/menu.php"); ?>

<?php include_once("./pages/layout/footer.php"); ?>