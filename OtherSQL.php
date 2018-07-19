<?php
/** This file contians the other php calls to the MySQL to get various charts 
 * from different chapters as well as the story teller sections in chapter 8 
 * that aren't as useful for the majority of users.
 */

require '../resources/wodConfig.php';

// check which button was submitted 
if ( isset( $_POST['lang'] )) {
    $passnum = 1;
}
if ( isset( $_POST['create'] )) {
    $passnum = 2;
}
if ( isset( $_POST['freebie'] )) {
    $passnum = 3;
}
if ( isset( $_POST['raiting'] )) {
    $passnum = 4;
}
if ( isset( $_POST['difSuc'] )) {
    $passnum = 5;
}
if ( isset( $_POST['exp'] )) {
    $passnum = 6;
}
if ( isset( $_POST['gauntlet'] )) {
    $passnum = 7;
}
if ( isset( $_POST['combat'] )) {
    $passnum = 8;
}
if ( isset( $_POST['rage'] )) {
    $passnum = 9;
}
if ( isset( $_POST['health'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['melee'] )) {
    $passnum = 11;
}  
if ( isset( $_POST['armor'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['firefight'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['move'] )) {
    $passnum = 14;
}
if ( isset( $_POST['rangedWeps'] )) {
    $passnum = 15;
}
if ( isset( $_POST['dodge'] )) {
    $passnum = 16;
} // 17 was removed and is no longer used
if ( isset( $_POST['del'] )) {
    $passnum = 18;
}  
if ( isset( $_POST['feats'] )) {
    $passnum = 19;
} 
if ( isset( $_POST['jump'] )) {
    $passnum = 20;
} 
if ( isset( $_POST['falling'] )) {
    $passnum = 21;
}
if ( isset( $_POST['fire'] )) {
    $passnum = 22;
}
if ( isset( $_POST['caern'] )) {
    $passnum = 23;
}
if ( isset( $_POST['all'] )) {
    $passnum = 24;
}
if ( isset( $_POST['story'] )) {
    $passnum = 25;
}

// Create/Check connection
$conn = new mysqli(DB_SERVER_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
} 

// fetch selected data
if ( $passnum == 1 ) { // common terms
    $sql = "SELECT sectext FROM chap1 Where id BETWEEN 95 AND 97";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // character creation
    $sql = "SELECT sectext FROM chap9 Where id = 168";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // freebie points
    $sql = "SELECT sectext FROM chap9 Where id = 169";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // raitings
    $sql = "SELECT sectext FROM chap5 Where id = 21";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // difficulties and successes
    $sql = "SELECT sectext FROM chap5 Where id = 11";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 6 ) { // experience chart
    $sql = "SELECT sectext FROM chap6 Where id = 6";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 7 ) { // gauntlet/stepping-sideways
    $sql = "SELECT sectext FROM chap7 Where id = 61";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // combat summary
    $sql = "SELECT sectext FROM chap6 Where id = 106";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 9 ) { // difficulty for rage rolls
    $sql = "SELECT sectext FROM chap6 Where id = 46";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 10 ) { // health levels
    $sql = "SELECT sectext FROM chap3 Where id = 87";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 11 ) { // melee weapons
    $sql = "SELECT sectext FROM chap6 Where id = 102";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 12 ) { // armor
    $sql = "SELECT sectext FROM chap6 Where id = 107";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 13 ) { // ranged complications
    $sql = "SELECT sectext FROM chap6 Where id = 108";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 14 ) { // movement rates
    $sql = "SELECT sectext FROM chap6 Where id = 109";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 15 ) { // Ranged Weapons
    $sql = "SELECT sectext FROM chap6 Where id = 100";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 16 ) { // dodge
    $sql = "SELECT sectext FROM chap6 Where id = 110";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 18 ) { // delirium
    $sql = "SELECT sectext FROM chap6 Where id = 50";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 19 ) { // feats of strength
    $sql = "SELECT sectext FROM chap6 Where id = 111";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 20 ) { // jumping
    $sql = "SELECT sectext FROM chap6 Where id = 112";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 21 ) { // falling damage
    $sql = "SELECT sectext FROM chap6 Where id = 113";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 22 ) { // fire damage 
    $sql = "SELECT sectext FROM chap6 Where id = 114";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 23 ) { // caern mechanics
    $sql = "SELECT sectext FROM chap7 Where id = 26";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 25 ) { // story teller section
    $sql = "SELECT sectext FROM chap8 Where id BETWEEN 1 AND 27";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} 
// massive pull for all various sections, gonna find a better way of doing this
// broke it out of it's original place because of length
else if ( $passnum == 24 ) { 
    $sqlLang = "SELECT sectext FROM chap1 Where id BETWEEN 95 AND 97";
    $resultLang = $conn->query($sqlLang);

    if ($resultLang->num_rows > 0) {
        while($row = $resultLang->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlCreate = "SELECT sectext FROM chap9 Where id = 168";
    $resultCreate = $conn->query($sqlCreate);

    if ($resultCreate->num_rows > 0) {
        while($row = $resultCreate->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlFree = "SELECT sectext FROM chap9 Where id = 169";
    $resultFree = $conn->query($sqlFree);

    if ($resultFree->num_rows > 0) {
        while($row = $resultFree->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlRaiting = "SELECT sectext FROM chap5 Where id = 21";
    $resultRaiting = $conn->query($sqlRaiting);

    if ($resultRaiting->num_rows > 0) {
        while($row = $resultRaiting->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlDif = "SELECT sectext FROM chap5 Where id = 11";
    $resultDif = $conn->query($sqlDif);

    if ($resultDif->num_rows > 0) {
        while($row = $resultDif->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlExp = "SELECT sectext FROM chap6 Where id = 6";
    $resultExp = $conn->query($sqlExp);

    if ($resultExp->num_rows > 0) {
        while($row = $resultExp->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlGaunt = "SELECT sectext FROM chap7 Where id = 61";
    $resultGaunt = $conn->query($sqlGaunt);

    if ($resultGaunt->num_rows > 0) {
        while($row = $resultGaunt->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlCom = "SELECT sectext FROM chap6 Where id = 106";
    $resultCom = $conn->query($sqlCom);

    if ($resultCom->num_rows > 0) {
        while($row = $resultCom->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlRage = "SELECT sectext FROM chap6 Where id = 46";
    $resultRage = $conn->query($sqlRage);

    if ($resultRage->num_rows > 0) {
        while($row = $resultRage->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlHP = "SELECT sectext FROM chap3 Where id = 87";
    $resultHP = $conn->query($sqlHP);

    if ($resultHP->num_rows > 0) {
        while($row = $resultHP->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlWep = "SELECT sectext FROM chap6 Where id = 102";
    $resultWep = $conn->query($sqlWep);

    if ($resultWep->num_rows > 0) {
        while($row = $resultWep->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlARM = "SELECT sectext FROM chap6 Where id BETWEEN 107 AND 109";
    $resultARM = $conn->query($sqlARM);

    if ($resultARM->num_rows > 0) {
        while($row = $resultARM->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlRW = "SELECT sectext FROM chap6 Where id = 100";
    $resultRW = $conn->query($sqlRW);

    if ($resultRW->num_rows > 0) {
        while($row = $resultRW->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlDodge = "SELECT sectext FROM chap6 Where id = 110";
    $resultDodge = $conn->query($sqlDodge);

    if ($resultDodge->num_rows > 0) {
        while($row = $resultDodge->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlDel = "SELECT sectext FROM chap6 Where id = 50";
    $resultDel = $conn->query($sqlDel);

    if ($resultDel->num_rows > 0) {
        while($row = $resultDel->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlStFire = "SELECT sectext FROM chap6 Where id BETWEEN 111 And 114";
    $resultStFire = $conn->query($sqlStFire);

    if ($resultStFire->num_rows > 0) {
        while($row = $resultStFire->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlCaern = "SELECT sectext FROM chap7 Where id = 26";
    $resultCaern = $conn->query($sqlCaern);

    if ($resultCaern->num_rows > 0) {
        while($row = $resultCaern->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }

    $sqlStory = "SELECT sectext FROM chap8 Where id BETWEEN 1 AND 27";
    $resultStory = $conn->query($sqlStory);

    if ($resultStory->num_rows > 0) {
        while($row = $resultStory->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else { echo "<p>Error retriving data</p>"; }
}
else { // error 
        echo "<p>An unknown error has occured. Please refresh your browser.</p>"; 
} 
$conn->close(); 
?>