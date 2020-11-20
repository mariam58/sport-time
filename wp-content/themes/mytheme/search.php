<?php get_header();?>


<div class="container">

    
            <h1>Search result for '<?php echo get_search_query();?>'</h1>
            
            <?php get_template_part('includes/section', 'searchresult');?>
            <?php previous_posts_link();?>
            <?php next_posts_link();?>
        
</div>



<?php get_footer();?>