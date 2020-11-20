<section class="row justify-content-between">
<?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="col-lg-md-sm-3">
        <div class="archive_item article_item">
            <div class="article_img">
                <?php if(has_post_thumbnail()):?>
                    <a href="<?php the_permalink();?>">
                         <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
                    </a>
                <?php endif;?> 
            </div>
            <div class="article_title">
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
            </div>
        </div>
    </div>

<?php endwhile; else: endif;?>    
</section>


