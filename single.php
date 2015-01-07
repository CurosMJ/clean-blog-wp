<?php get_header(); ?>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php 
                    the_content(); 
                    ?>
                </div>
            </div>
        </div>
    </article>
<?php get_footer(); ?>