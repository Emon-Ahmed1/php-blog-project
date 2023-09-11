<?php
if(isset($_GET['status'])){
    if($_GET['status']=='change'){
        $id=$_GET['id'];
    }
}
if(isset($_POST['change_status_btn'])){
   $msg=$obj->change_status($_POST);
}
?>


<form class="p-5 m-5 shadow" action=""  method="POST" >
    <?php if(isset($msg)){ echo $msg;}   ?><br>
   <!-- <label style="background:#C57991; padding: 10px; "> <?php if($id==1){
        echo 'Published';
    }else{
        echo ' Unpublished';
    } ?> </label> -->
    <input type="hidden" name='status_id' value="<?php echo $id;?>">
<div class="form-group">
        <label class="mb-1" for="change_post_status">Change Post Status</label>
       <select class="form-control" name="change_post_status" id="change_post_status">
        <option value="1">Published</option>
        <option value="0">Unpublished</option>
       </select>
    </div>
    <input class="btn btn-primary" name="change_status_btn" value="Change status" type="submit" />
</form>