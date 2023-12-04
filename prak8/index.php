<?php
include 'connect.php';

$result = $conn->query("SELECT * FROM users");
?>

<html>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['age']}</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>

<!-- 
    Nama  : Zikra Daffa Saputra
    NIM   : 121140018
    Kelas : RC
-->