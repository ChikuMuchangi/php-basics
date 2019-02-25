

<?php
//functions
$number = 400;
$root = sqrt($number);
echo $root;
echo "<br>";
echo sqrt(10000);
echo "<br>";
echo pow(2,5);// arguments
echo "<br>";
echo max(55,85,88,88,88,5,23,58,69588,584);
echo min(58,88,5899,5289,6599,5589,2158,48789,4879);
echo "<br>";
$x = 44.5489;
    echo "<hr>";
echo round($x);
echo "<hr>";
echo round($x, 3);
echo "<hr>";
echo floor($x);
echo "<hr>";
echo ceil($x);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$sentence="The quick brown fox jumped over a lazy dog";
echo "<br>";
echo strtoupper($sentence);
echo "<hr>";
echo strtolower($sentence);
echo "<hr>";
echo ucwords($sentence);
echo "<hr>";
echo str_word_count($sentence);
echo "<hr>";
echo strlen($sentence);// number of letters
echo "<br>";
echo "<br>";

$password = "p@55w0rd";
echo md5($password);
echo "<hr>";
echo sha1($password);
echo "<hr>";
echo crypt($password,".]][';]]';'\56kfnrealktjhraeoijtoqjepahfonj ha;hutyrtt;oito");

echo "<hr>";
//date