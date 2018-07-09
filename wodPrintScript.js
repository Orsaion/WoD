
/** This houses the JavaScript needed to handle the print of the pages. The 
 * note section isn't that big, but printing off a the character sheets, filled
 * in or otherwise has a lot of code that needs to be run. 
 */

 /** Function print() will grab all text from the noteArea and open a new,
* cleaner CSS sheet for printing.
*/  
function printNote() {
    var d = document.getElementById('noteArea').value;
    var etext = d.replace(/\n/g, '</p><p>');
    win = window.open();
                
    win.document.write( '<html><head><link rel="stylesheet" ' + 
        'href="print.css" /><title>Printable Notes</title></head><' +
        'body><header>World of Darkness : Werewolf</header><p>' );
    win.document.write( etext );
    win.document.write( '</p></body></html>' );
    setTimeout( function() { win.print(); }, 750 );
} 
/** Function printChar() will allow the user to print off a stylized blank 
 * character sheet.It opens a new page and calls the print CSS to style it 
 * correctly. 
 */
function printCharBlank() {
    var img = 
        '<img src="/resources/logo.png" width="250" height="96" alt="WoD:W logo'
            + '">';
    win = window.open();
                    
    win.document.write( '<html><head><link rel="stylesheet" href="print.css" />'
        + '</head><body>' + img + '<div><br />');
    win.document.write( '<div id="NPC" class="topArea">Name:<br /><br />Player:'
        + '<br /><br />Chronicle:<br /><br /></div><div id="BAT" class='
        + '"topArea">Breed:<br /><br />Auspice:<br /><br />Tribe:<br /><br />' +
        '</div><div id="PPC" class="topArea">Pack-Name:<br /><br />Pack-Totem:'
        + '<br /><br/>Concept:<br /><br /></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/attributes'
        + '.png" width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="attributes"><p>Physical</p>Strength:<br />'
        + '<input type="radio"><input type="radio"><input type="radio"><input' +
        ' type="radio"><input type="radio"><br />Dexterity:<br /><input type=' +
        '"radio"><input type="radio"><input type="radio"><input type="radio">' +
        '<input type="radio"><br />Stamina:<br /><input type="radio"><input ' +
        'type="radio"><input type="radio"><input type="radio"><input type="' +
        'radio"></div>' );
    win.document.write( '<div class="attributes"><p>Social</p>Charisma:<br />' +
        '<input type="radio"><input type="radio"><input type="radio"><input ' +
        'type="radio"><input type="radio"><br />Manipulation:<br /><input type'
        + '="radio"><input type="radio"><input type="radio"><input type="radio"'
        + '><input type="radio"><br />Appearance:<br /><input type="radio">' +
        '<input type="radio"><input type="radio"><input type="radio"><input ' +
        'type="radio"></div>' );
    win.document.write( '<div class="attributes"><p>Mental</p>Perception:<br />'
        + '<input type="radio"><input type="radio"><input type="radio"><input' +
        ' type="radio"><input type="radio"><br />Intelligence:<br /><input type'
        + '="radio"><input type="radio"><input type="radio"><input type="radio"'
        + '><input type="radio"><br />Wits:<br /><input type="radio"><input ' +
        'type="radio"><input type="radio"><input type="radio"><input type="' +
        'radio"></div></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/abilities.'
        + 'png" width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="abilities"><p>Talents</p>Alertness:<br />' 
        + '<input type="radio"><input type="radio"><input type="radio"><input ' 
        + 'type="radio"><input type="radio"><br />Athletics:<br /><input type=' 
        + '"radio"><input type="radio"><input type="radio"><input type="radio">'
        + '<input type="radio"><br />Brawl:<br /><input type="radio"><input ' +
        'type="radio"><input type="radio"><input type="radio"><input type="' +
        'radio"><br />Dodge:<br /><input type="radio"><input type="radio"><' +
        'input type="radio"><input type="radio"><input type="radio"><br />' +
        'Empathy:<br /><input type="radio"><input type="radio"><input type="' +
        'radio"><input type="radio"><input type="radio"><br />Expression:<br />'
        + '<input type="radio"><input type="radio"><input type="radio"><input '
        + 'type="radio"><input type="radio"><br />Intimidation:<br /><input ' +
        'type="radio"><input type="radio"><input type="radio"><input type="' +
        'radio"><input type="radio"><br />Primal-Urge:<br /><input type="radio"'
        + '><input type="radio"><input type="radio"><input type="radio"><input '
        + 'type="radio"><br />Streetwise:<br /><input type="radio"><input type='
        + '"radio"><input type="radio"><input type="radio"><input type="radio"' 
        + '><br />Subterfuge:<br /><input type="radio"><input type="radio"> ' +
        '<input type="radio"><input type="radio"><input type="radio"></div>' );
    win.document.write( '<div class="abilities"><p>Skills</p>Animal-Ken:<br ' + 
        '/><input type="radio"><input type="radio"><input type="radio"><input '
        + 'type="radio"><input type="radio"><br />Crafts:<br /><input type="' +
        'radio"><input type="radio"><input type="radio"><input type="radio">' +
        '<input type="radio"><br />Drive:<br /><input type="radio"><input type'
        + '="radio"><input type="radio"><input type="radio"><input type="radio"'
        + '><br />Etiquette:<br /><input type="radio"><input type="radio"><' +
        'input type="radio"><input type="radio"><input type="radio"><br />' +
        'Firearms:<br /><input type="radio"><input type="radio"><input type="' +
        'radio"><input type="radio"><input type="radio"><br />Leadership:<br />'
        + '<input type="radio"><input type="radio"><input type="radio"><input ' 
        + 'type="radio"><input type="radio"><br />Melee:<br /><input type="' +
        'radio"><input type="radio"><input type="radio"><input type="radio"><' +
        'input type="radio"><br />Performance:<br /><input type="radio"><input '
        + 'type="radio"><input type="radio"><input type="radio"><input type="' +
        'radio"><br />Stealth:<br /><input type="radio"><input type="radio"><' +
        'input type="radio"><input type="radio"><input type="radio"><br />' +
        'Survival:<br /><input type="radio"><input type="radio"><input type="' +
        'radio"><input type="radio"><input type="radio"></div>' );
    win.document.write( '<div class="abilities"><p>Knowledges</p>Computer:<br' +
        ' /><input type="radio"><input type="radio"><input type="radio"><input '
        + 'type="radio"><input type="radio"><br />Enigmas:<br /><input type="' +
        'radio"><input type="radio"><input type="radio"><input type="radio"><' +
        'input type="radio"><br />Investigation:<br /><input type="radio"><' +
        'input type="radio"><input type="radio"><input type="radio"><input type'
        + '="radio"><br />Law:<br /><input type="radio"><input type="radio"><' +
        'input type="radio"><input type="radio"><input type="radio"><br />' +
        'Lingustics:<br /><input type="radio"><input type="radio"><input type' +
        '="radio"><input type="radio"><input type="radio"><br />Medicine:<br />'
        + '<input type="radio"><input type="radio"><input type="radio"><input ' 
        + 'type="radio"><input type="radio"><br />Occult:<br /><input type="' +
        'radio"><input type="radio"><input type="radio"><input type="radio"><' +
        'input type="radio"><br />Politics:<br /><input type="radio"><input ' +
        'type="radio"><input type="radio"><input type="radio"><input type="' +
        'radio"><br />Rituals:<br /><input type="radio"><input type="radio"><' +
        'input type="radio"><input type="radio"><input type="radio"><br />' +
        'Science:<br /><input type="radio"><input type="radio"><input type="' +
        'radio"><input type="radio"><input type="radio"></div></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/advantages'
        + '.png" width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="advantages1"><p>Backgrounds</p><br /><' + 
        'input type="radio"><input type="radio"><input type="radio"><input type'
        + '="radio"><input type="radio"><br /><br /><br /><input type="radio"><'
        + 'input type="radio"><input type="radio"><input type="radio"><input ' +
        'type="radio"><br /><br /><br /><input type="radio"><input type="radio"'
        + '><input type="radio"><input type="radio"><input type="radio"><br />'
        + '<br /><br /><input type="radio"><input type="radio"><input type="' +
        'radio"><input type="radio"><input type="radio"><br /><br /><br /><' +
        'input type="radio"><input type="radio"><input type="radio""><input ' +
        'type="radio"><input type="radio"></div>' );
    win.document.write( '<div class="advantages2"><p>Gifts</p></textarea>' +
        '</div></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/sep.png"' +
        'width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="lowerArea">Glory<br /><input type="radio"' 
    + '><input type="radio"><input type="radio"><input type="radio"><input type'
    + '="radio"><br /><input type="radio"><input type="radio"><input type="' +
    'radio"><input type="radio"><input type="radio""><br /><br /><input type="'
    + 'checkbox"><input type="checkbox"><input type="checkbox"><input type="' +
    'checkbox"><input type="checkbox"><br /><input type="checkbox"><input type='
    + '"checkbox"><input type="checkbox"><input type="checkbox"><input type="' +
    'checkbox"><br /><br />Honor<br /><input type="radio"><input type="radio"><'
    + 'input type="radio"><input type="radio"><input type="radio"><br /><input '
    + 'type="radio"><input type="radio"><input type="radio"><input type="radio"'
    + '><input type="radio"><br /><br /><input type="checkbox"><input type="' +
    'checkbox"><input type="checkbox"><input type="checkbox"><input type="' +
    'checkbox"><br /><input type="checkbox"><input type="checkbox"><input type='
    + '"checkbox"><input type="checkbox"><input type="checkbox"><br /><br />' +
    'Wisdom<br /><input type="radio"><input type="radio"><input type="radio"><'
    + 'input type="radio"><input type="radio"><br /><input type="radio"><input '
    + 'type="radio"><input type="radio"><input type="radio"><input type="radio"'
    + '><br /><input type="checkbox"><input type="checkbox"><input type="' +
    'checkbox"><input type="checkbox"><input type="checkbox"><br /><input type='
    + '"checkbox"><input type="checkbox"><input type="checkbox"><input type="' +
    'checkbox"><input type="checkbox"></div>' );
    win.document.write( '<div class="lowerArea">Rage<br /><input type="radio"' + 
        '><input type="radio"><input type="radio"><input type="radio"><input ' +
        'type="radio"><br /><input type="radio"><input type="radio"><input type'
        + '="radio"><input type="radio"><input type="radio"><br /><br /><input '
        + 'type="checkbox"><input type="checkbox"><input type="checkbox"><input'
        + ' type="checkbox"><input type="checkbox"><br /><input type="checkbox"'
        + '><input type="checkbox"><input type="checkbox"><input type="' +
        'checkbox"><input type="checkbox"><br /><br />Gnosis<br /><input type='
        + '"radio"><input type="radio"><input type="radio"><input type="radio"'
        + '><input type="radio"><br /><input type="radio"><input type="radio"' +
        '><input type="radio"><input type="radio"><input type="radio"><br /><br'
        + ' /><input type="checkbox"><input type="checkbox"><input type="' +
        'checkbox"><input type="checkbox"><input type="checkbox"><br /><input' +
        ' type="checkbox"><input type="checkbox"><input type="checkbox"><input '
        + 'type="checkbox"><input type="checkbox"><br /><br />Willpower<br /><' 
        + 'input type="radio"><input type="radio"><input type="radio"><input ' +
        'type="radio"><input type="radio"><br /><input type="radio"><input type'
        + '="radio"><input type="radio"><input type="radio"><input type="radio"'
        + '><br /><br /><input type="checkbox"><input type="checkbox"><input ' +
        'type="checkbox"><input type="checkbox"><input type="checkbox"><br /><'
        + 'input type="checkbox"><input type="checkbox"><input type="checkbox"' 
        + '><input type="checkbox"><input type="checkbox"></div>' );
    win.document.write( '<div class="lowerArea"><p>Health</p><input type="' +
        'checkbox">Brused<br />-1<input type="checkbox">Hurt<br />-1<input type'
        + '="checkbox">Injured<br />-2<input type="checkbox">Wounded<br />-2<' +
        'input type="checkbox">Mauled<br />-5<input type="checkbox">Crippled<br'
        + ' /><input type="checkbox">Incapicated<br /><p>Rank</p><br /><p>' +
        'Experience</p></div></div>' );
    win.document.write( '</body></html>' );
    setTimeout( function() { win.print(); }, 750 );    
}
/** Function printChar() will allow the user to print off a filled out character
 * sheet based off the input they have provided on the character sheet area. It 
 * opens a new page and calls the print CSS to style it correctly.
 */
