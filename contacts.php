<!DOCTYPE html>
<html>
    <head>
        <title>FELIX MPHEPO</title>
        <link rel="stylesheet" href="css.css">

    </head>
            <header>
                <nav>
                    <a href="index.php" style="color: white;">HOME</a>
                    <a href="projects.php" style="color: white;">PROJECTS</a>
                    <a href="skills.php"   style="color: white;">SKILLS</a>
                   
            <H3 style="margin: 1%;">FELIX MPHEPO</H3>
        </nav>
            </header>
    <body>
    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Phone:" . $row["phone"]. "<br>";
            echo "Email:" . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>

 </body>

</html>