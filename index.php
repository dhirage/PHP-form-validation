<?php
$insert = false;

if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "tour";

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection to the database failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `tour` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP practice Website</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <img class="bg" src="bg.jpeg" alt="university image" />
    <div class="container">
        <h3>Welcome to CAB College Touring Trip Form</h3>
        <p>
            Enter your details and submit this form to confirm your participation in
            the trip.
        </p>
        <?php
        if ($insert == true) {
            echo "<p class='submitMsg' style='color: green; font-weight: bold;'>
            Thanks for submitting your form. We are happy to see you joining us for
            the CAB College Touring Trip.</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name" />
            <input type="number" name="age" id="age" placeholder="Enter your Age" required />
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender" required />
            <input type="text" name="email" id="email" placeholder="Enter your Email" required />
            <input type="number" name="phone" id="phone" placeholder="Enter your Phone Number" required />
            <textarea name="desc" id="desc" cols="20" rows="10" placeholder="Enter Your quick response"></textarea>
            <div class="button">
                <button class="btn" type="submit">Submit</button>
                <button class="btn" type="reset">Reset</button>
            </div>
        </form>
    </div>

    <script src="index.js"></script>
</body>

</html>