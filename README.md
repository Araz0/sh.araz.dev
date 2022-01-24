# Dashboard
This Document will serve as a Log and To-do page of the project until its done.

## ToDo:
[x] Design the DB
[x] Create the DB
[ ] Add OAuth. ?
[ ] Design the Page


### config.php
`
if ($_SERVER['HTTP_HOST'] == 'your.site.com') {
    $database = "database";
    $username = "username";
    $password = "password";
} else {
    $database = "database";
    $username = "username";
    $password = "password";
}
$dsn = "mysql:host=localhost;dbname=$database;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;

}catch (PDOException $e){
    die ("Problem connecting to database $DB_NAME as $DB_USER: " . $e->getMessage() );
}
?>
`