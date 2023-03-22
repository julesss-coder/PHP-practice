<?php
  $characters = [
    ["Vorname"=>"Fritz", "Nachname"=>"Phantom", "Alter"=>70],
    ["Vorname"=>"Lilo", "Nachname"=>"Knickerbocker", "Alter"=>37],
    ["Vorname"=>"Thomas", "Nachname"=>"Brezina", "Alter"=>58],
    ["Vorname"=>"Tom", "Nachname"=>"Turbo", "Alter"=>27],
  ];


  // Multidimensionale Arrays

  foreach($characters as $array) {
    foreach($array as $key => $value) {
      echo "{$key}: {$value} </br>";
    }
  }

  for ($i = 0; $i < count($characters); $i++) {
      echo "{$characters[$i]['Vorname']} ";
      echo "{$characters[$i]['Nachname']}, ";
      echo "{$characters[$i]['Alter']}</br>";
  }
  
  // Assoziative Arrays

  $favColours = [
    "Fritz" => "lila",
    "Lilo" => "pink",
    "Thomas" => "gelb",
    "Tom" => "rot"
  ];

  print_r($favColours);
  echo "</br>";


  // Ordne Arrays & gebe das Ergebnis aus (echo oder print)
  $tom_mag = array('Schmieröl', 'Debreziner' , 'Essiggurkerl');
  sort($tom_mag);
  print_r($tom_mag);
  echo "</br>";

  $tricks = array(6, 89, 23, 1, 7, 8, 19);
  arsort($tricks);
  print_r($tricks);
  echo "</br>";


  ksort($favColours);
  print_r($favColours);
  echo "</br>";


  function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
  }

  usort($favColours, "cmp");
  print_r($favColours);
  echo "</br>";

  
  // PHP Strings
  $phrase = "Die Knickerbockerbande, das sind wir!";
  echo strlen($phrase);
  echo "</br>";

  $phrase2 = "Tom Turbo mag Schmieröl";
  $word = "Schmieröl";
  echo stripos($phrase2, $word);
  echo "</br>";


  $phrase3 = "Turbo Durchblick";
  echo strrev($phrase3);
  echo "</br>";


?>
