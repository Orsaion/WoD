<?php 

require 'resources/wodConfig.php';

// check which button was submitted
if ( isset( $_POST['breeds'] )) {
    $passnum = 1;
}
if ( isset( $_POST['auspice'] )) {
    $passnum = 2;
}
if ( isset( $_POST['furies'] )) {
    $passnum = 3;
}
if ( isset( $_POST['gnawers'] )) {
    $passnum = 4;
}
if ( isset( $_POST['gaia'] )) {
    $passnum = 5;
}
if ( isset( $_POST['fianna'] )) {
    $passnum = 6;
}
if ( isset( $_POST['fenris'] )) {
    $passnum = 7;
}
if ( isset( $_POST['walkers'] )) {
    $passnum = 8;
} 
if ( isset( $_POST['talons'] )) {
    $passnum = 9;
} 
if ( isset( $_POST['lords'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['striders'] )) {
    $passnum = 11;
} 
if ( isset( $_POST['fangs'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['uktena'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['wedigo'] )) {
    $passnum = 14;
}
if ( isset( $_POST['full'] )) {
    $passnum = 25;
}

// Create/Check connection
$conn = new mysqli(DB_SERVER_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// fetch selected data
if ( $passnum == 1 ) { // breed 
    $sql = "SELECT sectext FROM chap2 Where Id BETWEEN 1 AND 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p><p>Error retriving data</p></p>";
    }
} else if ( $passnum == 2 ) { // auspice/tribe
    $sql = "SELECT sectext FROM chap2 Where id BETWEEN 5 AND 11";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // black furies
    $sql = "SELECT sectext FROM chap2 Where id = 12";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // bone gnawers
    $sql = "SELECT sectext FROM chap2 Where = 13";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // children of gaia
    $sql = "SELECT sectext FROM chap2 Where id = 14";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 6 ) { // fianna
    $sql = "SELECT sectext FROM chap2 Where id = 15";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 7 ) { // get of fenris
    $sql = "SELECT sectext FROM chap2 Where id = 16";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // glass walkers
    $sql = "SELECT sectext FROM chap2 Where id = 17";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 9 ) { // red talons
    $sql = "SELECT sectext FROM chap2 Where id = 18";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 10 ) { // shadow lords
    $sql = "SELECT sectext FROM chap2 Where id = 19";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 11 ) { // striders
    $sql = "SELECT sectext FROM chap2 Where id = 20";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 12 ) { // silver fangs
    $sql = "SELECT sectext FROM chap2 Where id = 21";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 13 ) { // uktena
    $sql = "SELECT sectext FROM chap2 Where id = 22";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 14 ) { // wendigo
    $sql = "SELECT sectext FROM chap2 Where id = 23";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap2 Where id BETWEEN 1 AND 23";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }   
} 
$conn->close(); 
?>