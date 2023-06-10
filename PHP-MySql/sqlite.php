<?php
// IGbookDB interface
interface IGbookDB {
    public function connect();
    public function disconnect();
}

// GbookDB class
class GbookDB implements IGbookDB {
    const DB_NAME = 'gbook.db';
    private $_db;

    public function __construct() {
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }

    public function connect() {
        $this->_db = new PDO('sqlite:' . self::DB_NAME);
        // Additional database connection configuration if needed
    }

    public function disconnect() {
        $this->_db = null;
    }
}

// Create an instance of GbookDB
$gbook = new GbookDB();

// Test the code by running it in a browser and checking if the gbook.db file is created

// Delete the gbook.db file manually

// IGbookDB interface
interface IGbookDB {
    public function connect();
    public function disconnect();
}

// GbookDB class
class GbookDB implements IGbookDB {
    const DB_NAME = 'gbook.db';
    private $_db;

    public function __construct() {
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }

    public function connect() {
        if (!file_exists(self::DB_NAME)) {
            // Create a new database and run SQL operations to create the table
            $this->_db = new PDO('sqlite:' . self::DB_NAME);
            $sql = file_get_contents('gboook.sql'); // Assuming gboook.sql contains the necessary SQL operations
            $this->_db->exec($sql);
        } else {
            // Connect to the existing database
            $this->_db = new PDO('sqlite:' . self::DB_NAME);
        }
        // Additional database connection configuration if needed
    }

    public function disconnect() {
        $this->_db = null;
    }
}

// Create an instance of GbookDB
$gbook = new GbookDB();

// Test the code by running it in a browser and checking if the gbook.db file is created

// Delete the gbook.db file manually


// IGbookDB interface
interface IGbookDB {
    public function connect();
    public function disconnect();
    public function savePost($name, $message, $date, $ip);
}

// GbookDB class
class GbookDB implements IGbookDB {
    const DB_NAME = 'gbook.db';
    private $_db;

    public function __construct() {
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }

    public function connect() {
        if (!file_exists(self::DB_NAME)) {
            // Create a new database and run SQL operations to create the table
            $this->_db = new PDO('sqlite:' . self::DB_NAME);
            $sql = file_get_contents('gboook.sql'); // Assuming gboook.sql contains the necessary SQL operations
            $this->_db->exec($sql);
        } else {
            // Connect to the existing database
            $this->_db = new PDO('sqlite:' . self::DB_NAME);
        }
        // Additional database connection configuration if needed
    }

    public function disconnect() {
        $this->_db = null;
    }

    public function savePost($name, $message, $date, $ip) {
        $stmt = $this->_db->prepare('INSERT INTO msgs (name, message, date, ip) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $message, $date, $ip]);
    }
}

// Create an instance of GbookDB
$gbook = new GbookDB();

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

// Get the user's IP address
$userIP = $_SERVER['REMOTE_ADDR'];

// Example usage of the savePost() method
$gbook->savePost('John Doe', 'Hello, world!', $currentDateTime, $userIP);



// IGbookDB interface
interface IGbookDB {
    public function connect();
    public function disconnect();
    public function savePost($name, $message, $date, $ip);
    public function getAll();
}

// GbookDB class
class GbookDB implements IGbookDB {
    const DB_NAME = 'gbook.db';
    private $_db;

    public function __construct() {
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }

    public function connect() {
        // Connect to the database
        $this->_db = new PDO('sqlite:' . self::DB_NAME);
        // Additional database connection configuration if needed
    }

    public function disconnect() {
        $this->_db = null;
    }

