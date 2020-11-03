<!DOCTYPE html>
    <html lang = "en">
    <head>
        <meta charset="utf-8">
        <title>lab_4</title>
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
         body{
             background-color: aquamarine;
         }
        </style>
    </head>
<body >
    Тест 1:
<?php
echo "Hello, World!<br>"
?>
Тест 2:
<?php echo 2+2 
?>
 <div> <br> 
 Генерация: <br> 
<?php 
$arr1 = array();
$arr2 = array();
for ($i = 0; $i <= 10; $i++) {
    array_push($arr1, rand(10, 99));
	array_push($arr2, rand(10, 99));
}
print_r($arr1);
echo "<br>";
print_r($arr2);
 ?>  <br>  <br>
  </div> 
  <div> 
Убрать все дублирующие элементы:
<?php 
echo "<br>";
$count_dupl = 0;

$arr1 = del_duplicate ($arr1);
$arr2 = del_duplicate ($arr2);

function del_duplicate ($arr) {
global $count_dupl;
   for ($i=0; $i<count($arr) - 1;$i++){
		for ($j=$i + 1;$j<count($arr);$j++){
		if($arr[$i] == $arr[$j]){
			unset($arr[$i]);
			$arr = array_values($arr);
		 $count_dupl++;
}
}
   }

    return $arr;
}      
print_r($arr1);
echo "<br>";
print_r($arr2);
   echo "<br>"; ?>
    <div> 
 Общее кол-во дублей:
 <?php 
print($count_dupl);

 ?> <br>  <br>
 </div> 
 </div> 
  <div> 
 Общий массив без дублей:<br>
 <?php
 $result = array_merge ($arr1, $arr2);
  $result = del_duplicate ($result);
  print_r($result);
  
  ?> <br>  <br>
   </div>
 
 <div> 
 Вывести массив в обратном порядке:
 </div> 
    <?php 
	
	//foreach ($arr1 as $value) {
		$arr_reverse = array();
foreach(array_reverse($result) as $i){
	array_push($arr_reverse, $i);
}
print_r($arr_reverse);
?>  
</body>