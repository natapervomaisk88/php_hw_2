# php_hw_2
1) composer init
2) add section in composer.json
 "autoload": {
    "psr-4": {
      "App\\": "src/App"
    }
  },
3) composer update
4) in index.php added 
namespace App;
require_once __DIR__ . '/vendor/autoload.php';
use App\[NameClass];
5) In classes has been added namespace App;

