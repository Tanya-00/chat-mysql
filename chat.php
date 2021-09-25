<?php 
$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);

class connect {
    public function connection() {
        $user = 'Taki';
        $password = 'Uh3ge8ema';
        $dbname = 'db1';
        $host = 'localhost';
        $charset = 'utf8';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset,$user,$password");

    }
    
}

$login=$_GET['login'];
$password=$_GET['password'];

if ($login != null && $password != null) {
    $data = 'SELECT LOGIN AND PASSWORD FROM USER';
    $result = $pdo-> query($data);
    foreach ($result as $row){
        if ($login === $row['login'] && $password === $row['password']) {
        $messages = $_GET['message'];
        $date = date('Y-m-d H:i:s');
        $addMess = "INSERT INTO MESSAGES (login, message, date VALUES($login, $message, $date))";
        $pdo->exec($addMess);
        }
    }

}
else {
    echo "There's a mistake somewhere";
}

$datamess = 'SELECT FROM MESSAGES';
$result = $pdo-> query($datamess);
$mes = $result->fetchAll();

echo $twig->render('nav.twig', array('messagges'=>$mes));
?>
