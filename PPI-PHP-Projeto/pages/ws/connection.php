<?php
try {
    $conn = new PDO("sqlite:../../database/Tiro_ao_Alvo.sqlite");
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<?php
phpinfo();
?>