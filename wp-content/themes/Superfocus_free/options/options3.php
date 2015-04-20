 <p><strong>这款主题是《超级聚焦》的免费版本，付费版具有更多功能和更多的动画效果，并且享受后台一键更新，一次购买终身使用，终身免费更新新版本，新版本会不断加入新的功能，不断优化，并且有客服的技术支持，你可以使用免费版体验这个主题的功能，如果觉得功能不够用，可以参考付费版以便决定是否购买，免费版可以与付费版本无缝结合，切换之后设置好付费版的一些选项即可完成网站的设定。</strong><br />
付费版演示：<a href="http://www.themepark.com.cn/demo/?themedemo=Superfocus" target="_blank">http://www.themepark.com.cn/demo/?themedemo=Superfocus</a>
 <br />
付费版地址：<a href="http://www.themepark.com.cn/cjjjwordpressqyzt.html" target="_blank">http://www.themepark.com.cn/cjjjwordpressqyzt.html</a>
 
 </p>
 
 <div class="xiaot"> 
                	 <?php $eso_jr = get_option('mytheme_eso_jr'); ?>  
                <label  for="eso_jr ">是否兼容Yoast WordPress SEO:</label>
                  <select name="eso_jr" id="eso_jr">
                   <option value=''<?php if ( $eso_jr ==="" ) {echo "selected='selected'";}?>>不用兼容</option>
                    <option value='none'<?php if ( $eso_jr ==="none" ) {echo "selected='selected'";}?>>兼容插件</option>
	             </select>   
                 <p>如果你启用了Yoast WordPress SEO插件，那么选择是，会将主题自带的关键词和描述关闭掉，而下面的这些seo选项则不需要填写了。ps.All in One SEO Pack 是目前最受欢迎的seo插件，相关信息百度一下即可清楚，如果标题没有被插件替换掉，请将插件的“强制替换标题”选项勾选即可。</p>
                </div>



   <div class="up">
                    <b class="bt">网站关键字填写（中文）</b>
                    <textarea name="keywords" cols="86" rows="3" id="keywords"><?php echo get_option('mytheme_keywords'); ?></textarea>   
                    <p>请填写网站的关键字，使用“ , ”分开，一个网站的关键字一般不超过100个字符。</p>
                </div>   
                
                 <div class="up">
                    <b class="bt">网站描述填写（中文）</b>
                    <textarea name="description" cols="86" rows="3" id="description"><?php echo get_option('mytheme_description'); ?></textarea>    
                    <p>请填写网站的描述，使用,分开，一个网站的描述一般不超过200个字符。</p>
                </div>   
                   

                      <div class="up">    
                    <b class="bt">网站统计代码添加</b>
                    <textarea name="analytics" cols="86" rows="4" id="analytics"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>    
                 
                 <a href="http://www.themepark.com.cn/wordpresswzseohj.html">网站的seo应该如何去做？ 我们给你一些文章作为参考</a>
  </div>  

  <div class="xiaot">
            <b class="bt">网站底部设定</b><br />
            <p>网站首页底部联系我们的一些设定</p>
                     <?php   
					 $contact_title= get_option('mytheme_contact_title');
					 $contact_title_2= get_option('mytheme_contact_title_2');
					 $tell = get_option('mytheme_tell');
					 $email= get_option('mytheme_email');
					 $icp_b=get_option('mytheme_icp_b');
					 $two_code_title=get_option('mytheme_two_code_title');
					 $two_code_title2=get_option('mytheme_two_code_title2');
					 $two_code=get_option('mytheme_two_code');
					 $maps=get_option('mytheme_maps');
					 $maps_link=get_option('mytheme_maps_link');
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
					
		               ?>
            
       
          <p>
           
           <label  for="contact_title">底部链接标题：</label>        
            <input type="text" size="20"  name="contact_title" id="contact_title" value="<?php if($contact_title!=""){echo $contact_title;}else {echo '底部链接模块';} ?>"/>  
             <label  for="contact_title_2">底部链接副标题：</label>        
          <input type="text" size="20"  name="contact_title_2" id="contact_title_2" value="<?php if($contact_title_2!=""){echo $contact_title_2;}else {echo 'At the bottom of the L link';} ?>"/>   
        </p>
            
            <p>
           
           <label  for="message_title">热门标签标题：</label>        
            <input type="text" size="20"  name="message_title" id="message_title" value="<?php if($message_title!=""){echo $message_title;}else {echo '热门标签';} ?>"/>  
             <label  for="message_title_2">热门标签副标题：</label>        
          <input type="text" size="20"  name="message_title_2" id="message_title_2" value="<?php if($message_title_2!=""){echo $message_title_2;}else {echo 'tags';} ?>"/>   
          <br />

         
        </p>
               
           
            
            
            <div class="xiaot">
                    
           
                  
            <p> <label  for="case2_bt">联系电话：</label> 
           <input type="text" size="60"  name="tell" id="tell" value="<?php if($tell !==""){ echo $tell;}else{echo "0731-85787193";} ?>"/  />
            </p>
            
               <p> <label  for="case2_bt">电子邮箱：</label> 
           <input type="text" size="60"  name="email" id="email" value="<?php if($email !==""){ echo $email;}else{echo "infor@themepark.com.cn：";} ?>"/  />
            </p>
            
         
            
            
            <br />

           <p>
           <div class="kuangdsa">
           <b class="bt">功能图标模块</b><br />
           <label  for="icon_title">功能图标模块标题：</label>        
            <input type="text" size="60"  name="icon_title" id="icon_title" value="<?php if($icon_title!=""){echo $icon_title;}else {echo '功能模块';} ?>"/></p> 
            <p>  <label  for="icon_title_2">功能图标模块副标题：</label>  
                  
          <input type="text" size="60"  name="icon_title_2" id="icon_title_2" value="<?php if($icon_title_2!=""){echo $message_title_2;}else {echo 'Functions Icon';} ?>"/>   
       </p>
       
        <label  for="icon_tagert1 ">图标的链接目标:</label>
                  <select name="icon_tagert1" id="add_tagert1">
	     
          <option value=''<?php if ( $icon_tagert1 ==="" ) {echo "selected='selected'";}?>>站内自身</option>
          <option value='target=_blank'<?php if ( $icon_tagert1 ==='target=_blank' ) {echo "selected='selected'";}?>>站内新开页面</option>
          <option value='target=_blank rel=nofollow'<?php if ( $icon_tagert1 ==='target=_blank  rel=nofollow') {echo "selected='selected'";}?>>站外新开页面(屏蔽权重)</option>
        
		
	</select>
          <br />         
  
   <div class="up">
          <label  for="icon1">功能图标1上传（尺寸78*61）：</label>   <br /> 
           <input type="text" size="81"  name="icon1" id="icon1" value="<?php echo $icon1; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/>  
           
           <label  for="icon_url1">功能图标1链接：</label>   <br /> 
           <input type="text" size="81"  name="icon_url1" id="icon_url1" value="<?php echo $icon_url1; ?>"/  />  
        </div>
        
          <div class="up">
          <label  for="icon2">功能图标2上传（尺寸78*61）：</label>   <br /> 
           <input type="text" size="81"  name="icon2" id="icon2" value="<?php echo $icon2; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/>   
            <label  for="icon_url1">功能图标2链接：</label>   <br /> 
           <input type="text" size="81"  name="icon_url2" id="icon_url2" value="<?php echo $icon_url2; ?>"/  />  
        </div>
        
          <div class="up">
          <label  for="icon3">功能图标3上传（尺寸78*61）：</label>   <br /> 
           <input type="text" size="81"  name="icon3" id="icon3" value="<?php echo $icon3; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/>  
           
            <label  for="icon_url1">功能图标3链接：</label>   <br /> 
           <input type="text" size="81"  name="icon_url3" id="icon_url3" value="<?php echo $icon_url3; ?>"/  />   
        </div>
        
          <div class="up">
          <label  for="icon4">功能图标4上传（尺寸78*61）：</label> <br />  
           <input type="text" size="81"  name="icon4" id="icon4" value="<?php echo $icon4; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/> 
           
            <label  for="icon_url1">功能图标4链接：</label>   <br /> 
           <input type="text" size="81"  name="icon_url4" id="icon_url4" value="<?php echo $icon_url4; ?>"/  />    
        </div>
        
          <div class="up">
          <label  for="icon5">功能图标5上传（尺寸78*61）：</label>  <br />  
           <input type="text" size="81"  name="icon5" id="icon5" value="<?php echo $icon5; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/> 
           
            <label  for="icon_url1">功能图标5链接：</label>   <br /> 
           <input type="text" size="81"  name="icon_url5" id="icon_url5" value="<?php echo $icon_url5; ?>"/  />    
        </div>
        
          <div class="up">
          <label  for="icon6">功能图标6上传（尺寸78*61）：</label> <br />   
           <input type="text" size="81"  name="icon6" id="icon6" value="<?php echo $icon6; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/> 
           
            <label  for="icon_url1">功能图标6链接：</label>   <br /> 
           <input type="text" size="81"  name="icon_url6" id="icon_url6" value="<?php echo $icon_url6; ?>"/  />    
        </div>
  
  
   </div>
    
         <p>
                      <a  href="http://www.themepark.com.cn/cjjjwordpressqyzt.html" target="_blank">WEB主题公园的主题下方会有一个“技术支持：WEB主题公园”的信息。免费版是不可删除的，付费版这里提供一个选项可以选择删除或者显示英文版权，若你不想显示这个版权，请参考付费版</a>
                      </p>
      
        <b class="bt">ICP备案</b><br />
      <label  for="two_code_title">icp备案号，没有可以不填：</label>        
       <input type="text" size="60"  name="icp_b" id="icp_b" value="<?php echo $icp_b;?>"/>  <br />

                  
         <b class="bt">二维码上传</b><br />
      <label  for="two_code_title">标题：</label>        
       <input type="text" size="60"  name="two_code_title" id="two_code_title" value="<?php if($two_code_title!=""){echo $two_code_title;}else {echo '扫一扫关注官方微信';} ?>"/>  
       
       <label  for="two_code_title2">标题：</label>        
       <input type="text" size="60"  name="two_code_title2" id="two_code_title2" value="<?php if($two_code_title2!=""){echo $two_code_title2;}else {echo 'Two-dimensional code';} ?>"/>  
        <P>上传二维码，可以使你的微信图片，你也可以上传一张广告图片，图片尺寸为130*130</P>
           <div class="up">
           <input type="text" size="60"  name="two_code" id="two_code" value="<?php echo $two_code; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/>   
        </div>
                  
</div>
 </div>
   