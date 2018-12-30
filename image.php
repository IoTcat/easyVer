<?php

header('content-type:image/png');

//header('Content-type: text/json');


/************END::receive request ***************//***var::$key***/


$img=rand(1,10);



/*************img display***************/


$filename="img/$img.png";

header( "Content-Length: ".filesize($filename));

ob_clean();

echo file_get_contents($filename);

/*************END::img display***************/

?>