<?php 
require_once(ROOT_PATH . "inc/functions.php");

$projects = get_projects();

 ?>

<h2 class="title">Projects</h2>
<div class="group" id="main content">
    <?php foreach ($projects as $project) { ?>
    <div class="col s2 project">
        <div class="inner">
            <a href="<?php echo BASE_URL . 'projects/#' . $project["id"];?>">
                <p><?php echo $project["description"]; ?></p>
                <img src="<?php echo BASE_URL . $project["img"]; ?>" alt="<?php echo $project["name"]; ?>">
                
            </a>
        <p><?php echo $project["name"]; ?></p>
        </div>
    </div>
    <?php } ?>