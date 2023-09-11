   <?php
   //include_once('Class/function.php');
   if(isset($_POST['add_cetagory'])){
    $return_msg = $obj->add_cetagory($_POST);

   }



?>

<h2> Add Cetagory </h2>
   <form action="" method="POST" autocomplete="off">
      <?php if(isset($return_msg)){echo  $return_msg; } ?>
        <div class="form-group">
        <label class="mb-1" for="Cetagory_name"> Add Cetagory</label>
        <input name="Cetagory_name" class="form-control py-4" id="ceta-name" type="text"/>
        </div>
        <div class="form-group">
        <label class="mb-1" for="ceta_description"> Add Description</label>
        <input name="cetagory_description" class="form-control py-4" id="ceta-des" type="text"/>
        </div>
        <input class="from-control btn btn-block btn-primary" name="add_cetagory" value="Add Cetagory" type="submit" />
    </form>