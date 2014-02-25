<?php
/*
 * The default template for displaying standart post format
 * @subpackage wordpost
 * @since wordpost
 */
global $count_posts; ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-meta">
		<?php wordpost_entry_data (); ?>
	</div><!-- end .entry-meta -->
	<div class="entry-content">
		<?php the_post_thumbnail( 'full' ); //show thumbnail of the post
		wordpost_thumbnail_caption();
		the_content(); ?>
		<div class="pagination_list">
			<?php wp_link_pages(); ?>
		</div><!-- end .pagination_list -->
	</div><!-- end .entry-content -->
	<div class="tags_links"><?php the_tags(); 
		edit_post_link( __( 'Edit', 'wordpost' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- end .tags_links -->
	<?php if ( 1 < $count_posts ) { ?>
		<div class="top-link">
			<small>
				<a href="#top">[<?php _e(  'Top', 'wordpost' ); ?>]</a>
			</small>
		</div><!-- end .top-link -->
	<?php } // end if ( 1 < $count_posts ) ?>
</div><!-- end #post -->