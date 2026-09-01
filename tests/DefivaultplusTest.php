<?php
/**
 * Tests for DeFiVaultPlus
 */

use PHPUnit\Framework\TestCase;
use Defivaultplus\Defivaultplus;

class DefivaultplusTest extends TestCase {
    private Defivaultplus $instance;

    protected function setUp(): void {
        $this->instance = new Defivaultplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defivaultplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
