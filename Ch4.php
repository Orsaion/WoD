
<?php
/** This php handles all the buttons from the fourth chapter - Gifts and Rites.
 * Then queries the MySQL db to return the correct data.
 */

require '../resources/wodConfig.php';

// check which button was submitted 
if ( isset( $_POST['gifts'] )) {
    $passnum = 1;
}
if ( isset( $_POST['learnGifts'] )) {
    $passnum = 2;
}
if ( isset( $_POST['sys'] )) {
    $passnum = 3;
}
if ( isset( $_POST['homidGifts'] )) {
    $passnum = 4;
}
if ( isset( $_POST['metisGifts'] )) {
    $passnum = 5;
}
if ( isset( $_POST['lupusGifts'] )) {
    $passnum = 6;
}
if ( isset( $_POST['ragabashGifts'] )) {
    $passnum = 7;
}
if ( isset( $_POST['theurgeGifts'] )) {
    $passnum = 8;
}
if ( isset( $_POST['philodoxGifts'] )) {
    $passnum = 9;
}
if ( isset( $_POST['gallardGifts'] )) {
    $passnum = 10;
} 
if ( isset( $_POST['ahrounGifts'] )) {
    $passnum = 11;
} 
if ( isset( $_POST['furiesGifts'] )) {
    $passnum = 12;
} 
if ( isset( $_POST['boneGifts'] )) {
    $passnum = 13;
} 
if ( isset( $_POST['childGifts'] )) {
    $passnum = 14;
} 
if ( isset( $_POST['fiannaGifts'] )) {
    $passnum = 15;
} 
if ( isset( $_POST['getGifts'] )) {
    $passnum = 16;
} 
if ( isset( $_POST['glassGifts'] )) {
    $passnum = 17;
} 
if ( isset( $_POST['talonGifts'] )) {
    $passnum = 18;
} 
if ( isset( $_POST['lordsGifts'] )) {
    $passnum = 19;
} 
if ( isset( $_POST['stridersGifts'] )) {
    $passnum = 20;
} 
if ( isset( $_POST['fangsGifts'] )) {
    $passnum = 21;
} 
if ( isset( $_POST['uktenaGifts'] )) {
    $passnum = 22;
} 
if ( isset( $_POST['wendigoGifts'] )) {
    $passnum = 23;
} 
if ( isset( $_POST['types'] )) {
    $passnum = 24;
} 
if ( isset( $_POST['eRite'] )) {
    $passnum = 25;
} 
if ( isset( $_POST['chart'] )) {
    $passnum = 26;
} 
if ( isset( $_POST['lRite'] )) {
    $passnum = 27;
} 
if ( isset( $_POST['aRoles'] )) {
    $passnum = 28;
} 
if ( isset( $_POST['rAccord'] )) {
    $passnum = 29;
} 
if ( isset( $_POST['rCaern'] )) {
    $passnum = 30;
} 
if ( isset( $_POST['rDeath'] )) {
    $passnum = 31;
} 
if ( isset( $_POST['rMystic'] )) {
    $passnum = 32;
} 
if ( isset( $_POST['rPunish'] )) {
    $passnum = 33;
} 
if ( isset( $_POST['rRenown'] )) {
    $passnum = 34;
} 
if ( isset( $_POST['rSeason'] )) {
    $passnum = 35;
} 
if ( isset( $_POST['rMinor'] )) {
    $passnum = 36;
} else { $passnum = 37; }

// Create/Check connection
$conn = new mysqli(DB_SERVER_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
} 

// fetch selected data
if ( $passnum == 1 ) { // gift intro
    $sql = "SELECT sectext FROM chap4 Where id = 98";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    }
} else if ( $passnum == 2 ) { // learning gifts
    $sql = "SELECT sectext FROM chap4 Where id = 99";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 3 ) { // systems
    $sql = "SELECT sectext FROM chap4 Where id = 100";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 4 ) { // breed + homid gifts
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 101 AND 113";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 5 ) { // breed + metis
    $sql = "SELECT sectext FROM chap4 Where id = 101";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 114 AND 125";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 6 ) { // breed + lupus
    $sql = "SELECT sectext FROM chap4 Where id = 101";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 126 AND 137";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 7 ) { // auspice + ragabash
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 138 AND 151";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 8 ) { // auspice + theurge
    $sql = "SELECT sectext FROM chap4 Where id = 138";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 152 AND 164";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 9 ) { // auspice + philodox
    $sql = "SELECT sectext FROM chap4 Where id = 138";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 165 AND 177";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 10 ) { // auspice + gallard
    $sql = "SELECT sectext FROM chap4 Where id = 138";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 178 AND 190";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 11 ) { // auspice + ahroun
    $sql = "SELECT sectext FROM chap4 Where id = 138";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 191 AND 203";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 12 ) { // tribe + furies
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 204 AND 216";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 13 ) { // tribe + bone gnawers
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 217 AND 228";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 14 ) { // tribe + children
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 229 AND 240";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 15 ) { // tribe + fianna
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 241 AND 252";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 16 ) { // tribe + get
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 253 AND 264";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 17 ) { // tribe + glass
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 265 AND 276";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 18 ) { // tribe + talons
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 277 AND 288";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 19 ) { // tribe + lords
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 289 AND 300";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 20 ) { // tribe + striders
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 301 AND 312";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
} else if ( $passnum == 21 ) { // tribe + fangs
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 313 AND 324";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 22 ) { // tribe + uktena
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 325 AND 336";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 23 ) { // tribe + wendigo
    $sql = "SELECT sectext FROM chap4 Where id = 204";
    $result = $conn->query($sql);
    $sql2 = "SELECT sectext FROM chap4 Where id BETWEEN 337 AND 348";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    } 
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "Error retriving data";
    }
} else if ( $passnum == 24 ) { // types of gifts intro
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 349 AND 350";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 25 ) { // enacting rites
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 351 AND 352";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 26 ) { // rite chart
    $sql = "SELECT sectext FROM chap4 Where id = 352";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 27 ) { // learning rites
    $sql = "SELECT sectext FROM chap4 Where id = 353";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 28 ) { // auspice roles
    $sql = "SELECT sectext FROM chap4 Where id = 354";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 29 ) { // rites of accord
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 355 AND 358";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 30 ) { // caern rites
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 359 AND 365";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 31 ) { // rites of death
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 366 AND 368";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 32 ) { // mystic rites
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 369 AND 378";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 33 ) { // rites of punishments
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 379 AND 386";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 34 ) { // rites of renown
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 387 AND 390";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 35 ) { // rites of season
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 391 AND 395";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else if ( $passnum == 36 ) { // minor rites
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 396 AND 402";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " " . $row["sectext"] . " ";
        }
    } else {
        echo "<p>Error retriving data</p>";
    } 
} else { // whole chapter and/or confused code
    $sql = "SELECT sectext FROM chap4 Where id BETWEEN 98 AND 402";
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