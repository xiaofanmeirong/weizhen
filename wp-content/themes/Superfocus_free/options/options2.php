 <p><strong>这款主题是《超级聚焦》的免费版本，付费版具有更多功能和更多的动画效果，并且享受后台一键更新，一次购买终身使用，终身免费更新新版本，新版本会不断加入新的功能，不断优化，并且有客服的技术支持，你可以使用免费版体验这个主题的功能，如果觉得功能不够用，可以参考付费版以便决定是否购买，免费版可以与付费版本无缝结合，切换之后设置好付费版的一些选项即可完成网站的设定。</strong><br />
付费版演示：<a href="http://www.themepark.com.cn/demo/?themedemo=Superfocus" target="_blank">http://www.themepark.com.cn/demo/?themedemo=Superfocus</a>
 <br />
付费版地址：<a href="http://www.themepark.com.cn/cjjjwordpressqyzt.html" target="_blank">http://www.themepark.com.cn/cjjjwordpressqyzt.html</a>
 
 </p>
 

  <div class="xiaot">
                     <b class="bt">模板微调</b><br />
                    <p><strong>这款主题的付费版提供了超多用户体验良好的页面、栏目页以及内页模板，并提供三种模式的动画效果相册，免费版只有一个默认的列表、页面和内页模板，如果你需要更多的展示方式，可以参考付费版</strong><br />
付费版地址：<a href="http://www.themepark.com.cn/cjjjwordpressqyzt.html" target="_blank">http://www.themepark.com.cn/cjjjwordpressqyzt.html</a></p>
                 
  </div>
            
              
          
                      
                        
                      
            <div class="xiaot">
                <b class="bt">侧边栏悬浮模块设置</b><br />
                <?php $kefu_on =  get_option('mytheme_kefu_on'); ?>
                 <label  for="kefu_on">是否显示悬浮:</label>
                  <select name="kefu_on" id="kefu_on">
                   <option value=''<?php if ( $kefu_on ==="" ) {echo "selected='selected'";}?>>显示</option>
                    <option value='none'<?php if ( $kefu_on ==="none" ) {echo "selected='selected'";}?>>不显示</option>
	             </select>   
                  <div class="up">
                      <label  for="about_pic">二维码上传（尺寸：210*210）</label> 
                      <input type="text" size="40"  name="kefu_weixin" id="kefu_weixin" value="<?php echo get_option('mytheme_kefu_weixin'); ?>"/>   
                      <input type="button" name="upload_button" value="上传" id="upbottom"/>  <br /> 
                  </div> 
                  
                  <div class="up">
                      <label  for="qq_tu">客服头部图片替换</label> 
                      <input type="text" size="40"  name="qq_tu" id="qq_tu" value="<?php echo get_option('mytheme_qq_tu'); ?>"/>   
                      <input type="button" name="upload_button" value="上传" id="upbottom"/>  <br /> 
                  </div> 
                    <div class="up">
                    <label  for="kefu_qq">客服qq代码添加</label>
                    <textarea name="kefu_qq" cols="86" rows="4" id="kefu_qq"><?php echo stripslashes(get_option('mytheme_kefu_qq')); ?></textarea>
                    <p>登录QQ，并且进入这个网址<a href="http://shang.qq.com/widget/consult.php" target="_blank">http://shang.qq.com/widget/consult.php</a>,将获取的代码粘贴进来，支持多个qq客服代码添加</p>
                      </div>    
               </div>                                        
            
            
            
           
                   
                     