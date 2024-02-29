<?php

class Tema10
{

//1. Construire: Scrieți un program PHP care creează un array cu numere întregi aleatorii între 1 și 100 și afișează conținutul acestuia.
    public function Problema1()
    {
        $numbers = [];
        for ($i = 0; $i < 10; $i++) {
            $numbers = rand(1, 100);
        }
        echo "Numerele cerute sunt: ";
        foreach ($numbers as $number) {
            echo $number;
        }
    }


//2. Apelare: Dezvoltați un script PHP care afișează al doilea element dintr-un array dat.
    public function Problema2()
    {
        $array = [1, 2, 3];
        echo $array[1];
    }
//3. Ștergere elemente: Implementați o funcție numită sterge_element($array, $index) care elimină un element de la un anumit index dintr-un array și afișează array-ul rezultat.
    public function sterge_element($array, $index)
    {
        unset($array[$index]);
        var_dump($array);
    }
    public function Problema3(){
        $array = [1,2,3,4,5];
        $index = 2;
        $this->sterge_element($array,$index);
    }

//4. Sortare: Realizați un program care sortează un array de numere întregi în ordine descrescătoare și afișează array-ul sortat.
    public function Problema4()
    {
        $array = [1, 2, 3, 4, 5];
        rsort($array);
        var_dump($array);
    }

//5. Lucru cu funcții: Scrieți o funcție dublare_elemente($array) care primește un array și returnează un nou array în care fiecare element este dublat.
    public function dublare_elemente($array){
        $array=[];
        foreach($array as $element){
            $array[] = $element * 2;
        }
        return $array;
    }

    public function Problema5(){
        $array = [1,2,3,4,5,6,7,8,9,10];
        $new_array=$this->dublare_elemente($array);
        var_dump($new_array);
    }

//6. Construire: Creați un program PHP care definește un array asociativ cu nume de utilizatori și vârstele corespunzătoare și afișează numele și vârsta fiecărui utilizator.
    public function users_and_age($users)
    {
        foreach ($users as $name => $age) {
            echo "Utilizatorul $name are varsta $age" . "</br>";
        }
    }

    public function Problema6()
    {
        $users = ["Mihai" => 30, "Andrei" => 32, "Ana-Maria" => 34];
        $this->users_and_age($users);
    }



//7. Apelare: Dezvoltați un script PHP care determină dacă un anumit număr se află într-un array dat și afișează un mesaj corespunzător.
    public function Problema7(){
        $array=[0,1,2,3,4,5];
        $check_number = 2;
        if(in_array($check_number,$array)){
        echo "Numarul $check_number se afla in array" . "</br>";
        }else{
            echo "Numarul $check_number nu se afla in array" . "</br>";
        }
    }



//8. Ștergere elemente: Implementați o funcție numită sterge_duplicate($array) care elimină toate elementele duplicate dintr-un array și afișează array-ul rezultat.
    public function sterge_duplicate($array)
    {
        $array = (array_unique($array));
        return $array;
    }

    public function Problema8(){
        $array = [0,0,1,2,3,3,4,4,5,5,5,6,7];
        $this->sterge_duplicate($array);
        var_dump($array);
    }
//cred ca trebuia sa folosesc (&$array) ca sa ii dau coordonata array-ului in loc de o copie a valorii ei, dar nu sunt sigur.

//9. Sortare: Realizați un program care sortează un array de cuvinte în ordine alfabetică inversă și afișează array-ul sortat.
     public function Problema9(){
        $array = ["varza","viezure","barza"];
        rsort($array);
        var_dump($array);
     }

//10. Lucru cu funcții: Scrieți o funcție suma_pare($array) care primește un array de numere și returnează suma tuturor numerelor pare din array.
    public function suma_pare($array){

        $even_array=[];
        foreach ($array as $numbers){
            if($numbers%2==0){
                $even_array[]=$numbers;
            }
        }
        var_dump(array_sum($even_array));
    }

    public function Problema10(){
        $array=[0,1,2,3,4,5,6,7,8,9,10];
        $this->suma_pare($array);
    }
    //nu sunt sigur nici aici daca am facut corect. sunt 80% sigur ca e ok
//Bonus:
//
//11. Verificarea URL-urilor produselor eMAG: Scrieți un program PHP care să verifice dacă un șir de caractere reprezintă un URL valid pentru un produs de pe eMAG.ro.
// Un URL valid ar trebui să înceapă cu "https://www.emag.ro/" și să conțină un identificator unic pentru produs, de exemplu, "/laptop-hp-pavilion-15".
    public function Problema11()
    {
        $url = "https://www.emag.ro/consola-playstation-5-digital-edition-ps5-slim-1tb-ssd-d-chassis-1000040668/pd/D1NVNKYBM/";
        $emag = "https://www.emag.ro";
        $product = "consola-playstation-5-digital-edition-ps5-slim-1tb-ssd-d-chassis-1000040668/pd/D1NVNKYBM/";
        if (strpos($url, $emag) !== false && (strpos($emag, $product) !== false)) {
            echo "URL-ul produsului cerut este corect.";
            return true;
        } else {
            echo "URL-ul produsului cerut nu este corect.";
            return false;
        }
    }
//(strpos($url, $emag) === 0 pt a verifica ca incepe cu url-ul emag

//12. Extragerea codurilor de produs din text: Implementați un script PHP
// care să extragă toate codurile de produs (de exemplu, "PROD1234567")
// dintr-un text care conține descrieri de produse de pe eMAG.ro.
// Aceste coduri sunt formate din litere mari "PROD" urmate de 7 cifre.
    public function Problema12()
    {
        $descriere_produs = "PROD1234567 - Consola PS5® Digital Edition dezlantuie noi posibilitati de gaming pe care nu le-ai anticipat niciodata.
Experimenteaza incarcare de mare viteza cu un SSD ultra-rapid, imersiune mai profunda datorita compatibilitatii cu functia de feedback haptic, declansatoare adaptive si sunet 3D3, precum si o noua generatie de jocuri PlayStation® incredibile.
Consola PS5® Digital Edition este o editie complet digitala a consolei PS5®, fara unitate disc. Logheaza-te in contul tau PlayStation™Network si acceseaza PlayStation™Store pentru a cumpara si a descarca jocuri";
        $array_descriere = explode(" ", $descriere_produs);
        $numerical_code="1234567";
        $code_prefix="PROD";
        $product_code=$code_prefix.$numerical_code;
        foreach($array_descriere as $cuvinte){
            if(strpos($descriere_produs,$product_code)!==false && strlen($cuvinte)===strlen($product_code)&&$cuvinte===$product_code){
            echo "Cod Produs gasit:". "$cuvinte";
            }
        }

    }

}
//cred ca  "if(strpos($descriere_produs,$product_code)!==false" este redundant, dar am ales sa mai am o extra verificare acolo

$SOLUTIE = new Tema10;

$SOLUTIE->Problema1();
$SOLUTIE->Problema2();
$SOLUTIE->Problema4();
$SOLUTIE->Problema5();
$SOLUTIE->Problema6();
$SOLUTIE->Problema7();
$SOLUTIE->Problema8();
$SOLUTIE->Problema9();
$SOLUTIE->Problema10();
//BONUS
$SOLUTIE->Problema11();
$SOLUTIE->Problema12();