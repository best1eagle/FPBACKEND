<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css"> 
    <title>manage user</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.html">Ahmed dahalan</a></p>
        </div>

        <div class="nav-links">
            <div class="dropdown">
                <a class="dropdown-text" href="edit.php">EDIT</a>
                <div class="dropdown-content">
                    <a href="home.html">Profile</a>
                    <a href="includes/logout.inc.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dsn = "mysql:host=localhost;dbname=database_name";
            $servername = "localhost";
            $username="root";
            $password = "";
            $dbname="allusers";

            try {
                $pdo = new PDO($servername,$username, $password,$dbname);
                $query = "SELECT * FROM users";
                $stmt = $pdo->query($query);

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$row['user_id']."</td>";
                    echo "<td>".$row['user_name']."</td>";
                    echo "<td>".$row['user_email']."</td>";
                    echo "<td>".$row['user_password']."</td>";
                    echo "<td>".$row['user_role']."</td>";
                    echo "<td>".$row['created_at']."</td>";
                    echo "</tr>";
                }
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            $pdo = null;
            ?>
        </tbody>
    </table>
</body>
</html>
