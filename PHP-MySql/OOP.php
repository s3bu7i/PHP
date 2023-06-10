//OOOOPPPPP

<?php

use function Symfony\Component\DependencyInjection\Loader\Configurator\abstract_arg;

class User{
    public $name;
    public $login;
    public $password;
    #Asagidaki constructor yazilmis versiyasdodor 
    #public function __construct($name, $login, $password)
    public function __construct($name = "", $login = "", $password = ""){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
    #datalari gostermek wcwn kod qaaa
    public function __clone(){
        $this->name = "Guest";
        $this->login = "Guest";
        $this->password = "qwerty";
    }
    public function showInfo(){
        echo "Name: ". $this->name."<br>";
        echo "Login: ". $this->login."<br>";
        echo "Password: ". $this->password."<br>";
    }

}

#try except falan qaaa burda
try {
    //User sınıfından bir örnek oluşturma (tüm değişkenler boş)
    $user = new User();
}
//helemi oluf qaqa
catch(Exception $e){
    echo "Exception: ".$e->getMessage();
}




#varislikle bagli class numunesi
class SuperUser extends User{
    public $role;

    public function __construct( $name = "", $login = "", $password = "", $role = ""){
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }
    public function showInfo(){
        echo "Name: ".$this->name."<br>";
        echo "Login: ".$this->login."<br>";
        echo "Password: ".$this->password."<br>";
        echo "Role: ".$this->role."<br>";
    }

    public function showRole(){
        echo "Role: ".$this->role."<br>";
    }

}
#varsisik qaaaaa
$superUser = new SuperUser("Jhon", "Nigaaa", "12627384", "admin");
$superUser->showInfo();
$superUser = new SuperUser();
$superUser->showInfo();
$superUser->showRole();


// User sınıfının üç örneğini yaratma
$user1 = new User("Jhon", "Joneehhh", "453422");
$user2 = new User("Sabuhi", "Gasimzada", "435637859");
$user3 = new User("ASDF", "Nigaaa", "43563");

$user1->name = "Nigaaa";
$user1->login = "Dostumburasibiharika";
$user1->password = "3343443";

#clone versiyada cixan netice
$user4 = clone $user1;

#melumatlari print etmek ucundur
$user1->showInfo();
echo "<br>";
$user2->showInfo();
echo "<br>";
$user3->showInfo();
echo "<br>";
$user4->showInfo();

?>

------------------------------------------------------------------------------------------------------------------------------------------

<?php
//bu variant 2 dendie ama dostum burada ikincini kommet kimi yazacam icine bu bir bomba fiki r adamikm 
class User {
    const INFO_TITLE = "Isdifadeci melumatlari: ";

    public $name;
    public $login;
    public $password;

    public function showTitle(){
        echo self::INFO_TITLE;
    }
    public function showInfo(){
        $this->showTitle();
        echo "<br>";
        echo "Name: ".$this->name."<br>";
        echo "Login: ".$this->login."<br>";
        echo "Password: ".$this->password."<br>";
    }
}

$user = new User();
$user->name = "John";
$user->login = "NIgaa";
$user->password = "50404040";

echo User::INFO_TITLE;
$user->showtitle();
echo "<br>";
$user->showInfo();

?>
----------------------------------------------------------------------------------<%- 
// abstarct klass ve interface  haqqinda numune ama digerleri ile eyni bir seye benzer 

<?php
interface ISuperUser{
    public function getInfo();
}
class SuperUser implements ISuperUser{
    public $name;
    public $login;
    public $password;
    public $role;
    public function getInfo() {
        $info = array(
            'Name' => $this->name,
            'Login' => $this->login,
            'Password' => $this->password,
            'Role' => $this->role
        );

        return $info;
    }
// interface bitir burada
}
$superUser = new SuperUser();
$superUser->name = "John Doe";
$superUser->login = "johndoe";
$superUser->password = "qwerty";
$superUser->role = "admin";

$result = $superUser->getInfo();
foreach ($result as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>


abstract class AUser{
    abstract public function showInfo();
}
class User extends AUser{
    const INFO_TITLE = "isdifadeci melumatlari: ";
    public $name;
    public $login;
    public $password;

    public function showInfo(){
        $this->showTitle();
        echo "<br>";
        echo "Name".$this->name."<br>";
        echo "Login".$this->login."<br>";
        echo "Password".$this->password."<br>";
    }
    public function showInfo(){
        echo self::INFO_TITLE;
    }
}
$user = new User();
$user->name = "John";
$user->login = "OAIHFIADFI";
$user->password = "qwerty";

$user->showInfo(); // Output using showInfo() method

?>

<?php
class User {
    public static $userCount = 0;
    
    public function __construct() {
        self::$userCount++;
    }
}

class SuperUser extends User {
    public static $superUserCount = 0;
    
    public function __construct() {
        parent::__construct();
        self::$superUserCount++;
    }
}

$user1 = new User();
$user2 = new User();
$user3 = new User();

$superUser1 = new SuperUser();
$superUser2 = new SuperUser();

echo "User count: " . User::$userCount . "<br>";
echo "SuperUser count: " . SuperUser::$superUserCount . "<br>";
?>

// Daxil olunan parametri obyekt formasında qəbul edən checkObject() funksiyası yazın

<?php
function checkObject($object){
    if($object instanceof SuperUser){
        echo "The current user has administrator privileges.<br>";
    } elseif ($object instanceof User) {
        echo "The current user has regular privileges.<br>";
    } else {
        echo "The current user is of unknown type.<br>";
    }
}
$user = new User();
$superUser = new SuperUser();

checkObject($user); // The current user has regular privileges.
checkObject($superUser); // The current user has administrator privileges.

$unknownObject = new stdClass();
checkObject($unknownObject); // The current user is of unknown type.
?>

<?php 
// User.class.php
class User {
    // Class implementation goes here
}

// SuperUser.class.php
class SuperUser {
    // Class implementation goes here
}

// AUser.class.php
abstract class AUser {
    // Class implementation goes here
}

// ISuperUser.interface.php
interface ISuperUser {
    // Interface definition goes here
}

function __autoload($className) {
    $fileName = $className . '.class.php';
    if (file_exists($fileName)) {
        require_once($fileName);
    }
}

// Include the necessary class and interface files
__autoload('User');
__autoload('SuperUser');
__autoload('AUser');
__autoload('ISuperUser');

// Start using the classes and interfaces
$user = new User();
$superUser = new SuperUser();
?>