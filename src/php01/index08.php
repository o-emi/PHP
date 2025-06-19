<?php
// $people = array('Taro', 'Jiro', 'Sabubr');

// var_dump($people);
// echo "<br />";
// echo $people[0];



// $person = array(
//   'name' => 'Taro',
//  'age' => 20,
// );


$people = [
  ['Taro', 25 ,'men']
  ['Jiro', 20 ,'men']
  ['hanako', 16 'women']
];

foreach = ($people as $person) {
  echo $person[0] .'(' .$person[1] .'歳' .$person[2] .')' .'<br ?>';
}