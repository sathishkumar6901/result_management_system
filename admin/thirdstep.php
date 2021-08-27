<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>First Step- Student Details</h2>
       
      </div>
    </header>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $tamil1=$_POST['tamil1'];
    $english1=$_POST['english1'];
    $maths1=$_POST['maths1'];
    $physics1=$_POST['physics1'];
    $chemestry1=$_POST['chemestry1'];
    
    $tamil2=$_POST['tamil2'];
    $english2=$_POST['english2'];
    $maths2=$_POST['maths2'];
    $physics2=$_POST['physics2'];
    $chemestry2=$_POST['chemestry2'];
    
    $sql="INSERT INTO `user_mark`(`u_rollno`,`u_class`,`u_tamil1`, `u_english1`, `u_maths1`, `u_physics1`, `u_chemestry1`, `u_tamil2`, `u_english2`, `u_maths2`, `u_physics2`, `u_chemestry`) VALUES ('$rollno','$class','$tamil1','$english1','$maths1','$physics1','$chemestry1','$tamil2','$english2','$maths2','$physics2','$chemestry2')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('admindash.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>