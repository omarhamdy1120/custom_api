<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!----------------- Script ----------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Price</title>

</head>

<body>
<div class="container">

        <ul id="output"></ul>
</div>

<?php
/*
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://www.equiti.com/api/rates/xauused/');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
$query = curl_exec($curl_handle);
curl_close($curl_handle);
echo $query;
*/
?>

<script>

fetch("https://www.equiti.com/api/rates/xauused/",{mode:'no-cors'})
.then(response =>{if (!response.ok)
  {throw new Error(response.statusText)}
   return response.json();})
    .then(data =>{console.log(data);
    })
    .catch(error =>{
          console.error(error);
    });


/*
var url ="https://www.equiti.com/api/rates/xauused/";
function repeatMe(){
 $.ajax({
  url: url,
  dataType: 'json',
  cache: true,
  timeout: 30000,
  success: function(data) {
        $('#output ul').append('<li>The feed loads fine');
        $('#output ul').empty();
        $.each(data.SYMBOL, function(i,data){ 

            $('#output ul').append('<li><h3>'+data.BID+'</h3><p>'+data.BID+'</p></li>');
            setTimeout(repeatMe, 5000);
        });
    },
    error: function(){
        $('#output ul').append('<li>Error');
        setTimeout(repeatMe, 5000);
    }
 });
}
*/
</script>

</body>
</html>