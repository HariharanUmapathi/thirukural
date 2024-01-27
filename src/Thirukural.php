<?PHP

namespace Hariharan\Thirukural;

class Thirukural
{
    private $kural;
    private $sourcePath;

    function __construct()
    {
        $this->sourcePath = "./data/Thirukural.json";
        $this->kural = json_decode(file_get_contents($this->sourcePath))->kural;
    }
    function getSourcePath(): String
    {
        return $this->sourcePath;
    }
    function setSourcePath(String $sourcePath): void
    {
    }
    function loadFromFile(String $path)
    {
        $this->setSourcePath(realpath($path));

        $this->kural= json_decode(file_get_contents($this->sourcePath))->kural;
    }
    function getByIndex(Int $coupletNo)
    {

        return (array)$this->kural[$coupletNo];
    }
    function getLength()
    {
        return count($this->kural);
    }
}
