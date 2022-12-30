<?php
require_once 'connection.php';       //making connection to database

// validation condition is request POST or not

if (isset($_POST) and count($_POST) > 0) {
    global $conn;
    $output = array(); //output array for storing response
    $output['status'] = false;

    // backend validations

    if (
        (!isset($_POST['name'])) or
        (empty($_POST['name'])) or
        (!isset($_POST['email'])) or
        (empty($_POST['email'])) or
        (!isset($_POST['phoneNo'])) or
        (empty($_POST['phoneNo']))
    ) {
        $output['response'] = "Fill all information !!!";
        echo json_encode($output), exit;
    } else {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phoneNo = $_POST["phoneNo"];

        // Checking email address already exists or not

        $sameEmail = mysqli_query($conn, "SELECT * FROM user_details WHERE email = '$email'");
        if (mysqli_num_rows($sameEmail) > 0) {
            $output['response'] = "Email already exists";
        } else {

            // Sending data to the database

            $query = "INSERT INTO user_details VALUES('','$name','$email','$phoneNo')";
            mysqli_query($conn, $query);

            $output['status'] = true;
        }
        echo json_encode($output);
    }
}
