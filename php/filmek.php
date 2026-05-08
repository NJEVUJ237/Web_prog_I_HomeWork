<?php
require_once 'db_config.php';

try {
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'GET') {
        $statement = "SELECT * FROM filmek"; 
        $result = $dbh->query($statement);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }
    
    // Törlés kezelése
    if ($method == 'DELETE' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $statement = "DELETE FROM filmek WHERE id = :id";
        $stmt = $dbh->prepare($statement);
        $stmt->execute(['id' => $id]);
        echo json_encode(["message" => "Törölve"]);
    }
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>