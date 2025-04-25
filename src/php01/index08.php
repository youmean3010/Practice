<?php

$people = ["Olivia","Tayler","Kate"];

// var_dump($people);

echo $people[2] . "<br>";

$friends = [
    "friend1" => "Justin",
    "friend2" => "Ludo",
    "friend3" => "Alex" 
];

echo $friends ["friend2"] . "<br>";


$profile = [
    [
       "Name" => "Justin",
       "Country" => "America",
       "Age" => 32 
    ], 
    [
       "Name" => "Ludo",
       "Country" => "France",
       "Age" => 26
    ],
    [
       "Name" => "Chanu",
       "Country" => "Korea",
       "Age" => 25
    ]
];

echo "Country : " . $profile[1] ["Country"];
echo "<br>";

$Countries = [
    "country1" => "Canada",
    "country2" => "America",
    "country3" => "India"
];

foreach ($Countries as $country => $name) {
 echo $country . "は、" . $name . "です。";
}
echo "<br>";
// $people = array(
//   'person1' => 'Taro',
//   'person2'  => 'Jiro',
//   'person3'  => 'Saburo'
// );

// foreach ($people as $person => $name) {
//   print $person . "は" . $name . "です" . '<br />';
// }


$people = [
     [
    "name" => "Taro",
    "age" => 25,
    "gender" => "men"
],
     [
    "name" => "Jiro",
    "age" => 20,
    "gender" => "men"
],
     [
    "name" => "Hinako",
    "age" => 16,
    "gender" => "women"
     ]
];

foreach ($people as $person) {
    echo $person["name"] . "(" . $person["age"] . "歳" . $person["gender"] . ")" . "<br>"; 
}

$people = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["Hanako", 16, "women"]
];
foreach ($people as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br>";
}
  



