<!DOCTYPE html>
<html>
    <head>
        <title>FELIX MPHEPO</title>
        <link rel="stylesheet" href="css.css">

    </head>
            <header>
                <nav>
                    <a href="projects.php" style="color: white;">PROJECTS</a>
                    <a href="skills.php"   style="color: white;">SKILLS</a>
                    <a href="contacts.php" style="color: white;">CONTACT</a>
            <H3 style="margin: 1%;">FELIX MPHEPO</H3>
        </nav>
            </header>
<body>
    <div class="slideshow-container">
       
        <!-- Slides -->
        <div class="mySlides">
          <img src="images/bank.webp" style="height: 300px">
        </div>
    
        <div class="mySlides">
          <img src="images/faults.png" style="height: 300px">
        </div>
    
        <div class="mySlides">
          <img src="images/school.png" style="height: 300px">
        </div>
      </div>

      <h4 id="greeting"></h4>


    <img src="images/12.jpg" width="200px">
    <h4>FELIX MPHEPO</h4>
    <h4>SEISMOLOGY ANALYST</h4>

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
    $sql = "SELECT * FROM intro";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["intro"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>

    <h4>SKILLS, TOOLS AND TECHNOLOGIES</h4>

    <?php
        // SQL query to retrieve data from the database
        $sql = "SELECT * FROM intro";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "" . $row["skills"]. "<br>";
            }
        } else {
            echo "0 results";
        }

      ?>

    <div class="container">
        <h1>Contact Us</h1>
        <form>
          <label for="name">Name<br></label>
          <input type="text" id="name" name="name" required>
    
          <label for="email">Email<br></label>
          <input type="email" id="email" name="email" required>
    
          <label for="message">Message</label>
          <textarea id="message" name="message" required></textarea><br>
    
          <button type="submit">Submit</button>
        </form>
</div>
    <script src="script.js"></script>
</body>
<footer>
    <br>
    <a href="contacts.html">CONTACTS</a>
    <a href="https://web.facebook.com/felix.mphepo.3/" target="_blank">FACEBOOK</a>
    <a href="https://telegram.FELIX">TELEGRAM</a>
    <br>
    <br>
</footer>
</html>