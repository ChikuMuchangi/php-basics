

<?php
//arrays
$names = ["Mary","Musa","Mike","Moha","Arya","Jack","John","Snow","Marvel","Edie"];

$ages =[15,8,48,68,51,55,4,98,2,87,23,36,54,39,47];

echo $names[4];
echo "<hr>";
echo $ages[0];

echo "<hr>";
foreach ($names as $jina)
{
    echo "$jina <br>";
}


echo "<hr>";
echo sizeof($names); //count the # of names

echo "<hr>";
echo sizeof($ages); //count the # of ages
echo "<hr>";
array_push($names, "Bush");
echo sizeof($names);
echo "<hr>";
var_dump($names);
array_pop($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
rsort($ages);


echo "<hr>";
foreach ($ages as $age)
{
    echo "$age <br>";
}
echo "<hr>";
echo array_sum($ages);
echo "<hr>";
//associative array
$person =["names"=>"Moha Musa", "age"=>51,"colour"=>"black"];
echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["colour"];

















