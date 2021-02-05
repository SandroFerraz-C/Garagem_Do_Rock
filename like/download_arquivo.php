<html>
<body>
<a href="java script:history.back(-1)">">Voltar</a>
<?php
//Abre o contador de downloads e acrescenrta em 1
$fp = fopen("contador_arquivo.txt","r");
$visitas = fgets($fp,255);
$visitas++;
fclose($fp);
$fp = fopen("contador_arquivo.txt","w+");
fwrite($fp, $visitas);
fclose($fp);
?>
<script language="JavaScript">
//Redireciona para o arquivo de download
location.href="img/piano.jpg";
</script>

</body>
</html>