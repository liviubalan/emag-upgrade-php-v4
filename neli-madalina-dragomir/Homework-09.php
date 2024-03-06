<pre>
<!DOCTYPE html>

<h1>                                              Teme</h1>

<h1>                                            Homework-09 </h1>


<h2> 1. Funcții fără parametri: </h2>
<?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Scrieți o funcție numită salut() care afișează un mesaj de salut simplu atunci când este apelată.";
echo"<br>";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function HI(){
    echo "Hi there, Code! Ready or not, here I come!!!  \\u{1F60A}";
}
HI();
EOD;

}
echo"<br>";
echo"<br>";
function HI(){
    echo "Hi there, Code! Ready or not, here I come!!!  \u{1F60A}";
}
HI();
echo"<br>";
echo"<br>";
echo"<br>";
?>
<h2> 2. Funcții cu parametrii: </h2>
    <?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Implementați o funcție numită adunare(\$a, \$b) care primește doi parametri și returnează suma lor. ";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function suma(\$a,\$b){
    \$total=\$a+\$b;
    return  \$total;
}
echo "10+10=" .suma(10,10)."<br>";
echo "10+20=".suma(10,20)."<br>";
echo "10+30=".suma(10,30)."<br>";
echo "10+40=".suma(10,40)."<br>";
EOD;

}
echo"<br>";
echo"<br>";
function suma($a,$b){
    $total=$a+$b;
    return  $total;
}
echo "10+10=" .suma(10,10)."<br>";
echo "10+20=".suma(10,20)."<br>";
echo "10+30=".suma(10,30)."<br>";
echo "10+40=".suma(10,40)."<br>";
echo"<br>";
echo"<br>";
echo"<br>";
?>
   <h2> 3. Funcții cu argumente default: </h2>
    <?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Creați o funcție numită salut_utilizator(\$nume = 'Utilizator') care afișează un mesaj de salut adresat unui 
utilizator specific sau utilizatorului generic dacă nu se specifică un nume.";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function Salut_Utilizator(\$Utilizator, ...\$firstname) {
    \$txt = "";
    \$len = count(\$firstname);
    for(\$i = 0; \$i < \$len; \$i++) {
        \$txt = \$txt."Buna! Bine ai venit ! \$firstname[\$i] \$Utilizator.<br>";
    }
    return \$txt;
}

\$afiseaza = Salut_Utilizator("Utilizator", "1", "2", "3","4","5");
echo \$afiseaza;
EOD;

}
echo"<br>";
echo"<br>";
function Salut_Utilizator($Utilizator, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
        $txt = $txt."Buna! Bine ai venit ! $firstname[$i] $Utilizator.<br>";
    }
    return $txt;
}

$afiseaza = Salut_Utilizator("Utilizator", "1", "2", "3","4","5");
echo $afiseaza;
echo"<br>";
echo"<br>";
echo"<br>";
?>
    <h2>4.  Funcții cu echo și return: </h2>
    <?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Dezvoltați o funcție dublu_suma(\$a, \$b) care afișează suma celor doi parametri și returnează dublul acestei 
sume.";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function dublul_sumei(\$a, \$b) {
    \$suma = \$a + \$b;
    echo "Suma a plus b este : ".\$suma. "<br>";
    return \$suma * 2;
}

echo "(5 + 10)*2 = " . dublul_sumei(5,10) . "<br>";
echo "(7 + 13)*2 = " . dublul_sumei(7,13) . "<br>";
echo "(2 + 4)*2 = " . dublul_sumei(2,4);
EOD;

}
echo"<br>";
echo"<br>";
function dublul_sumei($a, $b) {
    $suma = $a + $b;
    echo "Suma a plus b este : ".$suma. "<br>";
    return $suma * 2;
}

echo "(5 + 10)*2 = " . dublul_sumei(5,10) . "<br>";
echo "(7 + 13)*2 = " . dublul_sumei(7,13) . "<br>";
echo "(2 + 4)*2 = " . dublul_sumei(2,4);
echo"<br>";
echo"<br>";
echo"<br>";
?>
    <h2>5. Funcții cu parametrii trimiși prin valoare și referință:  </h2>
    <?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Scrieți o funcție incrementare(\$numar) care crește valoarea parametrului trimis prin referință cu 1.";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function incrementare(&\$numar) {
    \$numar++;
}

\$num = 2;
incrementare(\$num);
echo \$num;
EOD;

}
echo"<br>";
echo"<br>";
function incrementare(&$numar) {
    $numar++;
}

