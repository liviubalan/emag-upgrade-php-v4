
<pre>
<!DOCTYPE html>

<h1>                                              Teme</h1>

<h1>                                            Homework-08 </h1>


<h2> 1. While Loop: </h2>

<?php

echo "a. Scrie un program PHP care, folosind un ciclu while, afișează primele 5 numere prime și pătratele acestora. ";
echo"<br>";
echo"<br>";
echo"<br>";

{
    echo <<<EOD
function isPrime(\$num) {
    if (\$num <= 1) {
        return false;
    }
    for (\$i = 2; \$i <= \$num / 2; \$i++) {
        if (\$num % \$i == 0) {
            return false;
        }
    }
    return true;
}

\$count = 0;
\$num = 2; // începem de la primul număr prim

echo "Primele 5 numere prime și pătratele lor sunt:" . PHP_EOL;
while (\$count < 5) {
    if (isPrime(\$num)) {
        echo \$num . " cu pătratul " . (\$num * \$num) . PHP_EOL;
        \$count++;
    }
    \$num++;
}
EOD;
}
echo"<br>";
echo"<br>";
function isPrime($num):bool {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
/* Acest script va afișa primele 5 numere prime și pătratele acestora
utilizând o buclă while pentru a itera prin numere și funcția isPrime()
pentru a verifica dacă un număr este prim sau nu. Apoi, pătratele numerelor
prime sunt calculate și afișate.
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
Această funcție primește un număr întreg ca argument și returnează true dacă numărul
este prim și false în caz contrar. Funcția utilizează o buclă for pentru a verifica dacă
există vreun divizor între 2 și radicalul pătrat al numărului. Dacă găsește un divizor,
funcția returnează false, altfel returnează true. Este important să nu uităm să excludem
cazurile în care numărul este mai mic sau egal cu 1, deoarece acestea nu sunt considerate
numere prime.
înlocuirea sqrt($num) cu $num / 2 în exemplul de mai sus va produce același rezultat pentru
verificarea numerelor prime, dar acest lucru va fi mai puțin eficient din punct de vedere al
performanței pentru numerele mai mari.
Această funcție va funcționa corect pentru a verifica dacă un număr este prim sau nu, dar va
efectua mai multe iterații decât varianta care utilizează sqrt($num), în special pentru numerele
mai mari. Utilizarea sqrt($num) reduce numărul de iterații necesare pentru a verifica divizorii unui
număr și, astfel, îmbunătățește performanța funcției pentru numere mai mari.
În exemplul de mai sus, $num este o variabilă care reprezintă numărul pe care îl verificăm pentru
a determina dacă este prim sau nu. Această variabilă este utilizată în cadrul funcției isPrime()
pentru a verifica dacă numărul respectiv este prim.

Inițializăm $num cu valoarea 2, deoarece este cel mai mic număr prim și începem verificarea de
la acesta. Apoi, incrementăm $num în bucla while pentru a trece la următoarele numere și continuăm
verificarea lor.

În esență, $num este un număr care este testat pentru a determina dacă este prim sau nu.
Acesta este utilizat în funcția isPrime() pentru a verifica proprietatea sa de număr prim.
În expresia for ($i = 2; $i <= $num / 2; $i++), aceasta reprezintă o buclă for în limbajul PHP care
este folosită pentru a itera prin toți posibilii divizori ai numărului $num.

$i = 2: Inițializăm variabila de control $i cu valoarea 2. Acest lucru se datorează faptului că nu
este necesar să verificăm dacă numărul este divizibil cu 1, iar pentru a evita divizibilitatea cu numărul
însuși, începem verificarea de la 2.
$i <= $num / 2: Această condiție specifică că bucla se va executa atât timp cât $i este mai mic sau egal cu
jumătate din valoarea lui $num. Aceasta este o optimizare pentru că nu trebuie să căutăm divizori care sunt
mai mari decât jumătate din valoarea lui $num, deoarece, dacă un număr nu are divizori până la jumătate din
valoarea sa, atunci nu va avea niciunul până la valoarea sa.
$i++: La fiecare iterație, valoarea lui $i este incrementată cu 1, pentru a trece la următorul posibil divizor
al lui $num.
Prin urmare, această buclă for este utilizată în funcția isPrime() pentru a verifica dacă numărul $num este prim,
parcurgând toți posibilii săi divizori, de la 2 la jumătate din valoarea sa.
Aceasta este o buclă while în limbajul PHP care se execută atâta timp cât variabila $count este mai mică decât 5. În
cadrul buclei:
Se verifică dacă numărul $num este prim folosind funcția isPrime($num).
Dacă numărul $num este prim, atunci se afișează numărul împreună cu pătratul său, utilizând echo, iar apoi variabila
$count este incrementată cu 1, pentru a ține evidența câtor prime s-au găsit până în acel moment.
La finalul fiecărei iterații, variabila $num este incrementată cu 1, pentru a trece la următorul număr natural.
În esență, această buclă while afișează primele 5 numere prime și pătratele lor. Buclele while sunt
folosite atunci când numărul de iterații necesare nu este cunoscut în avans, ci este determinat de o condiție
specifică. În acest caz, bucla continuă până când sunt găsite și afișate 5 numere prime.
Pentru a afișa fiecare număr prim și pătratul său pe o linie separată, poți folosi un simbol special pentru a indica
un nou rând în loc de \n. În PHP, acest simbol este PHP_EOL. Iată cum poți ajusta codul pentru a obține acest lucru:
*/

$count = 0;
$num = 2; // începem de la primul număr prim

echo "Primele 5 numere prime și pătratele lor sunt:" . PHP_EOL;
while ($count < 5) {
    if (isPrime($num)) {
        echo $num . " cu pătratul " . ($num * $num) . PHP_EOL;
        $count++;
    }
    $num++;
}
echo"<br>";
echo"<br>";
echo"<br>";
echo "b. Dezvoltă un script care, prin intermediul unui ciclu while, găsește și afișează cel mai mic număr prim dintre primele 10 numere naturale. ";
echo"<br>";
{
    echo <<<EOD
function Prime(\$numar) {
    if (\$numar <= 1) {
        return false;
    }
    for (\$i = 2; \$i < \$numar; \$i++) {
        if (\$numar % \$i == 0) {                 
            return false;
        }
    }
    return true;
}
\$numere_prime = 0;
\$numar_narural = 1;

while (\$numere_prime < 10) {
    \$numar_natural++;
    if (Prime(\$numar_natural)) {
        echo "Primul si cel mai mic numar prim din primele 10 numere naturale este: \$numar_natural";
        break;
    }
}
EOD;
}
echo"<br>";
echo"<br>";
function Prime($numar):bool {
    if ($numar <= 1) {
        return false;
    }
    for ($i = 2; $i < $numar; $i++) {
        if ($numar % $i == 0) {
            return false;
        }
    }
    return true;
}

$numere_prime = 0;
$numar_natural = 1;

while ($numere_prime < 10) {
    $numar_natural++;
    if (Prime($numar_natural)) {
        $numere_prime++;
        if ($numere_prime == 1) {
            echo "Primul și cel mai mic număr prim din primele 10 numere naturale este: $numar_natural";
            break; // Ieși din buclă după ce găsim primul număr prim
        }
    }
}

/*  În expresia if ($numar % $i == 0) din PHP, operatorul % este operatorul de modulo, care calculează restul
împărțirii întregului număr $numar la $i. Dacă restul este zero, înseamnă că $numar este divizibil cu $i, adică $i
este un factor al lui $numar. Deci, această expresie verifică dacă $numar este divizibil exact cu $i. Dacă condiția
este îndeplinită, atunci $numar nu este prim, deoarece are cel puțin un alt factor în afara de 1 și el însuși.
Care este diferenta dintre for ($i = 2; $i <= $num / 2; $i++) si for ($i = 2; $i < $numar; $i++)
Cele două expresii sunt utilizate în contextul verificării dacă un număr $numar este prim sau nu.

1. for ($i = 2; $i <= $numar / 2; $i++): Acesta este un mod comun de a itera prin posibilii factori ai unui număr
pentru a verifica dacă este prim. Ciclul începe de la 2 și se oprește la jumătatea numărului $numar, deoarece nu există
niciun factor mai mare decât jumătatea unui număr care ar putea diviza numărul fără rest. Astfel, acest lucru ajută la
reducerea numărului de iterații necesare pentru a verifica dacă un număr este prim sau nu, ceea ce poate îmbunătăți
performanța, în special pentru numere mai mari.

2. for ($i = 2; $i < $numar; $i++): Aici, ciclul se oprește atunci când indicele $i devine egal cu $numar.
În esență, acest lucru înseamnă că ciclul va itera de la 2 până la $numar - 1, verificând fiecare număr întreg
între 2 și $numar - 1 pentru a vedea dacă este un factor al lui $numar.

Diferența principală dintre cele două expresii este că prima verifică numai până la jumătatea numărului
$numar, în timp ce cea de-a doua verifică până la numărul $numar însuși. De regulă, prima abordare este mai
eficientă, deoarece reduce numărul de iterații necesare pentru a verifica primătatea unui număr.

$numere_prime = 0;
$numar_narural = 1;

$numere_prime = 0;: Această linie de cod inițializează variabila $numere_prime cu valoarea 0.
Această variabilă este utilizată pentru a ține evidența numărului de numere prime găsite până în acel moment.
Inițializarea cu valoarea 0 indică faptul că încă nu a fost găsit niciun număr prim.
Putem inițializa variabila $numar_natural cu 1 și să încercăm să găsim primul număr prim pornind de la această valoare
și să iterăm prin toate numerele naturale până când găsim un număr prim.

while ($numere_prime < 10) {
    $numar_natural++;
    if (Prime($numar_natural)) {
        echo "Primul si cel mai mic numar prim din primele 10 numere naturale este: $numar_natural";
        break;
    }
}
 În codul anterior, instrucțiunea break este folosită pentru a ieși din bucla while imediat ce
găsim primul număr prim. De îndată ce găsim primul număr prim, nu mai este necesar să continuăm căutarea pentru a
găsi celelalte numere prime. Astfel, break oprește execuția buclei while și continuă cu instrucțiunile din afara buclei.
Fără instrucțiunea break, bucla while ar continua să ruleze chiar și după ce găsim primul număr prim și ar verifica toate
celelalte numere naturale până când condiția $numere_gasite < 10 nu ar mai fi îndeplinită. Utilizarea break ne permite
să eficientizăm execuția codului și să evităm iterații inutile.*/

echo"<br>";
echo"<br>";
echo"<br>";
echo "c. Construiește un program care, utilizând un ciclu while, afișează primele 5 numere pare și dublul acestora. ";
echo"<br>";
echo"<br>";
{
    echo <<<EOD
\$numere_pare = 0;
\$numar_natural = 0;

while (\$numere_pare < 5) {
    \$numar_natural++;

    if (\$numar_natural % 2 == 0) {
        echo "Numărul par este: \$numar_natural, iar dublul său este: " . (\$numar_natural * 2) . PHP_EOL;
        \$numere_pare++;
    }
}
EOD;
}

    echo "<br>";
    echo "<br>";
    $numere_pare = 0;
    $numar_natural = 0;

    while ($numere_pare < 5) {
        // Incrementăm numărul natural curent
        $numar_natural++;

        // Verificăm dacă numărul natural curent este par
        if ($numar_natural % 2 == 0) {
            // Afisăm numărul par și dublul său
            echo "Numărul par este: $numar_natural, iar dublul său este: " . ($numar_natural * 2) . PHP_EOL;

            // Incrementăm numărul de numere pare găsite
            $numere_pare++;
        }
    }

/*Acest cod va itera prin primele 5 numere pare, afișând fiecare număr par și dublul său. Variabila $numar_natural
 este inițializată cu 0 și apoi este incrementată în fiecare iterație a ciclului while. Atunci când găsim un număr par,
 îl afișăm împreună cu dublul său și incrementăm numărul de numere găsite.*/

echo"<br>";
echo"<br>";
echo"<br>";
echo "d. Elaborează un script PHP care, prin intermediul unui ciclu while, calculează și afișează suma primelor 15 
numere naturale.";
echo"<br>";
echo"<br>";

{
    echo <<<EOD
        \$numar = 1;
   \$suma = 0;
    \$contor = 0;

// Folosim un ciclu while pentru a calcula suma primelor 15 numere naturale
    while (\$contor <= 14) {
       \$suma += \$numar; // Adăugăm numărul curent la suma totală
        \$numar++; // Trecem la următorul număr natural
        \$contor++; // Incrementăm contorul pentru a ști când am adunat 15 numere
    }

// Afișăm suma calculată
    echo "Suma primelor 15 numere naturale este: " . \$suma;
}
EOD;
}

