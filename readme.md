## Education Board Result System 

This is a learning purpose project for student result calculation. We use some programming language here. 

#### Language list

- HTML 5
- CSS 3 
- javaScript 
- jQuery 
- PHP 
- MySQL 
- OOP 
- PDO 

#### Databse class Design 

```php	
require_once "../../config.php";
namespace Edu\Board\Support;
use PDO;

/**
 * Database  Managements
 */
abstract class Database
{
	
	/**
	 * Server Information 
	 */
	private $host = HOST;
	private $user = USER;
	private $pass = PASS;
	private $db =  DB ;
	private $connection;

	/**
	 * Database connection 		 
	 */
	private function connection()
	{			

		$connection = new PDO("mysql:host=". $this -> host .";db_name=". $this -> db , $this -> user , $this -> pass);
			
	}		


}
```
