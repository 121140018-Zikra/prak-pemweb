<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";
    $conn->query($sql);

    header("Location: index.php");
}
?>

<html>
<body>
    <form method="post" action="">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
