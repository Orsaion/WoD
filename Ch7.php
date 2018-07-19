<?php
/** This php handles all the buttons from the seventh chapter - The Umbra. Then
 * queries the MySQL db to return the correct data.
 */

require '../resources/wodConfig.php';

// check which button was submitted 
if ( isset( $_POST['umbra'] )) {
    $passnum = 1;
}
if ( isset( $_POST['tellurian'] )) {
    $passnum = 2;
}
if ( isset( $_POST['shape'] )) {
    $passnum = 3;
}
if ( isset( $_POST['myth'] )) {
    $passnum = 4;
}
if ( isset( $_POST['enviroment'] )) {
    $passnum = 5;
}
if ( isset( $_POST['caern'] )) {
    $passnum = 6;
}
if ( isset( $_POST['travel'] )) {
    $passnum = 7;
}
if ( isset( $_POST['nature'] )) {
    $passnum = 8;
}
if ( isset( $_POST['charms'] )) {
    $passnum = 9;
}
if ( isset( $_POST['fetish'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['disconn'] )) {
    $passnum = 11;
} 
if ( isset( $_POST['full'] )) {
    $passnum = 20;
}

// Create/Check connection
$conn = new mysqli(DB_SERVER_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
} 

// fetch selected data
if ( $passnum == 1 ) { // the umbra
    $sql = "SELECT sectext FROM chap7 Where id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // tellurian
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 2 AND 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // the shape of the world
    $sql = "SELECT sectext FROM chap7 Where id = 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // creation myth
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 5 AND 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // umbral enviroment
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 11 AND 24";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 6 ) { // caerns
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 25 AND 26";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 7 ) { // umbral travel
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 27 AND 32";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // nature of spirits
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 34 AND 52";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 9 ) { // charms
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 53 AND 57";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 10 ) { // fetishes and talens
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 58 AND 59";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 11 ) { // disconnection
    $sql = "SELECT sectext FROM chap7 Where id = 60";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap7 Where id BETWEEN 1 AND 60";
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