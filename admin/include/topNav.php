<?php include_once('include/header.php') ?>
    <link rel="stylesheet" href="include/style.css">
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
           <a target="blank" class="navbar-brand" href='../index.php'>My blog Site</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fas fa-user fa-fw"></i></button>
  <div id="myDropdown" class="dropdown-content">
  <a class="dropdown-item" href="#">Settings</a>
   <a class="dropdown-item" href="#">Activity Log</a>
    <a class="dropdown-item" href="?adminlogout=logout">Logout</a>  
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>




         <!--   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsy" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></i></div>
                                Cetagory
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsy" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_cetagory.php">Add Cetagory</a>
                                    <a class="nav-link" href="manage_cetagory.php">Manage Cetagory</a>
                                </nav>
                            </div> -->


        </nav>
        <?php include('include/script.php'); 
         ?>
            <script src="js/scripts.js"></script> 
    </body>
</html>