<?php
session_start();

include("../common/db.php");

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("insert into `users`
    (`id`,`username`,`email`,`password`,`address`)
    values
    (NULL,'$username','$email','$password','$address');
    ");

    $result = $user->execute();

    if ($result) {

        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
        header("location: /discuss");
    } else {
        echo "new user not registered";
    }
} else if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $query = "select * from users where email='$email' and password='$password' ";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {

        foreach ($result as $row) {
            $username = $row['username'];
        }
        $_SESSION["user"] = ["username" => $username, "email" => $email];
        header("location: /discuss");
    } else {
        echo "new user not registered";
    }
} else if (isset($_GET['logout'])) {
    session_unset();
    header("location: /discuss");
}


?>