<?php if ( !(is_single()) && get_option('lumin_postinfo1') <> '' ) { ?>
	<div class="cat-meta-top"></div>
	<p class="post-meta"><?php _e('Posted','Lumin'); ?> <?php if (in_array('author', get_option('lumin_postinfo1'))) { ?> <?php _e('by','Lumin'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('lumin_postinfo1'))) { ?> <?php _e('on','Lumin'); ?> <?php the_time(get_option('lumin_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('lumin_postinfo1'))) { ?> <?php _e('in','Lumin'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('lumin_postinfo1'))) { ?> | <?php comments_popup_link(__('0 comments','Lumin'), __('1 comment','Lumin'), '% '.__('comments','Lumin')); ?><?php }; ?></p>
	<div class="cat-meta-bottom"></div>
<?php } elseif ( is_single() && get_option('lumin_postinfo2') <> '' ) { ?>
	<p class="single-post-meta<?php if (!in_array('comments', get_option('lumin_postinfo2'))) echo " full"; ?>"><?php _e('Posted','Lumin'); ?> <?php if (in_array('author', get_option('lumin_postinfo2'))) { ?> <?php _e('by','Lumin'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('lumin_postinfo2'))) { ?> <?php _e('on','Lumin'); ?> <?php the_time(get_option('lumin_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('lumin_postinfo2'))) { ?> <?php _e('in','Lumin'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('lumin_postinfo2'))) { ?><span class="post-comments"><?php comments_popup_link(__('0 comments','Lumin'), __('1 comment','Lumin'), '% '.__('comments','Lumin')); ?></span><?php }; ?></p>
	<div class="single-meta-bottom"></div>
<?php }; ?>