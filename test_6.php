<?php 

//while
$i = 0;

while ($i < 10) {
    echo $i;
    $i++;
}

//do while
$i = 0;

do {
    echo $i;
    $i++;
} while ($i < 10);

//for

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

//foreach

$colors = array("red", "green", "blue");

foreach ($colors as $color) {
    echo $color;
}

//break

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i;
}

//continue

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i;
}


?>