<?php
$obj = new blogproject;
$display_category=$obj->display_cetagory();

if(isset($_POST['add_post'])){
    $post_msg= $obj->add_post($_POST);
   // $obj->add_post($_POST);

}


?>


<h2> Add Post </h2>
<?php  if(isset($post_msg)){echo $post_msg; } ?>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="form-group">
        <label class="mb-1" for="post_title"> Post title </label>
        <input name="post_title" class="form-control py-4" id="post_title" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_content"> Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_thumbnali"> Upload thumbnail</label><br>
        <input name="post_thumbnali" class="" id="post_thumbnali" type="file" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_category"> Select Post Category</label>
        
        <select class="form-control" name="post_category" id="post_category">
        <?php while($display_cate = mysqli_fetch_assoc($display_category)){    ?>
            <option value="<?php echo $display_cate['ceta_id'];  ?>"><?php echo $display_cate['ceta_name'];  ?> </option>

            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_summery"> Post Summery </label>
        <input name="post_summery" class="form-control py-4" id="post_summery" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_tag"> Post Tags</label>
        <input name="post_tag" class="form-control py-4" id="post_tag" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_status">Post Status</label>
       <select class="form-control" name="post_status" id="post_status">
        <option value="1">Published</option>
        <option value="0">Unpublished</option>
       </select>
    </div>
    <input class="from-control btn btn-block btn-primary" name="add_post" value="Add Post" type="submit" />
</form>