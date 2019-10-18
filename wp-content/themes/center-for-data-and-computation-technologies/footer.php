<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Center_for_Data_and_Computation_Technologies
 */

?>
<footer class="foot">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 cot1">
                <h3 class="tdfoot">Quick Link</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <?php dynamic_sidebar( 'quick_link' ); ?>
                    </div>
                    <div class="col-sm-6">
                        <?php dynamic_sidebar( 'quick_link2' ); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 push-sm-1 cot2">
                <div class="logo text-xs-center">
                    COMPANY
                </div>
                <div class="mangxahoi">
                    <ul>
                        <li><a href=""><i class="fa fa-face-f"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 push-sm-1 cot3">
                <div class="bando">
                    <h3 class="tdfoot">Location</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-xs-center">Coppy</div>
        </div>
    </div>
</footer>	

</body>
</html>
