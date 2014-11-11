<footer>
         
    <p>Copyright &copy;<?php echo date('Y'); ?> <a href="http://www.charlieheesom.com">Charlie Heesom</a></p>
 
</footer>
</div><!--end wrapper-->

<nav class="group" id="primary_nav">
 
    <ul class="">
        <li class="about <?php if ($section == "about") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>about/">About</a></li>
        <li class="cv <?php if ($section == "cv") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>cv/">CV</a></li>
        <li class="projects <?php if ($section == "projects") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>projects/">Projects</a></li>
        <li class="top"><a href="#home">Top</a></li>
     
    </ul>

</nav><!--end primary_nav-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    
    <script src="<?php echo BASE_URL; ?>js/app.js" type="text/javascript">
        

    </script>
    
</body>



</html>