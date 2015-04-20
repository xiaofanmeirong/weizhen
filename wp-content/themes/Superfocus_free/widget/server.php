<?php 

class case1 extends WP_Widget {

	function case1()
	{
		$widget_ops = array('classname'=>'case1','description' => '服务项目模块，三图片并排显示，可以自定义数量【侧边栏无效】');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="case1",$name='服务项目模块[三图片并排]（可显示商品）',$widget_ops,$control_ops);  

	}

	function form($instance) { 
		 $title = esc_attr($instance['title']);
		 $en_tit = esc_attr($instance['en_tit']);
		 $w_cat = esc_attr($instance['w_cat']);
		 $zhiding = esc_attr($instance['zhiding']);
		 $target = esc_attr($instance['target']);
		 $nnmber = esc_attr($instance['nnmber']);
		$jcar = esc_attr($instance['jcar']);
	?>
	
<p>此模块调用的特色图片尺寸为：312*120【注意，如果要关闭滚轴动画效果，请去外观---主题选项关闭即可】</p>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_attr_e('标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('en_tit'); ?>"><?php esc_attr_e('标题下描述:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('en_tit'); ?>" name="<?php echo $this->get_field_name('en_tit'); ?>" type="text" value="<?php echo $en_tit; ?>" /></label></p>
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
                <option value='3'<?php if ($zhiding == "3" ) {echo "selected='selected'";}?>>随机文章</option>
		
	</select>

</p>



<p>   
    <label  for="<?php echo $this->get_field_id('target'); ?>">链接方式:</label><br />
             <select id="<?php echo $this->get_field_id('target'); ?>" name="<?php echo $this->get_field_name('target'); ?>" >
              <option value='2'<?php if ($target == "2" ) {echo "selected='selected'";}?> >自身页面转换</option>
	          <option value='1'<?php if ($target == "1" ) {echo "selected='selected'";}?>>打开新窗口</option>
		
	</select>

</p>

<p><label for="<?php echo $this->get_field_id('nnmber'); ?>"><?php esc_attr_e('显示数量(默认3):'); ?> <input class="widefat" id="<?php echo $this->get_field_id('nnmber'); ?>" name="<?php echo $this->get_field_name('nnmber'); ?>" type="text" value="<?php echo $nnmber; ?>" /></label></p>



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
		$title = apply_filters('widget_title', empty($instance['title']) ? __('分类自定义') : $instance['title']);
		$en_tit = apply_filters('widget_title', empty($instance['en_tit']) ? __('') : $instance['en_tit']);
		$w_cat = apply_filters('widget_title', empty($instance['w_cat']) ? __('') : $instance['w_cat']);
	    $zhiding  = apply_filters('widget_title', empty($instance['zhiding']) ? __('1') : $instance['zhiding']);
		$target  = apply_filters('widget_title', empty($instance['target']) ? __('2') : $instance['target']);
		$nnmber = apply_filters('widget_title', empty($instance['nnmber']) ? __('3') : $instance['nnmber']);
	   if( $zhiding =="1" ){ $post__in = get_option('sticky_posts');}
        $cat= $w_cat;
        $mm= $nnmber;
        $cat_links=get_category_link($cat);
 $theme_donghua= get_option('mytheme_theme_donghua');  
	 if( $zhiding =="3" ){ $rand = 'rand';}
  $args = array( 'cat' => $w_cat , 'showposts' => $nnmber , 'post__in' =>$post__in ,'orderby' => $rand );     $query = new WP_Query( $args );   
		?>
<?php if(!$query->have_posts()) {
	 
	 get_template_part( 'index/server' );
	 
	 }else{?>          
        
<div id="index_model" class="widget servers">

<?php if(is_home()){  if( $theme_donghua ==""){?>


<?php }; };?>
      <div id="servers">
        
          <div class="servers_hd">
              <h2><?php echo $title ?></h2>
                 <span class="star_s"> <a></a><a></a><a></a><a></a><a></a>  </span>
                <p><?php echo $en_tit ?></p>
          </div>
<ul>
<?php
if( $target  =="1" ){ $tagerts = 'target="_blank"';}

          
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
            <a class="s_pic"<?php echo $tagerts .' '. $target; ?> href="<?php echo $links1 ?>" title="<?php the_title(); ?>">
           
            <?php  
            
			 
	
	
			 if (has_post_thumbnail()) { the_post_thumbnail('servers_thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{?> 
                    <img width="290" height="215" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php if( $list_nmber_k2==""){echo get_bloginfo('template_url').'/images/huise.gif';}else{echo $list_nmber_k2;} ?>" />
                    <?php } ?> 
            
           
             	
 <div><b><?php $tit= get_the_title(); echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,25,"...",'utf-8'); ?></b></div></a>
   <p>
			     <?php
				 	$price = get_post_meta($id, 'shop_price', true);
	                $original_price=get_post_meta($id,"original_price", true);
				  if($price!=""){?><span><?php if($original_price){echo '<em class="original_price">￥'.$original_price.'</em>';} ?><a class="price">￥<?php echo $price ?></a>  </span> <?php }?>
			   <?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,190,"...",'utf-8'); ?></p>
             
           
                </li>
 <?php endwhile; ?>

</ul>

      </div>

</div>
 

        <?php
	}}
}
register_widget('case1');
?>