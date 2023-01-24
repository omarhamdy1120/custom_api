<?php include_once("token_config.php"); ?>
<?php
    $queryy = "SELECT * FROM token ";
    $result = mysqli_query($conc,$queryy);
    while($data = mysqli_fetch_array($result) ){
        $hash = $data['hash'];
        $hashPlus = $data['hashPlus'];

      //if token valid

      if(isset($_GET[$data['hash']])){
        include_once("db_config.php");
          $sql ="SELECT * FROM btc ORDER BY id DESC LIMIT 1";
          $result =mysqli_query($conn , $sql);
          $json_array = array();
          while ($row = mysqli_fetch_assoc($result)){
              $json_array[]=$row;
          }
          //write to json file
          $fp = fopen('btc.json', 'w');
          fwrite($fp, json_encode($json_array));
          header("Location: http://localhost/task/btc.json");
          fclose($fp);
          echo "<h2>Json File Downloaded</h2>";

      // if token invalid

      }else{
        //display something
        echo "Sorry Invalid Token (Contact to Us to take token)";
        echo "<h5>DahabMasr</h5>";
      }
}
