<!DOCTYPE html><html lang="de">
<head>
   <meta charset="utf-8">
   <title>Antwort des Webservers</title>
   <link rel="stylesheet" href="js4.css">
</head>
<body><p>
<!--Es handelt sich um ein Standard-HTML-Document. Der PHP-Code
ist in einem Container zwischen <?php und ?> eingebettet. Das 
Sprachelemt echo dient zur Ausgabe auf dem Bildschirm. Die Punkte
verbinden die einzelnen Textteile miteinander, wie das Pluszeichen
in JavaScript.-->
<?php
   echo "Eintrag: " . htmlentities($_POST["eintrag"]) . "<br>";
?>
<!--Die Funktion htmltities() dient zur Absicherung vor der Wirkung
von Schadcode, den ein böswilliger Nutzer mithilfe des Eingabefelds 
zum Webserver übertragen könnte.-->
</p>
</body>
</html>
