<div id="news" class="relevatright_div">
<b class="relevat_b">相关推荐</b>
<ul class="news_list relevant_right">
<?php
$post_num = 4;
$exclude_id = $post->ID;
$posttags = get_the_tags(); $i = 0;
if ( $posttags ) {
	$tags = ''; foreach ( $posttags as $tag ) $tags .= $tag->term_id . ',';
	$args = array(
		'post_status' => 'publish',
		'tag__in' => explode(',', $tags),
		'post__not_in' => explode(',', $exclude_id),
		'caller_get_posts' => 1,
		'orderby' => 'rand',
		'posts_per_page' => $post_num,
	);
	query_posts($args);
	while( have_posts() ) { the_post(); ?>
		 <li>
      <?php  if (has_post_thumbnail()) { the_post_thumbnail('news-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));} ?>
       <b><a target="_blank"  href="<?php echo get_permalink();?>" title="<?php the_title(); ?>">
             <?php $tit= get_the_title(); echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,25,"..."); ?></a></b>
       <em><?php the_time('Y/m/d') ?></em>
       <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,75,"..."); ?></p>
     </li>
	<?php
		$exclude_id .= ',' . $post->ID; $i ++;
	} wp_reset_query();
}
if ( $i < $post_num ) {
	$cats = ''; foreach ( get_the_category() as $cat ) $cats .= $cat->cat_ID . ',';
	$args = array(
		'category__in' => explode(',', $cats),
		'post__not_in' => explode(',', $exclude_id),
		'caller_get_posts' => 1,
		'orderby' => 'comment_date',
		'posts_per_page' => $post_num - $i
	);
	query_posts($args);
	while( have_posts() ) { the_post(); ?>
		 <li>
      <?php  if (has_post_thumbnail()) { the_post_thumbnail('news-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));} ?>
        <b><a target="_blank"  href="<?php echo get_permalink();?>" title="<?php the_title(); ?>">
             <?php $tit= get_the_title(); echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,25,"..."); ?></a></b>
       <em><?php the_time('Y/m/d') ?></em>
       <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,75,"..."); ?></p>
     </li>
	<?php $i++;
	} wp_reset_query();
}
if ( $i  == 0 )  echo '';
?>
</ul>
</div>