echo "<br>";
echo "<br>";

$numar = 1;
$suma = 0;
$contor = 0;

// Folosim un ciclu while pentru a calcula suma primelor 15 numere naturale
while ($contor <= 14) {
    $suma += $numar; // Adăugăm numărul curent la suma totală
    $numar++; // Trecem la următorul număr natural
    $contor++; // Incrementăm contorul pentru a ști când am adunat 15 numere
}

// Afișăm suma calculată
echo "Suma primelor 15 numere naturale este: " . $suma;

/*Inițializarea variabilelor în PHP este un pas important înainte de a le folosi într-un script. Acest lucru se face
pentru a asigura că variabilele au o valoare inițială definită înainte de a fi utilizate în operații ulterioare.
În general, inițializarea variabilelor este o practică recomandată în programare, deoarece ajută la evitarea unor erori
comune și neintenționate.

În scriptul PHP de mai sus, variabilele sunt inițializate pentru a le atribui o valoare inițială înainte de a intra în
bucla while și de a începe calculele. Iată motivele pentru care fiecare variabilă este inițializată:

1. $numar: Această variabilă este inițializată cu valoarea 1, deoarece vrem să începem calculul cu prima valoare a
numărului natural, care este 1.

2. $suma: Această variabilă este inițializată cu valoarea 0, deoarece dorim să calculăm suma primelor 15 numere naturale
și să o acumulăm în această variabilă. Inițializarea cu 0 asigură că suma începe de la 0.

3. $contor: Această variabilă este inițializată cu valoarea 0, deoarece o folosim pentru a număra câte numere am adunat
deja. În cadrul buclei while, incrementăm acest contor și îl folosim pentru a ști când am adunat primele 15 numere.

Prin inițializarea acestor variabile, ne asigurăm că avem o stare inițială bine definită pentru a începe calculul și
că evităm comportamentul nedefinit sau neașteptat al programului.
Pentru a calcula suma primelor 15 numere naturale (de la 1 la 15), trebuie să ajustăm condiția buclei astfel încât
bucla să se oprească la numărul 15 inclusiv. Astfel, vom schimba condiția din $contor < 15 la $contor <= 14, pentru a
lua în considerare toate cele 15 numere.

Dar daca in scenariul de mai sus punem contor <= 15 si nu il mai incrementam in cadrul functiei while, va merge?

Dacă ajustăm condiția buclei while la $contor <= 15 și nu mai incrementăm $contor în interiorul buclei, atunci bucla nu
se va opri niciodată, deoarece $contor nu va depăși niciodată valoarea 15 și condiția va rămâne mereu adevărată. Astfel,
 bucla va continua să ruleze la infinit.

Pentru a face această abordare să funcționeze, ar trebui să ajustăm logica pentru a se opri după ce am adunat cele 15
numere, chiar dacă nu mai incrementăm explicit variabila $contor. Putem face acest lucru prin verificarea valorii lui
$suma în fiecare iterație a buclei:
$numar = 1;
$suma = 0;
$contor = 0;

// Folosim un ciclu while pentru a calcula suma primelor 15 numere naturale
while ($suma < 15) {
    $suma += $numar; // Adăugăm numărul curent la suma totală
    $numar++; // Trecem la următorul număr natural
}

// Afișăm suma calculată
echo "Suma primelor 15 numere naturale este: " . $suma;
În acest caz, bucla se va opri atunci când suma depășește 15, iar rezultatul va fi suma primelor 15 numere naturale.
Totuși, această abordare poate fi considerată mai puțin intuitivă decât să folosim o variabilă de contor dedicată
($contor), care urmărește explicit numărul de iterații.*/

