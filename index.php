<?php
// PHP Giorno 1-------------------------------------------------------------------------

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

