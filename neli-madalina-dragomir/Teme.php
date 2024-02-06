<pre>

<!DOCTYPE html>
<html lang="ro">
<h1>                                Tema </h1>
    <h1>                         Homework-07 </h1>H1


<h2>1. If Statements:</h2>

    <?php
echo "a. Scrie un program PHP care verifică dacă un număr dat este pozitiv și afișează un mesaj corespunzător.";

    echo"<br>";
    echo"<br>";
    echo"<br>";
{
    echo <<<EOL
     \$numar=0;
    if (\$numar >= 0) {
        echo "Numărul este pozitiv.";
    };
    EOL;
    }

    echo"<br>";

    $numar = 0;
    if ($numar >= 0) {
        echo "Numărul este pozitiv.";
    }


    echo"<br>";
    echo"<br>";
    echo"<br>";

    echo "b. Implementează un script care determină dacă un utilizator este eligibil pentru vot bazat pe vârsta introdusă. ";

    echo"<br>";
    echo"<br>";
    echo"<br>";

   /*  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificare Eligibilitate Vot</title>
</head>
<body>

<?php
// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preia valoarea introdusă pentru vârstă
    $varsta = isset($_POST["varsta"]) ? intval($_POST["varsta"]) : 0;

    // Verifică eligibilitatea pentru vot
    if ($varsta >= 18) {
        echo "<p>Eligibil pentru vot. Poți vota!</p>";
    } else {
        echo "<p>Neeligibil pentru vot. Trebuie să ai cel puțin 18 ani pentru a vota.</p>";
    }
}
?>

<!-- Formular pentru introducerea vârstei -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="varsta">Introdu vârsta:</label>
    <input type="number" id="varsta" name="varsta" required>
    <button type="submit">Verifică Eligibilitatea</button>
</form>

</body>
</html>

 Acest script utilizează un formular HTML pentru a colecta vârsta utilizatorului. După trimiterea formularului,
   scriptul PHP preia valoarea introdusă și verifică dacă utilizatorul are cel puțin 18 ani (vârsta legală pentru vot).
    Mesajul corespunzător este afișat în funcție de eligibilitatea pentru vot.
*/

    {
        echo <<<EOL
    
    \$varsta=18;
    if (\$varsta >= 18) {
    echo "Eligibil pentru vot. Poți vota!";
    } else {
        echo "Neeligibil pentru vot. Trebuie să ai cel puțin 18 ani pentru a vota.";
    };
    EOL;
    }

    echo"<br>";

    $varsta=18;
    if($varsta >=18) {
        echo "Eligibil pentru vot.Poti vota!";
    }else{ echo "Neeligibil pentru vot.Trebuie sa ai cel putin 18 ani pentru a vota!";
    };
    echo"<br>";
    echo"<br>";
    echo"<br>";
    ?>

<h2>2. If Operators: </h2>
<?php
echo "a. Realizează un program care primește două numere de la utilizator și afișează mesajul \"Numărul 1 este mai mare 
decât Numărul 2\" dacă primul număr este mai mare. ";

/* <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparare Numere</title>
</head>
<body>

<?php
// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preia valorile introduse pentru numere
    $numar1 = isset($_POST["numar1"]) ? floatval($_POST["numar1"]) : 0;
    $numar2 = isset($_POST["numar2"]) ? floatval($_POST["numar2"]) : 0;

    // Compară numerele și afișează mesajul corespunzător
    if ($numar1 > $numar2) {
        echo "<p>Numărul 1 este mai mare decât Numărul 2.</p>";
    } elseif ($numar1 < $numar2) {
        echo "<p>Numărul 1 este mai mic decât Numărul 2.</p>";
    } else {
        echo "<p>Numărul 1 este egal cu Numărul 2.</p>";
    }
}
?>

<!-- Formular pentru introducerea numerelor -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="numar1">Introdu primul număr:</label>
    <input type="number" step="any" id="numar1" name="numar1" required>

    <label for="numar2">Introdu al doilea număr:</label>
    <input type="number" step="any" id="numar2" name="numar2" required>

    <button type="submit">Compară Numerele</button>
</form>

</body>
</html>
Acest script utilizează un formular HTML pentru a colecta cele două numere de la utilizator.
După trimiterea formularului, scriptul PHP preia valorile introduse, le compară, și afișează un mesaj corespunzător în
funcție de relația dintre cele două numere.
*/

