<?php
try {
    $conn = new PDO("sqlite:jogadores.sqlite");
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<?php
phpinfo();
?>