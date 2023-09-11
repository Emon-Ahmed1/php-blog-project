<?php
//$obj = new blogproject;
if(isset($_GET['status'])){
    if($_GET['status']=='editimg'){
        $id= $_GET['id'];
       
    }
}
   if(isset($_POST['change_thumbnail_btn'])){
    $msg=$obj->edit_post_img($_POST); 
   }
?>

<div class=" m-5 p-5 form-responsive shadow">
    <?php if(isset($msg)){ echo $msg;}  ?>
    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="change_img_id" id="change_img_id" value="<?php echo $id; ?>">
        <label for="change_thumbnail_img" class="mb-1">Change Thumbnail</label><br>
        <input class="py-1" type="file" name="post_thumbnail_img" value=""> <br>
        <input type="submit" name="change_thumbnail_btn" value="Change thumbnail" class='btn btn-primary form'>
    </form>
    
</div>