<?php
/** This php handles all the buttons from the fifth chapter - Rules. Then
 * queries the MySQL db to return the correct data.
 */

require '../resources/wodConfig.php';

// check which button was submitted 
if ( isset( $_POST['intro'] )) {
    $passnum = 1;
}
if ( isset( $_POST['time'] )) {
    $passnum = 2;
}
if ( isset( $_POST['actions'] )) {
    $passnum = 3;
}
if ( isset( $_POST['dice'] )) {
    $passnum = 4;
}
if ( isset( $_POST['raiting'] )) {
    $passnum = 5;
}
if ( isset( $_POST['ref'] )) {
    $passnum = 6;
}
if ( isset( $_POST['hard'] )) {
    $passnum = 7;
}
if ( isset( $_POST['fail'] )) {
    $passnum = 8;
}
if ( isset( $_POST['botch'] )) {
    $passnum = 9;
}
if ( isset( $_POST['auto'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['difSuc'] )) {
    $passnum = 11;
} 
if ( isset( $_POST['tryAgain'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['multiple'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['complications'] )) {
    $passnum = 14;
} 
if ( isset( $_POST['extended'] )) {
    $passnum = 15;
} 
if ( isset( $_POST['resisted'] )) {
    $passnum = 16;
} 
if ( isset( $_POST['team'] )) {
    $passnum = 17;
} 
if ( isset( $_POST['golden'] )) {
    $passnum = 18;
} 
if ( isset( $_POST['tryIt'] )) {
    $passnum = 19;
} 
if ( isset( $_POST['examTerm'] )) {
    $passnum = 20;
}
if ( isset( $_POST['full'] )) {
    $passnum = 21;
}

// Create/Check connection
$conn = new mysqli(DB_SERVER_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
} 

// fetch selected data
if ( $passnum == 1 ) { // rules intro
    $sql = "SELECT sectext FROM chap5 Where id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // it's about time
    $sql = "SELECT sectext FROM chap5 Where id = 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // actions
    $sql = "SELECT sectext FROM chap5 Where id = 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // rolling dice
    $sql = "SELECT sectext FROM chap5 Where id = 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // raiting
    $sql = "SELECT sectext FROM chap5 Where id = 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 6 ) { // reflexives
    $sql = "SELECT sectext FROM chap5 Where id = 6";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 7 ) { // hard
    $sql = "SELECT sectext FROM chap5 Where id = 7";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // failure
    $sql = "SELECT sectext FROM chap5 Where id = 8";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 9 ) { // botches
    $sql = "SELECT sectext FROM chap5 Where id = 9";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 10 ) { // auto successes
    $sql = "SELECT sectext FROM chap5 Where id = 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 11 ) { // difficulties and successes
    $sql = "SELECT sectext FROM chap5 Where id = 11";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 12 ) { // try again
    $sql = "SELECT sectext FROM chap5 Where id = 12";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 13 ) { // multiple
    $sql = "SELECT sectext FROM chap5 Where id = 13";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 14 ) { // complications
    $sql = "SELECT sectext FROM chap5 Where id = 14";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 15 ) { // extended actions
    $sql = "SELECT sectext FROM chap5 Where id = 15";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 16 ) { // resisted actions
    $sql = "SELECT sectext FROM chap5 Where id = 16";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 17 ) { // teamwork
    $sql = "SELECT sectext FROM chap5 Where id = 17";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 18 ) { // golden rule
    $sql = "SELECT sectext FROM chap5 Where id = 18";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 19 ) { // try it out
    $sql = "SELECT sectext FROM chap5 Where id = 19";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 20 ) { // examples and terms
    $sql = "SELECT sectext FROM chap5 Where id = 20";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap5 Where id BETWEEN 1 AND 20";
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