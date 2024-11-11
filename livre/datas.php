<?php

class LibraryData
{
    const CLASSIC_AUTHORS = [
        'Herman Melville',
        'Jane Austen',
        'Leo Tolstoy',
        'Fyodor Dostoevsky'
    ];

    const MODERN_AUTHORS = [
        'George Orwell',
        'J.K. Rowling',
        'Haruki Murakami',
        'Toni Morrison'
    ];

    const BOOKS = [
        'HM' => [
            1851 => 'Moby-Dick',
            1846 => 'Typee'
        ],
        'JA' => [
            1813 => 'Pride and Prejudice',
            1815 => 'Emma'
        ],
        'LT' => [
            1877 => 'Anna Karenina',
            1869 => 'War and Peace'
        ],
        'FD' => [
            1866 => 'Crime and Punishment',
            1880 => 'The Brothers Karamazov'
        ],
        'GO' => [
            1949 => '1984',
            1945 => 'Animal Farm'
        ],
        'JKR' => [
            1997 => 'Harry Potter and the Philosopher\'s Stone',
            1998 => 'Harry Potter and the Chamber of Secrets'
        ],
        'HMU' => [
            1987 => 'Norwegian Wood',
            2002 => 'Kafka on the Shore'
        ],
        'TM' => [
            1987 => 'Beloved',
            1973 => 'Sula'
        ],
    ];

    static public function getClassicAuthors(): array
    {
        return static::CLASSIC_AUTHORS;
    }

    static public function getModernAuthors(): array
    {
        return static::MODERN_AUTHORS;
    }
}
?>
