<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- <meta charset="UTF-8">
    <title>Mein erstes PHP Programm</title> -->
    <?php
    print "<meta charset=\"UTF-8\">\n";
    print '<meta name="description" content="Beschreibung der Seite">';
    print "\n";
    print "<meta name='author' content='Beschreibung der Seite'>\n";
    ?>
  </head>
  <body>
    <p>
      <?php
      // Zeichenkette
      print "Hallo Welt";
      echo "Hallo Welt";
      ?>
    </p>
    <p>
      <?php
      // Zahl
      print 255;
      ?>
    </p>
    <p>
      <?php
      // Zahl als String
      print "500";
      ?>
    </p>
    <p>
      <?php
      // Rechnen
      print 50*37;
      ?>
    </p>
    <?php
    print "<h1>Willkommen</h1>";
    print "<p>1. Absatz</p>";
    print "<p>2. Absatz</p>";
    ?>
    <?php
    // \n hat keine Auswirkung auf die Darstellung im Browser. Bewirkt aber einen Zeilenumbruch im Quellcode
    print "<h1>Willkommen</h1>\n";
    print "<p>1. Absatz</p>\n";
    print "<p>2. Absatz</p>\n";
    ?>
    <?php
/* Variablen werden mit einem Dollarzeichen gekennzeichnet, und folgen der camelCase Schreibweise
Variablennamen dürfen keine Sonderzeichen enthalten */

// Text mit einer Variablen erfassen
$textContent= "Meine erste Variable";
print $textContent;


// Zahlen als Variable abspeichern
/* Variablen können neben Strings auch numerische oder boolsche Werte besitzen */
$int= 3;
$float= 5.39281;
$boolean = true;
print "Ganze Zahl: " . $int. "<br>Kommazahl: " . $float. "<br>Boolean: " . $boolean;


// Additionen, Multiplikationen, usw
$inStore= 5;
print "<p>Verfügbare Artikel: " . $inStore. "</p>\n";
$inStore= $inStore - 1;
/* Kurzschreibweise: $inStore--; */
print "<p>Verfügbare Artikel: " . $inStore. "</p>\n";

?>
  </body>
</html>