<!-- Comments -->
<div class="comment-container">
  <h1 class="title-comments">
     <?php echo get_comments_number().' 件のコメント'; ?>
  </h1>
  <!-- ============== COMMENTS ============= -->
  <?php if(have_comments()): ?>
  <ul class="comments">
    <?php wp_list_comments(array(
        'avatar_size'=>48,
        'style'=>'li',
        'type'=>'comment',
        //'callback'=>'mytheme_comments'
      )); ?>
  </ul>

  <?php if (get_comment_pages_count() > 1) : ?>
  	<ul id="comments-pagination">
  		<li id="prev-comments"><?php previous_comments_link('&lt;&lt; 前のコメント'); ?></li>
  		<li id="next-comments"><?php next_comments_link('次のコメント &gt;&gt;'); ?></li>
  	</ul>
  <?php endif; endif; ?>

  <div class="comment-respond pe-7s-user">
    <?php comment_form(); ?>
  </div>


</div>
<!-- Comments end -->
