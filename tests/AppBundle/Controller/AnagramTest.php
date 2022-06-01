<?php

namespace App\Tests\AppBundle\Controller;

use App\Controller\Anagram;
use PHPUnit\Framework\TestCase;

class AnagramTest extends TestCase
{
    /**
     * @return void
     */
    public function testFactorise()
    {
        $anagram = new Anagram();
        $this->assertNotEmpty($anagram->factorise("test"));
        $this->assertNotEquals(111,$anagram->factorise("test"));
        $this->assertEquals(306, $anagram->factorise("test"));
    }

    /**
     * @return void
     */
    public function testGetWordResutsFromDictionary()
    {
        $anagram = new Anagram();
        $this->assertNotEmpty($anagram->getWordResutsFromDictionary("testtest"));
        $this->assertCount(13,$anagram->getWordResutsFromDictionary("testtest"));
        $this->assertIsArray($anagram->getWordResutsFromDictionary("testtest"));
        $this->assertEquals("est",trim($anagram->getWordResutsFromDictionary("testtest")[0]));
    }

    /**
     * @return void
     */
    public function testBuzz()
    {
        $anagram = new Anagram();
        $this->assertCount(4, $anagram->generateTwoWordAnagram("testtest"));
        $this->assertNotEmpty(  $anagram->generateTwoWordAnagram("testtest"));
        $this->assertIsArray(  $anagram->generateTwoWordAnagram("testtest"));
     }

}