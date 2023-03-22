<!-- PHP data -->
<?php
  // Aufgabe 1
  // Erstelle zunächst ein Array, in dem sich ein Produkt mit dem zugehörigen Preis und die Anzahl der verfügbaren Artikel befindet.
  // Schreibe nun ein Programm, das:
  // Den Käufer darüber informiert, dass der Artikel nicht verfügbar ist, falls der Warenbestand auf 0 steht.
  // Ausgibt, dass das Produkt versandkostenfrei geliefert wird, falls mindestens ein Artikel vorrätig ist und falls der Preis bei mindestens 20 Euro liegt
  // Anzeigt, dass für die Lieferung 5 Euro Versandkosten anfallen, falls der Artikel verfügbar ist, der Preis jedoch unter 20 Euro liegt.
  echo "<h1>Exercise 1</h1>";
  $product = ["Buch", 20.65, 3];
  if ($product[2] == 0) {
    echo "Product unavailable";
  } else if ($product[2] >= 1 and $product[1] >= 20) {
    echo "Article will be delivered for free.";
  } else if ($product[2] >= 1 and $product[1] < 20) {
    echo "Article will be delivered for a fee of 5 euros.";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise 2</title>
</head>
<body>
  <div>
  <!-- Aufgabe 2
  Erstelle drei Programme, die von 1 bis 10 zählen, verwende hierfür jeweils einmal eine while-, eine for- und eine do-while-Schleife -->
    <?php
    echo "<h1>Exercise 2</h1>";
    // for loop
    echo "<h3>for loop</h3>";
      for ($i = 1; $i < 11; $i++) {
        echo "<span>$i </span>";
      }

      //  while loop
      echo "<h3>while loop</h3>";
      $j = 1;
      while ($j < 11) {
        echo "<span>$j </span>";
        $j++;
      }

      // do-while loop
      echo "<h3>do-while loop</h3>";
      $k = 1;
      do {
        echo "<span>$k </span>";
        $k++;
      } while ($k < 11);
    ?>
  </div>
  
  <div>
    <!-- Aufgabe 3
    Erstelle ein zusammengesetztes Array für das Sortiment eines Obst- und Gemüsehändlers mit Äpfel, Birnen, Tomaten und Zucchini. Die erste Ebene soll einen numerischen Index haben.
    Die zweite soll hingegen assoziativ sein (mit den Bezeichnungen Produkt, Preis und Sonderangebot). Bei der Angabe zum Produkt handelt es sich um eine Zeichenkette mit der entsprechenden
    Obst- oder Gemüsesorte, beim Preis um eine Zahl und die Angabe Sonderangebot soll eine boolesche Variable sein. -->

    <?php
      echo "<h1>Exercise 3</h1>";
      $products = [
        ["product"=>"apples", "price/kilo"=>2.5, "special offer"=>true],
        ["product"=>"pears", "price/kilo"=>4.7, "special offer"=>true],
        ["product"=>"tomatoes", "price/kilo"=>5.00, "special offer"=>false],
        ["product"=>"zucchinis", "price/kilo"=>3.50, "special offer"=>false],
      ];
      print_r($products);

      // Erstelle eine foreach-Schleife, die den Produktnamen und den Preis angibt. Sollte es ich dabei um ein Sonderangebot handeln, soll vor diesen Angaben „Achtung Sonderangebot!“ erscheinen.
      // Ergänze das vorherige Beispiel um die Ausgabe des entsprechenden Feldnamens. Das Sonderangebot kannst du weg lassen. 
      echo "<h1>Exercise 4</h1>";
      foreach($products as $product) {
        if ($product['special offer'] == true) {
          echo "Special offer: ";
        }
        echo $product['product'] . ': ' . $product['price/kilo'];
        echo "</br>";
      }



    ?>
  </div>

  <div>
  <!-- Aufgabe 5
  Erstelle eine Funktion, die die ersten zehn Potenzen einer Zahl berechnet. Dazu kommt der Operator ** zum Einsatz. Diesem wird die Basis vorangestellt und darauf folgt der Exponent. Speichere alle Potenzen in ein Array. Dieses Array soll auch der Rückgabewert der Funktion sein.
  Erstelle eine weitere Funktion, die alle Werte eine Arrays mit print oder echo ausgibt. Speichere diese in eine separate PHP-File und binde diese (mit 'include) in die erste PHP-File ein.  -->
    <?php
      echo "<h1>Exercise 5</h1>";

      function getFirstTenPowers($number) {
        $powers = [];
        for ($i = 1; $i < 11; $i++) {
          array_push($powers, $number**$i);
        }

        return $powers;
      }

      $powersOfTwo = getFirstTenPowers(2);

      function printArray($array) {
        foreach($array as $element) {
          echo "<span>$element </span>";
        }
      }

      echo "The first ten second powers of 2: ";
      printArray($powersOfTwo);

    ?>
  </div>
  <!-- -->

  <!-- Aufgabe 6
  Suche in der Online-Dokumentation eine Funktion, um die Quadratwurzel einer Zahl zu bestimmen und eine weitere Funktion, mit der du eine Zufallsvariable generierst.
  Informiere dich über die Anwendung dieser beiden Funktionen. Erstelle nun ein Programm, dass die Wurzel eines zufälligen Werts berechnet und sowohl den Ausgangswert als auch das Ergebnis ausgibt. -->


</body>
</html>