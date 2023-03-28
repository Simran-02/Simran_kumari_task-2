<?php 
include "Dbconnect.php";
$select="select* from drone_details";
$run=mysqli_query($con,$select);
$row=mysqli_num_rows($run);
$fetch=mysqli_fetch_assoc($run);
     $user_name=$fetch["user_name"];
    $user_email=$fetch["user_email"];
    $user_address=$fetch["user_address"];
    $user_mobile=$fetch["user_contact"];
    $booking_id=$fetch["booking_id"];
    $location_id=$fetch["location_id"];
    $drone_short_id=$fetch["drone_short_id"];
    $drone_name=$fetch["drone_name"];
    $time=$fetch["created_time"];
    $date=$fetch["created_date"];

    if(isset($_GET['operation'])){
        if(($_GET['operation'])=='edit'){
           $id=$_GET['id'];

    if(isset($_POST['submit']))
    {
        $user_name=$_POST["username"];
        $user_email=$_POST["user_email"];
        $user_address=$_POST["user_address"];
        $user_mobile=$_POST["user_mobile"];
        $booking_id=$_POST["booking_id"];
        $location_id=$_POST["location_id"];
        $drone_short_id=$_POST["drone_short_id"];
        $drone_name=$_POST["drone_name"];
        $time=$_POST["time"];
        $date=$_POST["date"];
        echo $edit="update drone_details SET user_name='$user_name',user_email='$user_email',user_address='$user_address'
        ,user_contact='$user_mobile',booking_id='$booking_id',location_id='$location_id',drone_short_id='$drone_short_id'
        ,drone_name='$drone_name',created_time ='',created_date=NOW() where user_id='$id'";
        $run_query=mysqli_query($con,$edit);
        if($run_query){
            echo" <script> alert('data updated')</script>";
        }else{
            echo" <script> alert('data  not updated')</script>";
    
        }
    }}}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>booking drone</title>
</head>

<body>

    <div class="container_fluid m-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-item-center justify-content-center ">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST" enctype="multipart/form-data" class="m-auto">
                    <div class="row">
                        <div class="col-md6">
                            <div class="form-outline mb-4">

                                <label for="user_username" class="form-label">User Name</label>
                                <input type="text" id="user_username" name="username" autocomplete="off"
                                    placeholder="Enter your username" class="form-control" required="required" value="<?php echo $user_name; ?>">

                            </div>

                        </div>
                        <div class="col-md6">
                            <div class="form-outline mx-3 mb-4 ml-3">

                                <label for="user_email" class="form-label">User Email</label>
                                <input type="email" id="user_email" required="required" name="user_email"
                                    autocomplete="off" placeholder="Enter your user email" class="form-control" value="<?php echo $user_email; ?>">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md6">
                            <div class="form-outline  mx-3 mb-4 ml-3">

                                <label for="user_address" class="form-label">User Address</label>
                                <input type="text" id="user_adddress" required="required" name="user_address"
                                    autocomplete="off" placeholder="Enter your address" class="form-control" value="<?php echo $user_address;?>">

                            </div>
                        </div>
                        <div class="col-md6">

                            <div class="form-outline mb-1">

                                <label for="user_mobile" class="form-label">Contact</label>
                                <input type="phone" id="user_mobile" required="required" name="user_mobile"
                                    autocomplete="off" placeholder="Enter your mobile" class="form-control" value="<?php echo $user_mobile;?>" >

                            </div>
                        </div>

                        <div class="Drone-information">
                            <h4>Drone_Details</h4>
                            <div class="row">
                                <div class="col-md6">

                                    <div class="form-outline mb-4">

                                        <label for="user_mobile" class="form-label">Booking Id</label>
                                        <input type="phone" id="user_mobile" required="required" name="booking_id"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control" value="<?php echo $booking_id;?>" >

                                    </div>
                                </div>
                                <div class="col-md6 ml-5">
                                    <label for="user_mobile" class="form-label">Location Id</label>

                                    <select class="form-select d-flex" aria-label="Default select example" name="location_id" value="<?php echo  $location_id;?>">

                                        <option selected >Open this select menu</option>
                                        <option value='1'>Location 1</option>
                                        <option value='2'>Location 2</option>
                                        <option value='3'>Location 3</option>
                                    </select>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md6 ">
                                    <label for="user_drone" class="form-label">Drone Short_Id</label>

                                    <select class="form-select d-flex" aria-label="Default select example"  value='<?php echo  $drone_short_id ?>'
                                        name="drone_short_id"> <br>

                                        <option selected >Open this select menu</option>
                                        <option value="1">Drone 1</option>
                                        <option value="2">Drone 2</option>
                                        <option value="3">Drone 3</option>
                                    </select>
                                </div>
                                <div class="col-md6">

                                    <div class="form-outline mb-4 ml-5">

                                        <label for="user_mobile" class="form-label">Drone Name</label>
                                        <input type="phone" id="user_mobile" required="required" name="drone_name"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control"  value="<?php echo $drone_name?>">

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md6">

                                    <div class="form-outline mb-4">

                                        <label for="user_mobile" class="form-label">Created Time</label>
                                        <input type="phone" id="user_mobile" required="required" name="time"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control" value="<?php echo $time?>" >

                                    </div>
                                </div>
                                <div class="col-md6">

                                    <div class="form-outline mb-4 ml-4">

                                        <label for="user_mobile" class="form-label"> Created Date</label>
                                        <input type="phone" id="user_mobile" required="required" name="date"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control" value="<?php echo $date?>">

                                    </div>
                                </div>

                            </div>
                            <input type="submit" class="button bg-info" name="submit" placeholder="submit">
                          <!-- <div class="btn button bg-success m-auto text-light" type="submit" name="submit">submit</div> -->

                        </div>
                    </div>
            </div>






            </form>
            <button><a href="details.php">details</a></button>


        </div>
        

</body>

</html>