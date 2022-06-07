<?php

namespace App\Controller;

interface AnagramInterface
{
    /**
     * Factorise word
     *
     * @param $word
     * @return float
     */
    public function factorise($word): float;

    /**
     * Get word list from Dictionary
     *
     * @param $searchWord
     * @return array
     */
    public function getWordResutsFromDictionary($searchWord): array;

    /**
     * Generate tow word anagram lists
     *
     * @param $searchWord
     * @return array
     */
    public function generateTwoWordAnagram($searchWord): array;
}