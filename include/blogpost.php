<?php
$obj = new blogproject;
$public_post=$obj->display_post_by_public();


?>

<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <?php while($display_post_items = mysqli_fetch_assoc($public_post)){  ?>
            <div class="col-lg-12">
              <div class="blog-post">
                <input type="hidden" value="<?php echo $display_post_items['post_id'] ?>"  />
                <div class="blog-thumb">
                  <img src="upload/<?php echo $display_post_items['post_thumbnail'];?>" alt="">
                </div>
                <div class="down-content">
                  <span><?php echo $display_post_items['ceta_name'];?></span>
                  <a href="">
                    <h4><?php echo $display_post_items['post_title'] ?></h4>
                  </a>
                  <ul class="post-info">
                    <li><a href="single_post.php?singlepost=viewpost&&postid=<?php echo $display_post_items['post_id'] ?>"><?php echo $display_post_items['post_author'] ?></a></li>
                    <li><a href="#"><?php echo $display_post_items['post_date'] ?></a></li>
                    <li><a href="#"><?php echo $display_post_items['post_comment_count'] ?> Comments</a></li>
                  </ul>
                  <p><?php echo $display_post_items['post_summery'] ?><a class="btn-primary"
                      rel="nofollow" href="single_post.php?singlepost=viewpost&&postid=<?php echo $display_post_items['post_id'] ?>" target="_parent">Read More</a></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#"><?php echo $display_post_items['post_tag'] ?></a>,</li>
                          
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#"> Twitter</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="blog.html">View All Posts</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once('sidebar.php'); ?>
    </div>
  </div>
  </div>
</section>