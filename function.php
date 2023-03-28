<?php 

function insert_data(){
    include "./Dbconnection.php";
if(isset($_POST['submit'])){
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

    $insert="insert into drone_details(user_name,user_email,user_address,user_contact,booking_id,
    location_id,drone_short_id,drone_name,created_time,created_date) value('$user_name','$user_email',
    '$user_address','$user_mobile','$booking_id','$location_id','$drone_short_id','$drone_name','',NOW())";
    $run_query=mysqli_query($con,$insert);
    if($run_query){
        echo" <script> alert('data inserted')</script>";
    }else{
        echo" <script> alert('data  not inserted')</script>";

    }


    

    

    


}

}


?>