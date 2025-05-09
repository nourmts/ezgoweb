<?php

namespace App\BadWordsFilterBundle\Service;

class BadWordsFilter
{
    private array $badWords = ['badword', 'badwords']; // Liste des mots inappropriés

    public function filter(?string $text): array
    {
        // Handle null text
        if ($text === null) {
            return ['filteredText' => '', 'badWords' => []];
        }

        $found = [];
        $lowerText = strtolower($text); // Convert to lowercase for case-insensitive matching

        foreach ($this->badWords as $word) {
            if (stripos($lowerText, strtolower($word)) !== false) {
                $found[] = $word;
                $text = str_ireplace($word, str_repeat('*', strlen($word)), $text);
            }
        }

        return ['filteredText' => $text, 'badWords' => $found];
    }
} 