<?php
use PHPUnit\Framework\TestCase;
use CodeIgniter\Test\FeatureTestTrait;
use App\Models\ClienteModel;
class LoginTest extends TestCase{
    public function testSum()
    {
        $this->assertEquals(4, 2 + 2);
    }
    public function testSubtraction()
    {
        $this->assertEquals(2, 5 - 3);
    }
    public function testMultiplication()
    {
        $this->assertEquals(15, 3 * 5);
    }
    public function testDivision()
    {
        $this->assertEquals(4, 20 / 5);
    }
    public function testConcatenation()
    {
        $this->assertEquals('Hello World', 'Hello ' . 'World');
    }
}