echo"<br>";
echo"<br>";
echo"<br>";
echo "e. Implementează un program PHP care, folosind un ciclu while, afișează primele 5 numere naturale.";
echo "<br>";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
\$numar = 1;
\$contor = 0;

// Folosim un ciclu while pentru a afișa primele 5 numere naturale
while (\$contor < 5) {
    echo \$numar . " "; // Afișăm numărul curent
    \$numar++; // Trecem la următorul număr natural
    \$contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
}

EOD;

}
echo "<br>";
echo "<br>";
$numar = 1;
$contor = 0;

// Folosim un ciclu while pentru a afișa primele 5 numere naturale
while ($contor < 5) {
    echo $numar . " "; // Afișăm numărul curent
    $numar++; // Trecem la următorul număr natural
    $contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
}
echo "<br>";
echo "<br>";
echo "Acest script PHP va afișa primele 5 numere naturale pe o singură linie, fiecare număr fiind separat printr-un 
spațiu. Bucla while rulează până când contorul ajunge la 5, moment în care se oprește. Fiecare iterație a buclei 
afișează numărul curent și apoi trece la următorul număr natural.";
echo "<br>";
echo "Daca dorim sa afisam cifrele cu virgula intre ele, atunci folosim:";
echo "<br>";
{
    echo <<<EOD
        \$numar = 1;
        \$contor = 0;

// Folosim un ciclu while pentru a afișa primele 5 numere naturale
while (\$contor < 5) {
    echo \$numar; // Afișăm numărul curent
    if (\$contor < 5 - 1) {
        echo ", "; // Adăugăm virgulă între numere, inclusiv după ultimul număr
    }
    \$numar++; // Trecem la următorul număr natural
    \$contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
}
EOD;

}
echo "<br>";
echo "<br>";
$numar = 1;
$contor = 0;

