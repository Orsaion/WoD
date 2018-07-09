
/** This file contains all the functions needed to run the WOD : Werewolf main
* page with the exception of the chapter area.
*/

/** Function intro() will clear out the text area and display the opening
* story that's first loaded when you reach the page.
*/
function introBtn() {
    var x = new XMLHttpRequest();
    x.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var r = JSON.parse(x.responseText); 
        document.getElementById('textBody').innerHTML= r.open;
        }
    };
    x.open('GET', '/resources/open.json', true);
    x.send();
    // reset to opening layout 
    chapterMenu.style.display= 'block';
    mainTextArea.style.display= 'block';            
    textBody.style.display= 'block';
    noteBtns.style.display= 'none';
    noteArea.style.display= 'none';
    rP2.style.display= 'none';
    sheet.style.display= 'none';
}
/** Function charShow() turns off the main elements of the page and replaces 
 * them with a fixed rune panel for dice rolling and the character sheet in the 
 * article section. Function charHide() hides the character sheet and rune pane.
 */
function charShow() {
    chapterMenu.style.display= 'none';
    mainTextArea.style.display= 'none';
    noteBtns.style.display= 'none';
    noteArea.style.display= 'none';
    rP2.style.display= 'block';
    sheet.style.display= 'block';
}
function charHide() {
    chapterMenu.style.display= 'block';
    mainTextArea.style.display= 'block';
    noteBtns.style.display= 'block';
    noteArea.style.display= 'block';
    rP2.style.display= 'none';
    sheet.style.display= 'none';
}
/** Functions runes() and charRunes() are a random dice roll gen. It's 
 * modified a little to make it operate within the rules of the WOD
 * system. Users will put numbers in text fields for dice and scale, those
 * will be validated, then put through the success/failure system. Which 
 * is determined by the number of dice above the difficulty given. (If 3
 * dice are rolled - 4,5,6 - with difficulty of 6, there is one success.)
 * Also checks for a "botch" or a really bad roll where there are no 
 * successes and more than one "1" showing up.
 */
function runes() {
    var d = document.getElementById('dice').value;
    var s = document.getElementById('dScale').value;
    var ran = []; 
    var n = 1; var x = 0;
    var pass = 0; var fail = 0; 
    var output; var rsof;
        
    if (d == null || d == '' || d > 25 ) {
        output = 'How many dice again?';
        rsof = '';
        ran.length = 0; // clear array to trigger the error below
    } else if (s == null || s == '' || s >= 11 || s <= 2 ) {
        output = 'How hard of a check?';
        rsof = '';
        ran.length = 0;
    } else {
        output = 'Rolled ' + d + 'd10 on ' + s + '+...';    
        // this builds the ran[] with "random dice rolls" 
        while ( n <= d ) {
            ran.push( Math.floor( Math.random() * 10 + 1 ) )
            n++;
            }             
        // check to see if any number in the array passes or fails
        while ( x <= ( d - 1) ) {
            if ( ran[x] > s  || ran[x] == s ) {
                pass++; 
                fail--;
            } else if ( ran[x] == 1 ) {
                pass--; 
                fail++;
            } 
            x++;
        } 
        // tally success rate or failure and return result
        if ( pass == 1 ) {
            rsof = '<p id="rResult" class="runeText" style="color: green">' + 
            pass + " success! With a roll of " + ran + "</p>";
        } else if ( pass >= 2 ) {
            rsof = '<p id="rResult" class="runeText" style="color: green">' + 
                pass + " successes! With a roll of " + ran + "</p>";
        } else if ( ran.length == 0 ) { // disables text for bad input
            rsof = '<p id="rResult" class="runeText"></p>';
        } else if ( ran.length != 0 && pass == 0 && fail == 0 ) {
            rsof = '<p id="rResult" class="runeText">Fail, with a roll of ' +
                ran + '</p>';
        } else if ( pass <= 0 && fail >= 1 ) {
            rsof = '<p id="rResult" class="runeText" style="color: red">' +
            'Botch! With a roll of ' + ran + '</p>';
        } else {
            rsof = '<p id="rResult" class="runeText">Fail, with a roll of ' +
                ran + '</p>';
        }
    }   
    document.getElementById('iEcho').innerText= output;
    document.getElementById('rResult').innerHTML= rsof;
    ran.length = 0;
}
function charRunes() {
    var d = document.getElementById('dice2').value;
    var s = document.getElementById('dScale2').value;
    var ran = []; 
    var n = 1; var x = 0;
    var pass = 0; var fail = 0; 
    var output; var rsof;
    
    if (d == null || d == '' || d > 25 ) {
       output = 'How many dice again?';
       rsof = '';
       ran.length = 0;
    } else if (s == null || s == '' || s >= 11 || s <= 2 ) {
       output = 'How hard of a check?';
       rsof = '';
       ran.length = 0;
    } else {
       output = 'Rolled ' + d + 'd10 on ' + s + '+...';
       while ( n <= d ) {
            ran.push( Math.floor( Math.random() * 10 + 1 ) )
            n++;
        } 
        while ( x <= ( d - 1) ) {
            if ( ran[x] > s  || ran[x] == s ) {
                pass++; 
                fail--;
            } else if ( ran[x] == 1 ) {
                pass--; 
                fail++;
            } 
            x++;
        } 
        if ( pass == 1 ) {
        rsof = '<p id="rResult" class="runeText" style="color: LawnGreen">' + 
            pass + " success!<p></p>With a roll of " + ran + "</p>";
        } else if ( pass >= 2 ) {
            rsof = '<p id="rResult" class="runeText" style="color: LawnGreen">' 
                + pass + " successes!<p></p>With a roll of " + ran + "</p>";
            rsof = '<p id="rResult" class="runeText"></p>';
        } else if ( ran.length != 0 && pass == 0 && fail == 0 ) {
            rsof = '<p id="rResult" class="runeText">Fail.<p></p>With a roll of' 
                + ' ' + ran + '</p>';
        } else if ( pass <= 0 && fail >= 1 ) {
            rsof = '<p id="rResult" class="runeText" style="color: red">' +
                'Botch!<p></p>With a roll of ' + ran + '</p>';
        } else {
            rsof = '<p id="rResult" class="runeText">Fail.<p></p>With a roll of' 
                + ' ' + ran + '</p>';
        }
   }
   document.getElementById('iEcho2').innerText= output;
   document.getElementById('rResult2').innerHTML= rsof;
   ran.length = 0;    
}
/** Functions rpOpen() and rpClose() just make the elements for the dice
 * roller visible and disable/enable the top nav button.
 */
