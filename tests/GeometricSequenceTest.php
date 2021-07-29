<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use GeometricSequence\GeometricSequence;

class GeometricSequenceTest extends TestCase
{
    /** @test */
    public function theTruth(): void
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function testTrueGeometricSequences(): void
    {
        // expected true as GeometricSequence is 3
        $this->assertTrue(GeometricSequence::checkGeometricSequence([2, 6, 18, 54]));

        // expected true as GeometricSequence is 0.5
        $this->assertTrue(GeometricSequence::checkGeometricSequence([10, 5, 2.5, 1.25]));
    }

    /** @test */
    public function testFakeGeometricSequences(): void
    {
        $this->assertFalse(GeometricSequence::checkGeometricSequence([12, 9, 18, 2]));
        $this->assertFalse(GeometricSequence::checkGeometricSequence([10, 5, 8, 1.25]));
    }

}
