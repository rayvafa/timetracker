<?php
/**
 * Created by IntelliJ IDEA.
 * User: ray
 * Date: 10/01/2014
 * Time: 3:19 PM
 */

$entry_date = $_POST["entry_date"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$launch_duration = $_POST["launch_duration"];

// Create connection
$con = mysqli_connect("203.170.85.245", "ramoonph_time", "Iam21777", "ramoonph_time");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "INSERT INTO tbl_work_time_tracker ( date, start_time, end_time, launch_duration) VALUES ( '$entry_date', '$start_time', '$end_time', '$launch_duration')";
echo $sql;
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>My Time Sheet</title>
    <meta name="description" content="Tracking my time">
    <meta name="author" content="Ray Vafa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="list-group">
        <div class="list-group-item alert alert-success">
            1 record added
        </div>
        <a href="add-entry.html" class="list-group-item">Add another entry</a>
        <a href="index.html" class="list-group-item">Home page</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
