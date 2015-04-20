<div class="kefu">
   <div class="kefu_d" id="top"> <a href="#"></a></div>
  <?php if(get_option('mytheme_kefu_weixin') !==""){ ?>
   <div class="kefu_d" id="weixin">
      <div><img src="<?php echo get_option('mytheme_kefu_weixin'); ?>" /></div>
   </div>
  <?php }; ?>
  
   <?php $qq_tu=get_option('mytheme_qq_tu');if(get_option('mytheme_kefu_qq') !==""){ ?>
   <div class="kefu_d" id="kefu_severs">
       <div class="qq_kefu">
       <img src="<?php if($qq_tu==""){ echo get_bloginfo('template_url').'/images/kf.jpg';}else{echo $qq_tu; } ?>" />
      <?php echo stripslashes(get_option('mytheme_kefu_qq')); ?>
       </div>
         
   </div>
   <?php }; ?>
   
   <div class="kefu_d" id="shoucang"><a class="xfbox" href="javascript:void(0)" onclick="AddFavorite(window.location,document.title)" title="点击收藏我们"></a></div>
   <div class="kefu_d" id="homes"><a href="<?php bloginfo('url'); ?>"></a></div>


</div>