// Folosim un ciclu while pentru a afișa primele 5 numere naturale
while ($contor < 5) {
    echo $numar; // Afișăm numărul curent
    if ($contor < 5 - 1) {
        echo ", "; // Adăugăm virgulă între numere, inclusiv după ultimul număr
    }
    $numar++; // Trecem la următorul număr natural
    $contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
}

/*Incrementarea variabilelor $numar și $contor în cadrul buclei while are un rol important în programul tău.

1. $numar: Această variabilă reprezintă numărul curent care va fi afișat în fiecare iterație a buclei. În fiecare
iterație, dorim să trecem la următorul număr natural. Deci, incrementăm $numar cu 1 folosind $numar++, astfel încât să
trecem la următorul număr natural în fiecare iterație.

2 $contor: Această variabilă este folosită pentru a ține evidența câtor numere au fost deja afișate. Avem nevoie de
această variabilă pentru a ne opri după ce am afișat primele 5 numere naturale. Deci, incrementăm $contor cu 1 în
fiecare iterație folosind $contor++, astfel încât să știm când am ajuns la numărul dorit de afișat.

Aceste incrementări sunt esențiale pentru a asigura că bucla while rulează corect și se oprește la momentul potrivit.
Prin incrementarea lui $numar și $contor, ne asigurăm că avansăm în mod corespunzător prin numerele naturale și că ne
oprim după ce am afișat primele 5 numere.
 În acest cod, adăugăm o virgulă după fiecare număr afișat, cu excepția ultimului număr. Verificăm dacă $contor
este mai mic decât 4 (adica dacă nu suntem la ultimul număr), iar în acest caz, afișăm virgula după număr. Acest lucru
asigură că virgulele sunt adăugate între numere, dar nu după ultimul număr.

 Cu această modificare, bucla se va opri corect după ce am afișat primele 5 numere și vom adăuga virgulă după fiecare
număr, inclusiv după ultimul număr. Astfel, rezultatul va fi o listă de numere separate prin virgule, fără virgulă după
ultimul număr.

În această implementare, adăugăm virgulă după fiecare număr (inclusiv după ultimul număr) atâta timp cât $contor este
mai mic decât 5 - 1 (adică mai mic decât 4). Astfel, vom adăuga virgulă după primele 4 numere, inclusiv după ultimul
număr. Aceasta ne va asigura că nu vom adăuga o virgulă după ultimul număr în listă.*/
echo "<br>";
echo "<br>";
echo "<br>";
?>

   <h2> 2. Do...While Loop:  </h2>
    <?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "a. Scrie un program PHP care, utilizând un ciclu do...while, afișează primele 5 numere prime și pătratele 
acestora. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
function Prime1(\$num): bool {
    if (\$num <= 1) {
        return false;
    }

    \$i = 2;
    do {
        if (\$num % \$i == 0) {
            return false;
        }
       \$i++;
    } while (\$i <= \$num / 2);

    return true;
}

\$count = 0;
\$num = 2; // începem de la primul număr prim

echo "Primele 5 numere prime și pătratele lor sunt:" . PHP_EOL;
do {
    if (Prime1(\$num)) {
        echo \$num . " cu pătratul " . (\$num * \$num) . PHP_EOL;
        \$count++;
    }
    \$num++;
} while (\$count < 5);
EOD;

}
/*În codul dat, atât un ciclu while cât și un ciclu do...while sunt folosite pentru a atinge aceeași funcționalitate:
afișarea primelor 5 numere prime și a pătratelor lor.

Diferența principală între cele două tipuri de cicluri este momentul în care este verificată condiția pentru
continuarea buclei:

1. Ciclu while: Într-un ciclu while, condiția este verificată înainte de executarea blocului de cod al buclei. Astfel,
dacă condiția inițială este falsă, blocul de cod nu va fi executat niciodată.

2. Ciclu do...while: Într-un ciclu do...while, blocul de cod este executat întotdeauna cel puțin o dată, indiferent de
valoarea condiției. Apoi, condiția este verificată după executarea blocului de cod. Dacă condiția este adevărată,
bucla va continua să se execute; în caz contrar, bucla se va opri.

În exemplul dat, diferența este subtilă, deoarece bucla trebuie să ruleze cel puțin o dată pentru a afișa primele 5
numere prime. Ambele tipuri de cicluri ar funcționa corespunzător în acest context. Totuși, uneori alegerea între un
ciclu while și un ciclu do...while depinde de necesitățile specifice ale problemei și de preferințele programatorului.*/

