<?php
/** This php handles all the buttons from the last chapter - Allies and  
 * Ammunition Then queries the MySQL db to return the correct data.
 */

require '../resources/wodConfig.php';

// check which button was submitted 
if ( isset( $_POST['stargazers'] )) {
    $passnum = 1;
}
if ( isset( $_POST['spirits'] )) {
    $passnum = 2;
}
if ( isset( $_POST['pTotem'] )) {
    $passnum = 3;
}
if ( isset( $_POST['tRespect'] )) {
    $passnum = 4;
}
if ( isset( $_POST['tWar'] )) {
    $passnum = 5;
}
if ( isset( $_POST['tWisdom'] )) {
    $passnum = 6;
}
if ( isset( $_POST['tCunning'] )) {
    $passnum = 7;
}
if ( isset( $_POST['naturae'] )) {
    $passnum = 8;
}
if ( isset( $_POST['hunt'] )) {
    $passnum = 9;
}
if ( isset( $_POST['old'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['eles'] )) {
    $passnum = 11;
}  
if ( isset( $_POST['enigmatic'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['fetish'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['talen'] )) {
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
if ( $passnum == 1 ) { // the stargazers
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 98 AND 99";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // spirits
    $sql = "SELECT sectext FROM chap9 Where id = 100";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // pack totems
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 101 AND 103";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // totems of respect
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 104 AND 108";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // totems of war
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 109 AND 115";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 6 ) { // totems of wisdom
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 116 AND 122";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 7 ) { // totems of cunning
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 123 AND 126";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // naturae
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 127 AND 133";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 9 ) { // the wild hunt
    $sql = "SELECT sectext FROM chap9 Where id = 134";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 10 ) { // ancestor spirits
    $sql = "SELECT sectext FROM chap9 Where id = 135";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 11 ) { // elementals
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 136 AND 142";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 12 ) { // enigmatic spirits
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 143 AND 147";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 13 ) { // fetish
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 148 AND 160";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 14 ) { // talen
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 161 AND 167";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap9 Where id BETWEEN 98 AND 167";
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