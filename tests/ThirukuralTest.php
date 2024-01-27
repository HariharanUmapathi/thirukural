<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
//require_once "./src/Thirukural.php";
require_once "./vendor/autoload.php";


final class ThirukuralTest extends TestCase
{
    private $thirukural;
    public function __construct(){
        parent::__construct();
        $this->thirukural = new Hariharan\Thirukural\Thirukural();
    }
    public function testEmpty(): array
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }
    public function testgetByIndex(): void
    {
        
        $this->assertIsArray($this->thirukural->getByIndex(1),"Successfully Verified");
    }
    public function testgetLength():void {
        $length = $this->thirukural->getLength();
        $this->assertTrue($length == 1330,"Length check Done");
    }

}
