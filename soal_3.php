<?php
echo "<h3>ini kalo pake FOR</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "FOR - Angka: $i <br>";
}

echo "<h3>ini kalo pake WHILE</h3>";
$j = 1;
while ($j <= 5) {
    echo "WHILE - Angka: $j <br>";
    $j++;
}

echo "<h3>ini kalo pake DO-WHILE</h3>";
$k = 1;
do {
    echo "DO-WHILE - Angka: $k <br>";
    $k++;
} while ($k <= 5);

echo "<h3>ini kalo pake FOREACH</h3>";
$angka = [1, 2, 3, 4, 5];
foreach ($angka as $a) {
    echo "FOREACH - Angka: $a <br>";
}
?>
