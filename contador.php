<?php 
 
$file = 'contador.txt'; // caminho para o arquivo de texto que armazena a contagem
$fh = fopen($file, 'r+');
$id = $_REQUEST['id']; // ID inserido na página
$lines = '';
while(!feof($fh)){
    $line = explode('||', fgets($fh));
    $item = trim($line[0]);
    if ( ! isset($line[1])) {
        $line[1] = null;
     }
    $num = trim($line[1]);
    if(!empty($item)){
        if($item == $id){
            $num++; // incrementa +1 na contagem
            echo $num;
            }
        $lines .= "$item||$num\r\n";
        }
    } 
file_put_contents($file, $lines);
fclose($fh);
