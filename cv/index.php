<?php 

require_once("../inc/config.php");

$pageTitle = "About Soundfactory Development";
$section = "cv";
include(ROOT_PATH . 'inc/header.php'); ?>


	<?php include(ROOT_PATH . "inc/skills.php");?>

	<?php include(ROOT_PATH . "inc/projects.php");?>

    <?php include(ROOT_PATH . "inc/education.php");?>
        
    <?php include(ROOT_PATH . "inc/employment.php");?>


<?php include(ROOT_PATH . 'inc/footer.php'); ?>