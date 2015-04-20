<?php get_header();
get_template_part( 'page_single/top' ); 
?>	

<div id="content">
<div class="left_mian"><?php get_template_part( 'sidebar2' ); ?></div>
<div class="right_mian">

 <ul class="news_loop_01" id="default">
 
   <?php if(get_option('mytheme_list_nmber2')==""){$nmnber =12;}else{ $nmnber =get_option('mytheme_list_nmber2');}
   $list_nmber_k1=get_option('mytheme_list_nmber_k1');
  
$posts = query_posts($query_string . '&showposts='.$nmnber); ?>   
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php  $linkss=get_post_meta($post->ID,"hoturl", true); 
			        $target =get_post_meta($post->ID,"hots_tlye", true);
					 $shop_open = get_post_meta($id, 'shop_open', true);
			 ?>
           <li id="fist">
             <a    <?php echo $target;?>  href="<?php if($linkss !=""){echo $linkss;}else{echo get_permalink();}; ?>" class="news_001_pic">
              <?php  $tit= get_the_title();
					if (has_post_thumbnail()) { the_post_thumbnail('news-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{?> 
                    <img width="86" height="86" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php if( $list_nmber_k1==""){echo get_bloginfo('template_url').'/images/huise.gif';}else{echo $list_nmber_k1;} ?>" />
					<?php } ?>
                    </a>
              <span>
             <b><a  <?php echo $target;?>  href="<?php if($linkss !=""){echo $linkss;}else{echo get_permalink();}; ?>">
			 
			 <?php the_title(); ?></a></b>
             <a class="time">TIME:<?php the_time('Y-m-d') ?></a>
                <?php  if($shop_open == 'yes')    {
				  $price = get_post_meta($id, 'shop_price', true);
          	       $original_price=get_post_meta($id,"original_price", true); 
			echo '<p><a class="price">现价：￥'.$price.'</a>';
			if($original_price){echo  '<em class="original_price">'.'原价：￥'.get_post_meta($id,"original_price", true).'</em>';} ?>
            </p>
             <p class="starsss"><?php if(shop_comment_number()){?><a>综合评分(<?php  echo shop_comment_number(); ?>人评分)</a>  <p id="order_stars" class="order_stars_<?php echo shop_comment_stars()?>"></p><?php }else{?><a>暂无评分</a><?php }?></p>
        
          <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($post->ID))),0,140,"..."); ?></p>
           <?php }; ?>  
             </span>
           </li>
             <?php endwhile; ?>     
                        <?php else : ?>
                         <?php  endif; ?>      

           </ul> 
           
             <div class="pager">   <?php par_pagenavi(9); ?>  </div>  

</div>
</div>  
    
<?php get_footer(); ?>
