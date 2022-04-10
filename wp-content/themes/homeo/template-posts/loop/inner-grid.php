<?php 
global $post;
$thumbsize = !isset($thumbsize) ? homeo_get_config( 'blog_item_thumbsize', 'full' ) : $thumbsize;
$thumb = homeo_display_post_thumb($thumbsize);
?>
<article <?php post_class('post post-layout post-grid'); ?>>
    <div class="list-inner">
        <?php
            if ( !empty($thumb) ) {
                ?>
                <div class="top-image">
                    <?php homeo_post_categories_first($post); ?>
                    <?php
                        echo trim($thumb);
                    ?>
                 </div>
                <?php
            }
        ?>
        <div class="col-content">
            <?php if ( empty($thumb) ){ ?>
                <div class="top-info-blog">
                    <div class="category">
                        <?php homeo_post_categories_first($post); ?>
                    </div>
                </div>
            <?php } ?>
            
            <?php if (get_the_title()) { ?>
                <h4 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>
            <?php } ?>
          
            <div class="description"><?php echo homeo_substring( get_the_excerpt(),12, '' ); ?></div>
        </div>
        <div class="info-bottom flex-middle">
           
            <div class="ali-right">
                <a href="<?php the_permalink(); ?>" class="btn-readmore"><?php echo esc_html__( 'Read More', 'homeo' )?><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</article>