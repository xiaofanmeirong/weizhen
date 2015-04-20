<?php 
$new_meta_boxes =
array(

    "hoturl" => array(
        "name" => "hoturl",
        "std" => "",
        "title" => "链接"),
		
   

	"hots_tlye" => array(
        "name" => "hots_tlye",
        "std" => "",
        "title" => "焦点图样式"),
		
		
	"title_images" => array(
        "name" => "title_images",
        "std" => "",
        "title" => "封面图片调整"),
		

);
function new_meta_boxes() {
    global $post, $new_meta_boxes;
  
      
     
	      	
	  ?>
    
 
      </div>
     
      <div style=" width:96%; padding:2%;display:inline-block;overflow: hidden;">
      
     <p><strong>请使用短代码进行输出提交购买表单和用户评价</strong><br />
购买表单短代码： [shop_short]<br />
用户评价：  [comment_short]<br />
ps.插入到文章任意位置输出。</p>
<p>购物盒子插件简介：购物盒子是WEB主题公园针对用户的需求和建议所开发的一款WordPress支付插件，这是为中文用户所开发的一款WordPress交易插件，支持前端注册、登录，支持支付宝交易，货到付款交易，并加入邮费、折扣价格等功能，管理员可以在后台处理订单，支持数据查询，查询月份销售额等功能，适合小而精的网站销售商品<br />
下载地址：<a target="_blank" href="http://www.themepark.com.cn/shoppingbox-wordpress-plugins.html">【点击弹出下载地址和详细介绍】 </a><br />
<strong>付费版主题提供有产品模板，无需插入短代码可见此演示：<a target="_blank" href="http://www.themepark.com.cn/demo/yanshiwenzhang1.html?themedemo=Superfocus">【点击弹出查看演示】 </a></strong></p>

      </div>
    
    
      
      <?php   
 
 }

function create_meta_box() {
    global $theme_name;
  
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes', '购物盒子使用短代码提示', 'new_meta_boxes', 'post', 'normal', 'high' );
    }
}

function save_postdata( $post_id ) {
    global $post, $new_meta_boxes;
  
    foreach($new_meta_boxes as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }
  
        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        }
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }
  
        $data = $_POST[$meta_box['name']];
  
        if(get_post_meta($post_id, $meta_box['name']) == "")
            add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
            update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }
}
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');

?>
