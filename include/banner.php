<?php
$obj = new blogproject;
$public_post=$obj->display_post_by_public();


?>

<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
        <?php while($banner = mysqli_fetch_assoc($public_post)){  ?>
            <div class="item">
            <input type="hidden" value="<?php echo $banner['post_id'] ?>"  />
                <img src="upload/<?php echo $banner['post_thumbnail']?>" alt="">
                <div class="item-content">
               
                    <div class="main-content">
                        <div class="meta-category">
                            <span><?php echo $banner['ceta_name'];?></span>
                        </div>
                        <a href="blog/single_post.php?singlepost=viewpost&&postid=<?php echo $banner['post_id'] ?>">
                            <h4><?php echo $banner['post_title'];?></h4></a>
                        <ul class="post-info">
                            <li><a href="#"><?php echo $banner['post_author'];?></a></li>
                            <li><a href="#"><?php echo $banner['post_date'];?></a></li>
                            <li><a href="#"><?php echo $banner['post_comment_count'];?> Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>