<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1" />	
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php if (get_option('mytheme_eso_jr') == ""){ ?>
   
<meta name="keywords" content=" <?php if(is_front_page() || is_home()) { 
	echo get_option('mytheme_keywords');} else if( is_page()) {
        if(get_post_meta($post->ID, "关键字",true)){
		echo get_post_meta($post->ID, "关键字",true);}
		else{
		echo get_post_meta($post->ID, "关键字",true);
		}
	} else if(is_single()) {
  if(get_post_meta($post->ID, "关键字",true)){
		 if(get_post_meta($post->ID, "关键字",true)){
		echo get_post_meta($post->ID, "关键字",true);}
		else{
			echo get_option('mytheme_keywords');
		}
		}
	// 如果是类目页面, 显示类目表述
	}  else {
		echo get_option('mytheme_keywords');
	}?>   " />
<meta name="description" content="<?php if(is_front_page() || is_home()) { 
	echo get_option('mytheme_description');
 
	// 如果是文章详细页面和独立页面
	}
 else if(is_page() ) {
		if(get_post_meta($post->ID, "描述",true)){
		echo get_post_meta($post->ID, "描述",true);}
		else{
			echo  substr(strip_tags($post->post_content), 0, 420);
		}
	// 如果是类目页面, 显示类目表述
	} 
	 else if(is_single() ) {
		 if(get_post_meta($post->ID, "描述",true)){
		echo get_post_meta($post->ID, "描述",true);}
		else{
			echo  substr(strip_tags($post->post_content), 0, 420);
		}
	
	// 如果是类目页面, 显示类目表述
	}  else {
		echo   get_option('mytheme_description');
	}
?>" />
	<?php if (is_search()) { ?>
<meta name="robots" content="noindex, nofollow" /> 
	<?php } };?>

<title><?php
		   if(get_option('mytheme_word_t12')==""){$word_t12='找到标签';}else{ $word_t12=get_option('mytheme_word_t12');};
		   if(get_option('mytheme_word_t9')!=""){$word_t9=get_option('mytheme_word_t9');}else{$word_t9='搜索结果：';}  
		     if(get_option('mytheme_word_t10')!=""){$word_t10=get_option('mytheme_word_t10');}else{$word_t9='很遗憾，没有找到你要的信息：';}  
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title($word_t12."&quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo '  - '; }
		      elseif (is_search()) {
		         echo $word_t9.' &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo $word_t10.'- '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged;echo ' - '; bloginfo('description'); }
		   ?></title>
	<?php 
	
	$logo= get_option('mytheme_logo') ;
	        $ico= get_option('mytheme_ico');
	
	?>
	<link rel="shortcut icon" href="<?php echo $ico; ?>" type="image/x-icon" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a , textarea , ol , p , span , h1 , h2 , h3 , h4 , h5');
		
    </script>

    
    
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	
</head>

<?php
$theme_donghua= get_option('mytheme_theme_donghua');  


?>
<body <?php body_class(); ?>  >
	
	
       <div id="header">
            
            
            <div id="header_in">
                <a href="<?php bloginfo('url'); ?>" class="logo">
                <img src="<?php  if($logo==""){ echo get_bloginfo('template_url').'/images/logo.png';}else{echo $logo; } ?>" alt="<?php  bloginfo('name') ?>"/></a>
                 
                    <div id="nav">
          
            <?php ob_start(); wp_nav_menu(array( 'theme_location' => 'header-menu','menu_class'=> 'menu_nav' ) ); ?>
            
            </div>
              
            </div>
         
            <div id="header_bottom">
              <?php   $gonggao=get_option('mytheme_gonggao');  $gonggao_title=get_option('mytheme_gonggao_title'); ?>
               <div class="top_gonggao">
                   <div class="top_gonggao_bd"> <b><?php if($gonggao_title !=""){ echo $gonggao_title;}else{echo '站内公告:';} ?></b></div>
              <marquee scrollamount=2 scrolldelay=30 direction= left onMouseOut=this.start(); onMouseOver=this.stop(); align="left" width=504 height=34>
                  
				 
                  <?php  
                      query_posts($query_string .'&cat='. $gonggao.'&showposts=10'); 
					   if (have_posts()) : while (have_posts()) : the_post(); ?>
             <?php  
			   $linkss=get_post_meta($post->ID,"hoturl", true); 
			   $target =get_post_meta($post->ID,"hots_tlye", true); 
			   if($linkss !=""){ $links1=  $linkss;}else{ $links1=  get_permalink();};
		  ?>
         
                 <a title="<?php the_title(); ?>" href="<?php echo $links1; ?>" <?php echo $target;  ?>><?php the_title(); ?></a>
                
                  <?php  endwhile; ?>  
                   <?php else : ?>
                   <?php endif; wp_reset_query();?> 
               
                 </marquee>
            </div>
            <?php   
			$language1=get_option('mytheme_language1');
			$language2=get_option('mytheme_language2');
			$language_link1=get_option('mytheme_language_link1');
			$language_link2=get_option('mytheme_language_link2');
			$shop_login = get_option('shop_login');
		    $shop_register = get_option('shop_register');
	      	$shop_profile = get_option('shop_profile');
			?>
            <div class="yuyan">
            <?php if(get_option('mytheme_theme_shop_open')=="shop_ok"){?>
                     <?php
					 global $current_user;    get_currentuserinfo();
					  if (is_user_logged_in()) {  ?>
                      <a  href="<?php echo get_page_link( $shop_profile );?>">欢迎！<?php echo $current_user->display_name; ?></a>
                     <?php wp_loginout(get_bloginfo('url')); ?>
                      <a class="btn_login" href="<?php echo get_page_link( $shop_profile );?>">我的个人中心</a>
                      
                     <?php }else{?>
                      <a class="btn_login" href="<?php echo get_page_link( $shop_login  );?>">登录</a>
                      <a class="btn_login" href="<?php echo get_page_link( $shop_register );?>">注册</a>  
            <?php } }else{?>
                <a href="<?php if($language_link1==""){echo "#";}else{ echo $language_link1;}; ?>"><?php if($language1 ==""){echo "简体中文" ;}else{ echo $language1; }; ?></a>
                <a href="<?php if($language_link2==""){echo "#";}else{ echo $language_link2;}; ?>"><?php if($language2 ==""){echo "English" ;}else{ echo $language2; }; ?></a>
              <?php } ?>
            </div>
             </div>
		</div>