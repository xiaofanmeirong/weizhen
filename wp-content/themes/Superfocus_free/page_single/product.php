<?php 
	$word_t14=get_option('mytheme_word_t14');
			$word_t15=get_option('mytheme_word_t15');
			$word_t16=get_option('mytheme_word_t16');
if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<div class="product">
<div class="product_text">
       <h1><?php the_title(); ?></h1>
       <p class="time">TIME:<?php the_time('Y-m-d'); ?></p>
       
        <div class="tag_pro">
		
		<?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo '<a href="/tag/'.$tag->slug.'">' .$tag->name .'</a>';}}?> 
        
        </div>
</div>
    <a class="product_pic">
    <div class="loading"></div>
     <?php  if (has_post_thumbnail()) { the_post_thumbnail('product-thumb' ,array('alt'	=>$tit, 'title'=> get_the_title() ));} ?>
    </a>
    
    
   <?php  if(has_shortcode( $post->post_content, 'gallery' )==true): ?>
    <div class="list">
    <a class="prve">< </a>
    <div class="lsit_hover">
    	 <?php  
                             $post_content = $post->post_content;
                             preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
                             $array_id = $ids;
                             foreach($array_id  as $array_id ){
                             }
                             echo do_shortcode("[gallery ids=". $array_id ."]"); 
                         ?> 
                         </div>
    <a class="next"> ></a>
    
    </div>
<?php endif; ?>

<div class="product_text">
    
        <?php if(get_post_meta($post->ID, "cont_read",true)!==""){ ?>
       <span><?php if($word_t14!=""){echo $word_t14;}else{echo '简介参数';}  ?></span>
       <div class="de_product">
	   
         <?php 
			 $logmeta = wpautop(trim(get_post_meta($post->ID, "cont_read",true)));
			echo $logmeta;?> 
	   
	   </div>
       
       <?php }; 
	       
			if(get_post_meta($post->ID,"purview", true) ==""){ $link='href="#respond"';}else{$link='href="'.get_post_meta($post->ID,"links_p", true).'"rel="nofollow"target="_blank"';}
	   
	   ?>
       <a class="btn"   <?php echo  $link;?>><?php if($word_t15!=""){echo $word_t15;}else{echo '联系咨询';}  ?></a>
    </div>

</div>

  <div class="enter" id="nogallery_enter"><span class="enter_cs"><?php if($word_t16!=""){echo $word_t16;}else{echo '详细参数';}  ?></span> 
  <?php the_content(); ?>
   <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>
  <div class="bqc">
  <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
     <div class="alignleft"><p><?php if (get_next_post()) { next_post_link('上一篇: %link','%title',true);} ?></p> 
<p><?php if (get_previous_post()) { previous_post_link('下一篇: %link','%title',true);}?> </p>  </div>
  
  </div>
  </div>
 <?php endwhile; endif; ?>
  <?php if(is_single()){ get_template_part( 'page_single/relevant_right' );} ?>