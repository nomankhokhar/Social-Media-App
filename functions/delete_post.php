<?php
$con  = mysqli_connect("localhost","root","","mysocial") or 
die("No Connection"); 

if(isset($_GET['post_id']))
{
    $post_id = $_GET['post_id'];

    $del_post = "delete from posts where post_id = '$post_id'";
    $run_del = mysqli_query($con,$del_post);

    if($run_del){
        echo "<script>alert('A Post Have been Deleted!')</script>";
        echo "<script>window.open('../home.php','_self')</script>";
    }
}
?>