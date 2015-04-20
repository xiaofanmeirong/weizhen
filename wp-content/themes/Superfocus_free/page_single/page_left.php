<div class="widget">
  <div class="widget_zs"></div>
    <?php $post_data = get_post($post->ID, ARRAY_A);
			$slug = $post_data['post_name'];
			$name = $slug; //page别名
            global $wpdb;
            $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
			$parent_id =get_post($post->post_parent, ARRAY_A);
			$parent_slug = $parent_id['post_name'];
			$parent_title = get_the_title($post->post_parent);
			$parent_link =get_page_link($post->post_parent);
			$word_t23=get_option('mytheme_word_t23');
			 ?>
          <h2>
          <?php if($post->post_parent){echo '<a href="'.$parent_link .'">'.$parent_title  . ' <b>'.$parent_slug .' </b>'; }else{echo  '<a href="#">'. get_the_title() . ' <b>'.$slug .' </b>';}?> </a></h2> 
         
          
            <?php if($post->post_parent):  ?>
          <ul class="nav_left">  <?php $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1"); if ($children){ echo $children; }  ?></ul>
        <?php else: ?>
         <ul class="nav_left"> <?php  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");  if ($children){ echo $children; }?></ul>
           <?php endif; ?> 



           <div class="nav_contact">
           <a><?php if($word_t23!=""){echo $word_t23;}else{echo '联系电话';}  ?></a>
           <b><?php echo get_option('mytheme_tell');  ?></b>
           </div>
       
</div>  
