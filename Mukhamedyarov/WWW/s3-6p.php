<?

if(isset($_POST["sostav"])){
$upper = 0;
$str = $_POST["gachi"];
$lower = 0;
foreach(preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY) as $item) {
    if (preg_match('~[A-ZА-ЯЁ]~u', $item)) ++$upper;
    else if (preg_match('~[a-zа-яё]~u', $item)) ++$lower;
}
$case = $upper > $lower ? MB_CASE_UPPER : MB_CASE_LOWER;
$str = mb_convert_case($str, $case);
echo $str;
}


if(isset($_POST["inscript"])){
  $text = chunk_split($_POST["word"], 3,"Е");
print_r($text);
}

if(isset($_POST["format"])){
  $text = explode(".",$_POST["text"]);
  $a = $_POST["a"];
  $b = $_POST["b"];
$count = 0;

  while($count<(count($text)-$b)){
    for($n=$a;$n<=$b;$n++){
$num = $count;

      echo "<p>";

for($count;$count<$num+$n;$count++){
echo $text[$count];
}
echo "</p>";
}
}

}


?>
