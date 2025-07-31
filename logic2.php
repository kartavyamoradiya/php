<?php
$zeros = [0,2,3,0,4,0,5,0];
$exist = []; 
$value = [];  
foreach ($zeros as $v) {
    if ($v !== 0) {
        $exist[] = $v;
    }
}
foreach ($exist as $v) {
    $value[] = $v;
}
$zeroCount = count($zeros) - count($exist);
for ($i = 0; $i < $zeroCount; $i++) {
    $value[] = 0;
}
echo "<pre>";
print_r($value);
echo "</pre>";

echo "<hr>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0){
        echo "this is even num = ".$i.'<br>';
    }
}echo "<hr>";
function reverse2($fruit) {
    $reversed = '';
    $len = strlen($fruit);
    for ($i = $len - 1; $i >= 0; $i--) {
        $reversed .= $fruit[$i];
    }
    return $reversed;
}
$fruit= "this is mango";
echo reverse2($fruit);
echo "<hr>";

$fruits = ['mango', 'bannana', 'chiku', 'mango', 'apple', 'mango', 'chiku'];
$exist = [];
foreach ($fruits as $fruit) {
    if(isset($exist[$fruit])){
			$exist[$fruit]++;
		}else {
			$exist[$fruit] = 1;
		}
}
echo "<pre>";
print_r($exist);
echo "</pre>";
echo "<hr>";
$language = [
    ['php', 'laravel', 'js'],
    ['c', 'js', 'css'],
    ['react', 'laravel', 'php'],
    ['html', 'css', 'js'],
    ['php', 'react', 'node.js'],
];
$lan =[];
foreach($language as $lang){
    foreach ($lang as $com){
        if(in_array($com, $lan)) { continue; }
        echo "<pre>";
         print_r($lang);
        echo "</pre>";
         $lan[] = $com;
    }
}
echo "<hr>";
echo "<pre>";
print_r($lan);
die();
echo "<hr>";




?>

