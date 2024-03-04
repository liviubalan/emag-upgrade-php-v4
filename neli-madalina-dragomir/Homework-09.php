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
