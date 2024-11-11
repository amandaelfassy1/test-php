<?php

include_once 'datas.php';

function getAllPersonalityNames(): array {
    $allNames = array_merge(Datas::getActors(), Datas::getActress());
    sort($allNames);
    return $allNames;
}

function shouldDisplayPersonality(string $name, ?string $selectedName): bool {
    return is_null($selectedName) || $name === $selectedName;
}

function generateInitialsMap(): array {
    $initialsMap = [];
    foreach (Datas::MOVIES as $initials => $movies) {
        foreach (getAllPersonalityNames() as $name) {
            if (generateInitials($name) === $initials || $initials === getSpecialCaseInitials($name)) {
                $initialsMap[$name] = $initials;
            }
        }
    }
    return $initialsMap;
}

function generateInitials(string $name): string {
    $parts = explode(" ", $name);
    $initials = '';
    foreach ($parts as $part) {
        $initials .= strtoupper($part[0]);
    }
    return $initials;
}

function getSpecialCaseInitials(string $name): ?string {
    $specialCases = [
        'Kate Winslet' => 'kW',
    ];
    return $specialCases[$name] ?? null;
}

function getImageFilePath(string $name): string {
    $formattedName = strtolower(str_replace(' ', '_', $name));
    return "img/{$formattedName}.jpg";
}

function getRoleClass(string $name): string {
    return in_array($name, Datas::getActors()) ? 'actor' : 'actress';
}

function displayPersonalityCard(string $name, array $initialsMap): string {
    $cardHtml = [];
    $cardHtml[] = "<div class='card " . getRoleClass($name) . "'>";
    $cardHtml[] = "<div class='card-inner'>";
    $cardHtml[] = "<div class='card-front'>";
    $cardHtml[] = "<h2>{$name}</h2>";
    $cardHtml = appendMoviesSection($cardHtml, $name, $initialsMap);
    $cardHtml[] = "</div>"; 
    $cardHtml = appendImageSection($cardHtml, $name);
    $cardHtml[] = "</div>";
    $cardHtml[] = "</div>";
    return implode('', $cardHtml);
}

function appendMoviesSection(array $html, string $name, array $initialsMap): array {
    $initials = $initialsMap[$name] ?? generateInitials($name);
    if (isset(Datas::MOVIES[$initials])) {
        $movies = Datas::MOVIES[$initials];
        krsort($movies);
        foreach ($movies as $year => $title) {
            $html[] = formatMovieHtml($year, $title);
        }
    } else {
        $html[] = "<p class='film'>Aucun film enregistré.</p>";
    }
    return $html;
}

function formatMovieHtml(int $year, string $title): string {
    return "<strong class='film'>{$title} ({$year})</strong>";
}

function appendImageSection(array $html, string $name): array {
    $html[] = "<div class='card-back'>";
    $html[] = "<img src='" . getImageFilePath($name) . "' alt='{$name}' />";
    $html[] = "</div>";  
    return $html;
}

$selectedPersonality = null;  
// $selectedPersonality = "Kate Winslet"; 
$personalities = getAllPersonalityNames();
$initialsMap = generateInitialsMap();  

echo "<div class='actor-list'>";
foreach ($personalities as $name) {
    if (shouldDisplayPersonality($name, $selectedPersonality)) {
        echo displayPersonalityCard($name, $initialsMap);
    }
}
echo "</div>";

?>
