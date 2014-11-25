<?php 

require_once("../inc/config.php");

$pageTitle = "Charlie Mcr | Work";
$section = "cv";
include(ROOT_PATH . 'inc/header.php'); ?>
<div class="wrapper group">

	<?php include(ROOT_PATH . "inc/skills.php");?>

	<?php include(ROOT_PATH . "inc/projects.php");?>

    <?php include(ROOT_PATH . "inc/education.php");?>
        
    <?php include(ROOT_PATH . "inc/employment.php");?>


<?php include(ROOT_PATH . 'inc/footer.php'); ?>