<?php
    require_once("../resources/config.php");
    require_once(LIBRARY_PATH . "/templateRenderer.php");
    
?>

<!DOCTYPE html>
<html lang="fr">
<?php renderTemplate('head-contents.php',
   array('title' => 'DauphPicerie',        
   'styles' => array(STYLE_DIR . '/style.css'))
);

?>

<body>
<?php renderTemplate('header-contents.php', array('selected' => 'Boutique')); ?>
