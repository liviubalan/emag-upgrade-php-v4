<?php
//1. Funcții fără parametri: Scrieți o funcție numită salut() care afișează un mesaj de salut simplu atunci când este apelată.
function forma_de_salut() {
    echo "Salut!";
}
forma_de_salut();

//2. Funcții cu parametrii: Implementați o funcție numită adunare($a, $b) care primește doi parametri și returnează suma lor.

function sum($a, $b) {
    $c = $a + $b;
    return $c;
}

echo "3 + 2 = " . sum(3,2) . "<br>";
echo "7 + 10 = " . sum(7,10) . "<br>";


//3. Funcții cu argumente default: Creați o funcție numită salut_utilizator($nume = 'Utilizator') care afișează un mesaj de salut adresat unui utilizator specific sau utilizatorului generic dacă nu se specifică un nume.


function salut_utilizator($nume = "Utilizator") {
    echo "Salut, $nume! <br>";
}

salut_utilizator(Gigel);
salut_utilizator();
salut_utilizator(Maria);
salut_utilizator(Vasilica);

// Funcții cu echo și return: Dezvoltați o funcție dublu_suma($a, $b) care afișează suma celor doi parametri și returnează dublul acestei sume.

function dublu_suma($a, $b) {
    $c = ($a + $b) *2;
    return $c;
}

echo "5 + 10 = 15, iar dublul sumei este = " . dublu_suma(5,10) . "<br>";

//5. Funcții cu parametrii trimiși prin valoare și referință: Scrieți o funcție incrementare($numar) care crește valoarea parametrului trimis prin referință cu 1.

function incrementare(&$numar) {
    $numar += 1;
}

$numar = 5;
incrementare($numar);
echo $numar;


//6. Funcții în care se specifică tipul parametrilor și return: Implementați o funcție adunare_intreaga(int $a, int $b): int care primește doi parametri întregi și returnează suma lor ca un întreg. Verificati rezultatul utilizand numere float.

echo "<br>";

function adunare_intreaga(int $a, int $b) {
    return $a + $b;
}
echo adunare_intreaga(5.0,3.0);
var_dump($a + $b);
echo "<br>";

//7. Utilizarea "declare(strict_types=1)": Definiți o funcție impartire(float $a, float $b): float care realizează împărțirea precisă a două numere, iar utilizând declare(strict_types=1) asigurați-vă că tipurile de date sunt respectate strict.

declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b): float
{
    return $a / $b;
}

echo addNumbers(1.2, 5.2);

//8. Funcții fără parametri: Realizați o funcție afisare_data() care afișează data și ora curentă într-un format specific.

//9. Funcții cu parametrii: Dezvoltați o funcție calcul_medie($numere) care primește un array de numere și returnează media lor aritmetică.


// 10. Funcții cu argumente default: Scrieți o funcție salutare($nume = 'Utilizator', $salut = 'Salut') care afișează un mesaj personalizat de salut cu un nume specific și un salut opțional.

function salutare($nume = 'Utilizator', $salut = 'Salut') {
    echo "Bine ati venit, $nume <br>";
}

salutare(Anda);
salutare();
salutare(Brian);
salutare(Gabriela);
