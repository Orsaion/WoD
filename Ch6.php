<?php
/** This php handles all the buttons from the sixth chapter - Systems and Drama.
 * Then queries the MySQL db to return the correct data.
 */

require '../resources/wodConfig.php';

// check which button was submitted 
if ( isset( $_POST['exp'] )) {
    $passnum = 1;
}
if ( isset( $_POST['sExp'] )) {
    $passnum = 2;
}
if ( isset( $_POST['rpit'] )) {
    $passnum = 3;
}
if ( isset( $_POST['awardingRenown'] )) {
    $passnum = 4;
}
if ( isset( $_POST['looseRenown'] )) {
    $passnum = 5;
}
if ( isset( $_POST['renownChart'] )) {
    $passnum = 6;
}
if ( isset( $_POST['rank'] )) {
    $passnum = 7;
}
if ( isset( $_POST['renunciation'] )) {
    $passnum = 8;
}
if ( isset( $_POST['pStates'] )) {
    $passnum = 9;
}
if ( isset( $_POST['injury'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['scars'] )) {
    $passnum = 11;
} 
if ( isset( $_POST['mStates'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['drama'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['scenes'] )) {
    $passnum = 14;
} 
if ( isset( $_POST['downTime'] )) {
    $passnum = 15;
} 
if ( isset( $_POST['turns'] )) {
    $passnum = 16;
} 
if ( isset( $_POST['multi'] )) {
    $passnum = 17;
} 
if ( isset( $_POST['actionScenes'] )) {
    $passnum = 18;
} 
if ( isset( $_POST['organize'] )) {
    $passnum = 19;
} 
if ( isset( $_POST['taking'] )) {
    $passnum = 20;
}
if ( isset( $_POST['dramaticSys'] )) {
    $passnum = 21;
} 
if ( isset( $_POST['pFeats'] )) {
    $passnum = 22;
} 
if ( isset( $_POST['sFeats'] )) {
    $passnum = 23;
} 
if ( isset( $_POST['mFeats'] )) {
    $passnum = 24;
} 
if ( isset( $_POST['forms'] )) {
    $passnum = 25;
} 
if ( isset( $_POST['combat'] )) {
    $passnum = 26;
} 
if ( isset( $_POST['useRage'] )) {
    $passnum = 27;
} 
if ( isset( $_POST['hard'] )) {
    $passnum = 28;
} 
if ( isset( $_POST['ranged'] )) {
    $passnum = 29;
} 
if ( isset( $_POST['rangedWeps'] )) {
    $passnum = 30;
}
if ( isset( $_POST['close'] )) {
    $passnum = 31;
}
if ( isset( $_POST['closeComp'] )) {
    $passnum = 32;
}
if ( isset( $_POST['sMoves'] )) {
    $passnum = 33;
}
if ( isset( $_POST['packTac'] )) {
    $passnum = 34;
}
if ( isset( $_POST['full'] )) {
    $passnum = 40;
}

// Create/Check connection
$conn = new mysqli(DB_SERVER_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
} 

// fetch selected data
if ( $passnum == 1 ) { // exp
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 1 AND 4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // spending exp
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 5 AND 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // rp it
    $sql = "SELECT sectext FROM chap6 Where id = 11";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // awarding renown
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 12 AND 16";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // loose renown
    $sql = "SELECT sectext FROM chap6 Where id = 17";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 6 ) { // example
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 18 AND 20";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 7 ) { // rank
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 21 AND 28";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // renunciation
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 29 AND 30";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 9 ) { // injury
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 31 AND 34";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 10 ) { // sources of injury
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 35 AND 40";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 11 ) { // scars
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 41 AND 42";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 12 ) { // mental states
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 43 AND 50";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 13 ) { // drama
    $sql = "SELECT sectext FROM chap6 Where id = 51";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 14 ) { // scenes
    $sql = "SELECT sectext FROM chap6 Where id = 52";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 15 ) { // downtime
    $sql = "SELECT sectext FROM chap6 Where id = 53";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 16 ) { // turns
    $sql = "SELECT sectext FROM chap6 Where id = 54";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 17 ) { // multiple actions
    $sql = "SELECT sectext FROM chap6 Where id = 55";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 18 ) { // action scenes
    $sql = "SELECT sectext FROM chap6 Where id = 56";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 19 ) { // combat organization
    $sql = "SELECT sectext FROM chap6 Where id = 57";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 20 ) { // taking actions
    $sql = "SELECT sectext FROM chap6 Where id = 58";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 21 ) { // dramatic systems
    $sql = "SELECT sectext FROM chap6 Where id = 59";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 22 ) { // physical feats
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 60 AND 69";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 23 ) { // social feats
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 70 AND 79";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 24 ) { // mental feats
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 80 AND 87";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 25 ) { // the many forms
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 88 AND 93";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 26 ) { // combat
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 94 AND 96";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 27 ) { // using rage
    $sql = "SELECT sectext FROM chap6 Where id = 97";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 28 ) { // general complications
    $sql = "SELECT sectext FROM chap6 Where id = 98";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 29 ) { // ranged combat
    $sql = "SELECT sectext FROM chap6 Where id = 99";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 30 ) { // ranged weapons
    $sql = "SELECT sectext FROM chap6 Where id = 100";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 31 ) { // close combat 
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 101 AND 102";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 32 ) { // cc complications
    $sql = "SELECT sectext FROM chap6 Where id = 103";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 33 ) { // special maneuvers
    $sql = "SELECT sectext FROM chap6 Where id = 104";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 34 ) { // pack tactics
    $sql = "SELECT sectext FROM chap6 Where id = 105";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap6 Where id BETWEEN 1 AND 105";
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