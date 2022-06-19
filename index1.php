<h1>Introduction PHP</h1>


<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "mon texte"; //string
$chaineDeCaracteres2 = "mon prix est très intéressant"; //string
$chaineDeCaracteres3 = "Mon prix est de";
$entier = 50; // integer
$flottant = 9.99; // float
$boolean = true; // boolean (true ou false)
$tableau1 = array("text1", "texte2", "text3"); // array
$tableau2 = ["text1", "texte2"]; // array
$date = new DateTime(); // programmation orientée objet (POO)

// AFFICHAGE
echo "Test<br>";
echo $chaineDeCaracteres."<br>";
echo $chaineDeCaracteres3." ".$entier." euros<br>"; // Mon prix est de 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>";


//FONCTIONS CHAINES DE CARACTERES

// Compter le nombre de caractères (espadces inclus !)
$nbCaracteres = strlen ($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen ($chaineDeCaracteres)." caractères<br>";

// Convertir une chaîne en majuscules
$chaineMajuscules = strtoupper ($chaineDeCaracteres);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>"; // prend en compte les caractères accentués

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";


// FONCTIONS TABLEAUX
$tailleTableau1 = count ($tableau1);
echo "Le tableau 1 contient $tailleTableau1 éléments <br>";
echo "Le tableau 2 contient ".count($tableau2)." éléménts<br>";
echo $tableau1[0]."<br>"; // accéder à la première valeur du tableau

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

echo "La moyenne est $moyenne<br>";


// OPERATIONS MATHEMATIQUES

$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT €<br>";

// Afficher le total TTC d'une facture
$tauxTVA = 0.20;
$totalTTC = $totalHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC €<br>";

$texte = "Texte";
$calcul = $texte - 5;
echo $calcul."<br>";

// Renvoie le type de la variable spécifiée en paramètre
// echo gettype($texte);
// var_dump($tableau1);



// STRUCTURES DE CONTROLE

// Conditions (IF = SI)

$prenom = "Georges";
$age = 22.5;

if ($age >= 18) {
    $resultat = "majeur";
} else {
    $resultat = "mineur";
}

echo "$prenom est $resultat<br>";

// Ternaire
$result = $age >= 18 ? "majeur" : "mineur";
echo "$prenom est $resultat<br>";
// ou
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

// En fonction de l'àge, afficher une catégorie

/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinon --> JUNIOR
*/
if(gettype($age) == "integer" || gettype($age) == "double"){
    if ($age >= 30){
        $result = "SENIOR";
    } else if($age >= 20){
        $resultat = "CADET";
    } else {
        $resultat = "JUNIOR";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Veuillez saisir un àge numérique!";
}

/*
    si la valeur est 1 --> OK!
    si la valeur est 0 --> KO!
    sinon afficher "valeur non géréeé
*/

$valeur = 1;
switch($valeur) {
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée<br>"; 
}

$age = 22;
if(gettype($age) == "integer" || gettype($age) == "double"){
    switch($age){
        case $age >= 30: echo "Senior<br>"; break;
        case $age >= 20: echo "Cadet<br>"; break;
        default: echo "Junior<br>"; 
    } 
} else {
    echo "Veuillez saisir un àge numérique!";
}



// BOUCLES (loop)^

// Afficher les chiffres de 1 à 10

// FOR (pour)
// $i++ --> $i = $i + 1

for($i = 1; $i <= 10; $i++) {
    echo $i." ";
}

// WHILE (tant que)
$j = 1;
while($j <= 10) {
    echo $j." ";
    $j++;
}

// FOREACH 
// $range = range(1,10);
// var_dump($range);

foreach(range(1,10) as $valeur){ 
    echo $valeur." ";
}

echo "<br>";

// exemple

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

echo "<h3>Méthode for</h3>";
for ($i = 0; $i < count($marques); $i++){
    echo $marques[$i]."<br>";
}

echo "<h3>Méthode while</h3>";
$i = 0;
while($i < $nbMarques){
    echo $marques[$i]."<br>";
    $i++;
}

echo "<h3>Méthode foreach</h3>";
foreach($marques as $marque) {
    echo $marque."<br>";
}


// TABLEAUX ASSOCIATIFS
// clé (key) -> valeur (value) (clé doit être unique)

$formateurs = [
    "stephane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg",
    "dominique" => "colmar"
];

var_dump($formateurs);

//ksort() -> trier sur la clé (A à Z)
//krsort() -> trier sur la clé (Z à A) r = reverse
//asort() -> trier sur la valeur (A à Z)
//arsort() -> trier sur la valeur (Z à A)
ksort($formateurs);

foreach($formateurs as $prenom => $ville){
    echo ucfirst($prenom)." habite à ".mb_strtoupper($ville)."<br>";
}

$clients = [
    "stephane" => [
        "adresse" => "10 rue de la Gare",
        "Cp" => "67000",
        "ville" => "STRASBOURG",
        "tel" => "0988877661"
    ],
    "virgile" => [
        "adresse" => "1 rue principale",
        "Cp" => "68100",
        "ville" => "MULHOUSE",
        "tel" => "0677889999"
    ]
];

var_dump($clients);
echo "<br>";
echo $clients["stephane"]["ville"];

foreach($clients as $prenom => $coordonnees){
    echo ucfirst($prenom)." habite ".
                 $coordonnees["adresse"]." ".$coordonnees["Cp"].
                 " ".$coordonnees["ville"]." et a comme n° de téléphone : ".$coordonnees["tel"]."<br>";
                 
}



// FONCTIONS

echo afficherMessage();
function afficherMessage() : string {
    $message = "Voici mon message<br>";
    return $message;
}

echo calculerCarre("5");
echo pow(9,3)."<br>";

function calculerCarre($nombre){
    if(gettype($nombre) == "integer"){
        return ($nombre * $nombre)."<br>";
    } else {
        return "Erreur: la valeur doit être un entier !<br>";
    }
}

echo calculerMoyenne([9, 10.5, 11, 18, 12])."<br>";

$eleves = [
    "cindy" => [12, 9, 19, 17, 12, 13],
    "pascal" => [8, 9, 12, 10, 17]
];

foreach($eleves as $prenom => $notes) {
    echo "La moyenne de $prenom est : ".calculerMoyenne($notes)."<br>";
}

function calculerMoyenne(array $notes) : float{
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}

echo pairOuImpair(4);
echo pairOuImpair(5);

function pairOuImpair($nombre) : string {

    if($nombre % 2 == 0) { // % = modulo
        $resultat = "pair<br>";
    } else {
        $resultat = "impair<br>";
    }

    return "$nombre est $resultat";
}

echo repeterMots("Youpi", 6, " - ");
echo repeterMots("Houra", 6, " / ");

function repeterMots(string $mots, int $nbRepetitions, string $separateur){

    $resultat = "";
    foreach(range(1, $nbRepetitions) as $valeur){
        $resultat .= $mots.$separateur;
    }

    return $resultat;
}

echo str_repeat("Bidule ", 10);