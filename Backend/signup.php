<?php
    session_start();

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["pass"];

// Connect to database
$dbhost = "127.0.0.1";
$dbname = "Mario_db";
$dbuser = "root";
$dbpass = "";
$db = null;
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
    print("Error: " . $e->getMessage() . "<br/>");
    die();
}


// Insert user into database
$check_query = "SELECT * FROM users WHERE username='$username'";
$check_result = $db->query($check_query);
if ($check_result->rowCount() > 0) {
    // Username already exists, prompt user to enter a different one
    $_SESSION["signup_status"] = 0;
    // refresh page
    header("location:../pages/signup.php");
} else {
    // Insert user into database
    $sql = "INSERT INTO customer (first_name, last_name, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
    // amal edits ignore
//     SET @user_id = LAST_INSERT_ID();

// Insert a new record into the user roles table for the new user
// INSERT INTO user_roles (user_id, role)
// VALUES (@user_id, 'user');
    // retrieve form data
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirmPassword = $_POST['confirmPassword'];
    $captcha = $_POST['cbcaptcha'];

    // Connect to database
    $dbhost = "127.0.0.1";
    $dbname = "Mario_db";
    $dbuser = "root";
    $dbpass = "";
    $db = null;
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    } catch (PDOException $e) {
        print("Error: " . $e->getMessage() . "<br/>");
        die();
    }
    
    
    // Insert user into database
    $check_query = "SELECT * FROM customer WHERE username='$username'";
    $check_result = $db->query($check_query);
    if ($check_result->rowCount() > 0) {
        // Username already exists, prompt user to enter a different one
        $_SESSION["signup_status"] = 0;
        // refresh page
        header("location:../pages/signup.php");
    } else {
        // Insert user into database
        $sql = "INSERT INTO customer (first_name, last_name, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
    
        try {
            $res = $db->exec($sql);
            // signup was successful
            $_SESSION["signup_status"] = 1;
            // redirect to login
            header("location:../index.php");
        } catch (Exception $e) {
            // signup failed
            $_SESSION["signup_status"] = 2;
            // refresh page
            header("location:../pages/signup.php");
        }
    }
?>