/** This file contains all the functions needed to run the WOD : Werewolf page
 */

/** Function print() will grab all text from the noteArea and open a new,
* cleaner CSS sheet for printing.
*/  
function printNote() {
    // this may be un-needed, but only want to print noteArea
    var d = document.getElementById('noteArea').value;
    var etext = d.replace(/\n/g, '</p><p>');
    win = window.open();
                
    win.document.write( '<html><head><link rel="stylesheet" ' + 
        'href="print.css" /><title>Printable Notes</title></head><' +
        'body><header>World of Darkness : Werewolf</header><p>' );
    win.document.write( etext );
    win.document.write( '</p></body></html>' );
}