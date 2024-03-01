<?php
//1. Construire: Scrieți un program PHP care creează un array cu numere întregi aleatorii între 1 și 100 și afișează conținutul acestuia.
$number = range(0,100);
var_dump($number);


//2. Apelare: Dezvoltați un script PHP care afișează al doilea element dintr-un array dat.

    $fructe = array("mere", "prune", "cirese");
echo $fructe[1];

//3. Ștergere elemente: Implementați o funcție numită sterge_element($array, $index) care elimină un element de la un anumit index dintr-un array și afișează array-ul rezultat.

$sterge_element = array ("verde", "rosu", "maro", "galben");
unset($sterge_element[2]);
var_dump($sterge_element);

//4. Sortare: Realizați un program care sortează un array de numere întregi în ordine descrescătoare și afișează array-ul sortat.


$sortare = array(45,87,18,99);
rsort($sortare);
$numere = count($sortare);
for($x = 0; $x < $numere; $x++) {
    echo $sortare[$x];
    echo "<br>";
}

// 5. Lucru cu funcții: Scrieți o funcție dublare_elemente($array) care primește un array și returnează un nou array în care fiecare element este dublat.

$dublare_elemente = [4,3,5,4,6,3,7,8,1,2,2,7];
echo ("Elementele dublate sunt: ");
for($i = 0; $i < count($dublare_elemente); $i++) {
    for($j = $i + 1; $j < count($dublare_elemente); $j++) {
        if($dublare_elemente[$i] == $dublare_elemente[$j])
            echo($dublare_elemente[$j].",");
    }
}

//6. Construire: Creați un program PHP care definește un array asociativ cu nume de utilizatori și vârstele corespunzătoare și afișează numele și vârsta fiecărui utilizator.

$age = array("Anda"=>"33", "Gabriela"=>"20", "Cristi"=>"27");
asort($age);

foreach($age as $x => $x_value) {
    echo "Nume=" . $x . ", Varsta=" . $x_value;
    echo "<br>";
}

// 7. Apelare: Dezvoltați un script PHP care determină dacă un anumit număr se află într-un array dat și afișează un mesaj corespunzător.

$numar = [2,4,7,8,9,0];
if (in_array(9, $numar)) {
    echo 'Numarul a fost gasit';
} else {
    echo 'Numarul nu a fost gasit';
}

//8. Ștergere elemente: Implementați o funcție numită sterge_duplicate($array) care elimină toate elementele duplicate dintr-un array și afișează array-ul rezultat.

$a = array("mere","pere", "prune", "mere");
$b = array("cirese", "pere", "prune");
$c = array_merge($a, $b);
$sterge_duplicate = array_keys(array_flip($c));
var_dump($sterge_duplicate);

//9. Sortare: Realizați un program care sortează un array de cuvinte în ordine alfabetică inversă și afișează array-ul sortat.

$name = array("Dicu", "Ioana", "Andrada");
rsort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
    echo $name[$x];
    echo "<br>";
}

//10. Lucru cu funcții: Scrieți o funcție suma_pare($array) care primește un array de numere și returnează suma tuturor numerelor pare din array.

