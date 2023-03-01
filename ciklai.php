<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$text = "labas";

for ($i=0; $i <strlen($text) ; $i++) { 
    echo $text[$i]. "<br>";        

}

echo "<hr>";

$arr = ['l','a','b','a','s'];

for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i]. "<br>";        
    
}
echo "<hr>";

foreach ($arr as $key => $letter) {
    echo $letter. "<br>";        
    
} 

echo "<hr>";

foreach ($arr as $key => $letter) {
    echo $key . " " . $letter. "<br>";        
    
} 
echo "<hr> ";

for ($i=0; $i < count($arr); $i++) { 
   echo $arr[$i]. "<br>";      
}
echo "<hr>";


foreach ($arr as $letter) {
    echo $letter. "<br>";        
    
} 

$arr = ['vardas' => 'Naglis','pavarde'=> 'Mockevičius','mėgsta' => "šokoladas"];

echo $arr['pavarde'];

//              0
$arrBardakas = [0,8,"keksas", "gyvunas" => "ruonis", 12, 8=> 14, 5];
print_r($arrBardakas);
// echo $arrBardakas['gyvunas'];
echo "<br>";
$associativeArr = ["va"=>'k',"taip"=>"aha","gal"=>"kur"];

foreach ($associativeArr as $key => $value) {
  echo "key yra '".$key . "' value yra '" .$value. "'<br>";
}

echo "<h1>labas</h1>";
echo '<div class="pink">pink</div>';

?>

<style>
    h1{
        color: green;
    }
    .pink{
        color:pink;
    }
</style>


</body>
</html>

<!-- 

 0   1   2   3   4   5   6
[17,156,651,651,651,651,651];

$arr["0"=>17, "1"=> 156, "2"=> 651...]
$arr[0]
$arr[1]
$arr[...


    price           title               gender
$arr["price"=>29.89, "title"=> "kepure", "gender"=>"unisex];
$arr['price']
$arr['title']
$arr['gender']

$items[
    $arr["price"=>14.99, "title"=> "maike", "gender"=>"unisex];
    $arr["price"=>14.40, "title"=> "kelnes", "gender"=>"unisex];
    $arr["price"=>69.99, "title"=> "striuke", "gender"=>"unisex];
]

echo $items[0]['price']; 14.99
$items[2]['title']; striuke

foreach ($items as $preke) {
   echo $preke['price'] . $preke['title'] . $preke['gender']
}

 -->