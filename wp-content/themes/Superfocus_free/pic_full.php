  <?php
                     $pic1=get_option('mytheme_pic1'); 
				
					 $pic_link1=get_option('mytheme_pic_link1'); 
					 $pic_taget1=get_option('mytheme_pic_taget1');  

					  $pic2=get_option('mytheme_pic2'); 
					
					 $pic_link2=get_option('mytheme_pic_link2'); 
					 $pic_taget2=get_option('mytheme_pic_taget2'); 

					  $pic3=get_option('mytheme_pic3'); 
					
					 $pic_link3=get_option('mytheme_pic_link3'); 
					 $pic_taget3=get_option('mytheme_pic_taget3'); 

					  $pic4=get_option('mytheme_pic4'); 
					
					 $pic_link4=get_option('mytheme_pic_link4'); 
					 $pic_taget4=get_option('mytheme_pic_taget4'); 
					$theme_donghua= get_option('mytheme_theme_donghua');  
					 ?>
<div id="index_model" class="pic_out2">
<div id="pic2">
 <ul>                                      
<?php if ($pic1 !=""){ ?>			   
    <li><a href="<?php  echo $pic_link1?>" style=" background: center url(<?php echo  $pic1;?>)"  > </a> </li>
  <?php }; ?>     
  <?php if ($pic2 !=""){ ?>			   
    <li><a href="<?php  echo $pic_link2?>"   style=" background: center url(<?php echo  $pic2;?>)" >  </a></li>
  <?php }; ?>         
 <?php if ($pic3 !=""){ ?>			   
   <li><a href="<?php  echo $pic_link3?>"  style=" background: center url(<?php echo  $pic3;?>)"  > </a></li>
  <?php }; ?>                                            
  <?php if ($pic4 !=""){ ?>			   
    <li><a href="<?php  echo $pic_link4?>"  style=" background: center url(<?php echo  $pic4;?>)"  ></a></li>
  <?php }; ?>                   
 </ul>

 
<?php if ($pic1 !=""||$pic2 !=""||$pic3 !=""||$pic4 !=""){ ?>
<a class="prve"></a>
<a class="next">  </a>
<script>
$(function() {
$("#pic2").jCarouselLite({
btnNext: "#pic2 .next",
btnPrev: "#pic2 .prve",
speed:2000,//滚动动画的时间
auto:4000,//滚动间隔时间
visible:1,
onMouse:true,
start:0,
easing: "easeInOutBack",

});
});
</script>
  <?php }; ?> 


     
<div class="left_over"></div>
<div class="right_over"></div>

<div class="b_over" style="background: center url(<?php echo  $pic2;?>)"></div>
<div class="b_over2" style="background: center url(<?php echo  $pic2;?>)"></div>
</div>



</div>