function printChar() {
    // top area
    var img = 
        '<img src="/resources/logo.png" width="250" height="96" alt="WoD:W logo'
        + '">';
    var name = document.getElementById('cName').value;
    var player = document.getElementById('cPlayer').value;
    var chron = document.getElementById('cChronicle').value;
    var breed = document.getElementById('cBreed').value;
    var ausp = document.getElementById('cAuspice').value;
    var tribe = document.getElementById('cTribe').value;
    var pn = document.getElementById('cPackName').value;
    var pt = document.getElementById('cPackTotem').value;
    var concept = document.getElementById('cConcept').value;
    // attributes
    var str1 = document.getElementById('str1').checked;
    var str2 = document.getElementById('str2').checked;
    var str3 = document.getElementById('str3').checked;
    var str4 = document.getElementById('str4').checked;
    var str5 = document.getElementById('str5').checked;
    var cstr1; var cstr2; var cstr3; var cstr4; var cstr5;
    var dex1 = document.getElementById('dex1').checked;
    var dex2 = document.getElementById('dex2').checked;
    var dex3 = document.getElementById('dex3').checked;
    var dex4 = document.getElementById('dex4').checked;
    var dex5 = document.getElementById('dex5').checked;
    var cdex1; var cdex2; var cdex3; var cdex4; var cdex5;
    var stam1 = document.getElementById('stam1').checked;
    var stam2 = document.getElementById('stam2').checked;
    var stam3 = document.getElementById('stam3').checked;
    var stam4 = document.getElementById('stam4').checked;
    var stam5 = document.getElementById('stam5').checked;   
    var cstam1; var cstam2; var cstam3; var cstam4; var cstam5;
    var cha1 = document.getElementById('cha1').checked;
    var cha2 = document.getElementById('cha2').checked;
    var cha3 = document.getElementById('cha3').checked;
    var cha4 = document.getElementById('cha4').checked;
    var cha5 = document.getElementById('cha5').checked;
    var ccha1; var ccha2; var ccha3; var ccha4; var ccha5;
    var mani1 = document.getElementById('mani1').checked;
    var mani2 = document.getElementById('mani2').checked;
    var mani3 = document.getElementById('mani3').checked;
    var mani4 = document.getElementById('mani4').checked;
    var mani5 = document.getElementById('mani5').checked;
    var cmani1; var cmani2; var cmani3; var cmani4; var cmani5; 
    var app1 = document.getElementById('app1').checked;
    var app2 = document.getElementById('app2').checked;
    var app3 = document.getElementById('app3').checked;
    var app4 = document.getElementById('app4').checked;
    var app5 = document.getElementById('app5').checked;
    var capp1; var capp2; var capp3; var capp4; var capp5; 
    var percep1 = document.getElementById('percep1').checked;
    var percep2 = document.getElementById('percep2').checked;
    var percep3 = document.getElementById('percep3').checked;
    var percep4 = document.getElementById('percep4').checked;
    var percep5 = document.getElementById('percep5').checked;
    var cpercep1; var cpercep2; var cpercep3; var cpercep4; var cpercep5; 
    var int1 = document.getElementById('int1').checked; 
    var int2 = document.getElementById('int2').checked; 
    var int3 = document.getElementById('int3').checked; 
    var int4 = document.getElementById('int4').checked; 
    var int5 = document.getElementById('int5').checked;
    var cint1; var cint2; var cint3; var cint4; var cint5; 
    var wit1 = document.getElementById('wit1').checked;
    var wit2 = document.getElementById('wit2').checked;
    var wit3 = document.getElementById('wit3').checked;
    var wit4 = document.getElementById('wit4').checked;
    var wit5 = document.getElementById('wit5').checked;
    var cwit1; var cwit2; var cwit3; var cwit4; var cwit5; 
    // abilities - Talents
    var alert1 = document.getElementById('alert1').checked;
    var alert2 = document.getElementById('alert2').checked;
    var alert3 = document.getElementById('alert3').checked;
    var alert4 = document.getElementById('alert4').checked;
    var alert5 = document.getElementById('alert5').checked;
    var calert1; var calert2; var calert3; var calert4; var calert5;
    var ath1 = document.getElementById('ath1').checked;
    var ath2 = document.getElementById('ath2').checked;
    var ath3 = document.getElementById('ath3').checked;
    var ath4 = document.getElementById('ath4').checked;
    var ath5 = document.getElementById('ath5').checked;
    var cath1; var cath2; var cath3; var cath4; var cath5;
    var brawl1 = document.getElementById('brawl1').checked;
    var brawl2 = document.getElementById('brawl2').checked;
    var brawl3 = document.getElementById('brawl3').checked;
    var brawl4 = document.getElementById('brawl4').checked;
    var brawl5 = document.getElementById('brawl5').checked;   
    var cbrawl1; var cbrawl2; var cbrawl3; var cbrawl4; var cbrawl5;
    var dodge1 = document.getElementById('dodge1').checked;
    var dodge2 = document.getElementById('dodge2').checked;
    var dodge3 = document.getElementById('dodge3').checked;
    var dodge4 = document.getElementById('dodge4').checked;
    var dodge5 = document.getElementById('dodge5').checked;
    var cdodge1; var cdodge2; var cdodge3; var cdodge4; var cdodge5;
    var emp1 = document.getElementById('emp1').checked;
    var emp2 = document.getElementById('emp2').checked;
    var emp3 = document.getElementById('emp3').checked;
    var emp4 = document.getElementById('emp4').checked;
    var emp5 = document.getElementById('emp5').checked;
    var cemp1; var cemp2; var cemp3; var cemp4; var cemp5; 
    var expre1 = document.getElementById('expre1').checked;
    var expre2 = document.getElementById('expre2').checked;
    var expre3 = document.getElementById('expre3').checked;
    var expre4 = document.getElementById('expre4').checked;
    var expre5 = document.getElementById('expre5').checked;
    var cexpre1; var cexpre2; var cexpre3; var cexpre4; var cexpre5;
    var intim1 = document.getElementById('intim1').checked;
    var intim2 = document.getElementById('intim2').checked;
    var intim3 = document.getElementById('intim3').checked;
    var intim4 = document.getElementById('intim4').checked;
    var intim5 = document.getElementById('intim5').checked;
    var cintim1; var cintim2; var cintim3; var cintim4; var cintim5; 
    var pu1 = document.getElementById('pu1').checked; 
    var pu2 = document.getElementById('pu2').checked; 
    var pu3 = document.getElementById('pu3').checked; 
    var pu4 = document.getElementById('pu4').checked; 
    var pu5 = document.getElementById('pu5').checked;
    var cpu1; var cpu2; var cpu3; var cpu4; var cpu5; 
    var wise1 = document.getElementById('wise1').checked;
    var wise2 = document.getElementById('wise2').checked;
    var wise3 = document.getElementById('wise3').checked;
    var wise4 = document.getElementById('wise4').checked;
    var wise5 = document.getElementById('wise5').checked;
    var cwise1; var cwise2; var cwise3; var cwise4; var cwise5; 
    var sub1 = document.getElementById('sub1').checked;
    var sub2 = document.getElementById('sub2').checked;
    var sub3 = document.getElementById('sub3').checked;
    var sub4 = document.getElementById('sub4').checked;
    var sub5 = document.getElementById('sub5').checked;
    var csub1; var csub2; var csub3; var csub4; var csub5; 
    // abilities - Skills
    var ken1 = document.getElementById('ken1').checked;
    var ken2 = document.getElementById('ken2').checked;
    var ken3 = document.getElementById('ken3').checked;
    var ken4 = document.getElementById('ken4').checked;
    var ken5 = document.getElementById('ken5').checked;
    var cken1; var cken2; var cken3; var cken4; var cken5;
    var craft1 = document.getElementById('craft1').checked;
    var craft2 = document.getElementById('craft2').checked;
    var craft3 = document.getElementById('craft3').checked;
    var craft4 = document.getElementById('craft4').checked;
    var craft5 = document.getElementById('craft5').checked;
    var ccraft1; var ccraft2; var ccraft3; var ccraft4; var ccraft5;
    var drive1 = document.getElementById('drive1').checked;
    var drive2 = document.getElementById('drive2').checked;
    var drive3 = document.getElementById('drive3').checked;
    var drive4 = document.getElementById('drive4').checked;
    var drive5 = document.getElementById('drive5').checked;   
    var cdrive1; var cdrive2; var cdrive3; var cdrive4; var cdrive5;
    var eti1 = document.getElementById('eti1').checked;
    var eti2 = document.getElementById('eti2').checked;
    var eti3 = document.getElementById('eti3').checked;
    var eti4 = document.getElementById('eti4').checked;
    var eti5 = document.getElementById('eti5').checked;
    var ceti1; var ceti2; var ceti3; var ceti4; var ceti5;
    var gun1 = document.getElementById('gun1').checked;
    var gun2 = document.getElementById('gun2').checked;
    var gun3 = document.getElementById('gun3').checked;
    var gun4 = document.getElementById('gun4').checked;
    var gun5 = document.getElementById('gun5').checked;
    var cgun1; var cgun2; var cgun3; var cgun4; var cgun5; 
    var lead1 = document.getElementById('lead1').checked;
    var lead2 = document.getElementById('lead2').checked;
    var lead3 = document.getElementById('lead3').checked;
    var lead4 = document.getElementById('lead4').checked;
    var lead5 = document.getElementById('lead5').checked;
    var clead1; var clead2; var clead3; var clead4; var clead5; 
    var melee1 = document.getElementById('melee1').checked;
    var melee2 = document.getElementById('melee2').checked;
    var melee3 = document.getElementById('melee3').checked;
    var melee4 = document.getElementById('melee4').checked;
    var melee5 = document.getElementById('melee5').checked;
    var cmelee1; var cmelee2; var cmelee3; var cmelee4; var cmelee5; 
    var perf1 = document.getElementById('perf1').checked; 
    var perf2 = document.getElementById('perf2').checked; 
    var perf3 = document.getElementById('perf3').checked; 
    var perf4 = document.getElementById('perf4').checked; 
    var perf5 = document.getElementById('perf5').checked;
    var cperf1; var cperf2; var cperf3; var cperf4; var cperf5; 
    var hide1 = document.getElementById('hide1').checked;
    var hide2 = document.getElementById('hide2').checked;
    var hide3 = document.getElementById('hide3').checked;
    var hide4 = document.getElementById('hide4').checked;
    var hide5 = document.getElementById('hide5').checked;
    var chide1; var chide2; var chide3; var chide4; var chide5; 
    var suv1 = document.getElementById('suv1').checked;
    var suv2 = document.getElementById('suv2').checked;
    var suv3 = document.getElementById('suv3').checked;
    var suv4 = document.getElementById('suv4').checked;
    var suv5 = document.getElementById('suv5').checked;
    var csuv1; var csuv2; var csuv3; var csuv4; var csuv5; 
    // abilities - Knowledges
    var com1 = document.getElementById('com1').checked;
    var com2 = document.getElementById('com2').checked;
    var com3 = document.getElementById('com3').checked;
    var com4 = document.getElementById('com4').checked;
    var com5 = document.getElementById('com5').checked;
    var ccom1; var ccom2; var ccom3; var ccom4; var ccom5;
    var e1 = document.getElementById('e1').checked;
    var e2 = document.getElementById('e2').checked;
    var e3 = document.getElementById('e3').checked;
    var e4 = document.getElementById('e4').checked;
    var e5 = document.getElementById('e5').checked;
    var ce1; var ce2; var ce3; var ce4; var ce5;
    var inv1 = document.getElementById('inv1').checked;
    var inv2 = document.getElementById('inv2').checked;
    var inv3 = document.getElementById('inv3').checked;
    var inv4 = document.getElementById('inv4').checked;
    var inv5 = document.getElementById('inv5').checked;   
    var cinv1; var cinv2; var cinv3; var cinv4; var cinv5;
    var law1 = document.getElementById('law1').checked;
    var law2 = document.getElementById('law2').checked;
    var law3 = document.getElementById('law3').checked;
    var law4 = document.getElementById('law4').checked;
    var law5 = document.getElementById('law5').checked;
    var claw1; var claw2; var claw3; var claw4; var claw5;
    var ling1 = document.getElementById('ling1').checked;
    var ling2 = document.getElementById('ling2').checked;
    var ling3 = document.getElementById('ling3').checked;
    var ling4 = document.getElementById('ling4').checked;
    var ling5 = document.getElementById('ling5').checked;
    var cling1; var cling2; var cling3; var cling4; var cling5; 
    var med1 = document.getElementById('med1').checked;
    var med2 = document.getElementById('med2').checked;
    var med3 = document.getElementById('med3').checked;
    var med4 = document.getElementById('med4').checked;
    var med5 = document.getElementById('med5').checked;
    var cmed1; var cmed2; var cmed3; var cmed4; var cmed5; 
    var cult1 = document.getElementById('cult1').checked;
    var cult2 = document.getElementById('cult2').checked;
    var cult3 = document.getElementById('cult3').checked;
    var cult4 = document.getElementById('cult4').checked;
    var cult5 = document.getElementById('cult5').checked;
    var ccult1; var ccult2; var ccult3; var ccult4; var ccult5; 
    var pol1 = document.getElementById('pol1').checked; 
    var pol2 = document.getElementById('pol2').checked; 
    var pol3 = document.getElementById('pol3').checked; 
    var pol4 = document.getElementById('pol4').checked; 
    var pol5 = document.getElementById('pol5').checked;
    var cpol1; var cpol2; var cpol3; var cpol4; var cpol5; 
    var rit1 = document.getElementById('rit1').checked;
    var rit2 = document.getElementById('rit2').checked;
    var rit3 = document.getElementById('rit3').checked;
    var rit4 = document.getElementById('rit4').checked;
    var rit5 = document.getElementById('rit5').checked;
    var crit1; var crit2; var crit3; var crit4; var crit5;  
    var sci1 = document.getElementById('sci1').checked;
    var sci2 = document.getElementById('sci2').checked;
    var sci3 = document.getElementById('sci3').checked;
    var sci4 = document.getElementById('sci4').checked;
    var sci5 = document.getElementById('sci5').checked;
    var csci1; var csci2; var csci3; var csci4; var csci5;     
    // advantages
    var bg1 = document.getElementById('bg1').value;  
    var bg1dot1 = document.getElementById('bg1dot1').checked;
    var bg1dot2 = document.getElementById('bg1dot2').checked;
    var bg1dot3 = document.getElementById('bg1dot3').checked;
    var bg1dot4 = document.getElementById('bg1dot4').checked;
    var bg1dot5 = document.getElementById('bg1dot5').checked;
    var cbg1dot1; var cbg1dot2; var cbg1dot3; var cbg1dot4; var cbg1dot5;  
    var bg2 = document.getElementById('bg2').value;  
    var bg2dot1 = document.getElementById('bg2dot1').checked;
    var bg2dot2 = document.getElementById('bg2dot2').checked;
    var bg2dot3 = document.getElementById('bg2dot3').checked;
    var bg2dot4 = document.getElementById('bg2dot4').checked;
    var bg2dot5 = document.getElementById('bg2dot5').checked;
    var cbg2dot1; var cbg2dot2; var cbg2dot3; var cbg2dot4; var cbg2dot5;  
    var bg3 = document.getElementById('bg3').value;  
    var bg3dot1 = document.getElementById('bg3dot1').checked;
    var bg3dot2 = document.getElementById('bg3dot2').checked;
    var bg3dot3 = document.getElementById('bg3dot3').checked;
    var bg3dot4 = document.getElementById('bg3dot4').checked;
    var bg3dot5 = document.getElementById('bg3dot5').checked;
    var cbg3dot1; var cbg3dot2; var cbg3dot3; var cbg3dot4; var cbg3dot5;  
    var bg4 = document.getElementById('bg4').value;  
    var bg4dot1 = document.getElementById('bg4dot1').checked;
    var bg4dot2 = document.getElementById('bg4dot2').checked;
    var bg4dot3 = document.getElementById('bg4dot3').checked;
    var bg4dot4 = document.getElementById('bg4dot4').checked;
    var bg4dot5 = document.getElementById('bg4dot5').checked;
    var cbg4dot1; var cbg4dot2; var cbg4dot3; var cbg4dot4; var cbg4dot5;  
    var bg5 = document.getElementById('bg5').value;  
    var bg5dot1 = document.getElementById('bg5dot1').checked;
    var bg5dot2 = document.getElementById('bg5dot2').checked;
    var bg5dot3 = document.getElementById('bg5dot3').checked;
    var bg5dot4 = document.getElementById('bg5dot4').checked;
    var bg5dot5 = document.getElementById('bg5dot5').checked;
    var cbg5dot1; var cbg5dot2; var cbg5dot3; var cbg5dot4; var cbg5dot5;  
    var gifts = document.getElementById('gifts').value; 
    // lower area - renown
    var glory1 = document.getElementById('glory1').checked;
    var glory2 = document.getElementById('glory2').checked;
    var glory3 = document.getElementById('glory3').checked;
    var glory4 = document.getElementById('glory4').checked;
    var glory5 = document.getElementById('glory5').checked;
    var glory6 = document.getElementById('glory6').checked;
    var glory7 = document.getElementById('glory7').checked;
    var glory8 = document.getElementById('glory8').checked;
    var glory9 = document.getElementById('glory9').checked;
    var glory0 = document.getElementById('glory0').checked;
    var cglory1; var cglory2; var cglory3; var cglory4; var cglory5;
    var cglory6; var cglory7; var cglory8; var cglory9; var cglory0;
    var tglory1 = document.getElementById('tglory1').checked;
    var tglory2 = document.getElementById('tglory2').checked;
    var tglory3 = document.getElementById('tglory3').checked;
    var tglory4 = document.getElementById('tglory4').checked;
    var tglory5 = document.getElementById('tglory5').checked;
    var tglory6 = document.getElementById('tglory6').checked;
    var tglory7 = document.getElementById('tglory7').checked;
    var tglory8 = document.getElementById('tglory8').checked;
    var tglory9 = document.getElementById('tglory9').checked;
    var tglory0 = document.getElementById('tglory0').checked;
    var ctglory1; var ctglory2; var ctglory3; var ctglory4; var ctglory5;
    var ctglory6; var ctglory7; var ctglory8; var ctglory9; var ctglory0;
    var honor1 = document.getElementById('honor1').checked;
    var honor2 = document.getElementById('honor2').checked;
    var honor3 = document.getElementById('honor3').checked;
    var honor4 = document.getElementById('honor4').checked;
    var honor5 = document.getElementById('honor5').checked;
    var honor6 = document.getElementById('honor6').checked;
    var honor7 = document.getElementById('honor7').checked;
    var honor8 = document.getElementById('honor8').checked;
    var honor9 = document.getElementById('honor9').checked;
    var honor0 = document.getElementById('honor0').checked;
    var chonor1; var chonor2; var chonor3; var chonor4; var chonor5; 
    var chonor6; var chonor7; var chonor8; var chonor9; var chonor0;
    var thonor1 = document.getElementById('thonor1').checked;
    var thonor2 = document.getElementById('thonor2').checked;
    var thonor3 = document.getElementById('thonor3').checked;
    var thonor4 = document.getElementById('thonor4').checked;
    var thonor5 = document.getElementById('thonor5').checked;
    var thonor6 = document.getElementById('thonor6').checked;
    var thonor7 = document.getElementById('thonor7').checked;
    var thonor8 = document.getElementById('thonor8').checked;
    var thonor9 = document.getElementById('thonor9').checked;
    var thonor0 = document.getElementById('thonor0').checked;
    var cthonor1; var cthonor2; var cthonor3; var cthonor4; var cthonor5; 
    var cthonor6; var cthonor7; var cthonor8; var cthonor9; var cthonor0;
    var wis1 = document.getElementById('wis1').checked;
    var wis2 = document.getElementById('wis2').checked;
    var wis3 = document.getElementById('wis3').checked;
    var wis4 = document.getElementById('wis4').checked;
    var wis5 = document.getElementById('wis5').checked;
    var wis6 = document.getElementById('wis6').checked;
    var wis7 = document.getElementById('wis7').checked;
    var wis8 = document.getElementById('wis8').checked;
    var wis9 = document.getElementById('wis9').checked;
    var wis0 = document.getElementById('wis0').checked;
    var cwis1; var cwis2; var cwis3; var cwis4; var cwis5; 
    var cwis6; var cwis7; var cwis8; var cwis9; var cwis0; 
    var twis1 = document.getElementById('twis1').checked;
    var twis2 = document.getElementById('twis2').checked;
    var twis3 = document.getElementById('twis3').checked;
    var twis4 = document.getElementById('twis4').checked;
    var twis5 = document.getElementById('twis5').checked;
    var twis6 = document.getElementById('twis6').checked;
    var twis7 = document.getElementById('twis7').checked;
    var twis8 = document.getElementById('twis8').checked;
    var twis9 = document.getElementById('twis9').checked;
    var twis0 = document.getElementById('twis0').checked;
    var ctwis1; var ctwis2; var ctwis3; var ctwis4; var ctwis5; 
    var ctwis6; var ctwis7; var ctwis8; var ctwis9; var ctwis0; 
    // lower area 
    var rage1 = document.getElementById('rage1').checked;
    var rage2 = document.getElementById('rage2').checked;
    var rage3 = document.getElementById('rage3').checked;
    var rage4 = document.getElementById('rage4').checked;
    var rage5 = document.getElementById('rage5').checked;
    var rage6 = document.getElementById('rage6').checked;
    var rage7 = document.getElementById('rage7').checked;
    var rage8 = document.getElementById('rage8').checked;
    var rage9 = document.getElementById('rage9').checked;
    var rage0 = document.getElementById('rage0').checked;
    var crage1; var crage2; var crage3; var crage4; var crage5; 
    var crage6; var crage7; var crage8; var crage9; var crage0; 
    var trage1 = document.getElementById('trage1').checked;
    var trage2 = document.getElementById('trage2').checked;
    var trage3 = document.getElementById('trage3').checked;
    var trage4 = document.getElementById('trage4').checked;
    var trage5 = document.getElementById('trage5').checked;
    var trage6 = document.getElementById('trage6').checked;
    var trage7 = document.getElementById('trage7').checked;
    var trage8 = document.getElementById('trage8').checked;
    var trage9 = document.getElementById('trage9').checked;
    var trage0 = document.getElementById('trage0').checked;
    var ctrage1; var ctrage2; var ctrage3; var ctrage4; var ctrage5; 
    var ctrage6; var ctrage7; var ctrage8; var ctrage9; var ctrage0;
    var gno1 = document.getElementById('gno1').checked;
    var gno2 = document.getElementById('gno2').checked;
    var gno3 = document.getElementById('gno3').checked;
    var gno4 = document.getElementById('gno4').checked;
    var gno5 = document.getElementById('gno5').checked;
    var gno6 = document.getElementById('gno6').checked;
    var gno7 = document.getElementById('gno7').checked;
    var gno8 = document.getElementById('gno8').checked;
    var gno9 = document.getElementById('gno9').checked;
    var gno0 = document.getElementById('gno0').checked;
    var cgno1; var cgno2; var cgno3; var cgno4; var cgno5; 
    var cgno6; var cgno7; var cgno8; var cgno9; var cgno0; 
    var tgno1 = document.getElementById('tgno1').checked;
    var tgno2 = document.getElementById('tgno2').checked;
    var tgno3 = document.getElementById('tgno3').checked;
    var tgno4 = document.getElementById('tgno4').checked;
    var tgno5 = document.getElementById('tgno5').checked;
    var tgno6 = document.getElementById('tgno6').checked;
    var tgno7 = document.getElementById('tgno7').checked;
    var tgno8 = document.getElementById('tgno8').checked;
    var tgno9 = document.getElementById('tgno9').checked;
    var tgno0 = document.getElementById('tgno0').checked;
    var ctgno1; var ctgno2; var ctgno3; var ctgno4; var ctgno5; 
    var ctgno6; var ctgno7; var ctgno8; var ctgno9; var ctgno0; 
    var will1 = document.getElementById('will1').checked;
    var will2 = document.getElementById('will2').checked;
    var will3 = document.getElementById('will3').checked;
    var will4 = document.getElementById('will4').checked;
    var will5 = document.getElementById('will5').checked;
    var will6 = document.getElementById('will6').checked;
    var will7 = document.getElementById('will7').checked;
    var will8 = document.getElementById('will8').checked;
    var will9 = document.getElementById('will9').checked;
    var will0 = document.getElementById('will0').checked;
    var cwill1; var cwill2; var cwill3; var cwill4; var cwill5; 
    var cwill6; var cwill7; var cwill8; var cwill9; var cwill0;  
    var twill1 = document.getElementById('twill1').checked;
    var twill2 = document.getElementById('twill2').checked;
    var twill3 = document.getElementById('twill3').checked;
    var twill4 = document.getElementById('twill4').checked;
    var twill5 = document.getElementById('twill5').checked;
    var twill6 = document.getElementById('twill6').checked;
    var twill7 = document.getElementById('twill7').checked;
    var twill8 = document.getElementById('twill8').checked;
    var twill9 = document.getElementById('twill9').checked;
    var twill0 = document.getElementById('twill0').checked;
    var ctwill1; var ctwill2; var ctwill3; var ctwill4; var ctwill5; 
    var ctwill6; var ctwill7; var ctwill8; var ctwill9; var ctwill0; 
    var bru = document.getElementById('Brused').checked;
    var hurt = document.getElementById('Hurt').checked;
    var inj = document.getElementById('Injured').checked;
    var wound = document.getElementById('Wounded').checked;
    var maul = document.getElementById('Mauled').checked;
    var crip = document.getElementById('Crippled').checked;
    var incap = document.getElementById('Incapicated').checked;
    var cbru; var churt; var cinj; var cwound; var cmaul; var ccrip; var cincap;
    var cRank = document.getElementById('cRank').value;
    var cExp = document.getElementById('cEXP').value;

    // if value is checked make cvalue ' checked' to check the box in html code
    // parse the chosen fields from Attributes 
    if (str1 == true) {cstr1 = ' checked';} else {cstr1 = '';}
    if (str2 == true) {cstr2 = ' checked';} else {cstr2 = '';}
    if (str3 == true) {cstr3 = ' checked';} else {cstr3 = '';}
    if (str4 == true) {cstr4 = ' checked';} else {cstr4 = '';}
    if (str5 == true) {cstr5 = ' checked';} else {cstr5 = '';}
    if (dex1 == true) {cdex1 = ' checked';} else {cdex1 = '';}
    if (dex2 == true) {cdex2 = ' checked';} else {cdex2 = '';}
    if (dex3 == true) {cdex3 = ' checked';} else {cdex3 = '';}
    if (dex4 == true) {cdex4 = ' checked';} else {cdex4 = '';}
    if (dex5 == true) {cdex5 = ' checked';} else {cdex5 = '';}
    if (stam1 == true) {cstam1 = ' checked';} else {cstam1 = '';}
    if (stam2 == true) {cstam2 = ' checked';} else {cstam2 = '';}
    if (stam3 == true) {cstam3 = ' checked';} else {cstam3 = '';}
    if (stam4 == true) {cstam4 = ' checked';} else {cstam4 = '';}
    if (stam5 == true) {cstam5 = ' checked';} else {cstam5 = '';}
    if (cha1 == true) {ccha1 = ' checked';} else {ccha1 = '';}
    if (cha2 == true) {ccha2 = ' checked';} else {ccha2 = '';}
    if (cha3 == true) {ccha3 = ' checked';} else {ccha3 = '';}
    if (cha4 == true) {ccha4 = ' checked';} else {ccha4 = '';}
    if (cha5 == true) {ccha5 = ' checked';} else {ccha5 = '';}    
    if (mani1 == true) {cmani1 = ' checked';} else {cmani1 = '';}
    if (mani2 == true) {cmani2 = ' checked';} else {cmani2 = '';}
    if (mani3 == true) {cmani3 = ' checked';} else {cmani3 = '';}
    if (mani4 == true) {cmani4 = ' checked';} else {cmani4 = '';}
    if (mani5 == true) {cmani5 = ' checked';} else {cmani5 = '';}
    if (app1 == true) {capp1 = ' checked';} else {capp1 = '';}
    if (app2 == true) {capp2 = ' checked';} else {capp2 = '';}
    if (app3 == true) {capp3 = ' checked';} else {capp3 = '';}
    if (app4 == true) {capp4 = ' checked';} else {capp4 = '';}
    if (app5 == true) {capp5 = ' checked';} else {capp5 = '';}
    if (percep1 == true) {cpercep1 = ' checked';} else {cpercep1 = '';}
    if (percep2 == true) {cpercep2 = ' checked';} else {cpercep2 = '';}
    if (percep3 == true) {cpercep3 = ' checked';} else {cpercep3 = '';}
    if (percep4 == true) {cpercep4 = ' checked';} else {cpercep4 = '';}
    if (percep5 == true) {cpercep5 = ' checked';} else {cpercep5 = '';}
    if (int1 == true) {cint1 = ' checked';} else {cint1 = '';}
    if (int2 == true) {cint2 = ' checked';} else {cint2 = '';}
    if (int3 == true) {cint3 = ' checked';} else {cint3 = '';}
    if (int4 == true) {cint4 = ' checked';} else {cint4 = '';}
    if (int5 == true) {cint5 = ' checked';} else {cint5 = '';}
    if (wit1 == true) {cwit1 = ' checked';} else {cwit1 = '';}
    if (wit2 == true) {cwit2 = ' checked';} else {cwit2 = '';}
    if (wit3 == true) {cwit3 = ' checked';} else {cwit3 = '';}
    if (wit4 == true) {cwit4 = ' checked';} else {cwit4 = '';}
    if (wit5 == true) {cwit5 = ' checked';} else {cwit5 = '';} 
    // parse chosen fields from Abilities - Talents
    if (alert1 == true) {calert1 = ' checked';} else {calert1 = '';} 
    if (alert2 == true) {calert2 = ' checked';} else {calert2 = '';}
    if (alert3 == true) {calert3 = ' checked';} else {calert3 = '';}
    if (alert4 == true) {calert4 = ' checked';} else {calert4 = '';}
    if (alert5 == true) {calert5 = ' checked';} else {calert5 = '';}
    if (ath1 == true) {cath1 = ' checked';} else {cath1 = '';}
    if (ath2 == true) {cath2 = ' checked';} else {cath2 = '';}
    if (ath3 == true) {cath3 = ' checked';} else {cath3 = '';}
    if (ath4 == true) {cath4 = ' checked';} else {cath4 = '';}
    if (ath5 == true) {cath5 = ' checked';} else {cath5 = '';}
    if (brawl1 == true) {cbrawl1 = ' checked';} else {cbrawl1 = '';}
    if (brawl2 == true) {cbrawl2 = ' checked';} else {cbrawl2 = '';}
    if (brawl3 == true) {cbrawl3 = ' checked';} else {cbrawl3 = '';}
    if (brawl4 == true) {cbrawl4 = ' checked';} else {cbrawl4 = '';}
    if (brawl5 == true) {cbrawl5 = ' checked';} else {cbrawl5 = '';}
    if (dodge1 == true) {cdodge1 = ' checked';} else {cdodge1 = '';}
    if (dodge2 == true) {cdodge2 = ' checked';} else {cdodge2 = '';}
    if (dodge3 == true) {cdodge3 = ' checked';} else {cdodge3 = '';}
    if (dodge4 == true) {cdodge4 = ' checked';} else {cdodge4 = '';}
    if (dodge5 == true) {cdodge5 = ' checked';} else {cdodge5 = '';}
    if (emp1 == true) {cemp1 = ' checked';} else {cemp1 = '';}
    if (emp2 == true) {cemp2 = ' checked';} else {cemp2 = '';}
    if (emp3 == true) {cemp3 = ' checked';} else {cemp3 = '';}
    if (emp4 == true) {cemp4 = ' checked';} else {cemp4 = '';}
    if (emp5 == true) {cemp5 = ' checked';} else {cemp5 = '';}
    if (expre1 == true) {cexpre1 = ' checked';} else {cexpre1 = '';}
    if (expre2 == true) {cexpre2 = ' checked';} else {cexpre2 = '';}
    if (expre3 == true) {cexpre3 = ' checked';} else {cexpre3 = '';}
    if (expre4 == true) {cexpre4 = ' checked';} else {cexpre4 = '';}
    if (expre5 == true) {cexpre5 = ' checked';} else {cexpre5 = '';}
    if (intim1 == true) {cintim1 = ' checked';} else {cintim1 = '';}
    if (intim2 == true) {cintim2 = ' checked';} else {cintim2 = '';}
    if (intim3 == true) {cintim3 = ' checked';} else {cintim3 = '';}
    if (intim4 == true) {cintim4 = ' checked';} else {cintim4 = '';}
    if (intim5 == true) {cintim5 = ' checked';} else {cintim5 = '';}
    if (pu1 == true) {cpu1 = ' checked';} else {cpu1 = '';}
    if (pu2 == true) {cpu2 = ' checked';} else {cpu2 = '';}
    if (pu3 == true) {cpu3 = ' checked';} else {cpu3 = '';}
    if (pu4 == true) {cpu4 = ' checked';} else {cpu4 = '';}
    if (pu5 == true) {cpu5 = ' checked';} else {cpu5 = '';}
    if (wise1 == true) {cwise1 = ' checked';} else {cwise1 = '';}
    if (wise2 == true) {cwise2 = ' checked';} else {cwise2 = '';}
    if (wise3 == true) {cwise3 = ' checked';} else {cwise3 = '';}
    if (wise4 == true) {cwise4 = ' checked';} else {cwise4 = '';}
    if (wise5 == true) {cwise5 = ' checked';} else {cwise5 = '';}    
    if (sub1 == true) {csub1 = ' checked';} else {csub1 = '';}
    if (sub2 == true) {csub2 = ' checked';} else {csub2 = '';}
    if (sub3 == true) {csub3 = ' checked';} else {csub3 = '';}
    if (sub4 == true) {csub4 = ' checked';} else {csub4 = '';}
    if (sub5 == true) {csub5 = ' checked';} else {csub5 = '';}
    // parse chosen fields from Abilities - Skills
    if (ken1 == true) {cken1 = ' checked';} else {cken1 = '';} 
    if (ken2 == true) {cken2 = ' checked';} else {cken2 = '';}
    if (ken3 == true) {cken3 = ' checked';} else {cken3 = '';}
    if (ken4 == true) {cken4 = ' checked';} else {cken4 = '';}
    if (ken5 == true) {cken5 = ' checked';} else {cken5 = '';}
    if (craft1 == true) {ccraft1 = ' checked';} else {ccraft1 = '';}
    if (craft2 == true) {ccraft2 = ' checked';} else {ccraft2 = '';}
    if (craft3 == true) {ccraft3 = ' checked';} else {ccraft3 = '';}
    if (craft4 == true) {ccraft4 = ' checked';} else {ccraft4 = '';}
    if (craft5 == true) {ccraft5 = ' checked';} else {ccraft5 = '';}
    if (drive1 == true) {cdrive1 = ' checked';} else {cdrive1 = '';}
    if (drive2 == true) {cdrive2 = ' checked';} else {cdrive2 = '';}
    if (drive3 == true) {cdrive3 = ' checked';} else {cdrive3 = '';}
    if (drive4 == true) {cdrive4 = ' checked';} else {cdrive4 = '';}
    if (drive5 == true) {cdrive5 = ' checked';} else {cdrive5 = '';}
    if (eti1 == true) {ceti1 = ' checked';} else {ceti1 = '';}
    if (eti2 == true) {ceti2 = ' checked';} else {ceti2 = '';}
    if (eti3 == true) {ceti3 = ' checked';} else {ceti3 = '';}
    if (eti4 == true) {ceti4 = ' checked';} else {ceti4 = '';}
    if (eti5 == true) {ceti5 = ' checked';} else {ceti5 = '';}
    if (gun1 == true) {cgun1 = ' checked';} else {cgun1 = '';}
    if (gun2 == true) {cgun2 = ' checked';} else {cgun2 = '';}
    if (gun3 == true) {cgun3 = ' checked';} else {cgun3 = '';}
    if (gun4 == true) {cgun4 = ' checked';} else {cgun4 = '';}
    if (gun5 == true) {cgun5 = ' checked';} else {cgun5 = '';}
    if (lead1 == true) {clead1 = ' checked';} else {clead = '';}
    if (lead2 == true) {clead2 = ' checked';} else {clead2 = '';}
    if (lead3 == true) {clead3 = ' checked';} else {clead3 = '';}
    if (lead4 == true) {clead4 = ' checked';} else {clead4 = '';}
    if (lead5 == true) {clead5 = ' checked';} else {clead5 = '';}
    if (melee1 == true) {cmelee1 = ' checked';} else {cmelee1 = '';}
    if (melee2 == true) {cmelee2 = ' checked';} else {cmelee2 = '';}
    if (melee3 == true) {cmelee3 = ' checked';} else {cmelee3 = '';}
    if (melee4 == true) {cmelee4 = ' checked';} else {cmelee4 = '';}
    if (melee5 == true) {cmelee5 = ' checked';} else {cmelee5 = '';}
    if (perf1 == true) {cperf1 = ' checked';} else {cperf1 = '';}
    if (perf2 == true) {cperf2 = ' checked';} else {cperf2 = '';}
    if (perf3 == true) {cperf3 = ' checked';} else {cperf3 = '';}
    if (perf4 == true) {cperf4 = ' checked';} else {cperf4 = '';}
    if (perf5 == true) {cperf5 = ' checked';} else {cperf5 = '';}
    if (hide1 == true) {chide1 = ' checked';} else {chide1 = '';}
    if (hide2 == true) {chide2 = ' checked';} else {chide2 = '';}
    if (hide3 == true) {chide3 = ' checked';} else {chide3 = '';}
    if (hide4 == true) {chide4 = ' checked';} else {chide4 = '';}
    if (hide5 == true) {chide5 = ' checked';} else {chide5 = '';}
    if (suv1 == true) {csuv1 = ' checked';} else {csuv1 = '';}
    if (suv2 == true) {csuv2 = ' checked';} else {csuv2 = '';}
    if (suv3 == true) {csuv3 = ' checked';} else {csuv3 = '';}
    if (suv4 == true) {csuv4 = ' checked';} else {csuv4 = '';}
    if (suv5 == true) {csuv5 = ' checked';} else {csuv5 = '';}
    // parse chosen fields from Abilities - Knowledges
    if (com1 == true) {ccom1 = ' checked';} else {ccom1 = '';}
    if (com2 == true) {ccom2 = ' checked';} else {ccom2 = '';}
    if (com3 == true) {ccom3 = ' checked';} else {ccom3 = '';}
    if (com4 == true) {ccom4 = ' checked';} else {ccom4 = '';}
    if (com5 == true) {ccom5 = ' checked';} else {ccom5 = '';}
    if (e1 == true) {ce1 = ' checked';} else {ce1 = '';}
    if (e2 == true) {ce2 = ' checked';} else {ce2 = '';}
    if (e3 == true) {ce3 = ' checked';} else {ce3 = '';}
    if (e4 == true) {ce4 = ' checked';} else {ce4 = '';}
    if (e5 == true) {ce5 = ' checked';} else {ce5 = '';}
    if (inv1 == true) {cinv1 = ' checked';} else {cinv1 = '';}
    if (inv2 == true) {cinv2 = ' checked';} else {cinv2 = '';}
    if (inv3 == true) {cinv3 = ' checked';} else {cinv3 = '';}
    if (inv4 == true) {cinv4 = ' checked';} else {cinv4 = '';}
    if (inv5 == true) {cinv5 = ' checked';} else {cinv5 = '';}
    if (law1 == true) {claw1 = ' checked';} else {claw1 = '';}
    if (law2 == true) {claw2 = ' checked';} else {claw2 = '';}
    if (law3 == true) {claw3 = ' checked';} else {claw3 = '';}
    if (law4 == true) {claw4 = ' checked';} else {claw4 = '';}
    if (law5 == true) {claw5 = ' checked';} else {claw5 = '';}
    if (ling1 == true) {cling1 = ' checked';} else {cling1 = '';}
    if (ling2 == true) {cling2 = ' checked';} else {cling2 = '';}
    if (ling3 == true) {cling3 = ' checked';} else {cling3 = '';}
    if (ling4 == true) {cling4 = ' checked';} else {cling4 = '';}
    if (ling5 == true) {cling5 = ' checked';} else {cling5 = '';}
    if (med1 == true) {cmed1 = ' checked';} else {cmed1 = '';}
    if (med2 == true) {cmed2 = ' checked';} else {cmed2 = '';}
    if (med3 == true) {cmed3 = ' checked';} else {cmed3 = '';}
    if (med4 == true) {cmed4 = ' checked';} else {cmed4 = '';}
    if (med5 == true) {cmed5 = ' checked';} else {cmed5 = '';}
    if (cult1 == true) {ccult1 = ' checked';} else {ccult1 = '';}
    if (cult2 == true) {ccult2 = ' checked';} else {ccult2 = '';}
    if (cult3 == true) {ccult3 = ' checked';} else {ccult3 = '';}
    if (cult4 == true) {ccult4 = ' checked';} else {ccult4 = '';}
    if (cult5 == true) {ccult5 = ' checked';} else {ccult5 = '';}
    if (pol1 == true) {cpol1 = ' checked';} else {cpol1 = '';}
    if (pol2 == true) {cpol2 = ' checked';} else {cpol2 = '';}
    if (pol3 == true) {cpol3 = ' checked';} else {cpol3 = '';}
    if (pol4 == true) {cpol4 = ' checked';} else {cpol4 = '';}
    if (pol5 == true) {cpol5 = ' checked';} else {cpol5 = '';}
    if (rit1 == true) {crit1 = ' checked';} else {crit1 = '';}
    if (rit2 == true) {crit2 = ' checked';} else {crit2 = '';}
    if (rit3 == true) {crit3 = ' checked';} else {crit3 = '';}
    if (rit4 == true) {crit4 = ' checked';} else {crit4 = '';}
    if (rit5 == true) {crit5 = ' checked';} else {crit5 = '';}
    if (sci1 == true) {csci1 = ' checked';} else {csci1 = '';}
    if (sci2 == true) {csci2 = ' checked';} else {csci2 = '';}
    if (sci3 == true) {csci3 = ' checked';} else {csci3 = '';}
    if (sci4 == true) {csci4 = ' checked';} else {csci4 = '';}
    if (sci5 == true) {csci5 = ' checked';} else {csci5 = '';}
    // parse chosen fields from renown
    if (glory1 == true) {cglory1 = ' checked';} else {cglory1 = '';}
    if (glory2 == true) {cglory2 = ' checked';} else {cglory2 = '';}
    if (glory3 == true) {cglory3 = ' checked';} else {cglory3 = '';}
    if (glory4 == true) {cglory4 = ' checked';} else {cglory4 = '';}
    if (glory5 == true) {cglory5 = ' checked';} else {cglory5 = '';}
    if (glory6 == true) {cglory6 = ' checked';} else {cglory6 = '';}
    if (glory7 == true) {cglory7 = ' checked';} else {cglory7 = '';}
    if (glory8 == true) {cglory8 = ' checked';} else {cglory8 = '';}
    if (glory9 == true) {cglory9 = ' checked';} else {cglory9 = '';}
    if (glory0 == true) {cglory0 = ' checked';} else {cglory0 = '';}
    if (tglory1 == true) {ctglory1 = ' checked';} else {ctglory1 = '';}
    if (tglory2 == true) {ctglory2 = ' checked';} else {ctglory2 = '';}
    if (tglory3 == true) {ctglory3 = ' checked';} else {ctglory3 = '';}
    if (tglory4 == true) {ctglory4 = ' checked';} else {ctglory4 = '';}
    if (tglory5 == true) {ctglory5 = ' checked';} else {ctglory5 = '';}
    if (tglory6 == true) {ctglory6 = ' checked';} else {ctglory6 = '';}
    if (tglory7 == true) {ctglory7 = ' checked';} else {ctglory7 = '';}
    if (tglory8 == true) {ctglory8 = ' checked';} else {ctglory8 = '';}
    if (tglory9 == true) {ctglory9 = ' checked';} else {ctglory9 = '';}
    if (tglory0 == true) {ctglory0 = ' checked';} else {ctglory0 = '';}
    if (honor1 == true) {chonor1 = ' checked';} else {chonor1 = '';}
    if (honor2 == true) {chonor2 = ' checked';} else {chonor2 = '';}
    if (honor3 == true) {chonor3 = ' checked';} else {chonor3 = '';}
    if (honor4 == true) {chonor4 = ' checked';} else {chonor4 = '';}
    if (honor5 == true) {chonor5 = ' checked';} else {chonor5 = '';}
    if (honor6 == true) {chonor6 = ' checked';} else {chonor6 = '';}
    if (honor7 == true) {chonor7 = ' checked';} else {chonor7 = '';}
    if (honor8 == true) {chonor8 = ' checked';} else {chonor8 = '';}
    if (honor9 == true) {chonor9 = ' checked';} else {chonor9 = '';}
    if (honor0 == true) {chonor0 = ' checked';} else {chonor0 = '';}
    if (thonor1 == true) {cthonor1 = ' checked';} else {cthonor1 = '';}
    if (thonor2 == true) {cthonor2 = ' checked';} else {cthonor2 = '';}
    if (thonor3 == true) {cthonor3 = ' checked';} else {cthonor3 = '';}
    if (thonor4 == true) {cthonor4 = ' checked';} else {cthonor4 = '';}
    if (thonor5 == true) {cthonor5 = ' checked';} else {cthonor5 = '';}
    if (thonor6 == true) {cthonor6 = ' checked';} else {cthonor6 = '';}
    if (thonor7 == true) {cthonor7 = ' checked';} else {cthonor7 = '';}
    if (thonor8 == true) {cthonor8 = ' checked';} else {cthonor8 = '';}
    if (thonor9 == true) {cthonor9 = ' checked';} else {cthonor9 = '';}
    if (thonor0 == true) {cthonor0 = ' checked';} else {cthonor0 = '';}
    if (wis1 == true) {cwis1 = ' checked';} else {cwis1 = '';}
    if (wis2 == true) {cwis2 = ' checked';} else {cwis2 = '';}
    if (wis3 == true) {cwis3 = ' checked';} else {cwis3 = '';}
    if (wis4 == true) {cwis4 = ' checked';} else {cwis4 = '';}
    if (wis5 == true) {cwis5 = ' checked';} else {cwis5 = '';}
    if (wis6 == true) {cwis6 = ' checked';} else {cwis6 = '';}
    if (wis7 == true) {cwis7 = ' checked';} else {cwis7 = '';}
    if (wis8 == true) {cwis8 = ' checked';} else {cwis8 = '';}
    if (wis9 == true) {cwis9 = ' checked';} else {cwis9 = '';}
    if (wis0 == true) {cwis0 = ' checked';} else {cwis0 = '';}
    if (twis1 == true) {ctwis1 = ' checked';} else {ctwis1 = '';}
    if (twis2 == true) {ctwis2 = ' checked';} else {ctwis2 = '';}
    if (twis3 == true) {ctwis3 = ' checked';} else {ctwis3 = '';}
    if (twis4 == true) {ctwis4 = ' checked';} else {ctwis4 = '';}
    if (twis5 == true) {ctwis5 = ' checked';} else {ctwis5 = '';}
    if (twis6 == true) {ctwis6 = ' checked';} else {ctwis6 = '';}
    if (twis7 == true) {ctwis7 = ' checked';} else {ctwis7 = '';}
    if (twis8 == true) {ctwis8 = ' checked';} else {ctwis8 = '';}
    if (twis9 == true) {ctwis9 = ' checked';} else {ctwis9 = '';}
    if (twis0 == true) {ctwis0 = ' checked';} else {ctwis0 = '';}
    // parse chosen fields from rage, gnosis, and willpower
    if (rage1 == true) {crage1 = ' checked';} else {crage1 = '';}
    if (rage2 == true) {crage2 = ' checked';} else {crage2 = '';}
    if (rage3 == true) {crage3 = ' checked';} else {crage3 = '';}
    if (rage4 == true) {crage4 = ' checked';} else {crage4 = '';}
    if (rage5 == true) {crage5 = ' checked';} else {crage5 = '';}
    if (rage6 == true) {crage6 = ' checked';} else {crage6 = '';}
    if (rage7 == true) {crage7 = ' checked';} else {crage7 = '';}
    if (rage8 == true) {crage8 = ' checked';} else {crage8 = '';}
    if (rage9 == true) {crage9 = ' checked';} else {crage9 = '';}
    if (rage0 == true) {crage0 = ' checked';} else {crage0 = '';}
    if (trage1 == true) {ctrage1 = ' checked';} else {ctrage1 = '';}
    if (trage2 == true) {ctrage2 = ' checked';} else {ctrage2 = '';}
    if (trage3 == true) {ctrage3 = ' checked';} else {ctrage3 = '';}
    if (trage4 == true) {ctrage4 = ' checked';} else {ctrage4 = '';}
    if (trage5 == true) {ctrage5 = ' checked';} else {ctrage5 = '';}
    if (trage6 == true) {ctrage6 = ' checked';} else {ctrage6 = '';}
    if (trage7 == true) {ctrage7 = ' checked';} else {ctrage7 = '';}
    if (trage8 == true) {ctrage8 = ' checked';} else {ctrage8 = '';}
    if (trage9 == true) {ctrage9 = ' checked';} else {ctrage9 = '';}
    if (trage0 == true) {ctrage0 = ' checked';} else {ctrage0 = '';}    
    if (gno1 == true) {cgno1 = ' checked';} else {cgno1 = '';}
    if (gno2 == true) {cgno2 = ' checked';} else {cgno2 = '';}
    if (gno3 == true) {cgno3 = ' checked';} else {cgno3 = '';}
    if (gno4 == true) {cgno4 = ' checked';} else {cgno4 = '';}
    if (gno5 == true) {cgno5 = ' checked';} else {cgno5 = '';}
    if (gno6 == true) {cgno6 = ' checked';} else {cgno6 = '';}
    if (gno7 == true) {cgno7 = ' checked';} else {cgno7 = '';}
    if (gno8 == true) {cgno8 = ' checked';} else {cgno8 = '';}
    if (gno9 == true) {cgno9 = ' checked';} else {cgno9 = '';}
    if (gno0 == true) {cgno0 = ' checked';} else {cgno0 = '';}
    if (tgno1 == true) {ctgno1 = ' checked';} else {ctgno1 = '';}
    if (tgno2 == true) {ctgno2 = ' checked';} else {ctgno2 = '';}
    if (tgno3 == true) {ctgno3 = ' checked';} else {ctgno3 = '';}
    if (tgno4 == true) {ctgno4 = ' checked';} else {ctgno4 = '';}
    if (tgno5 == true) {ctgno5 = ' checked';} else {ctgno5 = '';}
    if (tgno6 == true) {ctgno6 = ' checked';} else {ctgno6 = '';}
    if (tgno7 == true) {ctgno7 = ' checked';} else {ctgno7 = '';}
    if (tgno8 == true) {ctgno8 = ' checked';} else {ctgno8 = '';}
    if (tgno9 == true) {ctgno9 = ' checked';} else {ctgno9 = '';}
    if (tgno0 == true) {ctgno0 = ' checked';} else {ctgno0 = '';}
    if (will1 == true) {cwill1 = ' checked';} else {cwill1 = '';}
    if (will2 == true) {cwill2 = ' checked';} else {cwill2 = '';}
    if (will3 == true) {cwill3 = ' checked';} else {cwill3 = '';}
    if (will4 == true) {cwill4 = ' checked';} else {cwill4 = '';}
    if (will5 == true) {cwill5 = ' checked';} else {cwill5 = '';}
    if (will6 == true) {cwill6 = ' checked';} else {cwill6 = '';}
    if (will7 == true) {cwill7 = ' checked';} else {cwill7 = '';}
    if (will8 == true) {cwill8 = ' checked';} else {cwill8 = '';}
    if (will9 == true) {cwill9 = ' checked';} else {cwill9 = '';}
    if (will0 == true) {cwill0 = ' checked';} else {cwill0 = '';}
    if (twill1 == true) {ctwill1 = ' checked';} else {ctwill1 = '';}
    if (twill2 == true) {ctwill2 = ' checked';} else {ctwill2 = '';}
    if (twill3 == true) {ctwill3 = ' checked';} else {ctwill3 = '';}
    if (twill4 == true) {ctwill4 = ' checked';} else {ctwill4 = '';}
    if (twill5 == true) {ctwill5 = ' checked';} else {ctwill5 = '';}
    if (twill6 == true) {ctwill6 = ' checked';} else {ctwill6 = '';}
    if (twill7 == true) {ctwill7 = ' checked';} else {ctwill7 = '';}
    if (twill8 == true) {ctwill8 = ' checked';} else {ctwill8 = '';}
    if (twill9 == true) {ctwill9 = ' checked';} else {ctwill9 = '';}
    if (twill0 == true) {ctwill0 = ' checked';} else {ctwill0 = '';}
    // parse chosen fields from background and health
    if (bg1dot1 == true) {cbg1dot1 = ' checked';} else {cbg1dot1 = '';}
    if (bg1dot2 == true) {cbg1dot2 = ' checked';} else {cbg1dot2 = '';}
    if (bg1dot3 == true) {cbg1dot3 = ' checked';} else {cbg1dot3 = '';}
    if (bg1dot4 == true) {cbg1dot4 = ' checked';} else {cbg1dot4 = '';}
    if (bg1dot5 == true) {cbg1dot5 = ' checked';} else {cbg1dot5 = '';}    
    if (bg2dot1 == true) {cbg2dot1 = ' checked';} else {cbg2dot1 = '';}
    if (bg2dot2 == true) {cbg2dot2 = ' checked';} else {cbg2dot2 = '';}
    if (bg2dot3 == true) {cbg2dot3 = ' checked';} else {cbg2dot3 = '';}
    if (bg2dot4 == true) {cbg2dot4 = ' checked';} else {cbg2dot4 = '';}
    if (bg2dot5 == true) {cbg2dot5 = ' checked';} else {cbg2dot5 = '';}    
    if (bg3dot1 == true) {cbg3dot1 = ' checked';} else {cbg3dot1 = '';}
    if (bg3dot2 == true) {cbg3dot2 = ' checked';} else {cbg3dot2 = '';}
    if (bg3dot3 == true) {cbg3dot3 = ' checked';} else {cbg3dot3 = '';}
    if (bg3dot4 == true) {cbg3dot4 = ' checked';} else {cbg3dot4 = '';}
    if (bg3dot5 == true) {cbg3dot5 = ' checked';} else {cbg3dot5 = '';}    
    if (bg4dot1 == true) {cbg4dot1 = ' checked';} else {cbg4dot1 = '';}
    if (bg4dot2 == true) {cbg4dot2 = ' checked';} else {cbg4dot2 = '';}
    if (bg4dot3 == true) {cbg4dot3 = ' checked';} else {cbg4dot3 = '';}
    if (bg4dot4 == true) {cbg4dot4 = ' checked';} else {cbg4dot4 = '';}
    if (bg4dot5 == true) {cbg4dot5 = ' checked';} else {cbg4dot5 = '';}    
    if (bg5dot1 == true) {cbg5dot1 = ' checked';} else {cbg5dot1 = '';}
    if (bg5dot2 == true) {cbg5dot2 = ' checked';} else {cbg5dot2 = '';}
    if (bg5dot3 == true) {cbg5dot3 = ' checked';} else {cbg5dot3 = '';}
    if (bg5dot4 == true) {cbg5dot4 = ' checked';} else {cbg5dot4 = '';}
    if (bg5dot5 == true) {cbg5dot5 = ' checked';} else {cbg5dot5 = '';}
    if (bru == true) {cbru = ' checked';} else {cbru = '';}
    if (hurt == true) {churt = ' checked';} else {churt = '';}
    if (inj == true) {cinj = ' checked';} else {cinj = '';}
    if (wound == true) {cwound = ' checked';} else {cwound = '';}
    if (maul == true) {cmaul = ' checked';} else {cmaul = '';}
    if (crip == true) {ccrip = ' checked';} else {ccrip = '';}
    if (incap == true) {cincap = ' checked';} else {cincap = '';}
    

    // open the new webpage and display all input from character sheet
    win = window.open();    
    win.document.write( '<html><head><link rel="stylesheet" href="print.css" />'
        + '<title>' + name + '</title></head><body>' + img + '<div><br />' );
    win.document.write( '<div id="NPC" class="topArea">Name: ' + name +'<br />' 
        + 'Player: ' + player + '<br />Chronicle: ' + chron + '<br /></div>' +
        '<div id="BAT" class="topArea">Breed: ' + breed + '<br />Auspice: ' +
        ausp + '<br />Tribe: ' + tribe + '<br /></div><div id="PPC" class="' +
        'topArea">Pack-Name: ' + pn + '<br />Pack-Totem: ' + pt + '<br/>' +
        'Concept: ' + concept + '<br /></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/attributes'
        + '.png" width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="attributes"><p>Physical</p>Strength:<br />'
        + '<input type="radio"' + cstr1 + '><input type="radio"' + cstr2 + '>' 
        + '<input type="radio"' + cstr3 + '><input type="radio"' + cstr4 + '>' +
        '<input type="radio"' + cstr5 + '><br />Dexterity:<br /><input type=' +
        '"radio"' + cdex1 + '><input type="radio"' + cdex2 + '><input type=' +
        '"radio"' + cdex3 + '><input type="radio"' + cdex4 + '><input type=' +
        '"radio"' + cdex5 + '><br />Stamina:<br /><input type="radio"' + cstam1 
        + '><input type="radio"' + cstam2 + '><input type="radio"' + cstam3 + 
        '><input type="radio"' + cstam4 + '><input type="radio"' + cstam5 +
        '></div>' );
    win.document.write( '<div class="attributes"><p>Social</p>Charisma:<br />' +
        '<input type="radio"' + ccha1 + '><input type="radio"' + ccha2 + '>' +
        '<input type="radio"' + ccha3 + '><input type="radio"' + ccha4 + '>' +
        '<input type="radio"' + ccha5 + '><br />Manipulation:<br /><input type='
        + '"radio"' + cmani1 + '><input type="radio"' + cmani2 + '><input ' +
        'type="radio"' + cmani3 + '><input type="radio"' + cmani4 + '><input '
        + 'type="radio"' + cmani5 + '><br />Appearance:<br /><input type="' +
        'radio"' + capp1 + '><input type="radio"' + capp2 + '><input type="' +
        'radio"' + capp3 + '><input type="radio"' + capp4 + '><input type="' +
        'radio"' + capp5 + '></div>' );
    win.document.write( '<div class="attributes"><p>Mental</p>Perception:<br />'
        + '<input type="radio"' + cpercep1 + '><input type="radio"' + cpercep2 
        + '><input type="radio"' + cpercep3 + '><input type="radio"' + 
        cpercep4 + '><input type="radio"' + cpercep5 +'><br />Intelligence:' +
        '<br /><input type="radio"' + cint1 + '><input type="radio"' + cint2 +
        '><input type="radio"' + cint3 + '><input type="radio"' + cint4 + 
        '><input type="radio"' + cint5 + '><br />Wits:<br /><input type="' + 
        'radio"' + cwit1 + '><input type="radio"' + cwit2 + '><input type="' +
        'radio"' + cwit3 + '><input type="radio"' + cwit4 + '><input type="' +
        'radio"' + cwit5 + '></div></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/abilities.'
        + 'png" width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="abilities"><p>Talents</p>Alertness:<br />'
        + '<input type="radio"' + calert1 + '><input type="radio"' + calert2 +
        '><input type="radio"' + calert3 + '><input type="radio"' + calert4 +
        '><input type="radio"' + calert5 + '><br />Athletics:<br /><input ' +
        'type="radio"' + cath1 + '><input type="radio"' + cath2 + '><input type'
        + '="radio"' + cath3 + '><input type="radio"' + cath4 + '><input type' +
        '="radio"' + cath5 + '><br />Brawl:<br /><input type="radio"' + cbrawl1 
        + '><input type="radio"' + cbrawl2 + '><input type="radio"' + cbrawl3 +
        '><input type="radio"' + cbrawl4 + '><input type="radio"' + cbrawl5 + '>'
        + '<br />Dodge:<br /><input type="radio"' + cdodge1 + '><input type="' +
        'radio"' + cdodge2 + '><input type="radio"' + cdodge3 + '><input type' +
        '="radio"' + cdodge4 + '><input type="radio"' + cdodge5 + '><br />' +
        'Empathy:<br /><input type="radio"' + cemp1 + '><input type="radio"' +
        cemp2 + '><input type="radio"' + cemp3 + '><input type="radio"' + cemp4
        + '><input type="radio"' + cemp5 + '><br />Expression:<br /><input ' +
        'type="radio"' + cexpre1 + '><input type="radio"' + cexpre2 + '><input ' 
        + 'type="radio"' + cexpre3 + '><input type="radio"' + cexpre4 + '>' + 
        '<input type="radio"' + cexpre5 + '><br />Intimidation:<br /><input ' +
        'type="radio"' + cintim1 + '><input type="radio"' + cintim2 + '><input '
        + 'type="radio"' + cintim3 + '><input type="radio"' + cintim4 + '><' +
        'input type="radio"' + cintim5 + '><br />Primal-Urge:<br /><input type='
        + '"radio"' + cpu1 + '><input type="radio"' + cpu2 + '><input type=' +
        '"radio"' + cpu3 + '><input type="radio"' + cpu4 + '><input type="' +
        'radio"' + cpu5 + '><br />Streetwise:<br /><input type="radio"' + cwise1
        + '><input type="radio"' + cwise2 + '><input type="radio"' + cwise3 +
        '><input type="radio"' + cwise4 + '><input type="radio"' + cwise5 + 
        '><br />Subterfuge:<br /><input type="radio"' + csub1 + '><input type' +
        '="radio"' + csub2 + '><input type="radio"' + csub3 + '><input type="' +
        'radio"' + csub4 + '><input type="radio"' + csub5 + '></div>' );
    win.document.write( '<div class="abilities"><p>Skills</p>Animal-Ken:<br ' +
        '/><input type="radio"' + cken1 + '><input type="radio"' + cken2 + '>' +
        '<input type="radio"' + cken3 + '><input type="radio"' + cken4 + '><' +
        'input type="radio"' + cken5 + '><br />Crafts:<br /><input type="radio"' 
        + ccraft1 + '><input type="radio"' + ccraft2 + '><input type="radio"'
        + ccraft3 + '><input type="radio"' + ccraft4 + '><input type="radio"'
        + ccraft5 + '><br />Drive:<br /><input type="radio"' + cdrive1 + '>' +
        '<input type="radio"' + cdrive2 + '><input type="radio"' + cdrive3 + '>' 
        + '<input type="radio"' + cdrive4 + '><input type="radio"' + cdrive5 +
        '><br />Etiquette:<br /><input type="radio"' + ceti1 + '><input type=' +
        '"radio"' + ceti2 + '><input type="radio"' + ceti3 + '><input type="' +
        'radio"' + ceti4 + '><input type="radio"' + ceti5 + '><br />Firearms:<' 
        + 'br /><input type="radio"' + cgun1 + '><input type="radio"' + cgun2 +
        '><input type="radio"' + cgun3 + '><input type="radio"' + cgun4 + '>' +
        '<input type="radio"' + cgun5 + '><br />Leadership:<br /><input type="' 
        + 'radio"' + clead1 + '><input type="radio"' + clead2 + '><input type=' 
        + '"radio"' + clead3 + '><input type="radio"' + clead4 + '><input type='
        + '"radio"' + clead5 + '><br />Melee:<br /><input type="radio"' +
        cmelee1 + '><input type="radio"' + cmelee2 + '><input type="radio"' +
        cmelee3 + '><input type="radio"' + cmelee4 + '><input type="radio"' +
        cmelee5 + '><br />Performance:<br /><input type="radio"' + cperf1 + '>' 
        + '<input type="radio"' + cperf2 + '><input type="radio"' + cperf3 + '>' 
        + '<input type="radio"' + cperf4 + '><input type="radio"' + cperf5 + '>' 
        + '<br />Stealth:<br /><input type="radio"' + chide1 + '><input type="' 
        + 'radio"' + chide2 + '><input type="radio"' + chide3 + '><input type' +
        '="radio"' + chide4 + '><input type="radio"' + chide5 + '><br />' +
        'Survival:<br /><input type="radio"' + csuv1 + '><input type="radio"' +
        csuv2 + '><input type="radio"' + csuv3 + '><input type="radio"' + csuv4
        + '><input type="radio"' + csuv5 + '></div>' );
    win.document.write( '<div class="abilities"><p>Knowledges</p>Computer:<br' +
        ' /><input type="radio"' + ccom1 + '><input type="radio"' + ccom2 + '>' 
        + '<input type="radio"' + ccom3 + '><input type="radio"' + ccom4 + '>' +
        '<input type="radio"' + ccom5 + '><br />Enigmas:<br /><input type="' +
        'radio"' + ce1 + '><input type="radio"' + ce2 + '><input type="radio"' +
        ce3 + '><input type="radio"' + ce4 + '><input type="radio"' + ce5 + '><'
        + 'br />Investigation:<br /><input type="radio"' + cinv1 + '><input ' +
        'type="radio"' + cinv2 + '><input type="radio"' + cinv3 + '><input type'
        + '="radio"' + cinv4 + '><input type="radio"' + cinv5 + '><br />Law:<br'
        + ' /><input type="radio"' + claw1 + '><input type="radio"' + claw2 + 
        '><input type="radio"' + claw3 + '><input type="radio"' + claw4 + '><' +
        'input type="radio"' + claw5 + '><br />Lingustics:<br /><input type="' +
        'radio"' + cling1 + '><input type="radio"' + cling2 + '><input type="' +
        'radio"' + cling3 + '><input type="radio"' + cling4 + '><input type="' +
        'radio"' + cling5 + '><br />Medicine:<br /><input type="radio"' + cmed1
        + '><input type="radio"' + cmed2 + '><input type="radio"' + cmed3 + '><'
        + 'input type="radio"' + cmed4 + '><input type="radio"' + cmed5 + '><br'
        + ' />Occult:<br /><input type="radio"' + ccult1 + '><input type="' +
        'radio"' + ccult2 + '><input type="radio"' + ccult3 + '><input type="' +
        'radio"' + ccult4 + '><input type="radio"' + ccult5 + '><br />Politics:'
        + '<br /><input type="radio"' + cpol1 + '><input type="radio"' + cpol2 +
        '><input type="radio"' + cpol3 + '><input type="radio"' + cpol4 + '><' +
        'input type="radio"' + cpol5 + '><br />Rituals:<br /><input type="' +
        'radio"' + crit1 + '><input type="radio"' + crit2 + '><input type="' +
        'radio"' + crit3 + '><input type="radio"' + crit4 + '><input type="' +
        'radio"' + crit5 + '><br />Science:<br /><input type="radio"' + csci1 +
        '><input type="radio"' + csci2 + '><input type="radio"' + csci3 + '><' +
        'input type="radio"' + csci4 + '><input type="radio"' + csci5 + 
        '></div></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/advantages'
        + '.png" width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="advantages1"><p>Backgrounds</p>' + bg1 + 
        '<br /><input type="radio"' + cbg1dot1 + '><input type="radio"' + 
        cbg1dot2 + '><input type="radio"' + cbg1dot3 + '><input type="radio"' + 
        cbg1dot4 + '><input type="radio"' + cbg1dot5 + '><br /><br />' + bg2 +
        '<br /><br /><input type="radio"' + cbg2dot1 + '><input type="radio"' + 
        cbg2dot2 + '><input type="radio"' + cbg2dot3 + '><input type="radio"' + 
        cbg2dot4 + '><' +  'input type="radio"' + cbg2dot5 + '><br /><br />' + 
        bg3 + '<br /><input type="radio"' + cbg3dot1 + '><input type="radio"' +
        cbg3dot2 + '><input type="radio"' + cbg3dot3 + '><input type="radio"' +
        cbg3dot4 + '><input type="radio"' + cbg3dot5 + '><br /><br />' + bg4 +
        '<br /><input type="radio"' + cbg4dot1 + '><input type="radio"' + 
        cbg4dot2 + '><input type="radio"' + cbg4dot3 + '><input type="radio"' +
        cbg4dot4 + '><input type="radio"' + cbg4dot5 + '><br /><br />' + bg5 +
        '<br /><input type="radio"' + cbg5dot1 + '><input type="radio"' +
        cbg5dot2 + '><input type="radio"' + cbg5dot3 + '><input type="radio"' +
        cbg5dot4 + '><input type="radio"' + cbg5dot5 + '></div>' );   
    win.document.write( '<div class="advantages2"><p>Gifts</p>' + gifts +
        '</div></div>' );
    win.document.write( '<div class="seperator"><img src="/resources/sep.png"' + 
        ' width="675" height="75" alt="seperator"></img></div><div>' );
    win.document.write( '<div class="lowerArea">Glory<br /><input type="radio"' 
        + cglory1 + '><input type="radio"' + cglory2 + '><input type="radio"' +
        cglory3 + '><input type="radio"' + cglory4 + '><input type="radio"' +
        cglory5 + '><br /><input type="radio"' + cglory6 + '><input type="' +
        'radio"' + cglory7 + '><input type="radio"' + cglory8 + '><input type="'
        + 'radio"' + cglory9 + '><input type="radio"' + cglory0 + '><br /><br' +
        ' /><input type="checkbox"' + ctglory1 + '><input type="checkbox"' +
        ctglory2 + '><input type="checkbox"' + ctglory3 + '><input type="' +
        'checkbox"' + ctglory4 + '><input type="checkbox"' + ctglory5 + '><br' +
        ' /><input type="checkbox"' + ctglory6 + '><input type="checkbox"' +
        ctglory7 + '><input type="checkbox"' + ctglory8 + '><input type="' +
        'checkbox"' + ctglory9 + '><input type="checkbox"' + ctglory0 + '>' +
        '<br /><br />Honor<br /><input type="radio"' + chonor1 + '><input type='
        + '"radio"' + chonor2 + '><input type="radio"' + chonor3 + '><input' +
        ' type="radio"' + chonor4 + '><input type="radio"' + chonor5 + '><br />'
        + '<input type="radio"' + chonor6 + '><input type="radio"' + chonor7 +
        '><input type="radio"' + chonor8 + '><input type="radio"' + chonor9 +
        '><input type="radio"' + chonor0 + '><br /><br /><input type="checkbox"'
        + cthonor1 + '><input type="checkbox"' + cthonor2 + '><input type="' +
        'checkbox"' + cthonor3 + '><input type="checkbox"' + cthonor4 + '><' +
        'input type="checkbox"' + cthonor5 + '><br /><input type="checkbox"' +
        cthonor6 + '><input type="checkbox"' + cthonor7 + '><input type="' + 
        'checkbox"' + cthonor8 + '><input type="checkbox"' + cthonor9 + '><' +
        'input type="checkbox"' + cthonor0 + '><br /><br />Wisdom<br /><input' +
        ' type="radio"' + cwis1 + '><input type="radio"' + cwis2 + '><input ' +
        'type="radio"' + cwis3 + '><input type="radio"' + cwis4 + '><input type'
        + '="radio"' + cwis5 + '><br /><input type="radio"' + cwis6 + '><input '
        + 'type="radio"' + cwis7 + '><input type="radio"' + cwis8 + '><input ' +
        'type="radio"' + cwis9 + '><input type="radio"' + cwis0 + '><br /><br '
        + '/><input type="checkbox"' + ctwis1 + '><input type="checkbox"' + 
        ctwis2 + '><input type="checkbox"' + ctwis3 + '><input type="checkbox"'
        + ctwis4 + '><input type="checkbox"' + ctwis5 + '><br /><input type="' +
        'checkbox"' + ctwis6 + '><input type="checkbox"' + ctwis7 + '><input ' +
        'type="checkbox"' + ctwis8 + '><input type="checkbox"' + ctwis9 + '><' +
        'input type="checkbox"' + ctwis0 + '></div>' );
    win.document.write( '<div class="lowerArea">Rage<br /><input type="radio"' +
        crage1 + '><input type="radio"' + crage2 + '><input type="radio"' + 
        crage3 + '><input type="radio"' + crage4 + '><input type="radio"' + 
        crage5 + '><br /><input type="radio"' + crage6 + '><input type="radio"' 
        + crage7 + '><input type="radio"' + crage8 + '><input type="radio"' + 
        crage9 + '><input type="radio"' + crage0 + '><br /><br /><input type="' 
        + 'checkbox"' + ctrage1 + '><input type="checkbox"' + ctrage2 + '><' +
        'input type="checkbox"' + ctrage3 + '><input type="checkbox"' + ctrage4 
        + '><input type="checkbox"' + ctrage5 + '><br /><input type="checkbox"' 
        + ctrage6 + '><input type="checkbox"' + ctrage7 + '><input type="' +
        'checkbox"' + ctrage8 + '><input type="checkbox"' + ctrage9 + '><input ' 
        + 'type="checkbox"' + ctrage0 + '><br /><br />Gnosis<br /><input type="'
        + 'radio"' + cgno1 + '><input type="radio"' + cgno2 + '><input type="' +
        'radio"' + cgno3 + '><input type="radio"' + cgno4 + '><input type="' + 
        'radio"' + cgno5 + '><br /><input type="radio"' + cgno6 + '><input type'
        + '="radio"' + cgno7 + '><input type="radio"' + cgno8 + '><input type="'
        + 'radio"' + cgno9 + '><input type="radio"' + cgno0 + '><br /><br /><' +
        'input type="checkbox"' + ctgno1 + '><input type="checkbox"' + ctgno2 + 
        '><input type="checkbox"' + ctgno3 + '><input type="checkbox"' + ctgno4 
        + '><input type="checkbox"' + ctgno5 + '><br /><input type="checkbox"' + 
        ctgno6 + '><input type="checkbox"' + ctgno7 + '><input type="checkbox"' 
        + ctgno8 + '><input type="checkbox"' + ctgno9 + '><input type="' +
        'checkbox"' + ctgno0 + '><br /><br />Willpower<br /><input type="radio"' 
        + cwill1 + '><input type="radio"' + cwill2 + '><input type="radio"' + 
        cwill3 + '><input type="radio"' + cwill4 + '><input type="radio"' + 
        cwill5 + '><br /><input type="radio"' + cwill6 + '><input type="radio"' 
        + cwill7 + '><input type="radio"' + cwill8 + '><input type="radio"' + 
        cwill9 + '><input type="radio"' + cwill0 + '><br /><br /><input type="' 
        + 'checkbox"' + ctwill1 + '><input type="checkbox"' + ctwill2 + '><' + 
        'input type="checkbox"' + ctwill3 + '><input type="checkbox"' + ctwill4 
        + '><input type="checkbox"' + ctwill5 + '><br /><input type="checkbox"' + 
        ctwill6 + '><input type="checkbox"' + ctwill7 + '><input type="' +
        'checkbox"' + ctwill8 + '><input type="checkbox"' + ctwill9 + '><input '
        + 'type="checkbox"' + ctwill0 + '></div>' );
    win.document.write( '<div class="lowerArea"><p>Health</p><input type="' +
        'checkbox"' + cbru + '>Brused<br />-1<input type="checkbox"' + churt + 
        '>Hurt<br />-1<input type="checkbox"' + cinj + '>Injured<br />-2<input ' 
        + 'type="checkbox"' + cwound + '>Wounded<br />-2<input type="checkbox"'
        + cmaul + '>Mauled<br />-5<input type="checkbox"' + ccrip + '>Crippled' 
        + '<br /><input type="checkbox"' + cincap + '>Incapicated<br /><p>Rank' 
        + '</p>' + cRank + '<br /><p>Experience</p>' + cExp + '</div></div>' );
    win.document.write( '</body></html>' ); 
    setTimeout (function() { win.print(); }, 1000 ); 
}