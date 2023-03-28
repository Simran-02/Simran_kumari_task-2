<?php 
// including database file
include "Dbconnect.php";
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
//    insert data into data base
    $insert="insert into drone_details(user_name,user_email,user_address,user_contact,booking_id,
    location_id,drone_short_id,drone_name,created_time,created_date) value('$user_name','$user_email',
    '$user_address','$user_mobile','$booking_id','$location_id','$drone_short_id','$drone_name', '''',NOW())";
    $run_query=mysqli_query($con,$insert) ;
    if($run_query){
        echo" <script> alert('data inserted')</script>";
    }else{
        echo" <script> alert('data  not inserted')</script>";

    }}

    
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
        <h2 class="text-center">Register for drone</h2>
        <div class="row d-flex align-item-center justify-content-center ">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST" enctype="multipart/form-data" class="m-auto">
                    <div class="row">
                        <div class="col-md6">
                            <div class="form-outline mb-4">

                                <label for="user_username" class="form-label">User Name</label>
                                <input type="text" id="user_username" name="username" autocomplete="off"
                                    placeholder="Enter your username" class="form-control" required="required">

                            </div>

                        </div>
                        <div class="col-md6">
                            <div class="form-outline mx-3 mb-4 ml-3">

                                <label for="user_email" class="form-label">User Email</label>
                                <input type="email" id="user_email" required="required" name="user_email"
                                    autocomplete="off" placeholder="Enter your user email" class="form-control">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md6">
                            <div class="form-outline mb-4 ">

                                <label for="user_address" class="form-label">User Address</label>
                                <input type="text" id="user_adddress" required="required" name="user_address"
                                    autocomplete="off" placeholder="Enter your address" class="form-control">

                            </div>
                        </div>
                        <div class="col-md6">

                            <div class="form-outline mx-3 mb-4 ml-3">

                                <label for="user_mobile" class="form-label">Contact</label>
                                <input type="phone" id="user_mobile" required="required" name="user_mobile"
                                    autocomplete="off" placeholder="Enter your mobile" class="form-control">

                            </div>
                        </div>

                        <div class="Drone-information">
                            <h4>Drone_Details</h4>
                            <div class="row">
                                <div class="col-md6">

                                    <div class="form-outline mb-4">

                                        <label for="user_mobile" class="form-label">Booking Id</label>
                                        <input type="phone" id="user_mobile" required="required" name="booking_id"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md6 ml-5">
                                    <label for="user_mobile" class="form-label">Location Id</label>

                                    <select class="form-select d-flex" aria-label="Default select example" name="location_id">

                                        <option selected>Open this select menu</option>
                                        <option value="1">Location 1</option>
                                        <option value="2">Location 2</option>
                                        <option value="3">Location 3</option>
                                    </select>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md6 ">
                                    <label for="user_drone" class="form-label">Drone Short_Id</label>

                                    <select class="form-select d-flex" aria-label="Default select example"
                                        name="drone_short_id"> <br>

                                        <option selected>Open this select menu</option>
                                        <option value="1">Drone 1</option>
                                        <option value="2">Drone 2</option>
                                        <option value="3">Drone 3</option>
                                    </select>
                                </div>
                                <div class="col-md6">

                                    <div class="form-outline mb-4 ml-5">

                                        <label for="user_mobile" class="form-label">Drone Name</label>
                                        <input type="phone" id="user_mobile" required="required" name="drone_name"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control">

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md6">

                                    <div class="form-outline mb-4">

                                        <label for="user_mobile" class="form-label">Created Time</label>
                                        <input type="phone" id="user_mobile" required="required" name="time"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md6">

                                    <div class="form-outline mb-4 ml-4">

                                        <label for="user_mobile" class="form-label"> Created Date</label>
                                        <input type="phone" id="user_mobile" required="required" name="date"
                                            autocomplete="off" placeholder="Enter your mobile" class="form-control">

                                    </div>
                                </div>

                            </div>
                            <input type="submit" class="button bg-info" name="submit" placeholder="submit">
                            <button class="ml-8"><a href="details.php">details</a></button>

                        </div>
                    </div>
            </div>






            </form>


        </div>

</body>

</html>