echo"<br>";
echo"<br>";
echo"<br>";
{
    echo <<<EOL
\$numarul1=20;
\$numarul2=10;

if (\$numarul1>\$numarul2){
    echo "Numarul 1 este mai mare decat nuamrul 2";
};
EOL;
}

echo"<br>";

    $numarul1=20;
$numarul2=10;

if ($numarul1>$numarul2){
    echo "Numarul 1 este mai mare decat nuamrul 2";
};
echo"<br>";
echo"<br>";
echo"<br>";
echo "b. Scrie un script care utilizează operatorul ternar pentru a afișa \"Par\" sau \"Impar\" în funcție de valoarea introdusă.";
echo"<br>";
echo"<br>";
echo"<br>";

/*<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificare Paritate</title>
</head>
<body>

<?php
// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preia valoarea introdusă pentru număr
    $numar = isset($_POST["numar"]) ? intval($_POST["numar"]) : 0;

    // Verifică paritatea și afișează mesajul corespunzător folosind operatorul ternar
    echo "Numărul introdus este: " . ($numar % 2 === 0 ? "Par" : "Impar");
}
?>

<!-- Formular pentru introducerea numărului -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="numar">Introdu un număr:</label>
    <input type="number" id="numar" name="numar" required>

    <button type="submit">Verifică Paritatea</button>
</form>

</body>
</html>
Acest script utilizează un formular HTML pentru a colecta un număr de la utilizator.
După trimiterea formularului, scriptul PHP preia valoarea introdusă, verifică paritatea utilizând operatorul
ternar și afișează un mesaj corespunzător ("Par" sau "Impar").
*/
{
    echo <<<EOL
\$numar = 8;

echo (\$numar % 2 == 0) ? \$numar . " Numarul este par." : \$numar . " Numarul este impar.";
EOL;
}
echo"<br>";
$numar = 8;

echo ($numar % 2 == 0) ? $numar . " Numarul este par." : $numar . " Numarul este impar.";
/*
În PHP, puteți verifica dacă un număr este par sau nu folosind operatorul modulo (%).
Un număr este considerat par atunci când rezultatul împărțirii acestuia la 2 este zero.
În acest exemplu, se folosește operatorul modulo (%) pentru a verifica dacă restul împărțirii
variabilei $numar la 2 este zero. Dacă este zero, atunci numărul este par.
*/
echo"<br>";
echo"<br>";
echo"<br>";
?>

<h2>3. If...else Statement: </h2>

<?php
echo "a. Implementează un program care verifică dacă un utilizator are vârsta suficientă pentru a conduce și \n
afișează un mesaj corespunzător. ";
echo"<br>";
echo"<br>";
echo"<br>";
$varsta = 18;
{
    echo <<<EOL
if (\$varsta < 18) {
    echo "Nu poti aplica pentru permisul de conducere, asreapta sa mai cresti";
} else {
    echo "Felicitari, poti aplica pentru permisul de conducere";
}
EOL;
}
echo"<br>";
if ($varsta < 18) {
    echo "Nu poti aplica pentru permisul de conducere, asreapta sa mai cresti";
} else {
    echo "Felicitari, poti aplica pentru permisul de conducere";
}
echo"<br>";
echo"<br>";
echo"<br>";
echo "b. Scrie un script care determină dacă un număr este par sau impar și afișează un mesaj corespunzător. ";
echo"<br>";
echo"<br>";
echo"<br>";
/*
În PHP, puteți verifica dacă un număr este par sau nu folosind operatorul modulo (%).
Un număr este considerat par atunci când rezultatul împărțirii acestuia la 2 este zero.
În acest exemplu, se folosește operatorul modulo (%) pentru a verifica dacă restul împărțirii
variabilei $numar la 2 este zero. Dacă este zero, atunci numărul este par.
*/
{
    echo <<<EOL
    \$numar = 10;

    if (\$numar % 2 == 0) {
        echo \$numar . " Numarul este par.";
    } else {
        echo \$numar . " Numarul este impar.";
    } 
    EOL;
}
echo"<br>";
$numar = 10;

