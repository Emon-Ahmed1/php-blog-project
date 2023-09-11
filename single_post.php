<?php
include('admin/Class/function.php');
$obj = new blogproject;
$display_cetagory_by_userpage = $obj->display_cetagory();

if(isset($_GET['singlepost'])){
  if($_GET['singlepost']='viewpost'){
    $postid=$_GET['postid'];

    $sng_post=$obj->edit_post($postid);

  }
}


?>
<?php include_once('include/head.php'); ?>
  <body>
    <!-- ***** Preloader Start ***** -->
    <?php include_once('include/preloader.php'); ?>
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
 <?php include_once('include/header.php'); ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once('include/banner.php'); ?>
    <!-- Banner Ends Here -->
    <?php //include_once('include/cta.php'); ?>

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <div class="blog-thumb">
                  <img src="upload/<?php echo $sng_post['post_thumbnail'];?>" alt="">
                </div>
                <div class="down-content">
                    <h4><?php echo $sng_post['post_title'] ?></h4>
                   <span> <p><?php echo $sng_post['post_author'] ?>  </p> </span>
                    <p><?php echo $sng_post['post_content'] ?> </p>
                  <ul class="post-info">
                    
                    <li><a href="#"><?php echo $sng_post['post_date'] ?></a></li>
                    <li><?php echo $sng_post['post_comment_count'] ?> Comments</a></li>
                  </ul>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><?php echo $sng_post['post_tag'] ?></a>,</li>
                          
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="https://www.facebook.com/mollaemon431/">Facebook</a>,</li>
                          <li><a href="#"> Twitter</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
         
        <?php //include_once('include/sidebar.php'); ?>
        </div>
      </div>
    </section>
  <?php include_once('include/footer.php');  ?>
  <?php include_once('include/script.php');  ?>