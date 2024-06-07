<?php
function add($score1,$score2,$score3)
{
  $total_score =$score1 + $score2 + $score3;
  return $total_score;
}

$random_score1 = rand(50, 100);
$random_score2 = rand(0, 100);
$random_score3 = rand(50, 100);

// ランダムなスコアを関数に渡す
$total_score = add($random_score1, $random_score2, $random_score3);


if($total_score > 210){
  echo "合計点は".$total_score ."なので合格です";
}else {
  echo "合計点は".$total_score ."なので不合格です";
}
echo "<br>";
function area($base, $height)
{
  $get_triangle_area = $base * $height/2;
  return $get_triangle_area;

}
$random_area1 = rand(50, 100);
  $random_area2 = rand(0, 100);

$get_triangle_area =  area( $random_area1,  $random_area2);
echo "三角形の面積は" . $get_triangle_area ."です";
echo "<br>";
function tetragon($vertical,$horizontal)
{
  return  $vertical * $horizontal;

}

$random_vertical = rand(1,10);
$random_horizontal = rand(1,10);


echo tetragon($random_vertical,$random_horizontal);

echo "<br>";
// echo"４角形の面積は" . $get_tetragon_area . "です";
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}
$upperBase_random = rand(1,10);
echo getTrapezoidArea($upperBase_random,2,3);
