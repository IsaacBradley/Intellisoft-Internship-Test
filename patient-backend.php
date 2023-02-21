<?php
session_start();
$con = mysqli_connect("localhost","root","","internshipract");

if(isset($_POST['save_radio']))
{
    $lastname  = $_POST['lastname'];
	$firstname  = $_POST['firstname'];
	$middlename  = $_POST['middlename'];
    $gender  = $_POST['gender'];
	$race  = $_POST['race'];
	$latina  = $_POST['latina'];
    $age  = $_POST['age'];
	$dob  = $_POST['dob'];
	$facilityname  = $_POST['facilityname'];
	$city  = $_POST['city'];
	$county  = $_POST['county'];
	$state  = $_POST['state'];
	$phonenumber  = $_POST['phonenumber'];
	$street  = $_POST['street'];

    $query = "INSERT INTO demo (lastname,firstname,middlename,gender,race,latina,
	age,dob, facilityname, city, county, state, phonenumber, street) 
	VALUES ('$lastname','$firstname','$middlename','$gender','$race','$latina', '$age',
	'$dob','$facilityname','$city','$county','$state','$phonenumber','$street')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: patient-frontend.php");
    }
    else{
        $_SESSION['status'] = "Not Inserted";
        header("Location: patient-frontend.php");
    }
}
?>