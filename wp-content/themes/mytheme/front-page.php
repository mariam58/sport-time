<?php get_header();?>


<section class="container-fluid p-0 m-0">
  
    <?php get_template_part('includes/section', 'content');?>

    <section class="container-fluid p-0 m-0" >
        <section id="video">
            <div class="text_box">
                <h2>get started</h2>
                <h3>healthy life</h3>
                <a href="">join us</a>
            </div>
        </section>
        
        
    </section>
    <section class="container-fluid m-0 p-0 slogan_container">
        <section class="container slogan">
        <div>
            <h2>
                about our fit family.
            </h2>
            <div class="explore_button2">
                     <a href="">learn more
                        <img src="http://localhost/myproject/wp-content/uploads/2020/11/right-arrow.png" alt="">
                    </a>
                </div>
           
        </div>
       

        </section>
        
    </section>

   

     <section class="container-fluid service m-0 p-0">
         <section class="container">
             <section class="row justify-content-around m-0 p-0 pt-5 pb-5">
             <div class="col-md-sm-3 explore" data-aos="fade-right">
                <h3>services</h3>
                <div class="explore_button">
                     <a href="">explore
                        <img src="http://localhost/myproject/wp-content/uploads/2020/11/right-arrow.png" alt="">
                    </a>
                </div>
               
            </div>
            <div class="owl-carousel col-9" data-aos="fade-left">
                 <?php
                     // კატეგორიის მიხედვით პოსტების წამოღება
                        $post_list = get_posts( array(
                        'category'    => '3',
                        // 'numberposts' => '3'
                        ) );


                        foreach ( $post_list as $post ) { ?>
                        <div class="article_item">
                            <div class="article_img">
                                 <a href="<?php the_permalink(); ?>">
                                    <img src="<?php   echo get_the_post_thumbnail_url($post->ID );   ?>" alt="article">
                                </a>
                            </div>
                                                
                            <div class="article_title">
                                <a href="<?php the_permalink(); ?>"> <?php  the_title() ?></a>
                            </div>
                        </div>
                           
                        <?php } ?>
            </div>
          
  
           

           
        </section>
         </section>
        
     </section> 

    <section class="container-fluid" style="background:#000;">
        <div class="gallery text-center">
            <h2>
                our gym gallery
            </h2>
            
        </div>
        <section class="container pt-5 pb-5" data-aos="zoom-in">
            <div class="owl-carousel">
                <div> <img src="<?php bloginfo('template_directory');?>/images/gal1.png" alt=""> </div>
                <div> <img src="<?php bloginfo('template_directory');?>/images/gal2.png" alt=""> </div>
                <div> <img src="<?php bloginfo('template_directory');?>/images/gal3.png" alt=""> </div>
                <div> <img src="<?php bloginfo('template_directory');?>/images/gal4.png" alt=""> </div>
                <div> <img src="<?php bloginfo('template_directory');?>/images/gal5.png" alt=""> </div>
            </div>
        </section>
    </section>

</section>

<?php get_footer();?>