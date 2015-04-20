<div class="widget">
  <div class="widget_zs"></div>
     <?php    $cat = get_category_root_id(the_category_ID(false));
                   $category = get_category($cat);
				  $category_link=  get_category_link($cat);
				  $word_t23=get_option('mytheme_word_t23');
				   ?>
          <h2>
          <?php echo '<a href="'. $category_link .'">'.$category->name   . ' <b>'.$category->slug.' </b>'; ?> </a></h2> 
          <ul class="nav_left">  <?php  if ( get_category_children($cat) != "" ) {wp_list_categories("child_of=".$cat. "&depth=1&hide_empty=0&title_li="); }?></ul>
           <div class="nav_contact">
           <a><?php if($word_t23!=""){echo $word_t23;}else{echo '联系电话';}  ?></a>
           <b><?php echo get_option('mytheme_tell');  ?></b>
           </div>
       
</div>  
<?php get_sidebar(); ?>