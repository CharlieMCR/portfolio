<?php 

require_once("../inc/config.php");
require_once(ROOT_PATH . "inc/functions.php");

$projects = get_projects();

$pageTitle = "Charlie Mcr | Projects"; 
$section = "projects";
include(ROOT_PATH . 'inc/header.php'); ?>
	<div class="wrapper group">

		<?php foreach ($projects as $project) { ?>
			<div class="col s3 group">
				<div class="group inner">
					<h2 id="<?php echo $project["id"]; ?>"><?php echo $project["name"]; ?></h2>
					<p><?php echo $project["description"]; ?></p>
				</div>
			</div>
			<div class="col s1 group">
				<div class="group inner">
					<a href="">
					<img src="<?php echo BASE_URL . $project["img"]; ?>" alt="<?php echo $project["name"]; ?>">
					</a>
			    </div>
			</div>
		<?php } ?>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>