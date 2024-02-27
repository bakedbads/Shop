<?php
function berechneSumme($artikel, $preise) {
    $nettoSumme = 0;
    
    for ($i = 0; $i < count($artikel); $i++) {
        $preis = floatval($preise[$i]);
        $menge = isset($_POST['artikelmenge'][$i]) ? intval($_POST['artikelmenge'][$i]) : 0;
        $summe = $preis * $menge;
        echo '<div class="row">';
        echo '<div class="col-md-3"><p>' . $artikel[$i] . '</p></div>';
        echo '<div class="col-md-3"><p class="artikelpreis">' . number_format($preis, 2) . '</p></div>';
        echo '<div class="col-md-3"><input class="artikelmenge" name="artikelmenge[]" type="number" value="' . $menge . '" min="0"></div>';
        echo '<div class="col-md-3"><p class="artikelsumme">' . number_format($summe, 2) . '</p></div>';
        echo '</div>';
        
        $nettoSumme += $summe;
    }
    
    echo '<div class="row">';
    echo '<div class="offset-md-9 col-md-3"><p id="nettosumme">' . number_format($nettoSumme, 2) . '</p></div>';
    echo '</div>';
}
?>