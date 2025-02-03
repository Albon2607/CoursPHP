<?php
$monNom = "Yves";
echo "Hello $monNom !";

$prix=20;
// $qte=0;
$qte=10;
// $tva=19.6;
// $tva=0;
$tva=5.5;
$rupture=true;
$total=$prix*$qte*(1+$tva/100);

echo "<br>";
echo "<br>";

// condition if
echo "<u><b><span style='color: red;'>Condition \"if\"</span></u></b> <br>";
if ($qte==0) {
// if ($rupture) {
    echo "Rupture de stock";                                                                                 
}
else if ($tva==0) {
    // echo "$monNom a commandé $qte articles pour un montant total de ".$prix*$qte." € HT";
    echo "$monNom a commandé $qte articles pour un montant total de $total € HT";
}
else {
    echo "$monNom a commandé $qte articles pour un montant total de $total € HT";
} 
echo "<br>";
echo "<br>";
// condition if simplifiée avec opérateur ternaire
echo "<u><b><span style='color: red;'>Condition \"if\" simplifiée avec opérateur ternaire</span></u></b> <br>";
echo ($qte == 0) ? "Rupture de stock" : (($tva == 0) ? "$monNom a commandé $qte articles pour un montant total de $total € HT" : "$monNom a commandé $qte articles pour un montant total de $total € HT");

echo "<br>";
echo "<br>";

// condition switch
echo "<u><b><span style='color: red;'>Condition \"switch\"</span></u></b> <br>";

switch ($tva) {
    case 0:
        echo "TVA 0% : produits culturels";
        break;
    case 5.5:
        echo "TVA 5.5% : produits alimentaires";
        break;
    case 19.6:
        echo "TVA 19.6% : produits de consommation courante";
        break;
    default:
        echo "TVA inconnue";
}
echo "<br>";
echo "<br>";

// Contrôle foreach sur un tableau (type : liste) (tableau indexé) (array)
echo "<u><b><span style='color: red;'>Contrôle \"foreach\" sur un tableau</span></u></b> <br>";
$mesAuteurs=["Victor Hugo", "Emile Zola", "Gustave Flaubert", "Charles Baudelaire", "Arthur Rimbaud", "Paul Verlaine", "Stendhal", "Marcel Proust"];
foreach ($mesAuteurs as $auteur) {
    echo "$auteur <br>";
}
echo "<br>";
// Contrôle foreach sur un tableau associatif (type : dictionnaire) (tableau associatif) (array)
echo "<u><b><span style='color: red;'>Contrôle \"foreach\" sur un tableau associatif</span></u></b> <br>";
$mesLivres = [
    "Les Misérables" => "Victor Hugo",
    "Germinal" => "Emile Zola",
    "Madame Bovary" => "Gustave Flaubert",
    "Les Fleurs du mal" => "Charles Baudelaire",
    "Une saison en enfer" => "Arthur Rimbaud",
    "Poèmes saturniens" => "Paul Verlaine",
    "Le Rouge et le Noir" => "Stendhal",
    "À la recherche du temps perdu" => "Marcel Proust"
];
foreach ($mesLivres as $titre => $auteur) {
    echo "Le livre '$titre' a été écrit par $auteur <br>";
}
echo "<button onclick='toggleVisibility()'>Afficher/Masquer le code</button><br>";
echo "<div id='livres' style='display: none;'>"; // Masquer par défaut
echo "<pre>";
echo htmlspecialchars('
$mesLivres = [
    "Les Misérables" => "Victor Hugo",
    "Germinal" => "Emile Zola",
    "Madame Bovary" => "Gustave Flaubert",
    "Les Fleurs du mal" => "Charles Baudelaire",
    "Une saison en enfer" => "Arthur Rimbaud",
    "Poèmes saturniens" => "Paul Verlaine",
    "Le Rouge et le Noir" => "Stendhal",
    "À la recherche du temps perdu" => "Marcel Proust"
];
foreach ($mesLivres as $titre => $auteur) {
    echo "Le livre \'$titre\' a été écrit par $auteur <br>";
}');
echo "</pre>";
echo "</div>"; // Fin du div

// JavaScript pour afficher/masquer le contenu
echo "
<script>
function toggleVisibility() {
    var livresDiv = document.getElementById('livres');
    if (livresDiv.style.display === 'none') {
        livresDiv.style.display = 'block';
    } else {
        livresDiv.style.display = 'none';
    }
}
</script>
";
?>