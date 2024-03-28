<?php
//! PHP Giorno 1-------------------------------------------------------------------------

// Esercizio 1

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $arr = [2,6,8,10,3,7,9];

// $somma_pari = 0;
// $conteggio_pari = 0;

// foreach ($arr as $numero) {
//     if ($numero % 2 == 0){
//         $somma_pari += $numero;
//         $conteggio_pari++;
//     }
// }

// if ($conteggio_pari > 0){
//     $media_pari = $somma_pari / $conteggio_pari;
//     echo "La media dei numeri pari è: $media_pari";
// } else {
//     echo "Non ci sono numeri pari";
// }


// Esercizio 2

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere Esempio array = $users = [ ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], ];

// $arr = [['name' => 'Giuseppe', 'surname' => 'Merola', 'gender' => 'M'],
//         ['name' => 'Emanuele', 'surname' => 'Pelliccia', 'gender' => ''],
//         ['name' => 'Flavia', 'surname' => 'Vignanelli', 'gender' => 'F'],
//         ['name' => 'Gianluca', 'surname' => 'Cecere', 'gender' => 'M'],
//         ['name' => 'Roberta', 'surname' => 'Picciariello', 'gender' => 'F'],
// ];

// foreach($arr as $persona){
//     if ($persona['gender'] == 'M'){
//         echo 'Buongiorno Sig ' . $persona['name'] . ' ' . $persona['surname'] . "\n";
//     } elseif ($persona['gender'] == 'F'){
//         echo 'Buongiorno Sig.ra ' . $persona['name'] . ' ' . $persona['surname'] . "\n";
//     } else {
//         echo 'Buongiorno ' . $persona['name'] . ' ' . $persona['surname'] . "\n";
//     }
// }


// Esercizio 3

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

// for ($i=1; $i <= 100 ; $i++) { 
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo "HACKADEMY" . "\n";
//     } elseif ($i % 3 == 0) {
//         echo "PHP";
//     } elseif ($i % 5 == 0) {
//         echo "JAVASCRIPT" . "\n";
//     } else {
//         echo $i . "\n";
//     }
// }



//! PHP Giorno 2-------------------------------------------------------------------------

//? Esercizio 1 - foreach

// $arr = [2,5,7,9,10,21];

// function sommaNumeri($arr){

//     $result = 0;

//     foreach ($arr as $numero){
//         $result += $numero;
//     }

//     return $result;
// }

// $risultato = sommaNumeri($arr);

// echo($risultato);


//? Esercizio 2 - for

// $arr = [2,5,7,9,10,21];

// function sommaNumeri($arr){

//     $result = 0;

//     for ($i=0; $i < count($arr); $i++) { 
//         $result += $arr[$i];
//     }

//     return $result;
// }

// $risultato = sommaNumeri($arr);

// echo $risultato;


//? Esercizio 1 - array_reduce

// $arr = [2,5,7,9,10,21];


// function sommaNumeri($a,$b){
//     $a += $b;
//     return $a;
// }

// $risultato = array_reduce($arr, "sommaNumeri");

// echo $risultato;


//? Esercizio 2


// $password = readline('Inserisci una password: ');

function checkLength($string)
{
    if (strlen($string) >= 8) {
        return true;
    }
       
    echo "La password deve avere minimo 8 caratteri\n";
    return false;
    
}

function checkUppercase($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i]) == true) {
            return true;
        }
    }
    echo "La password deve contenere una Maiuscola\n";
    return false;
}

function checkNumber($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i]) == true) {
            return true;
        }
    }
    echo "La password deve contenere un numero\n";
    return false;
}

function checkSpecials($string)
{
    $specials = ['!', "?", "*", "@"];
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $specials)) {
            return true;
        }
    }
    echo "La password deve contenere un carattere speciale\n";
    return false;
}

function checkPassword($string)
{
    $rule1 = checkLength($string);
    $rule2 = checkUppercase($string);
    $rule3 = checkNumber($string);
    $rule4 = checkSpecials($string);

    if ($rule1 && $rule2 && $rule3 && $rule4) {
        return true;
    } else {
        return false;
    }
}

$tentativi=0;

$i = 0;
do {
    if($i>0){
        echo "Ti rimangono " . 5-$i . " tentativi\n";
    }
    $password = readline('Inserisci una password: ');
    $risultato = checkPassword($password);
    $i++;
} while ($risultato == false && $i < 5);

if($risultato == false) {
    echo "Hai esaurito i tentativi\n";
} else {
    echo "Password corretta\n";
};


$risultato = checkPassword($password);
// var_dump($risultato);



