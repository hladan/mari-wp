<div class="footer_container">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="bottom_footer_container">
    <div class="container_24">
        <div class="grid_24">
            <div class="bottom_footer_content">
                <div class="grid_24">
                    <div class="copyrightinfo">
                        <p class="copyright"><?php _e('Realized by','rdf'); ?><a href="<?php echo urldecode('http://www.wordpress.com'); ?>" target="_blank">
                        	                 <?php _e('Wordpress','rdf'); ?></a> <?php _e('&copy; 2015 marinature.com, All Rights Reserved','rdf'); ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>