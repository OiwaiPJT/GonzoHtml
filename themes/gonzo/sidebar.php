<div class="blog-right">
  <div class="col-sm-3 col-sm-offset-1">
    <div class="blogSidebar">
      <div class="widget">
        <h3 class="widget-title">Categories</h3>
        <ul>
          <li><a href="/news/">> News</a></li>
          <li><a href="/blog/">> Blog</a></li>
        </ul>
      </div><!-- end widget -->
      <div class="widget">
        <h3 class="widget-title">Recent Posts</h3>
        <ul>
          <?php
          $recent_posts = wp_get_recent_posts();
          foreach($recent_posts as $post){
            echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
          } ?>
        </ul>
      </div><!-- end widget -->


      <div class="widget">
        <h3 class="widget-title">Tweets</h3>
        <!-- twitter -->
        <a class="twitter-timeline" href="https://twitter.com/nozawatakatomo" data-tweet-limit="3">Tweets by nozawatakatomo</a>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div><!-- end widget -->

      <div class="widget tagCloud">
        <h3 class="widget-title">Tag Cloud</h3>
        <ul>
          <?php
          $args = array(
          'order' => 'desc',
          'number' => 10
          );
          $tags = get_terms('post_tag', $args);
          foreach($tags as $value) {
          echo '<li><a href="'. get_tag_link($value->term_id) .'">'. $value->name .'</a>&nbsp;/&nbsp;</li>';
          }
          ?>
        </ul>

      </div><!-- end widget -->
    </div><!-- end blogSidebar -->
  </div><!-- end col-sm03 -->
</div><!-- end blog-right -->
