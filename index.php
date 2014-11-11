<?php
$file = basename($_SERVER['PHP_SELF']);
$pagename = str_replace(".php","",$file);
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <title>Charlie Heesom</title>
    <meta name="description" content="Portfolio of">
    <meta name="author" content="Charlie Heesom">
    <meta name="robots" content="nofollow" />
    <meta name="robots" content="noindex" />
    <!--Mobile specific meta goodness :)-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
    <!--css-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
 
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico">
 
</head>


<body id="home">

<div class="wrapper">
     
        <?php include("header.php");?>
         
        <?php include("skills.php");?>
         
        <?php include("projects.php");?>
         
        <?php include("education.php");?>
        
        <?php include("employment.php");?>
        
        <?php include("footer.php");?>

    </div><!--end wrapper-->

    <script src="js/jquery-2.1.1.js"></script>
    
    <script type="text/javascript">
        
(function() {
    $('article .bye').addClass('hide');
    
    $('.job').on('click', '.title', function() {
        $(this)
            .next()
            .slideToggle();
    });
})();
(function() {
    $('.title').next('.description').addClass('hide');
    $('.section').on('click', '.head', function() {
        $(this)
            .next()
            .slideToggle();
    });
})();
    </script>
    
</body>



</html>