<?php
//while
//1. Nilai Awal / Initial Value
//2. Kondisi Terminasi / Kapan Looping berhenti
//3. Increment / Decrement
$i = 10;

while ($i >= 1) {
    echo "Hello World $i x <br>";
    $i = $i - 1;
}
echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo "Hello World  $i x <br>";
}
