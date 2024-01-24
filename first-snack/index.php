<?php

$partite = [
  [ "SquadraA", "SquadraB", 55, 60 ],
  [ "SquadraC", "SquadraD", 70, 65 ],
  [ "SquadraE", "SquadraF", 45, 50 ],
];

foreach ($partite as $partita) {
  $output = $partita[0] . " - " . $partita[1] . " | " . $partita[2] . "-" . $partita[3];

  echo $output . '<br />';
}

?>