    public function savePost($name, $message, $date, $ip) {
        $stmt = $this->_db->prepare('INSERT INTO msgs (name, message, date, ip) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $message, $date, $ip]);
    }

    public function getAll() {
        $stmt = $this->_db->query('SELECT * FROM msgs ORDER BY id ASC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Create an instance of GbookDB
$gbook = new GbookDB();

// Example usage of the getAll() method
$allPosts = $gbook->getAll();

// Print the result
foreach ($allPosts as $post) {
    echo $post['name'] . ' - ' . $post['message'] . ' - ' . $post['date'] . ' - ' . $post['ip'] . '<br>';
}



// IGbookDB interface
interface IGbookDB {
    public function connect();
    public function disconnect();
    public function savePost($name, $message, $date, $ip);
    public function getAll();
    public function deletePost($postId);
}

// GbookDB class
class GbookDB implements IGbookDB {
    const DB_NAME = 'gbook.db';
    private $_db;

    public function __construct() {
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }

    public function connect() {
        // Connect to the database
        $this->_db = new PDO('sqlite:' . self::DB_NAME);
        // Additional database connection configuration if needed
    }

    public function disconnect() {
        $this->_db = null;
    }

    public function savePost($name, $message, $date, $ip) {
        $stmt = $this->_db->prepare('INSERT INTO msgs (name, message, date, ip) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $message, $date, $ip]);
    }

    public function getAll() {
        $stmt = $this->_db->query('SELECT * FROM msgs ORDER BY id ASC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletePost($postId) {
        $stmt = $this->_db->prepare('DELETE FROM msgs WHERE id = ?');
        $stmt->execute([$postId]);
    }
}

// Create an instance of GbookDB
$gbook = new GbookDB();

// Example usage of the deletePost() method
$gbook->deletePost(1); // Delete the post with ID 1




// IGbookDB interface
interface IGbookDB {
    public function connect();
    public function disconnect();
    public function savePost($name, $message, $date, $ip);
    public function getAll();
    public function deletePost($postId);
}

// GbookDB class
class GbookDB implements IGbookDB {
    const DB_NAME = 'gbook.db';
    private $_db;

    public function __construct() {
        try {
            $this->connect();
        } catch (PDOException $e) {
            echo 'Database connection error: ' . $e->getMessage();
            // Handle the error or rethrow the exception
        }
    }

    public function __destruct() {
        $this->disconnect();
    }

    public function connect() {
        try {
            // Connect to the database
            $this->_db = new PDO('sqlite:' . self::DB_NAME);
            // Additional database connection configuration if needed
        } catch (PDOException $e) {
            throw new Exception('Database connection error: ' . $e->getMessage());
        }
    }

    public function disconnect() {
        $this->_db = null;
    }

    public function savePost($name, $message, $date, $ip) {
        try {
            $stmt = $this->_db->prepare('INSERT INTO msgs (name, message, date, ip) VALUES (?, ?, ?, ?)');
            $stmt->execute([$name, $message, $date, $ip]);
        } catch (PDOException $e) {
            throw new Exception('Error saving the post: ' . $e->getMessage());
        }
    }

    public function getAll() {
        try {
            $stmt = $this->_db->query('SELECT * FROM msgs ORDER BY id ASC');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Error retrieving posts: ' . $e->getMessage());
        }
    }

    public function deletePost($postId) {
        try {
            $stmt = $this->_db->prepare('DELETE FROM msgs WHERE id = ?');
            $stmt->execute([$postId]);
        } catch (PDOException $e) {
            throw new Exception('Error deleting the post: ' . $e->getMessage());
        }
    }
}

// Create an instance of GbookDB
try {
    $gbook = new GbookDB();

    // Example usage of the savePost() method
    $gbook->savePost('John Doe', 'Hello, world!', '2023-06-08', '127.0.0.1');

    // Example usage of the getAll() method
    $posts = $gbook->getAll();
    print_r($posts);

    // Example usage of the deletePost() method
    $gbook->deletePost(1); // Delete the post with ID 1
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}





// Verilerin filtrelenmesi ve doğruluğunun kontrol edilmesi
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$date = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

if (empty($name) || empty($message)) {
    $errMsg = "Eyy, qonaq kitabımı sindırmaq istəyirsən?";
} else {
    try {
        $gbook->deletePost($postId); // deletePost() metodu çağırılıyor
        header("Location: gbook.php"); // Sayfanın yeniden yönlendirilmesi
        exit;
    } catch (Exception $e) {
        $errMsg = "Yazı silinərkən bir səhv baş verdi: " . $e->getMessage();
    }
}


try {
    $gbook->deletePost($postId); // deletePost() metodu çağırılıyor

    // Sorgunun doğruluğunu kontrol etme
    $affectedRows = $gbook->getAffectedRows();

    if ($affectedRows === 0) {
        $errMsg = "Məlumatı silərkən səhv baş vermişdir";
    } else {
        // Silme işlemi başarılı oldu
        // İstediğiniz işlemleri burada gerçekleştirebilirsiniz
    }
} catch (Exception $e) {
    $errMsg = "Yazı silinərkən bir səhv baş verdi: " . $e->getMessage();
}



<?php
require_once "GbookDB.class.php";

$gbook = new GbookDB();
$errMsg = "";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Qonaq kitabı</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <h1>Qonaq kitabı</h1>
    <?php
if (!empty($errMsg)) {
    echo $errMsg;
}
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        Adınız:<br />
        <input type="text" name="name" /><br />
        E-mail ünvanınız:<br />
        <input type="text" name="email" /><br />
        Mesajınız:<br />
        <textarea name="msg" cols="50" rows="5"></textarea><br />
        <br />
        <input type="submit" value="Göndər!" />

    </form>

    <?php
if (isset($_GET['delete'])) {
    require_once "deletepost.inc.php";
}

require_once "getall.inc.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
    require_once "savepost.inc.php";
}

?>

</body>

</html>



<?php
require_once "GbookDB.class.php";

$gbook = new GbookDB();
$errMsg = "";

$messages = $gbook->getAll();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Qonaq kitabı</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <h1>Qonaq kitabı</h1>
    <?php
if (!empty($errMsg)) {
    echo $errMsg;
}
?>

    <p>Yazıların sayı: <?php echo count($messages); ?></p>

    <?php foreach ($messages as $message): ?>
    <p>
        <?php echo $message['msg']; ?><br />
        <?php echo "Müəllif: " . $message['name'] . " - " . $message['email']; ?><br />
        <a href="?delete=<?php echo $message['id']; ?>">Yazını sil</a>
    </p>
    <?php endforeach; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        Adınız:<br />
        <input type="text" name="name" /><br />
        E-mail ünvanınız:<br />
        <input type="text" name="email" /><br />
        Mesajınız:<br />
        <textarea name="msg" cols="50" rows="5"></textarea><br />
        <br />
        <input type="submit" value="Göndər!" />

    </form>

</body>

</html>




<?php
/**
*	IGbookDB
*		qonaq kitabı ilə işləmək üçün lazım olan əsas metodları saxlayır
*/
interface IGbookDB{
	/**
	*	Qonaq Kitabına yeni yazı əlavə edirik
	*	
	*	@param string $name - istifadəçi adı
	*	@param string $email - istifadəçinin e-poçt ünvanı
	*	@param string $msg - istifadəçinin göndərdiyi tekst
	*	
	*	@return boolean - nəticə uğurlu/səhv
	*/
	function savePost($name, $email, $msg);
	
	/**
	*	Qonaq Kitabından bütün yazıların seçilməsi
	*	
	*	@return array - seçimin massiv şəklində nəticəsi
	*/
	function getAll();
	
	/**
	*	Qonaq Kitabından yazının silinməsi
	*	
	*	@param integer $id - silinən yazının identifikatoru
	*	
	*	@return boolean - nəticə uğurlu/səhv
	*/
	function deletePost($id);
	
}
?>


<?php
/* TAPŞIRIQ 1
- HTML formanın düzgün göndərildiyini yoxlayın
- Əgər düzgün deyilsə $errMsg  dəyişəninə "Formanın bütün sətirlərini doldurun!" sətir qiyməti mənimsədin
- Əgər düzdürsə, onda
	Alınan qiymətləri filtrdən keçirdin,
	savePost metodunu çağırın,
	Səhifədəki məlumatların təkrar göndərilməməsi üçün onu yenidən çağırın
*/

$errMsg = ""; // Səhv mesajı üçün boş sətir qiyməti

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// HTML formanın düzgün göndərildiyini yoxlayın
	if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["msg"])) {
		$errMsg = "Formanın bütün sətirlərini doldurun!";
	} else {
		// Alınan qiymətləri filtrdən keçirin
		$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		$msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_STRING);
		
		// savePost metodunu çağırın
		$result = $gbook->savePost($name, $email, $msg);
		
		// savePost metodunun başarılı olup olmadığını yoxlayın
		if (!$result) {
			$errMsg = "Məlumatı əlavə edərkən səhv baş vermişdir";
		}
		
		// Səhifədəki məlumatların təkrar göndərilməməsi üçün səhifəni yenidən yükləməyin
		header("Location: " . $_SERVER["PHP_SELF"]);
		exit();
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Qonaq kitabı</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <h1>Qonaq kitabı</h1>
    <?php
/* TAPŞIRIQ 2
- savePost metodunu çağırdıqdan sonra sorğunun düzgün olduğunu yoxlayın
- Əgər sorğu səhvdirsə onda $errMsg dəyişəninə "Məlumatı əlavə edərkən səhv baş vermişdir" sətirini mənimsədin
	Səhifənin yenidən yüklənməsini etmək LAZIM DEYİL
*/
if (!empty($errMsg)) {
	echo $errMsg;
}
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Adınız:<br />
        <input type="text" name="name" /><br />
        E-mail ünvanınız:<br />
        <input type="text" name="email" /><br />
        Mesajınız:<br />
        <textarea name="msg" cols="50" rows="5"></textarea><br />
        <br />
        <input type="submit" value="Göndər!" />
    </form>

    <?php
/*
TAPŞIRIQ 4
- Qonaq kitabındakı bütün yazıları göstərən getall.inc.php faylını çağırın
*/
?>

</body>

</html>













?>