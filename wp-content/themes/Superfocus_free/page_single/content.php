<div id="content">
<div class="left_mian"><?php get_template_part( 'sidebar2' ); ?></div>
<div class="right_mian"><?php get_template_part( 'page_single/page_right' ); ?>
<div id="respond">
 <?php if ( comments_open() ){ comments_template();} ?>
</div>
</div>
</div>