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
require "./assets/partial_templates/config.php";
require "./assets/master_templates/main_header.php";
?>

<!-- main wrapper -->
<div class="container">
<div class="wrapper">
    <nav>
        <div class="logo">
            <a href=""><img src="./assets/imgs/mainlogo.png" alt="Encrypt Uganda"></a>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">What we do</a></li>
            <li><a href="">Cyber Laws</a></li>
            <li><a href="">Encrypt Lab</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </nav>
    <section class="sec1">
        <div class="main-content">
            <h1>My main content</h1>
        </div>
    </section>
    <section class="content">
        <p>
        What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p>
        What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </section>

</div>
</div>
<!-- main wrapper end -->
<?php
require "./assets/master_templates/main_footer.php";
