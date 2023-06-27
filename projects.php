<!DOCTYPE html>
<html>
    <head>
        <title>FELIX MPHEPO</title>
        <link rel="stylesheet" href="css.css">

    </head>
            <header>
                <nav>
                    <a href="index.php" style="color: white;">HOME</a>
                    <a href="skills.php"   style="color: white;">SKILLS</a>
                    <a href="contacts.php" style="color: white;">CONTACT</a>
            <H3 style="margin: 1%;">FELIX MPHEPO</H3>
        </nav>
            </header>
            <body>
                <input type="text" id="searchInput" placeholder="Search...">
                <button id="searchButton">Search</button>
                
                <section id="contentSection">
                
                  <p>
                BANKING SYSTEM
                <div class="progress-bar" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    <div class="progress">60%</div>
                  </div>
                    <br><img src="images/bank.webp" width="400px"><br>
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
    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["banking_system"]. "<br>";
          
        }
    } else {
        echo "0 results";
    }

    ?>

                  </p>
                  <p>
                    FUALTS DATABASE
                    <div class="progress-bar">
                        <div class="progress">60%</div>
                      </div>
                    <br><img src="images/faults.png" width="400px"><br>
    <?php              
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["fualts_db"]. "<br>";
          
        }
    } else {
        echo "0 results";
    }

    ?>
                  </p>
                  <p>
                    SCHOOL MANAGEMENT SYSTEM
                    <div class="progress-bar">
                        <div class="progress">60%</div>
                      </div>

                    <br><img src="images/school.png" width="400px"><br>
    <?php      
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["school_management"]. "<br>";
          
        }
    } else {
        echo "0 results";
    }

    ?>

                  </p>
                </section>
                



    <script src="script.js"></script>
    </body>

</html>