if ($numar % 2 == 0) {
    echo $numar . " Numarul este par.";
} else {
    echo $numar . " Numarul este impar.";
}
echo"<br>";
echo"<br>";
echo"<br>";
?>
<h2>4. Shorthand if Statements: </h2>
<?php
echo "a. Creează un program care verifică dacă un utilizator are vârsta de peste 18 ani și afișează un 
mesaj corespunzător într-o singură linie. ";
echo"<br>";
echo"<br>";
echo"<br>";
{
    echo <<<EOL
\$varsta = 18;

\$b = \$varsta < 18 ? "Nu poti aplica pentru permisul de conducere, asteapta sa mai cresti" : "Felicitari, ai varsta legala pentru a aplica pentru permisul de conducere!";

echo \$b;
EOL;

}
echo"<br>";
 $varsta = 18;

$b = $varsta < 18 ? "Nu poti aplica pentru permisul de conducere, asteapta sa mai cresti" : "Felicitari, ai varsta legala pentru a aplica pentru permisul de conducere!";

echo $b;
echo"<br>";
echo"<br>";
echo"<br>";
echo "b. Implementează un script care verifică dacă un număr este mai mic decât 10 și afișează un mesaj corespunzător într-o singură linie. ";
echo"<br>";
echo"<br>";
echo"<br>";
{
    echo <<<EOL
\$numar = 9;

if (\$numar < 10) \$b = "Numarul este mai mic decat 10";

echo \$b
EOL;

}
echo"<br>";
$numar = 9;

if ($numar < 10) $b = "Numarul este mai mic decat 10";

echo $b;
echo"<br>";
echo"<br>";
echo"<br>";
?>
<h2>5. Nested if Statement: </h2>
<?php
echo "a. Scrie un program PHP care verifică dacă un număr este pozitiv, negativ sau zero și afișează un mesaj corespunzător. ";
echo"<br>";
echo"<br>";
echo"<br>";
{
    echo <<<EOL
\$numar = 7;

if (\$numar > 0) {
    echo \$numar . " este un număr pozitiv.";
} elseif (\$numar < 0) {
    echo \$numar . " este un număr negativ.";
} else {
    echo \$numar . " este zero.";
}
EOL;

}
echo"<br>";
$numar = 7;

if ($numar > 0) {
    echo $numar . " este un număr pozitiv.";
} elseif ($numar < 0) {
    echo $numar . " este un număr negativ.";
} else {
echo $numar . " este zero.";
}
echo"<br>";
echo"<br>";
echo"<br>";
echo "b.Realizează un script care verifică dacă un număr este divizibil la 2 și, în caz afirmativ, verifică dacă este și divizibil la 3.";
echo"<br>";
echo"<br>";
echo"<br>";
{
    echo <<<EOL
\$numar = 6;

if (\$numar % 2 == 0 && \$numar % 3 == 0) {
    echo \$numar . " este divizibil atât la 2, cât și la 3.";
} elseif (\$numar % 2 == 0) {
    echo \$numar . " este divizibil la 2, dar nu este divizibil la 3.";
} elseif (\$numar % 3 == 0) {
    echo \$numar . " nu este divizibil la 2, dar este divizibil la 3.";
} else {
    echo \$numar . " nu este divizibil nici la 2, nici la 3.";
}
EOL;

}
echo"<br>";
$numar = 6;

if ($numar % 2 == 0 && $numar % 3 == 0) {
    echo $numar . " este divizibil atât la 2, cât și la 3.";
} elseif ($numar % 2 == 0) {
    echo $numar . " este divizibil la 2, dar nu este divizibil la 3.";
} elseif ($numar % 3 == 0) {
    echo $numar . " nu este divizibil la 2, dar este divizibil la 3.";
} else {
    echo $numar . " nu este divizibil nici la 2, nici la 3.";
}
?>

<h1>                                  Homework-08 </h1>


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
function isPrime($num) {
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
prime sunt calculate și afișate.*/
/*function isPrime($num) {
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


    
</pre>

    

