<?php  
//identificamos la url
$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
//utilizar el conte
$respuesta=file_get_contents($url,false,stream_context_create($opciones));
//decodificar
$objRespuesta=json_decode($respuesta);
//imprimir 

foreach($objRespuesta->list as $video){

    //print_r($video->title);
    //print_r($video->channel);
}

?>
<ul> <!--se leemos como lista-->
    <?php  foreach($objRespuesta->list as $video){?>
         <!--se murstra en un video-->
        <li> <?php echo ($video->title);?> <?php echo ($video->channel);?></li>
     <?php } ?>    
</ul>    
      


 
