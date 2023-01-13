<?php

Class database {

  private $hostname = "Localhost";
  private $database ="TIENDA_ONLINE";
  private $username ="root";
  private $password ="1234";
  private $charset ="utf8";
  
  function conectar()
  {
    try{
    $conexion = "mysql:host=". $this->hostname . "; dbname=". $this->database; . "; charset=". $this->charset;
    $options=[
        PDO::ATTR_ERRORMODE => PDO::ERRORMODE_EXEPTION,
        PDO::ATTR_EMULATE_PREPARES => FALSE
    ];

   $pdo = new PDO($this->conexion, $this->username , $this->password , $options);
   
   return $PDO;
}catch(PDOExepction $e){
echo "error conexion" . $e->getMessage();
exit;
}
  }


}

?>