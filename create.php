<?php
$connection = mysqli_connect('127.0.0.1',  'root', '', 'task');

if (!$connection) {
    echo 'Failed to connect to DB';
    echo mysqli_connect_error();
    exit();
}

if(isset($_POST['sbm'])){
    $task = $_POST['task'];
    $deadline = $_POST['deadline'];

//    if (strlen($task) <= 2) {
//        header('location: index.php?page_layout=create');
//        exit("Enter goal, which len more than 2");
//    }


    $sql="INSERT INTO `task`(`task`, `deadline`) VALUES ('$task','$deadline')";
    mysqli_query($connection, $sql);

    header('location: index.php?page_layout=list');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Create Goal</title>
</head>
<body>


<div id="myDIV" class="header">
    <h2>S C H E D U L E</h2>
    <br>

    <form method="post" enctype="multipart/form-data">

        <input type="text" name="task" id="task" placeholder="Enter the goal" required>

        <input type="text" name="deadline" id="deadline" placeholder="Enter the deadline" required>

        <button name="sbm" class="addBtn" type="submit">Add</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="script/ajax.js"></script>
</body>
</html>