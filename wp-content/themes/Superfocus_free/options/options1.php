<p><strong>这款主题是《超级聚焦》的免费版本，付费版具有更多功能和更多的动画效果，并且享受后台一键更新，一次购买终身使用，终身免费更新新版本，新版本会不断加入新的功能，不断优化，并且有客服的技术支持，你可以使用免费版体验这个主题的功能，如果觉得功能不够用，可以参考付费版以便决定是否购买，免费版可以与付费版本无缝结合，切换之后设置好付费版的一些选项即可完成网站的设定。</strong><br />
付费版演示：<a href="http://www.themepark.com.cn/demo/?themedemo=Superfocus" target="_blank">http://www.themepark.com.cn/demo/?themedemo=Superfocus</a>
 <br />
付费版地址：<a href="http://www.themepark.com.cn/cjjjwordpressqyzt.html" target="_blank">http://www.themepark.com.cn/cjjjwordpressqyzt.html</a>
 
 </p>
 
 <div class="xiaot">
    <input type="checkbox" value="shop_ok" name="theme_shop_open" id="theme_shop_open" <?php if(get_option('mytheme_theme_shop_open')=="shop_ok"){echo "checked='checked'";} ?> />
    <label for="theme_shop_open">开启兼容购物盒子插件</label>
    <p>开启购物盒子插件之后，首页调用文章模块中如果文章启用了插件中的是商品模式，会显示价格、原价、包邮等信息。分类目录列表会自动显示开启了商品模式文章的价格和评分信息 <br />
购物盒子（shoppingbox）是WEB主题公园开发的一款能够支持在线付款的插件，本主题已经优化兼容，详情请见购物盒子的使用教程：<a target="_blank" href="http://www.themepark.com.cn/shoppingbox-WordPress-plugins">点击弹出查看</a><br />
<strong>请第一次使用这个插件的用户参考教程设置，购物盒子自带前端用户注册、登录和个人中心，需要初始化手动设置之后才能生效。</strong></p>
<p><strong>免费版需要你通过短代码来输出购买表单。</strong></p>
 </div>
 
 <div class="xiaot">
                      <b class="bt">选择色系</b><br />
                      <p>这款主题提供了4种颜色可选，请选择颜色</p>
                  <?php $theme_color= get_option('mytheme_theme_color');  ?>   
               </select>
    
    
                  <label  for="theme_color ">选择色系:</label>
                  <select name="theme_color" id="theme_color">
	     
          <option value=''<?php if ( $theme_color ==="" ) {echo "selected='selected'";}?>>绿色（默认）</option>
          <option value='/css/red.css'<?php if ( $theme_color ==="/css/red.css" ) {echo "selected='selected'";}?>>红色</option>
           <option value='/css/purple.css'<?php if ( $theme_color ==="/css/purple.css" ) {echo "selected='selected'";}?>>紫色</option>
           <option value='/css/cafe.css'<?php if ( $theme_color ==="/css/cafe.css" ) {echo "selected='selected'";}?>>橙色</option>
		    <option value='/css/greem.css'<?php if ( $theme_color ==="/css/greem.css" ) {echo "selected='selected'";}?>>蓝色</option>
	</select>
    
               </div>
                <div class="xiaot">
                
                               <b class="bt">动画选择</b><br />
                      <p><strong>这款主题的付费版本提供了2种动画选择，可以在后台选取动画模式，免费版没有这个功能，你可以去演示主题查看付费版动画效果。</strong>，付费版演示：<a href="http://www.themepark.com.cn/demo/?themedemo=Superfocus" target="_blank">http://www.themepark.com.cn/demo/?themedemo=Superfocus</a></p>
                 
            
    
               </div>      
               
               
               
                <div class="up">
                 
                     
                    <b class="bt">ICO图标上传</b>
                    <input type="text" size="80"  name="ico" id="ico" value="<?php echo get_option('mytheme_ico'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p><a href="http://www.themepark.com.cn/icotpssmrhzzicowj.html" target="_blank">ico是什么？ico图片制作教程</a></p>
                </div>     
                
                        
                
                
                
				<div class="up">
                  <b class="bt">LOGO的图片地址</b>
                     <div class="yulan">
                  <?php if (get_option('mytheme_logo')!=""): ?>
                    <img title="logo预览" src="<?php echo get_option('mytheme_logo'); ?>"alt="logo预览" /> 
                 <?php else : ?>
                    <img title="上传图片，这里可以预览" src="<?php bloginfo('template_url'); ?>/images/xuanxiang/yulan2.gif"alt="上传图片，这里可以预览"/>
                    <?php endif; ?>  
                    
                     </div>
                    <input type="text" size="80"  name="logo" id="logo" value="<?php echo get_option('mytheme_logo'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p>请上传logo图片，图片格式为PNG,或者带有深色底色的jpg和gif均可（ 高度为100px，宽度自定，宽度请勿上传太大，以防止导航位置不够。）</p>
                </div>    
                
                
              <div class="xiaot">
                     <b class="bt">公告模块数据调用</b><br />
                       
                    <p>网站的最顶部有一个“站内公告”模块，你可以指定一个分类目录，那么他会在顶部滚动显示出来</p>
                    <?php 
	                 $gonggao=get_option('mytheme_gonggao'); 
					 $gonggao_title=get_option('mytheme_gonggao_title'); 
					?>

              <label  for="gonggao">请选择分类目录:</label>
                  <select name="gonggao" id="gonggao">
	 <option value=''>请选择</option>
		<?php 
		 $categorys = get_categories(array('hide_empty' => 0));
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  $gonggao== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select><br /><br />
    
 
      <label  for="gonggao_title">中文标题:</label>
     <input type="text" size="80"  name="gonggao_title" id="gonggao_title" value="<?php if($gonggao_title !=""){ echo $gonggao_title;}else{echo '站内公告:';} ?>"/> <br /><br />

    </div>  
                
                
              <?php include_once("pic.php"); ?>
                
                
                
                	
                
            
              
                  
                  
                  
                  
                  
 
  
            
                      
    </div>
     

                                                     
            
            
            
           
                   
                         
           
                   
                     