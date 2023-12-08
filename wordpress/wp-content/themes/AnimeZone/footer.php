    <div class="span-24">
	<div id="footer">Copyright &copy; <a href="<?php echo home_url(); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?></div>
    <?php /* 
                    All links in the footer should remain intact. 
                    These links are all family friendly and will not hurt your site in any way. 
                    Warning! Your site may stop working if these links are edited or deleted 
                    
                    You can buy this theme without footer links online at http://freewpthemes.com/buy/?theme=anime-zone 
                */ ?>
    <div id="credits">Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a> and <a href="https://shopthemes.com/">ShopThemes</a></div>
    </div>
</div>
</div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>