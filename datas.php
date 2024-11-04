<?php

class Datas
{
    const ACTORS = [
        'Al Pacino',
        'Charles Vanel',
        'George Clooney',
        'Brad Pitt',
        'Gérard Darmon',
        'Vincent Price',
        'Christopher Lee',
        'Ralph Fiennes',
    ];

    const ACTRESS = [
        'Faye Dunaway',
        'Catherine Deneuve',
        'Angelina Jolie',
        'Fay Wray',
        'Kate Winslet',
        'Bette Davis',
    ];

    const DIRECTORS = [
        'Henri-Georges Clouzot' => 1,
        'Kathryn Bigelow' => 2,
    ];

    const MOVIES = [
        'RF' => [
            1993 => 'La liste de Schindler',
            2008 => 'Démineurs',
        ],
        'KB' => [
            2008 => 'Démineurs',
            1990 => 'Blue Steel',
        ],
        'HC' => [
            1953 => 'Le Salaire de la Peur',
            1955 => 'Les Diaboliques',
        ],
        'CV' => [
            1953 => 'Le Salaire de la Peur',
            1955 => 'Les Diaboliques',
            1965 => 'Le Chant du monde',
        ],
        'GC' => [
            1988 => 'Le Retour des tomates tueuses',
            1998 => 'Hors d\'atteinte',
        ],
        'kW' => [
            2004 => 'Eternal Sunshine of the Spotless Mind',
            1997 => 'Titanic',
        ],
        'BP' => [
            1999 => 'Fight Club',
            1995 => 'L\'armée des 12 singes',
            2005 => 'Mr. & Mrs. Smith',
        ],
        'FW' => [
            1933 => 'King Kong',
            1932 => 'La Chasse du Comte Zaroff',
        ],
        'VP' => [
            1971 => 'L\'Abominable Docteur Phibes',
            1944 => 'Laura',
        ],
        'CL' => [
            1973 => 'The Wicker Man',
            1958 => 'Le Cauchemar de Dracula',
        ],
        'FD' => [
            1974 => 'Chinatown',
            1967 => 'Bonnie & Clyde',
        ],
        'AJ' => [
            1995 => 'Hackers',
            2001 => 'Lara Croft : Tomb Raider',
            2005 => 'Mr. & Mrs. Smith',
        ],
        'CD' => [
            1983 => 'Les Prédateurs',
            1965 => 'Le Chant du monde',
        ],
        'AP' => [
            1973 => 'Serpico',
            1975 => 'Un après-midi de chien',
        ],
        'BD' => [
            1950 => 'Eve',
            1962 => 'Qu\'est-il arrivé à Baby Jane ?',
        ],
    ];
  
    static public function getActors(): array
    {
      return static::ACTORS;
    }

    static public function getActress(): array
    {
      return static::ACTRESS;
    }
}

?>