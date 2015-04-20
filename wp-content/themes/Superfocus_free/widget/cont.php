<?php 

class cont extends WP_Widget {

	function cont()
	{
		$widget_ops = array('classname'=>'cont','description' => '调用一个圆形图片列表，你可以作为业务范围或者企业优势【侧边栏无效】');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="cont",$name='我们的优势（首页专用圆形列表）',$widget_ops,$control_ops);  

	}

	function form($instance) { 
		 $title = esc_attr($instance['title']);
		 $en_tit = esc_attr($instance['en_tit']);
		 $w_cat = esc_attr($instance['w_cat']);
		 $zhiding = esc_attr($instance['zhiding']);
		 $target = esc_attr($instance['target']);
		 $nnmber = esc_attr($instance['nnmber']);
		  $pic_ba= esc_attr($instance['pic_ba']);
		$jcar = esc_attr($instance['jcar']);
	?>
	<p>此模块调用的特色图片尺寸为：231*308（左边）/ 80*80(右边)</p>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_attr_e('标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('en_tit'); ?>"><?php esc_attr_e('英文标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('en_tit'); ?>" name="<?php echo $this->get_field_name('en_tit'); ?>" type="text" value="<?php echo $en_tit; ?>" /></label></p>


<label  for="<?php echo $this->get_field_id('w_cat'); ?>">请选择:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat'); ?>" name="<?php echo $this->get_field_name('w_cat'); ?>" >
              <option value=''>请选择</option>
<?php 
		 $categorys =get_categories(array('hide_empty' => 0));
		$sigk_cat2= $w_cat;
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $sigk_cat2 == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
  
    
 
<p>   
    <label  for="<?php echo $this->get_field_id('zhiding'); ?>">是否只显示置顶文章:</label><br />
             <select id="<?php echo $this->get_field_id('zhiding'); ?>" name="<?php echo $this->get_field_name('zhiding'); ?>" >
              <option value='2'<?php if ($zhiding == "2" ) {echo "selected='selected'";}?> >显示最新文章</option>
	          <option value='1'<?php if ($zhiding == "1" ) {echo "selected='selected'";}?>>只显示置顶的文章</option>
		
	</select>

</p>



<p>   
    <label  for="<?php echo $this->get_field_id('target'); ?>">链接方式:</label><br />
             <select id="<?php echo $this->get_field_id('target'); ?>" name="<?php echo $this->get_field_name('target'); ?>" >
              <option value='2'<?php if ($target == "2" ) {echo "selected='selected'";}?> >自身页面转换</option>
	          <option value='1'<?php if ($target == "1" ) {echo "selected='selected'";}?>>打开新窗口</option>
		
	</select>

</p>

<p><label for="<?php echo $this->get_field_id('nnmber'); ?>"><?php esc_attr_e('显示数量(默认4):'); ?> <input class="widefat" id="<?php echo $this->get_field_id('nnmber'); ?>" name="<?php echo $this->get_field_name('nnmber'); ?>" type="text" value="<?php echo $nnmber; ?>" /></label></p>
<?php    wp_enqueue_media(); ?>


<p>
  <label  for="<?php echo $this->get_field_id('pic_ba'); ?>">背景图片(参考尺寸：1920*404)::</label><br />
 <input type="text" size="40" value="<?php echo $pic_ba; ?>" name="<?php echo $this->get_field_name('pic_ba'); ?>" id="<?php echo $this->get_field_id('pic_ba'); ?>"/>
 
 <a id="ashu_upload" class="vedio_upload_button button" href="#">上传</a>
</p>     

<script>   
    jQuery(document).ready(function(){  
    var theme_upload_frame;   
    var value_id; 
	
    jQuery('.vedio_upload_button button').on('click',function(event){   
        value_id =jQuery(this).prev('input');      
        
        theme_upload_frame = wp.media({   
            title: '选择图片',   
            button: {   
                text: '选择',   
            }   , multiple: false   
     
			
        });   
           if(theme_upload_frame){
           theme_upload_frame.open();    
		   }
       
        theme_upload_frame.on('select',function(){   
            attachment = theme_upload_frame.state().get('selection').first().toJSON();   
            jQuery(value_id).val(attachment.url);
			jQuery(".supports-drag-drop").remove();     
        });   
           
        
    });   
    });   
    </script>   



	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
	     $id =$instance['id'];
        $before_content = $instance['before_content'];
        $after_content = $instance['after_content'];
		$title = apply_filters('widget_title', empty($instance['title']) ? __('我们的优势') : $instance['title']);
		$w_cat = apply_filters('widget_title', empty($instance['w_cat']) ? __('') : $instance['w_cat']);
		$en_tit = apply_filters('widget_title', empty($instance['en_tit']) ? __('Our advantage') : $instance['en_tit']);
	    $zhiding  = apply_filters('widget_title', empty($instance['zhiding']) ? __('1') : $instance['zhiding']);
		$target  = apply_filters('widget_title', empty($instance['target']) ? __('2') : $instance['target']);
		$nnmber = apply_filters('widget_title', empty($instance['nnmber']) ? __('4') : $instance['nnmber']);
	    $jcar = apply_filters('widget_title', empty($instance['jcar']) ? __('2') : $instance['jcar']);
       $pic_ba = apply_filters('widget_title', empty($instance['pic_ba']) ? __('') : $instance['pic_ba']);
	    $cat= $w_cat;
        $mm= $nnmber;
        $cat_links=get_category_link($cat);
		 $theme_donghua= get_option('mytheme_theme_donghua');  
        if( $target  =="1" ){ $tagerts = 'target="_blank"';}
		 $linkss=get_post_meta($id,"hoturl", true); 
		    $target =get_post_meta($id,"hots_tlye", true);
			 $word_t1=get_option('mytheme_word_t1');
			 if( $zhiding =="1" ){ $post__in = get_option('sticky_posts');}
		  $args = array( 'cat' => $w_cat , 'showposts' => $nnmber , 'post__in' =>$post__in );     $query = new WP_Query( $args );       
		if(is_home()){
			 if(!$query->have_posts()) {
	 
	 get_template_part('index/advantage');
	 
	 }else{?>    
		
        
   
    
    <div id="index_model" class="widget advantage" style="background-image:url(<?php if($pic_ba !=""){echo $pic_ba;}else{ echo get_bloginfo('template_url').'/images/advantage.jpg';} ?>)">

    <div id="advantage">
        <div class="advantage_hd">
            <b><?php echo  $en_tit;?></b>
            <h2><?php echo  $title;?></h2>
        
        </div>
    
       <ul>
   <?php
if( $target  =="1" ){ $tagerts = 'target="_blank"';}
if( $zhiding =="1" ){ $post__in = get_option('sticky_posts');}
   
		//else{$args = array( 'cat' => $w_cat , 'showposts' => $nnmber ,'caller_get_posts' => 1 ,'post__in' => get_option('sticky_posts'),);     $query = new WP_Query( $args );}
	
 while ( $query->have_posts() ) :$query->the_post();  ?>     
 <?php 
		 $tit= get_the_title();
		 $id =get_the_ID(); 
	      $content= get_the_content();
		   $linkss=get_post_meta($id,"hoturl", true); 
		  if($linkss !=""){ $links1=  $linkss;}else{$links1=  get_permalink();};
		    $target =get_post_meta($id,"hots_tlye", true);
			 $word_t1=get_option('mytheme_word_t1');
		 ?>    
           <li>
             <a class="pic_a" <?php echo $tagerts .' '. $target; ?> href="<?php echo $links1 ?>" title="<?php the_title(); ?>">  <?php  if (has_post_thumbnail()) { the_post_thumbnail('advet-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));} ?>
  </a>
              <div>
              <a <?php echo $tagerts .' '. $target; ?> href="<?php echo $links1 ?>" title="<?php the_title(); ?>"><?php $tit= get_the_title(); echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,50,"..."); ?></a>
              <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,90,"..."); ?></p>
              <span></span>
              </div>
           </li>
           
 <?php endwhile; ?>
      
       
       </ul>
    
    
    
    </div>
     

</div>    
        
    
 
        <?php
	}}
}}
register_widget('cont');
?>