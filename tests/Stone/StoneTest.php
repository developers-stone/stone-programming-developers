<?php

namespace App\Tests\Stone;

use App\Stone\Stone;
use PHPUnit\Framework\TestCase;

class StoneTest extends TestCase
{
    public function testInitial()
    {
        $stone = new Stone();
        $this->assertTrue($stone->init());
    }
}