<?php
$obj = new blogproject;
$display_post = $obj->display_post();

if(isset($_GET['status'])){
    if($_GET['status']=='delete')
    $id=$_GET['id'];
    $del_msg=$obj->delete_post($id);


    
}

?>


<h2> Manage Your Post </h2>
 <?php if(isset($del_msg)){echo $del_msg;}   ?>
<div class="form-responsive">
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Title </th>
            <th>Content</th>
            <th> Image</th>
            <th>Category</th>
            <th>Author</th>
            <th>Date</th>
            <th> Comment Count</th>
            <th>Summary</th>
            <th>Tag</th>
            <th>Status </th>
            <th>Action </th>
        </thead>
        <tbody>
            <?php while($display_post_item = mysqli_fetch_assoc($display_post)){ ?>
            <tr>
                <td><?php echo $display_post_item['post_id'];?> </td>
                <td><?php echo $display_post_item['post_title'];?></td>
                <td><?php echo $display_post_item['post_content'];?></td>
                <td><img height="100px" src="../upload/<?php echo $display_post_item['post_thumbnail'];?>" alt="">
                <a class="btn btn-primary" href="edit_post_img.php?status=editimg&&id=<?php echo $display_post_item['post_id'];?>"> Change </a>
            
            </td>
                <td><?php echo $display_post_item['ceta_name'];?></td>
                <td><?php echo $display_post_item['post_author'];?></td>
                <td><?php echo $display_post_item['post_date'];?></td>
                <td><?php echo $display_post_item['post_comment_count'];?></td>
                <td><?php echo $display_post_item['post_summery'];?></td>
                <td><?php echo $display_post_item['post_tag'];?></td>
                <td class="" ><?php if($display_post_item['post_status']==1){
                   echo 'Published';
                }
                else{
                   echo 'Unpublished';
                }
                ?>
                <a class="btn btn-warning" href="status.php?status=change&&id=<?php echo $display_post_item['post_id'];?>">
                        Change Status </a>

                </td>
                
                    
                <td>
                    <a class="btn btn-primary mb-2 pl-4 pr-4"
                        href="edit_post.php?status=edit&&id=<?php echo $display_post_item['post_id'];?>"> Edit </a><br>
                    <a class="btn btn-danger" href="?status=delete&&id=<?php echo $display_post_item['post_id'];?>">
                        Delete </a>

                </td>
            </tr>
            <?php } ?>


        </tbody>



    </table>



</div>
