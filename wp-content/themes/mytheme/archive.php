<?php get_header();?>

<section class="container-fluid m-0 p-0">
    <section class="container-fluid m-0 p-0 banner" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>');">
      
      <div class="banner_title">
         <h1><?php echo single_cat_title();?></h1>
      </div>
       
    </section>
    

    <section class="container mt-5 mb-5">
        <?php get_template_part('includes/section', 'archive');?>


      <div class="d-flex justify-content-between">
         <div class="prev_nxt">
            <?php previous_posts_link();?>
        </div>

      <div class="prev_nxt">
          <?php next_posts_link();?>
      </div>
      </div>
       

      

    </section>
</section>

    



<?php get_footer();?>