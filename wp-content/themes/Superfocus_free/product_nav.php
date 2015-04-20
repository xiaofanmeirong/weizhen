<div id="nav_product_mue">
<?php       $word_t24=get_option('mytheme_word_t24');
			$word_t25=get_option('mytheme_word_t25'); ?>
<div class="title_page"><b><?php if($word_t24!=""){echo $word_t24;}else{echo '产品检索';}  ?></b><a><?php if($word_t25!=""){echo $word_t25;}else{echo 'Product Search';}  ?></a></div>
<?php wp_nav_menu(array( 'theme_location' => 'tag-menu2','menu_class'=> 'nav_product_mu' ) ); ?>

<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
  
     
        <input type="text" id="s" name="s" value="" />
        
        <input type="submit" value="Search" id="searchsubmit" />
  
</form>         
</div>