<?php /* Template Name: Contact */ ?>
<?php get_header();?>
<section class="container-fluid m-0 p-0 page_style">
   
    <section class="container-fluid m-0 p-0 banner">
      
        <div class="banner_title" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>');">

            <h1><?php the_title();?></h1>
        </div>
         
    </section>
    <section class="container mt-5 mb-5">
         <?php get_template_part('includes/section', 'content');?>
    </section>
   
</section>
<?php get_footer();?>