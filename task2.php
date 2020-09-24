//課題１

<?php
$name="taku";
if($name="taku"){
    echo "私はあなたの名前です。";
}else{
    echo "あなたの名前ではありません";
}
?>

//課題2

<?php
$total=0;
for ($i=0;$i<=10000;$i++){
    $total+=$i;
}
echo $total;
?>

//課題3

<?php
$fruits=array("apple","banana","orange","grape","lemon");
    foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
?>

//課題4応用

<?php
$start =1;
$end =100;
for($i=$start;$i<=$end;$i++){
    if($i%5==0){
        echo $i;
        echo "\n";
    }
}
