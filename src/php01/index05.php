<?php
//for文

for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 ."<br />";
}


//while文
$i = 0;
while ($i < 3) {
    echo "i = " . $i . "<br />";
    $i += 1;
}

$count = 0;
while ($count < 20) {
    $count +=1;
    echo $count . "<br />";
}

$i = 0;
while ($i  < 10) {
    if ($i ==5) {
        break;
    }
    echo $i;
    $i++;
}
echo "<br />";
$i = 0;
while ($i < 10) {
    if($i == 5) {
        $i++;
        continue;
    }
    echo $i;
    $i++;
}
$count = 0;
while ($count <= 100) {
    if ($count % 3 === 0){
        $count++;
        continue;
    }
    if ($count === 20) {
        break;
    }
    echo $count;
    $count++;
}

?>