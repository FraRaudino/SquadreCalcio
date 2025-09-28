<?php 
$nome1 = $_GET['nome1'];
$nome2 = $_GET['nome2'];
$vinte1 = $_GET['vinte1'];
$vinte2 = $_GET['vinte2'];
$pareggiate1 = $_GET['pareggiate1'];
$pareggiate2 = $_GET['pareggiate2'];
$perse1 = $_GET['perse1'];
$perse2 = $_GET['perse2'];
$punteggio1 = ($vinte1 * 3) + ($pareggiate1 * 1) + ($perse1 * 0);
$punteggio2 = ($vinte2 * 3) + ($pareggiate2 * 1) + ($perse2 * 0);
$nPartite1 = $vinte1 + $pareggiate1 + $perse1;
$nPartite2 = $vinte2 + $pareggiate2 + $perse2;

echo "<h1>Classifica</h1>";
echo "Nome squadra 1: " . $nome1 . "<br>";
echo "Partite vinte: " . $vinte1 . "<br>";
echo "Partite pareggiate: " . $pareggiate1 . "<br>";
echo "Partite perse: " . $perse1 . "<br>";
echo "Numero totale partite giocate: " . $nPartite1 . "<br>";
echo "Punteggio totale: " . $punteggio1 . "<br><br>";
echo "Nome squadra 2: " . $nome2 . "<br>";
echo "Partite vinte: " . $vinte2 . "<br>";
echo "Partite pareggiate: " . $pareggiate2 . "<br>";
echo "Partite perse: " . $perse2 . "<br>";
echo "Numero totale partite giocate: " . $nPartite2 . "<br>";
echo "Punteggio totale: " . $punteggio2 . "<br>";

if($punteggio1 > $punteggio2) {
    echo "<br>La squadra " . $nome1 . " e' in testa alla classifica.<br>";
} elseif($punteggio1 < $punteggio2) {
    echo "<br>La squadra " . $nome2 . " e' in testa alla classifica.<br>";
} else {
    echo "<br>Le due squadre sono in parità in classifica.<br>";
}

if($nPartite1 != $nPartite2) {
    echo "Le due squadre hanno giocato un numero diverso di partite.";
}
?>          