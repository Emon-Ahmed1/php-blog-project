<?php


class blogproject
{

    private $conn;


    public function __construct()
    {
        //database info

        $dbhost = 'localhost';
        $UserName = 'root';
        $Userpass = '';
        $dbname = 'blogproject';

        $this->conn = mysqli_connect($dbhost, $UserName, $Userpass, $dbname);
        if (!$this->conn) {
            die('Database Connect failed');
        }


    }
    //login system

    public function admin_login($data)
    {
        $admin_email = $data['admin_email'];
        $admin_pass = md5($data['admin_pass']);

        $query = " SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";
        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);
            if ($admin_info) {
                header('location:dashboard.php');
                $admin_data = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION['adminId'] = $admin_data['id'];
                $_SESSION['adminName'] = $admin_data['admin_name'];
            }

        }

    }
    //logout system
    public function adminlogout()
    {
        unset($_SESSION['adminId']);
        unset($_SESSION['adminName']);
        header('location:index.php');
    }

    //Added Cetagory
    public function add_cetagory($data)
    {
        $cetagory_name = $data['Cetagory_name'];
        $cetagory_description = $data['cetagory_description'];

        $query = " INSERT INTO `category`(ceta_name, ceta_des) VALUE ('$cetagory_name', '$cetagory_description')";
        if (mysqli_query($this->conn, $query)) {
            return ('Cetagory Added Succesfully');
        }
    }

    //display cetagory

    public function display_cetagory()
    {
        $query = "SELECT * FROM `category`";
        if (mysqli_query($this->conn, $query)) {
            $display_cetagory = mysqli_query($this->conn, $query);
            return ($display_cetagory);

        }
    }
    //edit cetagory
    public function edit_cetagory($id)
    {
        $query = "SELECT * FROM `category` WHERE ceta_id=$id";
        if (mysqli_query($this->conn, $query)) {
            $edit_ceta = mysqli_query($this->conn, $query);
            $return_ceta = mysqli_fetch_assoc($edit_ceta);
            return ($return_ceta);
        }

    }
    //Update Cetagory
    public function update_cetagory($cetagoryData)
    {
        $ceta_name = $cetagoryData['ceta_name'];
        $ceta_des = $cetagoryData['ceta_des'];
        $ceta_id = $cetagoryData['ceta_id'];

        $query = "UPDATE `category` SET ceta_name = '$ceta_name', ceta_des='$ceta_des' WHERE ceta_id=$ceta_id ";

        if (mysqli_query($this->conn, $query)) {
            header('location: ../manage_cetagory.php');
            return "Imformation Update Succesfully";
            //include_once('view/view_manage_ceta.php');
           
        }
    }
    //delete cetagory
    public function delete_cetagory($ceta_id){
        $query = " DELETE FROM `category` WHERE ceta_id=$ceta_id ";
        if (mysqli_query($this->conn, $query)) {
            return ('Deleted Succesfully');
        }
    }
    //add post 
    public function add_post($post_data){
        $post_title = $post_data['post_title'];
        $post_content= $post_data['post_content'];
        $post_thumbnali= $_FILES['post_thumbnali']['name'];
        $post_thumbnali_tmp = $_FILES['post_thumbnali']['tmp_name'];
        $post_category = $post_data['post_category'];
        $post_summery = $post_data['post_summery'];
        $post_tag = $post_data['post_tag'];
        $post_status = $post_data['post_status'];

        $query = "INSERT INTO `blog_post` (post_title, post_content, post_thumbnail, post_category, post_author,post_date, post_comment_count, post_summery, post_tag, post_status) VALUES ( '$post_title','$post_content','$post_thumbnali', $post_category,'Admin', now(), 3, '$post_summery', '$post_tag', $post_status)";
      
        if(mysqli_query($this->conn, $query)){
            move_uploaded_file($post_thumbnali_tmp,'../upload/'.$post_thumbnali);
            return('Your Post Published Successfuly');

        }
    }
    //display post
    public function display_post(){
        $query = "SELECT * FROM `post_with_category`";
        if(mysqli_query($this->conn, $query)){
            $display_post = mysqli_query($this->conn, $query);
            return($display_post);
        }
    }
    //display post by public
    public function display_post_by_public(){
        $query = "SELECT * FROM `post_with_category` WHERE post_status=1";
        if(mysqli_query($this->conn, $query)){
            $display_post_by_public = mysqli_query($this->conn, $query);
            return($display_post_by_public);
        }
    }
    //post image edit
    public function edit_post_img($data){
        $img_id= $data['change_img_id'];
        $thumbnali_img= $_FILES['post_thumbnail_img']['name'];
        $tmp_thumbnali_img= $_FILES['post_thumbnail_img']['tmp_name'];

        $query = "UPDATE `blog_post` SET post_thumbnail='$thumbnali_img' WHERE post_id=$img_id";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($tmp_thumbnali_img,'../upload/'.$thumbnali_img);
            return 'Thumbnail Change Successful';
        }

    }


    //edit_post
    public function edit_post($id){
        $query = "SELECT * FROM `post_with_category` WHERE post_id=$id";
        if(mysqli_query($this->conn, $query)){
            $edit_data = mysqli_query($this->conn, $query);
            $return_post_data = mysqli_fetch_assoc($edit_data);
            return $return_post_data;
        }

    } 
    //Update Post
    public function update_post($data){
        $id = $data['change_post_id'];
        $change_title = $data['change_title'];
        $change_content = $data['change_content'];
        $change_summery = $data['change_post_summery'];
        $change_tag = $data['change_post_tag'];

        $query=" UPDATE `blog_post` SET post_title='$change_title',
        post_content='$change_content', post_summery='$change_summery', post_tag='$change_tag' WHERE post_id=$id ";
        
        if(mysqli_query($this->conn, $query)){
            return 'Update post Successfuly';
        }
    }
    //change post status
    public function change_status($data){
        $status_id =$data['status_id'];
        $change_post_status =$data['change_post_status'];

        $query = " UPDATE `blog_post` SET post_status=$change_post_status WHERE post_id=$status_id";
        if(mysqli_query($this->conn, $query)){
            return "Status Update Successful";
        }


    }
    public function delete_post($id){
        $query = " DELETE FROM `blog_post` WHERE post_id=$id ";
        if (mysqli_query($this->conn, $query)) {
            return ('Deleted Succesfully');
        }
    }








}






?>