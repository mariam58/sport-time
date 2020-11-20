<?php get_header();?>

<section class="container-fluid p-0 m-0">
    <?php if(has_post_thumbnail()):?>
            <div class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>');">
                <div class="banner_title">
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        <?php endif;?>
    <section class="container mt-5 mb-5">     
            <?php get_template_part('includes/section', 'blogcontent');?>
    </section>
</section>



<?php get_footer();?>