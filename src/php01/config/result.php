<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$set = htmlspecialchars($_POST["set"] ,ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

print "私の名前は". $name . "です";
echo "<br>";
print "ご注文のしょうひんは".$set;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (isset($_POST["set"])) {
//     $selected_set = $_POST["set"];

//     switch ($selected_set) {
//       case "A_set";
//       print "ご希望の商品は,Aセット";
//       break;
//       case "B_set";
//       print "ご希望の商品は,Bセット";
//       break;
//       case "C_set";
//       print "ご希望の商品は,Cセット";
//       break;
//     }
//   }
// }
echo "<br>";


echo "注文数は、".$number;
