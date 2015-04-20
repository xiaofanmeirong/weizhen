<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="enter_full enter">
<?php if(is_single()):?> <div class="title_page"><h1><?php the_title();?></h1></div><div class="des_page"><a>TIME: <?php the_time('y-m-d')?></a>
 <?php foreach((get_the_category()) as $category) { echo '<a href="'. get_category_link($category->cat_ID).'">' .$category->cat_name .'</a> ';}?>
</div><?php endif; ?>

<?php the_content(); ?>
 <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>
 
 <div class="bqc">
  <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
   <div class="alignleft"><p><?php if (get_next_post()) { next_post_link('上一篇: %link','%title',true);} ?></p> 
<p><?php if (get_previous_post()) { previous_post_link('下一篇: %link','%title',true);}?> </p>  </div>
  
  </div>
</div>
<?php if(is_single()){ get_template_part( 'page_single/relevant' );} ?>

<div id="respond">
 <?php if ( comments_open() ){ comments_template();} ?>
</div>
<?php endwhile; endif; ?>
</div>