function rpOpen() { 
    rP1.style.display= 'block'; 
    runesBtn.disabled= 'true'; 
}
function rpClose() { 
    rP1.style.display= 'none';
    runesBtn.disabled = !runesBtn.disabled;
}
/** Function notes() will hide the main article area and display the div
 * containing the buttons and textarea for the Notes section.
 */
function switchNotes() {
    chapterMenu.style.display= 'block';
    mainTextArea.style.display= 'block';     
    textBody.style.display= 'none';
    noteBtns.style.display= 'block';
    noteArea.style.display= 'block';
    rP2.style.display= 'none';
    sheet.style.display= 'none';
}
/** Function switchChap will hide the div containing the buttons and
 * text area for the note Section. Then reenable the main article div so 
 * the user can continue to scan the chapters/sections again.
 */
function switchChap() {
    chapterMenu.style.display= 'block';
    mainTextArea.style.display= 'block';     
    textBody.style.display= 'block';
    noteBtns.style.display= 'none';
    noteArea.style.display= 'none';
    rP2.style.display= 'none';
    sheet.style.display= 'none';
}
/** Function getNote() will make a call to the local storage area client-
 * side to grab a previously saved file then load that into the text area
 * so the user can read/edit it.
 */
function getNote(file, location) {
    // using a test file for the moment.
    var x = new XMLHttpRequest();
    x.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var r = JSON.parse(x.responseText);
        document.getElementById('noteArea').innerText= r.note;
        }
    };
    x.open('GET', file, true);
    x.send();
}
/** Function saveNote() will allow the user to save a file to the client-
* side local storage device that can be pulled later on with getNote(). 
* All content in the textArea will be copied to the file.
*/
function saveNote() {
    var note = document.getElementById('noteArea').value;
    var nJSON;
    
    if (note != null && note.length >= 1) {                
        nJSON = '{"note":' + JSON.stringify(note) + '}';
        console.log(nJSON);

        // still learning how to save locally

    } else { alert( 'No text detected...' ); }
}
/** Function clearNote() removes all text from noteArea */
function clearNote() {           
   if ( confirm( 'Are you sure you want to remove all notes? ') ) {
       document.getElementById('noteArea').innerText = "";               
   }
}



/** All of the following functions are going to be used to access 
 * different parts of the main database. The call will come in looking for
 * specific portions, then alter the article div to display the HTML code.
 * All the information in the db has been written as formatted and tagged 
 * HTML allowing them to be stylized upon load. Because some parts will 
 * pull several different db sectors, this pre-fab code helps maintain a 
 * consistant look and feel of the article div/text.
 */
   function changeText() { 
       // until I have the SQL DB up and running, I've put in test code to 
       // make sure everything works. This will be changed later on.        
       document.getElementById('textBody').innerHTML='<p>Half human. Half' +
       ' beast. Predators that stalk the deepest woods and the darkest ' +
       'urban alleyways. Monsters that creep up on their prey like ghosts, '
       + 'open explode into a fury of claws and fangs. Beasts that howl ' +
       'under the full moon and kill those that cross the boundaries of ' +
       'their territory...</p><p><b><i>Werewolves.</i></b></p>';
       
       // adding ability to change back to chapters by clicking on btns
       switchChap();
   }
   function changeBack() { 
       document.getElementById('textBody').innerHTML='<p>And now, for ' +
       'something completely different...</p>';
       switchChap();
   } 
   function change3() {
        document.getElementById('textBody').innerHTML='<p><em>Add some ' +
        'stuff from Ch3...</em></p>';
        switchChap();
   }
   function change4() {
        document.getElementById('textBody').innerHTML='<img src="' + 
        '/resources/wolf.png" width="500" height="500" alt="wolf picture"' +
        '></img>';
        switchChap();
   }
   function change5() {
        document.getElementById('textBody').innerHTML='Add some stuff from' 
        + ' Ch5...';
        switchChap();
   }
   function change6() {
        document.getElementById('textBody').innerHTML='Add some stuff from'
        + ' Ch6...';
        switchChap();
   }
   function change7() {
        document.getElementById('textBody').innerHTML='Add some stuff from'
        + ' Ch7...';
        switchChap();
   }
   function change8() {
        document.getElementById('textBody').innerHTML='Add some stuff from' 
        + ' Ch8...';
        switchChap();
   }
   function change9() {
        document.getElementById('textBody').innerHTML='Add some stuff from' 
        + ' Ch9...';
        switchChap();
   }
   function soupDrinker() {
        document.getElementById('textBody').innerHTML='<p><em>What are you' 
        + ' doing?</em></p><p>It is not time to drink soup!</p>';
        switchChap();
   } 
   /* end of text change functions for the moment */


