<?PHP
require_once __DIR__ . '/vendor/autoload.php';
use Hariharan\Thirukural\Thirukural;

$thirukural = new Thirukural();
$thirukural->loadFromFile('G:\xampp\htdocs\thirukural\data\Thirukural.json');
echo $thirukural->getLength();
?>