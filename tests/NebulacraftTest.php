<?php
/**
 * Tests for NebulaCraft
 */

use PHPUnit\Framework\TestCase;
use Nebulacraft\Nebulacraft;

class NebulacraftTest extends TestCase {
    private Nebulacraft $instance;

    protected function setUp(): void {
        $this->instance = new Nebulacraft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nebulacraft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
