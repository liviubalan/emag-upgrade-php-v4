<?php

//Tema 8

//1. While Loop:
//


class Tema8
{
    //    a. Scrie un program PHP care, folosind un ciclu while, afișează primele 5 numere prime și pătratele acestora.
    public function Problema1a()
    {
        $count = 0;
        $number = 2;

        while ($count < 5) {
            $prime = true;
            for ($i = 2; $i <= (int)sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $prime = false;
                    break;
                }
            }
            if ($prime == true) {
                echo "Număr prim: " . $number . ", Pătratul: " . ($number * $number) . "<br>";
                $count++;
            }
            $number++;
        }
    }
    //b. Dezvoltă un script care, prin intermediul unui ciclu while, găsește și afișează cel mai mic număr prim dintre primele 10 numere naturale.
    public function Problema1b() {
        $count = 0;
        $number = 2;

        while ($count < 10) {
            $prime = true;
            for ($i = 2; $i <= (int)sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $prime = false;
                    break;
                }
            }
            if ($prime == true) {
                echo "Cel mai mic număr prim dintre primele 10 numere naturale este: " . $number . "<br>";
                    break;
            }
            $number++;
        }
    }
    //c. Construiește un program care, utilizând un ciclu while, afișează primele 5 numere pare și dublul acestora.
    public function Problema1c(){
        $count = 0;
        $number = 2;

        while ($count < 5) {
            echo "Numar par: " . $number . ", Dublul lui: " . ($number * 2) . ".<br>";
            $count++;
            $number += 2;
        }
    }
    //d. Elaborează un script PHP care, prin intermediul unui ciclu while, calculează și afișează suma primelor 15 numere naturale.
    public function Problema1d(){
        $sum = 0;
        $number = 1;
        $count = 0;

        while ($count < 15) {
            $sum += $number;
            $number++;
            $count++;
        }
        echo "Suma primelor 15 numere naturale este: " . $sum;
    }
    //e. Implementează un program PHP care, folosind un ciclu while, afișează primele 5 numere naturale.
    public function Problema1e()
    {
        $x = 1;
        while ($x <= 5) {
            echo $x . "<br>";
            $x++;
        }
    }
//2. Do...While Loop:
//    a. Scrie un program PHP care, utilizând un ciclu do...while, afișează primele 5 numere prime și pătratele acestora.
    public function Problema2a()
    {
        $x = 2;
        $count = 0;
        $result = [];

        do {
            $prime = true;
            for ($i = 2; $i <= (int)(sqrt($x)); $i++) {
                if ($x % $i == 0) {
                    $prime = false;
                    break;
                }
            }
            if ($prime) {
                $result[] = ["Numar Prim" => $x, "Patratul Sau" => $x * $x];
                $count++;
            }
            $x++;
        } while ($count < 5);

        echo $result;
    }

//b. Dezvoltă un script care, prin intermediul unui ciclu do...while, găsește și afișează cel mai mic număr prim dintre primele 10 numere naturale.
    public function isprime($x)
    {
        for ($i = 2; $i <= sqrt($x); $i++) {
            if ($x % $i == 0) {
                return false;
            }
        }
        return $x;}
        public function Problema2b()
        {
            for ($x = 2; $x <= 10; $x++) {
                if ($this->isprime($x)) {
                    echo "Cel mai mic număr prim dintre primele 10 numere naturale este: $x";
                }
            }
        }

//c. Construiește un program care, folosind un ciclu do...while, afișează primele 5 numere pare și dublul acestora.
    public function Problema2c() {
        $x = 1;
        $count = 0;

        do {
            $y = $x * 2;
            echo "Numarul par: $x, Dublul sau: $y<br>";
            $x += 2;
            $count++;
        } while ($count < 5);
    }

//d. Elaborează un script PHP care, prin intermediul unui ciclu do...while, calculează și afișează suma primelor 15 numere naturale.
    public function Problema2d() {
        $x = 1;
        $sum = 0;
        $count = 0;

        do {
            $sum += $x;
            $x++;
            $count++;
        } while ($count < 15);

        echo "Suma primelor 15 numere naturale este: $sum";
    }
//e. Implementează un program PHP care, folosind un ciclu do...while, afișează primele 5 numere naturale.
    public function Problema2e() {
        $x = 1;
        $count = 0;

        do {
            echo "$x<br>";
            $x++;
            $count++;
        } while ($count < 5);
    }
//3. For Loop:
//    a. Scrie un program PHP care, utilizând un ciclu for, afișează primele 5 numere prime și pătratele acestora.
    public function Problema3a()
    {
        $count = 0;

        for ($x = 2; $count < 5; $x++) {
            $prime = true;

            for ($i = 2; $i < $x; $i++) {
                if ($x % $i == 0) {
                    $prime = false;
                    break;
                }
            }

            if ($prime) {
                echo "Numarul prim: $x, Patratul sau: " . ($x * $x) . "<br>";
                $count++;
            }
        }
    }
    //b. Dezvoltă un script care, prin intermediul unui ciclu for, găsește și afișează cel mai mic număr prim dintre primele 10 numere naturale.
    public function Problema3b()
    {
        for ($x = 2; $x <= 10; $x++) {
            if ($this->isprime($x)) {
                echo "Cel mai mic numar prim dintre primele 10 numere naturale este: $x";

            }
        }
        echo "Nu s-a gasit niciun număr prim in primele 10 numere naturale.";
    }
//c. Construiește un program care, folosind un ciclu for, afișează primele 5 numere pare și dublul acestora.
    public function Problema3c() {
        for ($x = 2; $x <= 10; $x += 2) {
            echo "Numarul par: $x, Dublul sau: " . ($x * 2) . "<br>";
        }
    }

//d. Elaborează un script PHP care, prin intermediul unui ciclu for, calculează și afișează suma primelor 15 numere naturale.
    public function Problema3d() {
        $sum = 0;
        for ($x = 1; $x <= 15; $x++) {
            $sum += $x;
        }
        echo "Suma primelor 15 numere naturale este: $sum";
    }

//e. Implementează un program PHP care, folosind un ciclu for, afișează primele 5 numere naturale.
    public function Problema3e() {
        for ($x = 1; $x <= 5; $x++) {
            echo "Numar natural: $x<br>";
        }
    }


}

$SOLUTIE = new Tema8();

$SOLUTIE->Problema1a();
$SOLUTIE->Problema1b();
$SOLUTIE->Problema1c();
$SOLUTIE->Problema1d();
$SOLUTIE->Problema1e();
$SOLUTIE->Problema2a();
$SOLUTIE->Problema2b();
$SOLUTIE->Problema2c();
$SOLUTIE->Problema2d();
$SOLUTIE->Problema2e();
$SOLUTIE->Problema3a();
$SOLUTIE->Problema3b();
$SOLUTIE->Problema3c();
$SOLUTIE->Problema3d();
$SOLUTIE->Problema3e();




