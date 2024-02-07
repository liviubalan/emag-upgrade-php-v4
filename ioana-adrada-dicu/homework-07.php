<?php
//1. If Statements:
//a. Scrie un program PHP care verifică dacă un număr dat este pozitiv și afișează un mesaj corespunzător.

$X = 7;
if ($X>=0)
echo "Pozitiv";
else
echo "Negativ";


//b. Implementează un script care determină dacă un utilizator este eligibil pentru vot bazat pe vârsta introdusă.

$X=21;
if ($X>=18)
    echo "Eligibil";
else
    echo "Neeligibil";

// 2. If Operators:
//a. Realizează un program care primește două numere de la utilizator și afișează mesajul "Numărul 1 este mai mare decât Numărul 2" dacă primul număr este mai mare.

$t = 14;
$s= 10;

if ($t>$s) {
    echo "Numarul 14 este mai mare decat Numarul 10";
}

//b. Scrie un script care utilizează operatorul ternar pentru a afișa "Par" sau "Impar" în funcție de valoarea introdusă

$a=10;
$b=8;
$c=5;
if($a==10||$b=8) echo "8 si 10 sunt numere pare";

//3. If...else Statement:
//a. Implementează un program care verifică dacă un utilizator are vârsta suficientă pentru a conduce și afișează un mesaj corespunzător.
$Anda = 33;

if ($Anda > "18") {
    echo "Este eligibil pentru permis!";
} else {
    echo "Nu este eligibil pentru permis";
}
//b. Scrie un script care determină dacă un număr este par sau impar și afișează un mesaj corespunzător.

$a=10;
$b=8;
$c=5;
if($a==10||$b=8) echo "8 si 10 sunt numere pare";

//4. Shorthand if Statements:
//a. Creează un program care verifică dacă un utilizator are vârsta de peste 18 ani și afișează un mesaj corespunzător într-o singură linie.

$a = 18;
if ($a > 18);
echo "Are peste 18 ani";

//b. Implementează un script care verifică dacă un număr este mai mic decât 10 și afișează un mesaj corespunzător într-o singură linie.

$a=3;
if($a<10);
echo "Este un numar mai mic decat 10";

//5. Nested if Statement:
//a. Scrie un program PHP care verifică dacă un număr este pozitiv, negativ sau zero și afișează un mesaj corespunzător.

$a = 13;
if ($a > 1)
    echo "Este un numar pozitiv";
  if ($a = 0)
      echo " Este egal cu 0";
 if ($a = 0)
     echo " Este un numar negativ";

 // b. Realizează un script care verifică dacă un număr este divizibil la 2 și, în caz afirmativ, verifică dacă este și divizibil la 3.

$a = 6;

if ($a %2==0)
    echo "Divizibil";
    if ($a %3==0)
        echo " Divizibil";
    else
        echo " Nu divizibil";
    

    //Rescriere coduri cu if

    $favcolor = "red";
    if ($favcolor = "red")
        echo "Your favorite color is red!";
    elseif ($favcolor = "blue")
        echo "Your favorite color is blue!";
    elseif ($favcolor = "green")
        echo "Your favorite color is green!";
    else
        echo "Your favorite color is neither red, blue, nor green!";

    $d = 3;

if ($d = 1 || $d = 2 || $d = 3 || $d = 4 || $d = 5)
    echo "The week feels so long!";
elseif($d = 0 || $d = 6)
    echo "Weekends are the best!";
else
    echo "Something went wrong";
?>
