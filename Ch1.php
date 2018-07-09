<?php

require '../resources/wodConfig.php';

// check which button was submitted
if ( isset( $_POST['intro'] )) {
    $passnum = 1;
}
if ( isset( $_POST['breeds'] )) {
    $passnum = 2;
}
if ( isset( $_POST['auspices'] )) {
    $passnum = 3;
}
if ( isset( $_POST['12Tribes'] )) {
    $passnum = 4;
}
if ( isset( $_POST['cosmology'] )) {
    $passnum = 5;
}
if ( isset( $_POST['lostTribes'] )) {
    $passnum = 6;
}
if ( isset( $_POST['caernsSoc'] )) {
    $passnum = 7;
}
if ( isset( $_POST['litany'] )) {
    $passnum = 8;
} 
if ( isset( $_POST['justice'] )) {
    $passnum = 9;
} 
if ( isset( $_POST['heirachy'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['domSub'] )) {
    $passnum = 11;
} 
if ( isset( $_POST['pack'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['totem'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['sept'] )) {
    $passnum = 14;
} 
if ( isset( $_POST['tribe'] )) {
    $passnum = 15;
} 
if ( isset( $_POST['moots'] )) {
    $passnum = 16;
} 
if ( isset( $_POST['tmoot'] )) {
    $passnum = 17;
} 
if ( isset( $_POST['revelry'] )) {
    $passnum = 18;
} 
if ( isset( $_POST['lang'] )) {
    $passnum = 19;
} 
if ( isset( $_POST['howl'] )) {
    $passnum = 20;
} 
if ( isset( $_POST['rage'] )) {
    $passnum = 21;
} 
if ( isset( $_POST['wyrm'] )) {
    $passnum = 22;
} 
if ( isset( $_POST['weaver'] )) {
    $passnum = 23;
} 
if ( isset( $_POST['parlance'] )) {
    $passnum = 24;
} 
if ( isset( $_POST['full'] )) {
    $passnum = 25;
}

// Create/Check connection
$conn = new mysqli(DB_SERVER_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
} 

// fetch selected data
if ( $passnum == 1 ) { //big intro
    $sql = "SELECT sectext FROM chap1 Where Id BETWEEN 1 AND 14";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // breeds
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 15 AND 18";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // auspices
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 19 AND 26";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // 12 tribes
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 27 AND 40";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // cosmology
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 41 AND 43";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 6 ) { // lost tribes
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 44 AND 48";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 7 ) { // caerns/society
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 49 AND 51";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // litany
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 52 AND 65";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 9 ) { // justice
    $sql = "SELECT sectext FROM chap1 Where id = 66";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 10 ) { // hiearchy
    $sql = "SELECT sectext FROM chap1 Where id = 67";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 11 ) { // sub/dom
    $sql = "SELECT sectext FROM chap1 Where id = 68";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 12 ) { // pack
    $sql = "SELECT sectext FROM chap1 Where id = 69";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 13 ) { // totem
    $sql = "SELECT sectext FROM chap1 Where id = 70";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 14 ) { // sept
    $sql = "SELECT sectext FROM chap1 Where id = 71";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 15 ) { // tribe
    $sql = "SELECT sectext FROM chap1 Where id = 72";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 16 ) { // moot
    $sql = "SELECT sectext FROM chap1 Where id = 73";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 17 ) { // tribal moot
    $sql = "SELECT sectext FROM chap1 Where id = 74";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 18 ) { // reverly
    $sql = "SELECT sectext FROM chap1 Where id = 75";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 19 ) { // lang
    $sql = "SELECT sectext FROM chap1 Where id = 76";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 20 ) { // howls
    $sql = "SELECT sectext FROM chap1 Where id = 77";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 21 ) { // rage across world
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 78 AND 85";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 22 ) { // wyrm
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 86 AND 92";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 23 ) { // weaver
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 93 AND 94";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 24 ) { // parlance
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 95 AND 97";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 1 AND 97";
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