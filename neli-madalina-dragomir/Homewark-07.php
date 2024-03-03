<pre>
<!DOCTYPE html>
<h1>                                Teme   </h1>

<h1>                              Homework-07 </h1>

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






