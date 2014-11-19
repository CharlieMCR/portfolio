<footer>
         
    <p>Copyright &copy;<?php echo date('Y'); ?> <a href="http://www.charlimcr.com">Charlie Mcr</a></p>

	<a href="http://twitter.com/charliemcr"><img src="<?php echo BASE_URL; ?>img/twitter.png" alt="Twitter Logo" class="social-icon"></a>
    <a href="https://github.com/CharlieMCR"><img src="<?php echo BASE_URL; ?>img/github.png" alt="Github Logo" class="social-icon"></a>
    <a href="http://stackoverflow.com/users/4244751/charliemcr"><img src="<?php echo BASE_URL; ?>img/stackoverflow.png" alt="Stackoverflow Logo" class="social-icon"></a>

</footer>
</div><!--end wrapper-->

<nav class="group nav" id="primary_nav">
 
    <ul class="">
        <li class="about <?php if ($section == "about") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>about/">About</a></li>
        <li class="cv <?php if ($section == "cv") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>cv/">CV</a></li>
        <li class="projects <?php if ($section == "projects") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>projects/">Projects</a></li>
        <li class="projects <?php if ($section == "contact") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
        <li class="top"><a href="#home">Top</a></li>

     
    </ul>

</nav><!--end primary_nav-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    
    <script src="<?php echo BASE_URL; ?>js/app.js" type="text/javascript"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56759332-1', 'auto');
  ga('send', 'pageview');

</script>
    
</body>



</html>