echo "<br>";
echo "<br>";
function Prime1($num): bool {
    if ($num <= 1) {
        return false;
    }

    $i = 2;
    do {
        if ($num % $i == 0) {
            return false;
        }
        $i++;
    } while ($i <= $num / 2);

    return true;
}

$count = 0;
$num = 2; // începem de la primul număr prim

echo "Primele 5 numere prime și pătratele lor sunt:" . PHP_EOL;
do {
    if (Prime1($num)) {
        echo $num . " cu pătratul " . ($num * $num) . PHP_EOL;
        $count++;
    }
    $num++;
} while ($count < 5);
echo "<br>";
echo "<br>";
echo "<br>";
echo "b. Dezvoltă un script care, prin intermediul unui ciclu do...while, găsește și afișează cel mai mic număr prim 
dintre primele 10 numere naturale. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
function Prime2(\$numar): bool {
    if (\$numar <= 1) {
        return false;
    }
    \$i = 2;
    do {
        if (\$numar % \$i == 0) {
            return false;
        }
        \$i++;
    } while (\$i < \$numar);

    return true;
}

\$numere_prime = 0;
\$numar_natural = 1;

do {
    \$numar_natural++;
    if (Prime2(\$numar_natural)) {
        \$numere_prime++;
        if (\$numere_prime == 1) {
            echo "Primul și cel mai mic număr prim din primele 10 numere naturale este: \$numar_natural";
            break; // Ieși din buclă după ce găsim primul număr prim
        }
    }
} while (\$numere_prime < 10);
EOD;

}
echo "<br>";
echo "<br>";
function Prime2($numar): bool {
    if ($numar <= 1) {
        return false;
    }
    $i = 2;
    do {
        if ($numar % $i == 0) {
            return false;
        }
        $i++;
    } while ($i < $numar);

    return true;
}

$numere_prime = 0;
$numar_natural = 1;


do {
    $numar_natural++;
    if (Prime2($numar_natural)) {
        $numere_prime++;
        if ($numere_prime == 1) {
            echo "Primul și cel mai mic număr prim din primele 10 numere naturale este: $numar_natural";
            break; // Ieși din buclă după ce găsim primul număr prim
        }
    }
} while ($numere_prime < 10);
echo "<br>";
echo "<br>";
echo "<br>";
echo "c. Construiește un program care, folosind un ciclu do...while, afișează primele 5 numere pare și dublul 
acestora.";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
\$numere_pare = 0;
\$numar_natural = 0;

do {
    // Incrementăm numărul natural curent
    \$numar_natural++;

    // Verificăm dacă numărul natural curent este par
    if (\$numar_natural % 2 == 0) {
        // Afisăm numărul par și dublul său
        echo "Numărul par este: \$numar_natural, iar dublul său este: " . (\$numar_natural * 2) . PHP_EOL;

        // Incrementăm numărul de numere pare găsite
        \$numere_pare++;
    }
} while (\$numere_pare < 5);
EOD;

}
echo "<br>";
echo "<br>";
$numere_pare = 0;
$numar_natural = 0;

do {
    // Incrementăm numărul natural curent
    $numar_natural++;

    // Verificăm dacă numărul natural curent este par
    if ($numar_natural % 2 == 0) {
        // Afisăm numărul par și dublul său
        echo "Numărul par este: $numar_natural, iar dublul său este: " . ($numar_natural * 2) . PHP_EOL;

        // Incrementăm numărul de numere pare găsite
        $numere_pare++;
    }
} while ($numere_pare < 5);
/*Acest cod va afișa primele 5 numere pare și dublul lor folosind un ciclu do...while. În fiecare iterație, numărul
curent este verificat dacă este par. Dacă este par, este afișat împreună cu dublul său, iar numărul de numere pare
găsite este incrementat. Procesul continuă până când sunt găsite primele 5 numere pare.
Diferența principală între cele două variante este modul în care este gestionată verificarea condiției.

Varianta cu while: În această variantă, condiția este verificată la începutul fiecărei iterații. Adică, înainte de a
intra în blocul de cod, se verifică dacă condiția $numere_pare < 5 este îndeplinită. Dacă condiția este falsă încă de
la început, blocul de cod nu se va executa deloc.

Varianta cu do...while: În această variantă, blocul de cod este executat cel puțin o dată, iar apoi condiția este
verificată. Astfel, chiar dacă condiția nu este îndeplinită inițial, blocul de cod este executat cel puțin o dată
înainte de a verifica condiția.

În ambele cazuri, rezultatul final va fi același: primele 5 numere pare și dublul lor vor fi afișate. Totuși, diferența
constă în modul în care bucla este inițializată și verificată pentru a continua sau nu execuția.*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "d. Elaborează un script PHP care, prin intermediul unui ciclu do...while, calculează și afișează suma primelor 15
 numere naturale.";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
\$numar = 1;
\$suma = 0;
\$contor = 0;

// Folosim un ciclu do...while pentru a calcula suma primelor 15 numere naturale
do {
    \$suma += \$numar; // Adăugăm numărul curent la suma totală
    \$numar++; // Trecem la următorul număr natural
    \$contor++; // Incrementăm contorul pentru a ști când am adunat 15 numere
} while (\$contor <= 14);

// Afișăm suma calculată
echo "Suma primelor 15 numere naturale este: " . \$suma;
EOD;

}
echo "<br>";
echo "<br>";
$numar = 1;
$suma = 0;
$contor = 0;

// Folosim un ciclu do...while pentru a calcula suma primelor 15 numere naturale
do {
    $suma += $numar; // Adăugăm numărul curent la suma totală
    $numar++; // Trecem la următorul număr natural
    $contor++; // Incrementăm contorul pentru a ști când am adunat 15 numere
} while ($contor <= 14);

// Afișăm suma calculată
echo "Suma primelor 15 numere naturale este: " . $suma;
/*În fiecare iterație, numărul curent este adăugat la suma totală, iar apoi numărul și contorul sunt incrementate.
Procesul continuă până când se adună 15 numere. La final, suma este afișată.
Diferența principală între cele două variante este momentul în care condiția este verificată.

1. Varianta cu while: În această variantă, condiția $contor <= 14 este verificată la începutul fiecărei iterații.
Dacă condiția este falsă încă de la început, bucla nu se va executa deloc.

2. Varianta cu do...while: În această variantă, blocul de cod este executat cel puțin o dată, iar apoi condiția
$contor <= 14 este verificată la finalul fiecărei iterații. Chiar dacă condiția este falsă inițial, blocul de cod
este executat cel puțin o dată înainte de a verifica condiția.

Astfel, în cazul variantei cu do...while, bucla se va executa cel puțin o dată indiferent de valoarea condiției,
în timp ce în cazul variantei cu while, bucla poate să nu se execute deloc dacă condiția este falsă inițial.*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "e. Implementează un program PHP care, folosind un ciclu do...while, afișează primele 5 numere naturale. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
\$numar = 1;
\$contor = 0;

// Folosim un ciclu do...while pentru a afișa primele 5 numere naturale
do {
    echo \$numar . " "; // Afișăm numărul curent
    \$numar++; // Trecem la următorul număr natural
    \$contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
} while (\$contor < 5);
EOD;

}
echo "<br>";
echo "<br>";
$numar = 1;
$contor = 0;

// Folosim un ciclu do...while pentru a afișa primele 5 numere naturale
do {
    echo $numar . " "; // Afișăm numărul curent
    $numar++; // Trecem la următorul număr natural
    $contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
} while ($contor < 5);
/*În fiecare iterație, numărul curent este afișat, apoi numărul și contorul sunt incrementate. Procesul continuă
până când se afișează primele 5 numere.*/
echo "<br>";
echo "<br>";
{
    echo <<<EOD
\$numar = 1;
\$contor = 0;

// Folosim un ciclu do...while pentru a afișa primele 5 numere naturale
do {
    echo \$numar; // Afișăm numărul curent
    if (\$contor < 5 - 1) {
        echo ", "; // Adăugăm virgulă între numere, inclusiv după ultimul număr
    }
    \$numar++; // Trecem la următorul număr natural
    \$contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
} while (\$contor < 5);
EOD;

}
echo "<br>";
echo "<br>";
$numar = 1;
$contor = 0;

