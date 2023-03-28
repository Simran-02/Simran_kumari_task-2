<?php 
include "Dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>details</title>
</head>
<body>
    <div class="contailner m-auto">
    <table class="table table-striped table-inverse table-responsive m-auto">
      <thead class="thead-inverse">
        <tr>
          <th>S.I</th>
          <th>UserId</th>
          <th>UserName</th>
          <th>Email</th>
          <th>User_Address</th>
          <th>user_mobile</th>
          <th>booking_id</th>
          <th>location_id</th>
          <th>Time</th>
          <th>Date</th>
          <th>Edit</th>
          <th>Delete</th>
          




           
        </tr>
        </thead>
        <!-- FETCH DATA FORM TABLE -->
        <?php 
          $si=1;
    $select="select* from drone_details";
    $run=mysqli_query($con,$select);
    $row=mysqli_num_rows($run);
    while($fetch=mysqli_fetch_assoc($run)){
      
        ?>
         <tbody>
          <tr scope="row"> 
            <td><?php echo $si; ?></td>           
            <td><?php echo $fetch['user_id']; ?></td>
            <td><?php echo  $fetch['user_name'];?></td>
            <td><?php echo $fetch['user_email']; ?></td>
            <td><?php echo $fetch['user_address']; ?></td>
            <td><?php echo $fetch['user_contact']; ?></td>
            <td><?php echo $fetch['booking_id']; ?></td>
            <td><?php echo $fetch['location_id']; ?></td>
            <td><?php echo $fetch['drone_short_id']; ?></td>
            <td><?php echo $fetch['drone_name']; ?></td>
            <td><?php echo $fetch['created_time']; ?></td>
            <td><?php echo $fetch['created_date']; ?></td>

            <?php $name=$fetch['user_id'];

             ?>


            <td> <a href=<?php echo "'edit.php?operation=edit&id=$name'" ?> ><button class="btn btn-primary">Edit</button> </a> </td>
<?php 

if(isset($_GET['operation'])){
    if(($_GET['operation'])=='delete'){
       $id=$_GET['id'];
       $delete="delete  from drone_details where  user_id='$id'";
$run_del=mysqli_query($con,$delete);
if($run_del){
    echo" <script> alert('data deleted')</script>";
    echo "<script> window.location.href='details.php';  
    </script>"; 
}else{
    echo" <script> alert('data  not deleted')</script>";

}

}}
?>
           
            <td><a href=<?php echo " '?operation=delete&id=$name' ";  ?> ><button class="btn btn-danger">Delete</button> </a></td>
          </tr>
        </tbody>
      <?php }
      ?>
    </table>
    </div>
</body>
</html>