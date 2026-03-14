<?php
/**
 * Tests for DataVision
 */

use PHPUnit\Framework\TestCase;
use Datavision\Datavision;

class DatavisionTest extends TestCase {
    private Datavision $instance;

    protected function setUp(): void {
        $this->instance = new Datavision(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Datavision::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
