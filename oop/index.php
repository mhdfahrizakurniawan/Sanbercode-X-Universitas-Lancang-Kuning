<?php
require_once 'animal.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>"; // Output: shaun
echo "legs : " . $sheep->legs . "<br>"; // Output: 4
echo "cold blooded : " . $sheep->cold_blooded . "<br>"; // Output: no
?> <br>

<?php
require_once 'Frog.php';
require_once 'Ape.php';

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>"; // Output: buduk
echo "legs : " . $kodok->legs . "<br>"; // Output: 4 (inherited from Animal)
echo "cold blooded : " . $kodok->cold_blooded . "<br>"; // Output: no (inherited from Animal)
$kodok->jump(); // Output: Hop Hop
echo "<br> <br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>"; // Output: kera sakti
echo "legs : " . $sungokong->legs . "<br>"; // Output: 2
echo "cold blooded : " . $sungokong->cold_blooded . "<br>"; // Output: no
$sungokong->yell(); // Output: Auooo
?> <br>