// Folosim un ciclu do...while pentru a afișa primele 5 numere naturale
do {
    echo $numar; // Afișăm numărul curent
    if ($contor < 5 - 1) {
        echo ", "; // Adăugăm virgulă între numere, inclusiv după ultimul număr
    }
    $numar++; // Trecem la următorul număr natural
    $contor++; // Incrementăm contorul pentru a ști când am afișat primele 5 numere
} while ($contor < 5);
/* În fiecare iterație, numărul curent este afișat, iar dacă nu este ultimul număr, se afișează și o virgulă.
Procesul continuă până când se afișează primele 5 numere.
Diferența între cele două variante este momentul în care este verificată condiția.

1. Varianta cu while: În această variantă, condiția $contor < 5 este verificată la începutul fiecărei iterații. Dacă
condiția este falsă încă de la început, bucla nu se va executa deloc.

2. Varianta cu do...while: În această variantă, blocul de cod este executat cel puțin o dată, iar apoi condiția
$contor < 5 este verificată la finalul fiecărei iterații. Chiar dacă condiția este falsă inițial, blocul de cod este
executat cel puțin o dată înainte de a verifica condiția.

Astfel, în cazul variantei cu do...while, bucla se va executa cel puțin o dată indiferent de valoarea condiției,
în timp ce în cazul variantei cu while, bucla poate să nu se execute deloc dacă condiția este falsă inițial.*/
echo "<br>";
echo "<br>";
echo "<br>";
?>
<h2> 3. For Loop:  </h2>
    <?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "a. Scrie un program PHP care, utilizând un ciclu for, afișează primele 5 numere prime și pătratele acestora. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
function Prime3(\$num): bool {
    if (\$num <= 1) {
        return false;
    }
    for (\$i = 2; \$i <= \$num / 2; \$i++) {
        if (\$num % \$i == 0) {
            return false;
        }
    }
    return true;
}

