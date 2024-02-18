<?php
//Tema 9


class Tema9{
//1. Funcții fără parametri: Scrieți o funcție numită salut() care afișează un mesaj de salut simplu atunci când este apelată.
    public function salut()
    {
        return $x = "Buna Siua";
    }

    public function Problema1()
    {
        echo $this->salut();
    }

//2. Funcții cu parametrii: Implementați o funcție numită adunare($a, $b) care primește doi parametri și returnează suma lor.
    public function adunare($a, $b)
    {
        return $a + $b;
    }

    public function Problema2()
    {
        echo $this->adunare(10, 20);
}
//3. Funcții cu argumente default: Creați o funcție numită salut_utilizator($nume = 'Utilizator') care afișează un mesaj de salut adresat
// unui utilizator specific sau utilizatorului generic dacă nu se specifică un nume.
    public function salut_utilizator($nume = 'Utilizator')
    {
        if ($nume == 'admin') {
            echo "Login successful! Welcome back, $nume";
        } else {
            echo "Hello, $nume!";
        }
    }

    public function Problema3()
    {
        $this->salut_utilizator('Utilizator');
    }
    //4. Funcții cu echo și return: Dezvoltați o funcție dublu_suma($a, $b) care afișează suma celor doi parametri și returnează dublul acestei sume.
    public function dublu_suma($a, $b) {
        $sum = $a + $b;
        echo "Suma este: $sum <br>";
        return $sum * 2;
    }
    public function Problema4(){
        echo $this->dublu_suma(10,20);
    }
//5. Funcții cu parametrii trimiși prin valoare și referință: Scrieți o funcție incrementare($numar) care crește valoarea parametrului trimis prin referință cu 1.

public function incrementare($numar){
return $numar+=1;
}
public function Problema5(){
echo $this->incrementare(10);
}
//6. Funcții în care se specifică tipul parametrilor și return: Implementați o funcție adunare_intreaga(int $a, int $b): int
// care primește doi parametri întregi și returnează suma lor ca un întreg. Verificati rezultatul utilizand numere float.
    public function adunare_intreaga(int $a, int $b): int {
        return $a + $b;
    }

    public function float_maybe(int $a, int $b): bool {
        $y = $this->adunare_intreaga($a, $b);
        return is_float($y);
    }

    public function Problema6() {
        $a=10;
        $b=20;
        $resultat = $this->adunare_intreaga($a, $b);
        if ($this->float_maybe($a, $b)) {
            echo "Numarul $resultat este float";
        } else {
            echo "Numarul $resultat nu este float";
        }
    }
    //7. Utilizarea "declare(strict_types=1)": Definiți o funcție impartire(float $a, float $b): float care realizează împărțirea precisă a două numere,
    // iar utilizând declare(strict_types=1) asigurați-vă că tipurile de date sunt respectate strict.

    public function impartire(float $a, float $b): float {
        return $a / $b;
    }

    public function Problema7() {
        $a=10.2;
        $b=15.8;
        echo $this->impartire($a, $b);
    }
    //8. Funcții fără parametri: Realizați o funcție afisare_data() care afișează data și ora curentă într-un format specific.
    public function afisare_data(): string
    {
        return date('Y-m-d H:m:s');
    }

    public function Problema8()
    {
        echo $this->afisare_data();
    }
    //9. Funcții cu parametrii: Dezvoltați o funcție calcul_medie($numere) care primește un array de numere și returnează media lor aritmetică.
    public function calcul_medie(array $numere) {
        return array_sum($numere) / count($numere);
    }

    public function Problema9() {
        return $this->calcul_medie([10, 20, 30, 40, 50]);
    }
    //10. Funcții cu argumente default: Scrieți o funcție salutare($nume = 'Utilizator', $salut = 'Salut') care afișează un mesaj personalizat de salut cu un nume specific și un salut opțional.
    public function salutare($nume = 'Utilizator', $salut = 'Salut'){
        echo "$salut, $nume!";
    }

    public function Problema10(){
        $this->salutare('John', 'Hello');
    }
}

$SOLUTIE= new Tema9;
$SOLUTIE->Problema1();
$SOLUTIE->Problema2();
$SOLUTIE->Problema3();
$SOLUTIE->Problema4();
$SOLUTIE->Problema5();
$SOLUTIE->Problema6();
$SOLUTIE->Problema7();
$SOLUTIE->Problema8();
$SOLUTIE->Problema9();
$SOLUTIE->Problema10();
