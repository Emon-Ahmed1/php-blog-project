<?php
 //$display=$obj->display_cetagory();

 if(isset($_GET['status'])){
    if($_GET['status']='edit'){
        $id= $_GET['id'];
         $show_ceta= $obj->edit_cetagory($id);

    }
 }
 if(isset($_POST['update_cetagory'])){
   $return_msg= $obj->update_cetagory($_POST);
 }
?>


<h2> Edit Cetagory </h2>
   <?php if(isset($return_msg)){echo $return_msg;}; ?>
      <form class="form" action="" method="POST">
  
            <label> Cetagory Name </label>
            <input class="form-control mb-4" type="text" name="ceta_name" value="<?php echo $show_ceta['ceta_name'] ?>">
            <label> Cetagory Description </label>
            <input class="form-control mb-4" type="text" name="ceta_des" value="<?php echo $show_ceta['ceta_des']  ?>" >            
            
            <input type="hidden" name="ceta_id" value="<?php echo $show_ceta['ceta_id']; ?>">
            <button type="submit" name="update_cetagory"class="form-control bg-warning ">Update Cetagory </button><br>