$num = 2;
incrementare($num);
echo $num;
echo"<br>";
echo"<br>";
echo"<br>";
?>
   <h2>6. Funcții în care se specifică tipul parametrilor și return:  </h2>
    <?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Implementați o funcție adunare_intreaga(int \$a, int \$b): int care primește doi parametri întregi și returnează 
suma lor ca un întreg. Verificati rezultatul utilizand numere float. ";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function adunare_intreaga(int \$a, int \$b):int {
    return (int)(\$a + \$b);
}
echo adunare_intreaga(5, 5);


function adunare_intreaga1(int \$a, int \$b):int {
    return (int)(\$a + \$b);
}
echo adunare_intreaga1(5.1, 5.2);
EOD;

}
echo"<br>";
echo"<br>";
    function adunare_intreaga(int $a, int $b):int {
        return (int)($a + $b);
    }
    echo adunare_intreaga(5, 5);
    echo"<br>";
    echo"<br>";
    function adunare_intreaga1(int $a, int $b):int {
        return (int)($a + $b);
    }
    echo adunare_intreaga1(5.1, 5.2);
echo"<br>";
echo"<br>";
echo"<br>";
?>
    <h2>7. Utilizarea "declare(strict_types=1)":  </h2>
    <?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Definiți o funcție impartire(float \$a, float \$b): float care realizează împărțirea precisă a două numere, 
iar utilizând declare(strict_types=1) asigurați-vă că tipurile de date sunt respectate strict.";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
declare (strict_types=1);
function impartire(float \$a, float \$b):float {
    return \$a / \$b;
}
echo impartire(8.3,5.2);
EOD;

}
echo"<br>";
echo"<br>";
// declare (strict_types=1);
    function impartire(float $a, float $b):float {
        return $a / $b;
    }
    echo impartire(8.3,5.2);
echo"<br>";
echo"<br>";
echo"<br>";
?>
   <h2>8. Funcții fără parametri:  </h2>
<?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Realizați o funcție afisare_data() care afișează data și ora curentă într-un format specific.";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function afisare_data() {
    date_default_timezone_set('Europe/Bucharest');

    \$data_si_ora = date("d-m-Y H:i:s");

    echo "Data si ora curenta:" . \$data_si_ora;
}

afisare_data();
EOD;

}
echo"<br>";
echo"<br>";
function afisare_data() {
    date_default_timezone_set('Europe/Bucharest');

    $data_si_ora = date("d-m-Y H:i:s");

    echo "Data si ora curenta:" . $data_si_ora;
}

afisare_data();
echo"<br>";
echo"<br>";
echo"<br>";
?>
    <h2>9. Funcții cu parametri:  </h2>
    <?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Dezvoltați o funcție calcul_medie(\$numere) care primește un array de numere și returnează media lor aritmetică";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function calcul_medie(\$numere) {
    \$suma = array_sum(\$numere);

    \$numar_elemente = count(\$numere);

    \$media = \$suma / \$numar_elemente;

    return \$media;
}

\$numere = [10, 20, 30, 40, 50];
echo calcul_medie(\$numere);
EOD;

}
echo"<br>";
echo"<br>";
function calcul_medie($numere) {
    // Calculăm suma numerelor din array
    $suma = array_sum($numere);

    // Calculăm numărul de elemente din array
    $numar_elemente = count($numere);

    // Calculăm media aritmetică
    $media = $suma / $numar_elemente;

    return $media;
}

$numere = [10, 20, 30, 40, 50];
echo calcul_medie($numere);
echo"<br>";
echo"<br>";
echo"<br>";
?>
     <h2>10. Funcții cu argumente default:  </h2>
<?php
echo"<br>";
echo"<br>";
echo"<br>";
echo "Scrieți o funcție salutare(\$nume = 'Utilizator', \$salut = 'Salut') care afișează un mesaj personalizat de 
salut cu un nume specific și un salut opțional. ";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
function salutare(\$nume = 'Utilizator', \$salut = 'Salut') {
    echo \$salut . ', ' . \$nume . '!';
}


salutare('Robert',"Hello"); 
echo "<br>";
salutare('Anda', 'Bună'); 
echo "<br>";
salutare("Liviu","Hello");
EOD;

}
echo"<br>";
echo"<br>";
function salutare($nume = 'Utilizator', $salut = 'Salut') {
    echo $salut . ', ' . $nume . '!';
}


salutare('Robert',"Hello");
echo "<br>";
salutare('Anda', 'Bună');
echo "<br>";
salutare("Liviu","Hello");
echo"<br>";
echo"<br>";
echo"<br>";
