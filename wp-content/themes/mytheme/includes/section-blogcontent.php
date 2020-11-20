<?php if(have_posts()): while(have_posts()): the_post();?>

    <?php echo get_the_date();?>
    <?php the_content();?>
    <!-- <?php the_author();?> -->
    <?php
    $fname = get_the_author_meta('first_name');
    ?>

    <p>posted by <?php echo $fname?></p>

  
<div class="row mt-5 mb-5">

    <?php

        $categories=get_the_category();

        foreach($categories as $cat):?>
        
            <div class="explore_button2 col">
                <a href="<?php echo get_category_link($cat->term_id);?>">
                    <?php echo $cat->name;?>
                    <img src="http://localhost/myproject/wp-content/uploads/2020/11/right-arrow.png" alt="">
                </a>
            </div>
    
   
    <?php endforeach;?>
 </div>

<?php comments_template();?>


<?php endwhile; else: endif;?>


