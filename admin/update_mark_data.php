<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
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
    
    $sql="UPDATE `user_mark` SET  `u_tamil1` = '$tamil1', `u_english1` = '$english1', `u_maths1` = '$maths1', `u_physics1` = '$physics1', `u_chemestry1` = '$chemestry1', `u_tamil2` = '$tamil2', `u_english2` = '$english2', `u_maths2` = '$maths2', `u_physics2` = '$physics2', `u_chemestry` = '$chemestry2' WHERE `u_rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>