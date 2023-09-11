<?php
$display_cetagory_data = $obj->display_cetagory();

if (isset($_GET['status'])) {
    if ($_GET['status'] = 'delete') {
        $Delete_id = $_GET['ceta_id'];

        $Delete_msg = $obj->delete_cetagory($Delete_id);
    }
}
?>
<h2> Manage Your Cetagory </h2>
<?php if (isset($Delete_msg)) {
    echo $Delete_msg;
} ?>
<table class="table">
    <thead>
        <th>ID</th>
        <th> Cetagory Name</th>
        <th> Cetagory Description</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        while ($display_cetagory = mysqli_fetch_assoc($display_cetagory_data)) {

            ?>
            <tr>
                <td>
                    <?php echo $display_cetagory['ceta_id']; ?>
                </td>
                <td>
                    <?php echo $display_cetagory['ceta_name']; ?>
                </td>
                <td>
                    <?php echo $display_cetagory['ceta_des']; ?>
                </td>
                <td>
                    <a class="btn btn-primary"
                        href="edit_cetagory.php?status=edit&&id=<?php echo $display_cetagory['ceta_id']; ?>"> Edit </a>
                    <a class="btn btn-danger" href="?status=delete&&ceta_id=<?php echo $display_cetagory['ceta_id']; ?>">
                        Delete </a>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>