echo "Primele 5 numere prime și pătratele lor sunt:" . PHP_EOL;
\$count = 0;
for (\$num = 2; \$count < 5; \$num++) {
    if (Prime3(\$num)) {
        echo \$num . " cu pătratul " . (\$num * \$num) . PHP_EOL;
        \$count++;
    }
}
EOD;

}
echo "<br>";
echo "<br>";
function Prime3($num): bool {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Primele 5 numere prime și pătratele lor sunt:" . PHP_EOL;
$count = 0;
for ($num = 2; $count < 5; $num++) {
    if (Prime3($num)) {
        echo $num . " cu pătratul " . ($num * $num) . PHP_EOL;
        $count++;
    }
}
/*Acest cod va afișa primele 5 numere prime și pătratele lor folosind un ciclu for.Iterarea începe de la 2 și continuă
până când sunt găsite primele 5 numere prime.

Diferența principală între cele două variante este modul în care este gestionată iterația și verificarea condiției.

1. Varianta cu while:

În această variantă, se utilizează un ciclu while în care condiția este verificată la începutul fiecărei iterații.
Adică, înainte de a executa blocul de cod, se verifică dacă condiția $count < 5 este îndeplinită. Dacă condiția este
falsă încă de la început, bucla nu se va executa deloc.
Apoi, în interiorul buclei, se verifică dacă numărul curent este prim folosind funcția isPrime, iar dacă este, se
afișează numărul și pătratul său, și se incrementează contorul.
2. Varianta cu for:

În această variantă, se utilizează un ciclu for pentru a itera de la 2 până când sunt găsite primele 5 numere prime.
Inițializarea și incrementarea contorului ($num) și verificarea condiției de oprire ($count < 5) sunt gestionate direct
în declarația ciclului for.
În fiecare iterație, se verifică dacă numărul curent este prim folosind funcția Prime3, iar dacă este, se afișează
numărul și pătratul său.
În concluzie, ambele variante produc același rezultat final, adică afișarea primelor 5 numere prime și pătratele lor.
 Diferența este în modul în care este gestionată iterația și verificarea condiției de oprire a buclei.*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "b. Dezvoltă un script care, prin intermediul unui ciclu for, găsește și afișează cel mai mic număr prim dintre 
primele 10 numere naturale. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
function Prime4(\$numar): bool {
    if (\$numar <= 1) {
        return false;
    }
    for (\$i = 2; \$i < \$numar; \$i++) {
        if (\$numar % \$i == 0) {
            return false;
        }
    }
    return true;
}

echo "Primul și cel mai mic număr prim din primele 10 numere naturale este: ";

for (\$numar_natural = 2; \$numar_natural <= 10; \$numar_natural++) {
    if (Prime4(\$numar_natural)) {
        echo \$numar_natural;
        break; // Ieșim din buclă după găsirea primului număr prim
    }
}
EOD;

}
echo "<br>";
echo "<br>";
function Prime4($numar): bool {
    if ($numar <= 1) {
        return false;
    }
    for ($i = 2; $i < $numar; $i++) {
        if ($numar % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Primul și cel mai mic număr prim din primele 10 numere naturale este: ";

for ($numar_natural = 2; $numar_natural <= 10; $numar_natural++) {
    if (Prime4($numar_natural)) {
        echo $numar_natural;
        break; // Ieșim din buclă după găsirea primului număr prim
    }
}
/*În acest cod, parcurgem primele 10 numere naturale (de la 2 la 10) folosind un ciclu for. Pentru fiecare număr
natural, verificăm dacă este prim folosind funcția Prime4. Dacă găsim primul număr prim, îl afișăm și ieșim din buclă
folosind instrucțiunea break, astfel încât să ne asigurăm că afișăm doar cel mai mic număr prim.
Diferența principală între cele două variante este modul în care sunt gestionate iterațiile și condiția de oprire a
buclei.

1. Varianta cu for:
Utilizează un ciclu for pentru a itera prin primele 10 numere naturale.
Inițializarea și incrementarea contorului sunt gestionate direct în declarația ciclului for.
Verificarea condiției de oprire ($numar_natural <= 10) este făcută implicit în declarația ciclului for.

2. Varianta cu while:
Utilizează un ciclu while pentru a itera până când găsește primul număr prim din primele 10 numere naturale.
Verificarea condiției de oprire ($numere_prime < 10) este făcută explicit în expresia de condiție a buclei while.
Incrementarea contorului și alte operații sunt gestionate în interiorul buclei.
În esență, ambele variante produc același rezultat, adică afișarea primului și cel mai mic număr prim din primele 10
numere naturale. Diferența constă în modul în care sunt structurate buclele și gestionate operațiile asociate
iterației.*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "c. Construiește un program care, folosind un ciclu for, afișează primele 5 numere pare și dublul acestora. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
for (\$numar_natural = 1, \$numere_pare = 0; \$numere_pare < 5; \$numar_natural++) {
    if (\$numar_natural % 2 == 0) {
        echo "Numărul par este: \$numar_natural, iar dublul său este: " . (\$numar_natural * 2) . PHP_EOL;
        \$numere_pare++;
    }
}
EOD;

}
echo "<br>";
echo "<br>";
for ($numar_natural = 1, $numere_pare = 0; $numere_pare < 5; $numar_natural++) {
    if ($numar_natural % 2 == 0) {
        echo "Numărul par este: $numar_natural, iar dublul său este: " . ($numar_natural * 2) . PHP_EOL;
        $numere_pare++;
    }
}
/*În acest cod, folosim un ciclu for pentru a itera prin numerele naturale începând de la 1. Inițializăm variabila
$numar_natural la 1 și variabila $numere_pare la 0. Condiția de oprire a buclei este $numere_pare < 5, adică vrem să
găsim doar primele 5 numere pare. În fiecare iterație, verificăm dacă numărul curent este par, iar dacă este,
îl afișăm împreună cu dublul său și incrementăm numărul de numere pare găsite.
Diferența dintre cele două variante de cod este modul în care sunt gestionate iterațiile și condiția de oprire a buclei.

1. Varianta cu for:
Utilizează un ciclu for pentru a itera prin numerele naturale începând de la 1.
Inițializarea și incrementarea contorului sunt gestionate direct în declarația ciclului for.
Verificarea condiției de oprire ($numere_pare < 5) este făcută implicit în declarația ciclului for.
Varianta cu while:

2. Utilizează un ciclu while pentru a itera până când găsește primele 5 numere pare.
Verificarea condiției de oprire ($numere_pare < 5) este făcută explicit în expresia de condiție a buclei while.
Incrementarea contorului și alte operații sunt gestionate în interiorul buclei.
În esență, ambele variante produc același rezultat, adică afișarea primelor 5 perechi de numere pare și dublul lor,
fiecare pe un rând separat. Diferența constă în modul în care sunt structurate buclele și gestionate operațiile
asociate iterației.*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "d. Elaborează un script PHP care, prin intermediul unui ciclu for, calculează și afișează suma primelor 15 
numere naturale. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
\$suma = 0;

// Folosim un ciclu for pentru a calcula suma primelor 15 numere naturale
for (\$numar = 1; \$numar <= 15; \$numar++) {
    \$suma += \$numar; // Adăugăm numărul curent la suma totală
}

// Afișăm suma calculată
echo "Suma primelor 15 numere naturale este: " . \$suma;
EOD;

}
echo "<br>";
echo "<br>";
$suma = 0;

// Folosim un ciclu for pentru a calcula suma primelor 15 numere naturale
for ($numar = 1; $numar <= 15; $numar++) {
    $suma += $numar; // Adăugăm numărul curent la suma totală
}

// Afișăm suma calculată
echo "Suma primelor 15 numere naturale este: " . $suma;
/*În acest cod, ciclul for începe de la 1 și se oprește când $numar atinge valoarea 15, astfel încât să adune primele
15 numere naturale în variabila $suma. Apoi, afișăm suma calculată.
Diferența dintre cele două versiuni este modul în care este gestionată iterația și condiția de oprire a ciclului.

1. Varianta inițială cu while:
Utilizează un ciclu while pentru a itera până când se adună suma primelor 15 numere naturale.
Inițializează și incrementă variabila $numar pentru a parcurge numerele naturale.
Folosește variabila $contor pentru a ține evidența când s-au adunat cele 15 numere.
Verifică condiția de oprire a buclei pe baza valorii lui $contor.
Varianta cu for:

2. Utilizează un ciclu for pentru a itera prin primele 15 numere naturale.
Inițializează variabila $numar în declarația ciclului și o incrementează la fiecare iterație.
Nu necesită o variabilă separată pentru a ține evidența numărului de iterații, deoarece numărăm implicit până la
15 prin condiția de oprire a ciclului for.
În esență, ambele variante produc același rezultat, adică calculul și afișarea sumei primelor 15 numere naturale.
Diferența constă în modul în care sunt structurate buclele și gestionate operațiile asociate iterației. Folosirea
unei variabile separate pentru contorizarea numărului de iterații este specifică abordării cu while, în timp ce for
este folosit pentru a parcurge o secvență cunoscută de iterații.*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "e. Implementează un program PHP care, folosind un ciclu for, afișează primele 5 numere naturale. ";
echo "<br>";
echo "<br>";
{
    echo <<<EOD
for (\$numar = 1, \$contor = 0; \$contor < 5; \$numar++, \$contor++) {
    echo \$numar . " "; // Afișăm numărul curent
}
EOD;

}
echo "<br>";
echo "<br>";
for ($numar = 1, $contor = 0; $contor < 5; $numar++, $contor++) {
    echo $numar . " "; // Afișăm numărul curent
}
/*În acest cod, inițializăm variabila $numar la 1 și variabila $contor la 0 în declarația ciclului for. Apoi, folosim
condiția de oprire $contor < 5 pentru a ne asigura că afișăm doar primele 5 numere naturale. În fiecare iterație,
afișăm numărul curent și incrementăm atât $numar cât și $contor.*/
echo "<br>";
echo "<br>";
{
    echo <<<EOD
for (\$numar = 1, \$contor = 0; \$contor < 5; \$numar++, \$contor++) {
    echo \$numar; // Afișăm numărul curent
    
    // Verificăm dacă trebuie să adăugăm virgulă
    if (\$contor < 5 - 1) {
        echo ", "; // Adăugăm virgulă între numere, inclusiv după ultimul număr
    }
}
EOD;

}
echo "<br>";
echo "<br>";
for ($numar = 1, $contor = 0; $contor < 5; $numar++, $contor++) {
    echo $numar; // Afișăm numărul curent

    // Verificăm dacă trebuie să adăugăm virgulă
    if ($contor < 5 - 1) {
        echo ", "; // Adăugăm virgulă între numere, inclusiv după ultimul număr
    }
}
/*Pentru a rescrie codul folosind un ciclu for, trebuie să ajustăm inițializarea, condiția de oprire și incrementarea
în mod corespunzător. De asemenea, trebuie să avem grijă să adăugăm virgula între numere doar când nu afișăm ultimul
număr.
În acest cod, folosim un ciclu for pentru a itera prin primele 5 numere naturale. Inițializăm variabila $numar la 1 și
variabila $contor la 0 în declarația ciclului for. Folosim condiția de oprire $contor < 5 pentru a ne asigura că afișăm
doar primele 5 numere naturale. În fiecare iterație, afișăm numărul curent și, dacă nu este ultimul număr, adăugăm o
 virgulă între numere.
Diferența dintre cele două variante este modul în care sunt gestionate inițializarea, condiția de oprire și
incrementarea, precum și modul în care este tratată afișarea virgulei între numere.

1. Varianta cu while:
Utilizează un ciclu while pentru a itera până când se afișează primele 5 numere naturale.
Inițializează și incrementă variabila $numar pentru a parcurge numerele naturale.
Verifică condiția de oprire $contor < 5 pentru a ști când s-au afișat primele 5 numere.
Afisează numărul curent și adaugă virgulă între numere, inclusiv după ultimul număr.

2.Varianta cu for:
Utilizează un ciclu for pentru a itera prin primele 5 numere naturale.
Inițializează variabila $numar și variabila $contor în declarația ciclului for.
Verifică condiția de oprire $contor < 5 pentru a ști când s-au afișat primele 5 numere.
Afisează numărul curent și, dacă nu este ultimul număr, adaugă o virgulă între numere.
În esență, ambele variante produc același rezultat, adică afișarea primelor 5 numere naturale, cu virgulă între ele,
însă diferă în modul în care sunt structurate buclele și gestionate operațiile asociate iterației.*/

















