<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
	?>
	<title>Edit | Account Setting</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
<div class="row">
	<div class="col-sm-2">
    </div>

    <div class="col-sm-8">
        <form action="" method="POST" enctype="multipart/form-data">
             <table class="table table-bordered table_hover">
                <tr align="center">
                    <td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
                </tr>

                <tr>
                    <td style="font-weight:bold;">Change Your First Name</td>
                    <td>
                        <input class="form-control" type="text" name="f_name" require value="<?php echo $first_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold;">Change Your Last Name</td>
                    <td>
                        <input class="form-control" type="text" name="l_name" require value="<?php echo $last_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold;">Change Your User Name</td>
                    <td>
                        <input class="form-control" type="text" name="u_name" require value="<?php echo $user_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold;">Description </td>
                    <td>
                        <input class="form-control" type="text" name="describe_user" require value="<?php echo $describe_user; ?>">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold;">RelationShip Status</td>
                    <td>
                       <select class="form-control" name="Relationship" id="">
                          <option><?php echo $Relationship_status; ?></option>
                          <option>Single</option>
                          <option>Married</option>
                          <option>Find SomeOne</option>
                          <option>Separated</option>
                       </select>
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bold;"> Password </td>
                    <td>
                        <input class="form-control" type="password" name="u_pass" id="mupass" require value="<?php echo $user_pass; ?>">
                        <input type="checkbox" onclick="show_password()"><strong>Show password</strong>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold;"> Email </td>
                    <td>
                        <input class="form-control" type="email" name="u_email" require value="<?php echo $user_email; ?>">
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bold;">Country You Belong</td>
                    <td>
                       <select class="form-control" name="u_country">
                          <option><?php echo $user_country; ?></option>
                          <option>Pakistan</option>
                          <option>India</option>
                          <option>BanglaDesh</option>
                          <option>UK</option>
                       </select>
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bold;">Gender</td>
                    <td>
                       <select class="form-control" name="u_gender">
                          <option><?php echo $user_gender; ?></option>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Others</option>
                       </select>
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bold;"> Birthday </td>
                    <td>
                        <input class="form-control input-md" type="date" name="u_birthday" require value="<?php echo $user_birthday; ?>">
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bold;"> Forgotten Password Query</td>
                    <td>



                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Turn On</button>


                            <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                            

                                <div class="modal-body">
                                    <form action="recovery.php?id=<?php echo $user_id ?>" method="POST" id="f">
                                                                        <strong>Whats is your School Best Friend Name</strong>
                                                                        <textarea class="form-control" cols="80" rows="4" name="content" placeholder="Someone"></textarea><br>
                                                                        <input type="submit" name="sub" value="Submit" style="width:100px;"><br><br>
                                                                        <pre>Answer the above question we will ask this question if you forgot your <br> password </pre>
                                                                    </form>
                                </div>
                               
                                </div>
                            </div> 
                            </div>
                
                     </td>
                </tr>



                <tr align="center">
                    <td colspan="6">
                    <input type="submit" name="update" class="btn btn-info" style="width:250px;" value="Update">
                    </td>
                </tr>
             </table>
        </form>
        <?php
           if(isset($_POST['sub'])){
               $bfn = htmlentities($_POST['content']);

               if($bfn == ''){
                    echo "<script>alert('Please enter something')</script>";
                    echo "<script>window.open('edit_profile.php?u_id', '_self')</script>";
                    exit();
                }
                else{
                    $update = "update users set recovery_account='$bfn' where user_id = '$user_id'";

                    $run = mysqli_query($con, $update);

                    if($run){
                        echo "<script> alert('Data is Updated!')</script>";
                        echo "<script>window.open('edit_profile.php?u_id', '_self')</script>";
                    }
                    else{
                        echo "<script> alert('Error while updating the data!')</script>";
                        echo "<script>window.open('edit_profile.php?u_id', '_self')</script>";
                    }
                }
           }
        ?>
    </div>
</div>

<div class="col-sm-2"></div>
</body>
</html>


<?php
if(isset($_POST['update'])){
   $f_name = htmlentities($_POST['f_name']);
   $l_name = htmlentities($_POST['l_name']);
   $u_name = htmlentities($_POST['u_name']);
   $describe_user = htmlentities($_POST['describe_user']);
   $Relationship_status = htmlentities($_POST['Relationship']);
   $u_pass = htmlentities($_POST['u_pass']);
   $u_email = htmlentities($_POST['u_email']);
   $u_country = htmlentities($_POST['u_country']);
   $u_gender = htmlentities($_POST['u_gender']);
   $u_birthday = htmlentities($_POST['u_birthday']);


   $update = "update users set f_name = '$f_name', l_name = '$l_name', user_name = '$u_name', describe_user='$describe_user', 
   relationship='$Relationship_status',  user_pass = '$u_pass', user_email='$u_email', user_country = '$u_country', user_gender='$u_gender', 
   user_birthday = '$u_birthday' where user_id = '$user_id'";

   $run = mysqli_query($con, $update);

   if($run){
       echo "<script> alert('Your profile is updated Successfully!')</script>";
       echo "<script>window.open('edit_profile.php?u_id', '_self')</script>";
   }

}
?>
