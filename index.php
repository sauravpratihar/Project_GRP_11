<!doctype html>
<html class="no-js" lang="en">

<?php
include 'head.php';

?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
    <?php

    include "header.php";
    ?>
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
 
        <!-- END MOBILE MENU AREA -->

        <!-- START SLIDER AREA -->

        <!-- END SLIDER AREA -->

        <!-- START PAGE CONTENT -->
        <section id="page-content" class="page-wrapper">

            <!-- PRODUCT TAB SECTION START -->
            <?php

            if(!isset($_GET['id']))
                include "index_comp.php";
            
            if($_GET['id'] == 'login')
                include "login_comp.php";

            if($_GET['id'] == 'course')
                include "course_comp.php";
            ?>
            <!-- PRODUCT TAB SECTION END -->

            <!-- BANNER-SECTION START -->
          
            <!-- BANNER-SECTION END --> 

            <!-- FEATURED PRODUCT SECTION START -->

            <!-- FEATURED PRODUCT SECTION END -->

    
            <!-- UP COMMING PRODUCT SECTION END -->

            <!-- BLOG SECTION START -->
    
            <!-- BLOG SECTION END -->   
             
            <!-- NEWSLETTER SECTION START -->

            <!-- NEWSLETTER SECTION END -->            
        </section>
        <!-- END PAGE CONTENT -->

        <!-- START FOOTER AREA -->
<?php
include "footer.php";

?>

</body>

</html>