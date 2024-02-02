<?php


class Tema7
{
//1. If Statements:
//a. Scrie un program PHP care verifică dacă un număr dat este pozitiv și afișează un mesaj corespunzător.

public function Problema1A(){
    $x= 5;
    if ($x > 0) {
        echo "Numărul este pozitiv.";}
//    else {
//        echo "Numărul nu este pozitiv.";}
}

//b. Implementează un script care determină dacă un utilizator este eligibil pentru vot bazat pe vârsta introdusă.
public function Problema1B(){
    $age= 20;
    if ($age>=18){
        echo "Utilizatorul este major si are drept de vot";}
//    else
//        {echo "Utilizatorul nu are drept de vot";}
}


//2. If Operators:
//a. Realizează un program care primește două numere de la utilizator și afișează mesajul "Numărul 1 este mai mare decât Numărul 2" dacă primul număr este mai mare.

public function Problema2A(){
    $x = 20;
    $y = 25;

    if ($x>$y){
        echo "Numărul 1 este mai mare decât Numărul 2";
    } else
        {echo "Numerul 1 nu este mai mare decat Numarul 2";}
}

//b. Scrie un script care utilizează operatorul ternar pentru a afișa "Par" sau "Impar" în funcție de valoarea introdusă.
public function Problema2B(){
    $x = 10;
    $y = $x%2==0?"Par":"Impar";
    echo $y;
}

//3. If...else Statement:
//a. Implementează un program care verifică dacă un utilizator are vârsta suficientă pentru a conduce și afișează un mesaj corespunzător.

public function Problema3A(){
        $age= 20;
        if ($age>=18){
            echo "Utilizatorul este major are varsta necesara sa conduca.";}
        else
            {echo "Utilizatorul nu are drept de vot.";}
    }


    //b. Scrie un script care determină dacă un număr este par sau impar și afișează un mesaj corespunzător.
public function Problema3B(){
    $x=15;
    if($x%2==0){
        echo "Numarul este par.";
    }else
        echo "numarul este impar.";

}

//4. Shorthand if Statements:
//a. Creează un program care verifică dacă un utilizator are vârsta de peste 18 ani și afișează un mesaj corespunzător într-o singură linie.

    public function Problema4A() {
        $age = 18;
        echo ($age >= 18) ? "Utilizatorul este major." : "Utilizatorul nu este major.";
    }


//b. Implementează un script care verifică dacă un număr este mai mic decât 10 și afișează un mesaj corespunzător într-o singură linie.
    public function Problema4B(){
    $x=9;
    echo ($x<10) ?"Numarul este mai mic decat 10." : "Numarul este mai mare decat 10.";
    }


//5. Nested if Statement:
//a. Scrie un program PHP care verifică dacă un număr este pozitiv, negativ sau zero și afișează un mesaj corespunzător.

    public function Problema5A(){
    $x=5;
    if($x>=0){
        echo "Numarul este pozitiv.";
    if($x==0)
        echo "Numarul este 0.";
        }
    else{
        echo "Numarul este negativ.";
    }}

//b. Realizează un script care verifică dacă un număr este divizibil la 2 și, în caz afirmativ, verifică dacă este și divizibil la 3.
    public function Problema5B(){
    $x=8;
    if($x%2==0){
        echo "Numarul este divizibil cu 2.";
        if($x%3==0){
            echo "Numarul este divizibil si cu 3.";
        }
    } else
        {echo"Numarul nu este divizibil cu 2.";}
    }
}