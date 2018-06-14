<?php

echo date("Y-m-d H:i:s").'<br />';

try{
    $con = new PDO('mysql:host:mysql;port:3306;dbname=mysql;charset=utf8','root','123456');
} catch(PDOException $e) {
    echo "Connect failed:".$e->get_message();     
}
$con->exec('set ');
$sql = $con->query("select User,Host from `user` where 1");
while($result = $sql->fetch(PDO::FETCH_ASSOC)){
    echo $result['User'].$result['Host']
}
