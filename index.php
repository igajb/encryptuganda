<?php
/**
 * This is the landing page for this site
 *
 * PHP version 7.2.15
 *
 * @category PHP
 * @package  Encyrpt_Uganda
 * @author   Iga John <igajohnb@toolboxtechnologies.com>
 * @license  https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD
 * @link     https://toolboxtechnologies.com
 */

$title = "Encrypt Uganda | Redefining Digital Space";
require_once "./assets/partial_templates/config.php";
require_once "./assets/master_templates/main_header.php";
?>

<!-- main wrapper -->
<div class="container">
    <!-- nav wrapper -->
<div class="nav_row clearfix">
    <!-- log element -->
    <div class="brand_logo left">
        <a href=""><img src="/assets/imgs/mainlogo.png" alt="Encrypt Uganda"></a>
    </div>
    <!-- log element end -->
    <!-- navigation links -->
    <div class="main_navigation right">
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#"> About Us <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                    <hr>
                    <li><a href="#">Who We Are</a></li>
                    <hr>
                    <li><a href="#">Our Mission</a></li>
                </ul>
            </li>
            <li><a href="#"> What We Do <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <!-- inner links -->
                <ul>
                    <!-- <hr> -->
                    <li><a href="#" >Capacity Building</a></li>
                    <hr>
                    <li><a href="#" >Digital Security</a></li>
                    <hr>
                    <li><a href="#" >Cyber Rights Protection</a></li>
                    <hr>
                    <li><a href="#" >Information Systems Enhancements</a></li>
                </ul>
            </li>
            <li><a href="#">Cyber Laws</a></li>
            <li><a href="#">Encrypt Lab</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact us <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <!-- inner links -->
                <ul>
                    <!-- <hr> -->
                    <li><a href="#">Share Feedback</a></li>
                    <hr>
                    <li><a href="#">Subscribe To Mailing list</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- navigation links end -->
</div>
<!-- nav wrapper end -->
<!-- main content -->
<div class="main_content">
</div>
<!-- main content end -->
</div>
<!-- main wrapper end -->
<?php
require_once "./assets/master_templates/main_footer.php";
