Hello World, these are my favorite books: <br>
<?php
// Connection data (server_address, database, name, poassword)
$hostdb = 'mariadb';
$namedb = 'test';
$userdb = 'root';
$passdb = 'password';

try {
  // Connect and create the PDO object
  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

  // Define and perform the SQL SELECT query
  $sql = "SELECT * FROM `book`";
  $result = $conn->query($sql);

  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {
    $cols = $result->columnCount();           // Number of returned columns

    echo 'Number of returned columns: '. $cols. '<br />';

    // Parse the result set
    foreach($result as $row) {
      echo $row['id']. ' - '. $row['name']. ' - '. $row['author']. '<br />';
    }
  }
}
catch(Exception $e) {
  var_dump($e);
}
?>
