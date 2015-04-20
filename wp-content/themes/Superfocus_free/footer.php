 <div id="footer">
<?php    $themepark= get_option('mytheme_themepark');
         $icp_b=get_option('mytheme_icp_b'); 
	     $contact_title= get_option('mytheme_contact_title');
		 $contact_title_2= get_option('mytheme_contact_title_2');
		 $message_title= get_option('mytheme_message_title');
		 $message_title_2= get_option('mytheme_message_title_2'); 
		 $icon_title =get_option('mytheme_icon_title '); 
		 $icon_title_2= get_option('mytheme_icon_title_2'); 
		 $icon1 =get_option('mytheme_icon1'); 
		 $icon2 =get_option('mytheme_icon2'); 
		 $icon3 =get_option('mytheme_icon3'); 
	     $icon4 =get_option('mytheme_icon4'); 
		 $icon5 =get_option('mytheme_icon5'); 
		 $icon6 =get_option('mytheme_icon6'); 
         $icon_url1 =get_option('mytheme_icon_url1'); 
		 $icon_url2 =get_option('mytheme_icon_url2'); 
		 $icon_url3 =get_option('mytheme_icon_url3'); 
		 $icon_url4 =get_option('mytheme_icon_url4'); 
		 $icon_url5 =get_option('mytheme_icon_url5'); 
		 $icon_url6 =get_option('mytheme_icon_url6'); 
		 $icon_tagert1 =get_option('mytheme_icon_tagert1'); 
		 $two_code=get_option('mytheme_two_code');
	     $two_code_title=get_option('mytheme_two_code_title');
		 $two_code_title2=get_option('mytheme_two_code_title2');
				
	   ?>
		<div id="footer_in">
             <div class="footer_shadow"></div>
             
             <div class="footer_modle">
             
                  <div class="link">
                      <span class="title"><b><?php if($contact_title!=""){echo $contact_title;}else {echo '底部链接模块';} ?></b><a><?php if($contact_title_2!=""){echo $contact_title_2;}else {echo 'At the bottom of the L link';} ?></a></span>
                     <?php wp_nav_menu(array( 'theme_location' => 'footer-menu2','menu_class'=> 'footer_link' ) ); ?>
                  </div>
                  
                  <div class="subscription">
                      <span class="title"><b><?php if($message_title!=""){echo $message_title;}else {echo '热门标签';} ?></b><a><?php if($message_title_2!=""){echo $message_title_2;}else {echo 'tags';} ?></a></span>
                    <?php wp_nav_menu(array( 'theme_location' => 'tag-menu','menu_class'=> 'tag-menu' ) ); ?>
                  </div>
                  
                     <div class="icon">
                      <span class="title"><b><?php if($icon_title!=""){echo $icon_title;}else {echo '功能模块';} ?></b><a><?php if($icon_title_2!=""){echo $icon_title_2;}else {echo 'Functions Icon';} ?></a></span>
                       <ul>
                   
                         <li><a <?php echo $icon_tagert1; ?> href="<?php echo $icon_url1; ?>"><img src="<?php echo $icon1; ?>" /></a></li>
                         <li><a <?php echo $icon_tagert1; ?> href="<?php echo $icon_url2; ?>"><img src="<?php echo $icon2; ?>" /></a></li>
                         <li><a <?php echo $icon_tagert1; ?> href="<?php echo $icon_url3; ?>"><img src="<?php echo $icon3; ?>" /></a></li>
                         <li><a <?php echo $icon_tagert1; ?> href="<?php echo $icon_url4; ?>"><img src="<?php echo $icon4; ?>" /></a></li>
                         <li><a <?php echo $icon_tagert1; ?> href="<?php echo $icon_url5; ?>"><img src="<?php echo $icon5; ?>" /></a></li>
                         <li><a <?php echo $icon_tagert1; ?> href="<?php echo $icon_url6; ?>"><img src="<?php echo $icon6; ?>" /></a></li>
    
                       </ul>
                   
                  </div>
                  
                  
                    <div class="dimensional">
                      <span class="title"><b><?php if($two_code_title!=""){echo $two_code_title;}else {echo '扫一扫关注官方微信';} ?></b><a><?php if($two_code_title2!=""){echo $two_code_title2;}else {echo 'Two-dimensional code';} ?></a></span>
                      
                     
                      
                      <img src="<?php echo $two_code; ?>"  />
                    
                      
                  </div>
             
             
             </div>
             
                 <?php wp_nav_menu(array( 'theme_location' => 'link-menu2','menu_class'=> 'links' ) ); ?>
             
                <p class="f_bq "> <?php if($word_t2!=""){echo $word_t2;}else{echo '版权所有';}  ?> &copy;<?php echo date("Y"); echo " "; bloginfo('name'); 
		   if($icp_b !=="") {echo ' |   <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">'.$icp_b.'</a>'; };
		   echo ' |  技术支持： <a class="banquan" target="_blank" href="http://www.themepark.com.cn">WEB主题公园</a>'; 
		   
		    echo ' |  '.stripslashes(get_option('mytheme_analytics')); ?> </p>
        </div>	  
            
            
  </div>

</div>
<?php if(get_option('mytheme_kefu_on') ==""){ get_template_part('kefu'); };?>
	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>