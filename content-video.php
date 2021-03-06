    <div class="post-thumb">
    
        <?php 
            $embed = get_post_meta($post->ID, '_zilla_video_embed_code', true);
            if( !empty( $embed ) ) {
                echo stripslashes(htmlspecialchars_decode($embed));
            } else {
                zilla_video($post->ID, 580); 
            }
        ?>
    	    
    </div>

<?php if( !is_singular() ) { ?>
    
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'zilla'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>
    
<?php } else { ?>

    <h1 class="entry-title"><?php the_title(); ?></h1>
		
<?php } ?>

<!-- BEGIN .entry-meta-header-->
<div class="entry-meta-header">
    <span class="published"><?php the_time( get_option('date_format') ); ?></span>
    <?php edit_post_link( __('edit', 'zilla'), '<span class="edit-post">[', ']</span>' ); ?>
<!-- END .entry-meta-header -->
</div>


<!-- BEGIN .entry-content -->
<div class="entry-content">
	<?php 
        the_content( __('Read more...', 'zilla') ); 
        wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'framework').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); 
    ?>
<!-- END .entry-content -->
</div>