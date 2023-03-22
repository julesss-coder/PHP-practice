<!-- Erstelle ein Programm, das die Besucher deiner Seite begrüßt
Zeige zwei verschiedene Möglichkeiten auf, um die Zahl 8 als Ausgabe eines PHP-Programms darzustellen und erkläre die Unterschiede unter jeder Ausgabe im HTML File
Schreibe ein Programm, das zwei nummerische Variablen verwendet. Dieses soll die beiden Werte zunächst einzeln ausgeben. Anschließend soll es beide Variablen multiplizieren und das Ergebnis ausgeben.
Schreibe ein Programm, das folgenden Liedtext ausgibt:
„Die Donau ist ins Wasser g’falln, der Rheinstrom ist verbrannt, In Frankfurt ist ein Spaß passiert,der Geisbock hats erzählt“
Dabei soll jede Zeile in einer Variablen erfasst werden. Verwende für die Ausgabe nur einen einzigen print-Befehl
==== HIER WEITERMACHEN ===
Erstelle ein Array, das von drei Kunden jeweils die Kundennummer, den Vor- und den Nachnamen enthält. Gebe daraufhin die entsprechenden Werte auf dem Bildschirm aus. Dabei sollen die zusammengehörigen Werte für jeden Kunden jeweils in einer Zeile stehen. -->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php
      echo 'Willkommen auf meiner Seite!';
    ?>
  </h1>
  <div>
    <!-- `echo` is a statement, not an expression, as it does not evaluate to a value. Therefore, it cannot be included in an expression. -->
    <!-- 5 + echo 8 // syntax error -->
    <?php echo 8; ?>
  </div>
  <div>
    <!-- `print expression` is an expression, since it evaluates to a value. `print` returns a value, while `echo` does not. -->
    <?php print 8 ?>
  </div>
  <div>
    <?php 
      // Schreibe ein Programm, das zwei nummerische Variablen verwendet. Dieses soll die beiden Werte zunächst einzeln ausgeben. Anschließend soll es beide Variablen multiplizieren und das Ergebnis ausgeben.
      $a = 5;
      $b = 6.2;
    ?>
    <p><?php 
      print $a; 
    ?></p>
        <p><?php 
      print $b; 
    ?></p>
        <p><?php 
      print $a . ' * ' . $b . ' = ' . $a * $b;
    ?></p>
  </div>
  <div>
  <!-- Schreibe ein Programm, das folgenden Liedtext ausgibt:
„Die Donau ist ins Wasser g’falln, der Rheinstrom ist verbrannt, In Frankfurt ist ein Spaß passiert,der Geisbock hats erzählt“
Dabei soll jede Zeile in einer Variablen erfasst werden. Verwende für die Ausgabe nur einen einzigen print-Befehl -->
    <?php
      $vers1 = 'Die Donau ist ins Wasser g’falln, der Rheinstrom ist verbrannt';
      $vers2 = 'In Frankfurt ist ein Spaß passiert,der Geisbock hats erzählt';
    ?>
    <p>
      <?php
        print $vers1 . $vers2;
      ?>
    </p>
  </div>
  <div>
  <!-- Erstelle ein Array, das von drei Kunden jeweils die Kundennummer, den Vor- und den Nachnamen enthält. Gebe daraufhin die entsprechenden Werte auf dem Bildschirm aus. Dabei sollen die zusammengehörigen Werte für jeden Kunden jeweils in einer Zeile stehen. -->
  <!--   -->
    <?php
      $kunden = [001, "Julia", "Felberbauer", 002, "Maria", "Mustermann", 003, "Manfred", "Mustermann"];

      // FRAGE Wo gehoert PHP-Code in einem HTML-File hin, den ich nicht auf der Seite darstellen will, z.Bsp. die Arraydeklaration von $kunden?
      echo "Kundennummer: " . $kunden[0] . ", Name: " . $kunden[1] . " " . $kunden[2] ."</br>";
      echo "Kundennummer: " . $kunden[3] . ", Name: " . $kunden[4] . " " . $kunden[5];
      echo "Kundennummer: " . $kunden[6] . ", Name: " . $kunden[7] . " " . $kunden[8];

      // Zeilenumbruch mit p Tag
      echo "<p>Kundennummer: ${kunden[0]}, Name: ${kunden[1]} ${kunden[2]}</p>\n";
      echo "<p>Kundennummer: ${kunden[3]}, Name: ${kunden[4]} ${kunden[5]}</p>\n";
      echo "<p>Kundennummer: ${kunden[6]}, Name: ${kunden[7]} ${kunden[8]}</p>\n";
      var_dump($kunden);
      // array_push($kunden, "test");
      // print_r($kunden);
      // echo count($kunden);

    ?>
  </div>
</body>
</html>