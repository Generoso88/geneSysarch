<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "gene"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $idno = $_POST["idno"];
    $year_level = $_POST["year_level"];

    $sql = "INSERT INTO user (firstname, middlename, lastname, age, gender, contact, email, address, password, idno, year_level) 
        VALUES ('$firstname', '$middlename', '$lastname', '$age', '$gender', '$contact', '$email', '$address', '$password', '$idno', '$year_level')";

     if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful registration
        header("Location: http://localhost/Activity/Activity2.php");
        exit(); // Ensure that script stops executing after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
