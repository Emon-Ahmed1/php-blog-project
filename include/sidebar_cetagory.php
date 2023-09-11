<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
             <?php while($display_ceta = mysqli_fetch_assoc($display_cetagory_by_userpage)){ ?>
            <ul>
                <li><a ><?php echo $display_ceta['ceta_name']; ?></a></li>
                
            </ul>
            <?php } ?>
        </div>
    </div>
</div>