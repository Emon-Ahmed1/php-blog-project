<?php
$obj = new blogproject;
$display_category=$obj->display_cetagory();

if(isset($_GET['status'])){
    if($_GET['status']='edit'){
        $id=$_GET['id'];
        $show_post = $obj->edit_post($id);
       
    }
}

if(isset($_POST['update_post'])){
   $change_msg = $obj->update_post($_POST);

} 


?>

<form action="" method="post" autocomplete="off" class="p-5 m-5 shadow">
<h2 class='warning'>  Edit Your Post </h2>
    <?php if(isset($change_msg)){echo $change_msg;} ?>
    <div class="form-group">
    
    <input name="change_post_id" class="form-control py-4" id="post_id" type="hidden" value="<?php echo $id ?>" />

        <label class="mb-1" for="Change_title"> Change title </label>
        <input name="change_title" class="form-control py-4" id="change_title" type="text" value="<?php echo $show_post['post_title']; ?>" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="change_content"> Post Content</label>
        <textarea class="form-control" name="change_content" id="" cols="30" rows="10"><?php echo $show_post['post_content']; ?></textarea>
    </div>
    <div class="form-group">
        <label class="mb-1" for="change_post_summery">Change Post Summery </label>
        <input name="change_post_summery" class="form-control py-4" id="change_post_summery" type="text" value="<?php echo $show_post['post_summery']; ?>" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="change_post_tag"> Change Post Tags</label>
        <input name="change_post_tag" class="form-control py-4" id="change_post_tag" type="text" value="<?php echo $show_post['post_tag']; ?>" />
    </div>
  
    <input class="btn btn-primary" name="update_post" value="Update Your Post" type="submit" />
   
</form>