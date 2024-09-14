<?php
$name = htmlspecialchars($_POST["name" ],  ENT_QUOTES);
$radio = htmlspecialchars($_POST["DesiredProduct"],  ENT_QUOTES);
$number = htmlspecialchars($_POST["NumberOfOrders"],  ENT_QUOTES);
echo "私の名前は、". $name;
echo "<br />";
echo "ご希望の商品は、" . $radio;
echo "<br />";
echo "注文数は、" . $number;
echo "<br />";
?>