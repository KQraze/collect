<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    public function testOnly()
    {
        $collect = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $this->assertEquals(new Collect(['a' => 1, 'c' => 3]), $collect->only(['a', 'c']));
    }

    public function testFirst()
    {
        $collect = new Collect([10, 20, 30]);
        $this->assertSame(10, $collect->first());
    }

    public function testCount()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame(2, $collect->count());
    }

    public function testToArray()
    {
        $data = ['x' => 100, 'y' => 200];
        $collect = new Collect($data);
        $this->assertSame($data, $collect->toArray());
    }
}