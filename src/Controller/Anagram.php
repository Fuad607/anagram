<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Anagram extends AbstractController
{
    /**
     * Factorise word
     *
     * @param $word
     * @return int
     */
    public function factorise($word): float
    {
        $factors = array("e" => 2, "t" => 3, "a" => 5, "o" => 7, "i" => 11,
            "n" => 13, "s" => 17, "h" => 19, "r" => 23, "d" => 29,
            "l" => 31, "c" => 37, "u" => 41, "m" => 43, "w" => 47,
            "f" => 53, "g" => 59, "y" => 61, "p" => 67, "b" => 71,
            "v" => 73, "k" => 79, "j" => 83, "x" => 89, "q" => 97,
            "z" => 101);

        $total = 1;

        $letters = str_split($word);

        foreach ($letters as $thisLetter) {
            if (isset($factors[$thisLetter])) {
                $total *= $factors[$thisLetter];
            }
        }

        return $total;
    }

    /**
     * Get word list from Dictionary
     *
     * @param $searchWord
     * @return array
     */
    public function getWordResutsFromDictionary($searchWord): array
    {
        $searchWordFactor = $this->factorise($searchWord);

        $file = file_get_contents(__DIR__ . '/../../assets/resources/english_58000_lowercase.txt');

        $dict = explode("\n", $file);

        foreach ($dict as $thisWord) {
            $dictWordFactor = $this->factorise($thisWord);

            if (fmod($searchWordFactor, $dictWordFactor) == 0) {
                $wordResults[] = $thisWord;
            }
        }

        return $wordResults;
    }

    /**
     * Generate tow word anagram lists
     *
     * @param $searchWord
     * @return array
     */
    public function generateTwoWordAnagram($searchWord): array
    {
        $searchWord=strtolower($searchWord);
        $let1 = str_split($searchWord);
        sort($let1);
        $s1 = implode("", $let1);
        $wordResults = $this->getWordResutsFromDictionary($searchWord);
        $results=[];
        foreach ($wordResults as $word) {
            foreach ($wordResults as $word2) {
                $s2 = trim($word) . trim($word2);

                if (strlen($searchWord) == strlen($s2)) {
                    $let2 = str_split($s2);
                    sort($let2);

                    $s2 = implode("", $let2);
                    if (strcmp($s1, $s2) == 0) {
                        $results[] = $word . " " . $word2;
                    }
                }
            }
        }

        return $results;
    }

}