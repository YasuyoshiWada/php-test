<?php
$a = 7;
if($a === 5) {
  echo "\$aは5です";
}else if($a === 7){
  echo "\$aは7です";
}
else{
  echo "\$aは5と7以外です";
}

$people = "Saburo";
switch($people) {
  case "Saburo":
    echo "三郎です";
}

$result = $a == "7" ? "true" : "false";
echo $result;
