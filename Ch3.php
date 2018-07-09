<?php 

require 'resources/wodConfig.php';

// check which button was submitted
if ( isset( $_POST['intro'] )) {
    $passnum = 1;
}
if ( isset( $_POST['storyteller'] )) {
    $passnum = 2;
}
if ( isset( $_POST['concept'] )) {
    $passnum = 3;
}
if ( isset( $_POST['chooseAtt'] )) {
    $passnum = 4;
}
if ( isset( $_POST['chooseAbi'] )) {
    $passnum = 5;
}
if ( isset( $_POST['advantages'] )) {
    $passnum = 6;
}
if ( isset( $_POST['finishing'] )) {
    $passnum = 7;
}
if ( isset( $_POST['spark'] )) {
    $passnum = 8;
} 
if ( isset( $_POST['justice'] )) {
    $passnum = 9;
} 
if ( isset( $_POST['pack'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['prelude'] )) {
    $passnum = 11;
} 
if ( isset( $_POST['attributes'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['attTalent'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['attSkill'] )) {
    $passnum = 14;
} 
if ( isset( $_POST['attKnow'] )) {
    $passnum = 15;
} 
if ( isset( $_POST['back'] )) {
    $passnum = 16;
} 
if ( isset( $_POST['renown'] )) {
    $passnum = 17;
} 
if ( isset( $_POST['rank'] )) {
    $passnum = 18;
} 
if ( isset( $_POST['rage'] )) {
    $passnum = 19;
} 
if ( isset( $_POST['gnosis'] )) {
    $passnum = 20;
} 
if ( isset( $_POST['will'] )) {
    $passnum = 21;
} 
if ( isset( $_POST['health'] )) {
    $passnum = 22;
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
if ( $passnum == 1 ) { // intro
    $sql = "SELECT sectext FROM chap3 Where Id BETWEEN 1 AND 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p> num 1";
    }
} else if ( $passnum == 2 ) { // storyteller
    $sql = "SELECT sectext FROM chap3 Where id = 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // concept
    $sql = "SELECT sectext FROM chap3 Where id = 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // attributes
    $sql = "SELECT sectext FROM chap3 Where id = 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // abilities
    $sql = "SELECT sectext FROM chap3 Where id = 6";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 6 ) { // advantages
    $sql = "SELECT sectext FROM chap3 Where id = 7";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 7 ) { // finishing touches
    $sql = "SELECT sectext FROM chap3 Where id = 8";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // spark of life
    $sql = "SELECT sectext FROM chap3 Where id = 9";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 9 ) { // pack
    $sql = "SELECT sectext FROM chap3 Where id = 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 10 ) { // prelude
    $sql = "SELECT sectext FROM chap3 Where id = 11";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 11 ) { // attributes
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 12 AND 25";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 12 ) { // abilities - talents
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 26 AND 37";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 13 ) { // abilities -skills
    $sql = "SELECT sectext FROM chap3 Where id = 26";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap3 Where id BETWEEN 38 AND 48";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 14 ) { // abilities - knowledges
    $sql = "SELECT sectext FROM chap3 Where id = 26";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap3 Where id BETWEEN 49 AND 59";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 15 ) { // backgrounds
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 60 AND 70";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 14 ) { // renown
    $sql = "SELECT sectext FROM chap3 Where id = 71 AND 75";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 15 ) { // rank
    $sql = "SELECT sectext FROM chap3 Where id = 76";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 16 ) { // rage
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 77 AND 79";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 17 ) { // gnosis
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 80 AND 82";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 18 ) { // willpower
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 83 AND 85";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 19 ) { // health
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 86 AND 87";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap3 Where id BETWEEN 1 AND 87";
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