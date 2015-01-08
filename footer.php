
    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
			<?php
			$links = array(
				'fb' => get_theme_mod('fb_link'),
				'twitter' => get_theme_mod('twitter_link'),
				'gh' => get_theme_mod('gh_link'),
                'gplus' => get_theme_mod('gplus_link'),
				);	
			 if($links['fb'] != ''): ?>
                        <li>
                            <a href="<?php echo $links['fb']; ?>">
	                            <span class="fa-stack fa-lg">
	                    	     <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
			<?php endif; 
            if($links['twitter'] != ''): ?>
                        <li>
                            <a href="<?php echo $links['twitter']; ?>">
                                <span class="fa-stack fa-lg">
                                 <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
            <?php endif; 
            if($links['gplus'] != ''): ?>
                        <li>
                            <a href="<?php echo $links['gplus']; ?>">
                                <span class="fa-stack fa-lg">
                                 <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
            <?php endif; 
            if($links['gh'] != ''): ?>
                        <li>
                            <a href="<?php echo $links['gh']; ?>">
                                <span class="fa-stack fa-lg">
                                 <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
            <?php endif; ?>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; <?php bloginfo('title');  ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/clean-blog.js"></script>
<?php wp_footer(); ?>
</body>

</html>
