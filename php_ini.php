<?php
include_once 'datas.php';

$actors = Datas::getActors();
$actress = Datas::getActress();
$movies = Datas::MOVIES;

$selectedActor = "Kate Winslet"; 
$showSpecific = true; 

foreach($actors as $actor){
    $allactors[]= $actor;
}
foreach($actress as $oneactress){
    $allactors[]= $oneactress;
}

sort($allactors);

function getInitials($name) {
    $parts = explode(" ", $name);
    $initials = "";
    foreach ($parts as $part) {
        $initials .= $part[0]; 
    }
    return $initials;
}

function getImagePath($name) {
    $formattedName = strtolower(str_replace(' ', '_', $name));
    return "img/{$formattedName}.jpg"; 
}

echo "<div class='actor-list'>"; 
if ($showSpecific) {

foreach ($allactors as $allactor) {
    $class = 'actress';
    foreach ($actors as $actor) {
        if ($actor === $allactor) {
            $class = 'actor';
        }
    }

    $initials = getInitials($allactor);
    $imagePath = getImagePath($allactor); 

    echo "<div class='card {$class}'>";
    echo "<div class='card-inner'>"; 
    echo "<div class='card-front'>"; 
    echo "<h2>{$allactor}</h2>";
    if ($allactor === "Kate Winslet") {
        $initials = "kW"; // je sais c'est nul mais pour l'instant j'ai pas réussi autrement => A CHANGER 
    }
    if (array_key_exists($initials, $movies)) {
        
        krsort($movies[$initials]);

        foreach ($movies[$initials] as $year => $title) {
            echo "<strong class='film'>{$title} ({$year})</strong>";
        }
    } else {
        echo "<p class='film'>Aucun film enregistré.</p>";
    }
    echo "</div>"; 
    echo "<div class='card-back'>"; 
        echo "<img src='{$imagePath}' alt='{$allactor}' />"; 
    echo "</div>"; 

    echo "</div>";
    echo "</div>"; 
}
}
echo "</div>"; 
?>
