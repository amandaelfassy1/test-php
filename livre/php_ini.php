<?php

require_once 'datas.php';

$ClassicAuthors = LibraryData::getClassicAuthors();
$ModernAuthors = LibraryData::getModernAuthors();

$allAuthors = [];
foreach ($ClassicAuthors as $ClassicAuthor) {
    $allAuthors[] = $ClassicAuthor;
}
foreach ($ModernAuthors as $ModernAuthor) {
    $allAuthors[] = $ModernAuthor;
}
sort($allAuthors);
foreach($allAuthors as $allAuthor){
    echo($allAuthor . '<br>');
}
function getInitials($authors) {
    $initialsArray = []; 
    foreach ($authors as $author) {
        $parts = explode(" ", $author);
        $initials = "";
        foreach ($parts as $part) {
            $initials .= strtoupper($part[0]); 
        }
        $initialsArray[] = $initials; 
    }
    return $initialsArray; 
}
getInitials($allAuthors);