<?php
/** Default
  *
  * This layout shows elements for the gallery item
  * one under the other. It shows the image, title,
  * date, excerpt and read more link in that order.
  *
  * All above elements can be shown/hidden using
  * the post settings in the admin.
  *
  * @package The Vacation Rental
  *
  */
  global $blueprint, $framework, $parent;

	$terms = wp_get_object_terms( $post->ID, 'category', array( 'fields' => 'ids' ) );
	$post_terms = array();
	foreach( $terms as $term ) {
		$post_terms[] = 'category-' . $term;
	}
	$post_terms = implode( ' ', $post_terms );
?>

<div <?php post_class( 'gallery-layout-default gallery-item ' . $post_terms  ) ?>>

	<?php if( $blueprint->item_has( 'image' ) AND has_post_thumbnail() ) : ?>
		<div class='image-container'>
			<a href='<?php the_permalink() ?>' class='imagelink hoverlink'><?php the_post_thumbnail( 'eb_col_' . $parent->postmeta['columns'] ) ?></a>
		</div>
	<?php endif ?>

	<?php if( $blueprint->item_has( 'title' ) ) : ?>
		<h1 class='post-title'><a class='primary' href='<?php the_permalink() ?>'><?php the_title() ?></a></h1>
	<?php endif ?>

	<?php if( $blueprint->item_has( 'date' ) ) : ?>
		<div class='date'>posted on <?php the_time( 'F d, Y' ) ?></div>
	<?php endif ?>

	<?php if( $blueprint->item_has( 'excerpt' ) ) : ?>
		<div class="content"><?php the_excerpt() ?></div>
	<?php endif ?>

	<?php if( $blueprint->item_has( 'link' ) ) : ?>
		<a class='read-more' href='<?php the_permalink() ?>'><?php echo $framework->options['read_more'] ?></a>
	<?php endif ?>

</div>