<?php
/** This php handles all the buttons from the Eighth chapter - Antagonists Then
 * queries the MySQL db to return the correct data.
 */

require '../resources/wodConfig.php';

// check which button was submitted 
if ( isset( $_POST['serpant'] )) {
    $passnum = 1;
}
if ( isset( $_POST['bsd'] )) {
    $passnum = 2;
}
if ( isset( $_POST['fomori'] )) {
    $passnum = 3;
}
if ( isset( $_POST['vamp'] )) {
    $passnum = 4;
}
if ( isset( $_POST['mage'] )) {
    $passnum = 5;
}
if ( isset( $_POST['mummy'] )) {
    $passnum = 6;
}
if ( isset( $_POST['sads'] )) {
    $passnum = 7;
}
if ( isset( $_POST['spirits'] )) {
    $passnum = 8;
}
if ( isset( $_POST['weaver'] )) {
    $passnum = 9;
}
if ( isset( $_POST['wyld'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['wyrm'] )) {
    $passnum = 11;
}  
if ( isset( $_POST['human'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['dead'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['others'] )) {
    $passnum = 14;
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
if ( $passnum == 1 ) { // the serpant
    $sql = "SELECT sectext FROM chap8 Where id = 28";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // black spiral dancers
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 29 AND 32";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // fomori
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 33 AND 34";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // leeches
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 36 AND 38";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // mages
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 39 AND 41";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 6 ) { // walking dead
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 42 AND 43";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 7 ) { // unforunates
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 44 AND 46";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // pirits
    $sql = "SELECT sectext FROM chap8 Where id = 47";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 9 ) { // weaver
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 48 AND 51";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 10 ) { // wyld
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 52 AND 54";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 11 ) { // wyrm
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 55 AND 58";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 12 ) { // humans
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 59 AND 64";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 13 ) { // dead man's hand
    $sql = "SELECT sectext FROM chap8 Where id = 65";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 14 ) { // others
    $sql = "SELECT sectext FROM chap8 Where id = 66";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 28 AND 66";
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