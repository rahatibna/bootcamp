<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$birthday = $_POST['birthday'];
$picture = $_POST['picture'];
$school = $_POST['school'];
$region = $_POST['region'];
$country = $_POST['country'];

if (isset($_POST['catagory1'])) {
    $catagory1 = $_POST['catagory1'];
} else {
    $catagory1 = 0;
}
if (isset($_POST['catagory2'])) {
    $catagory2 = $_POST['catagory2'];
} else {
    $catagory2 = 0;
}
if (isset($_POST['catagory3'])) {
    $catagory3 = $_POST['catagory3'];
} else {
    $catagory3 = 0;
}
if (isset($_POST['catagory4'])) {
    $catagory4 = $_POST['catagory4'];
} else {
    $catagory4 = 0;
}
if (isset($_POST['catagory5'])) {
    $catagory5 = $_POST['catagory5'];
} else {
    $catagory5 = 0;
}

$select1 = 0;
$select2 = 0;
$select3 = 0;
$select4 = 0;
$select5 = 0;

$conn = new mysqli('localhost', 'root', '', 'completion2021');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt =  $conn->prepare("insert into student(name , email , gender , class , birthday , school , region , country , catagory1 , catagory2 , catagory3 , catagory4 , catagory5 , select1 , select2 , select3 , select4 , select5)  values( ? , ? , ? , ?, ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? ) ");

    $stmt->bind_param("ssssssssiiiiiiiiii", $name, $email, $gender, $class, $birthday, $school, $region, $country, $catagory1, $catagory2, $catagory3, $catagory4, $catagory5, $select1, $select2, $select3, $select4, $select5);

    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Succesfully Registered!</title>
</head>

<body>

    <div class="jumbotron">
  <h1 class="display-4">Succesfully Registered</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="index.html" role="button">Back to Home</a>

</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>