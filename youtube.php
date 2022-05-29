<?php 

$dati = array(
    'part' => 'snippet',
    'q' => 'softair',
    'type' => 'video',
    'key' => 'AIzaSyCcRHhbftQLYJJjfQf0829qgOY6XeMPxy8',
    'maxResults' => 12

);



$url = "https://www.googleapis.com/youtube/v3/search?".http_build_query($dati);
$decode=json_decode(file_get_contents($url),true);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_POSTFIELDS, $dati);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$resp=curl_exec($curl);
echo"
<nav>
 
    
    <div  class='menu reveal1'>
    
        <div class='mediumtext'> <a href='PaginaPrincipale.php'> TORNA ALLA HOME </a></div>
       
         ";
          
  echo"      </div>

</nav>


<div class='video'>

<div class='video__content' >

        <h1 class='bigtext'>  VIDEO SOFTAIR</h1>

  
     
       
    </div>
<video autoplay muted loop id='myvideo'> <source src='youtube2.mp4' type='video/mp4'> </video>
</div>"; 

foreach($decode['items'] as $json){
//$img=$json ['snippet']['thumbnails']['high']['url'];

$video_id=$json['id']['videoId'];
$url_video="https://www.youtube.com/embed/".$video_id;


echo "    

<iframe  src='$url_video' ></iframe> 
       
      ";
}





curl_close($curl);





?>

<html>
    <head>   <script src="https://apis.google.com/js/api.js"></script>
    <link rel="stylesheet" href="youtube.css"> </link>
</head>
    <body>
       

    </body>
</html>