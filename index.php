<?php
    include 'header.php';
    $db = mysqli_connect("localhost", "root", "loofti88", "site");
    $Settings = $db->query('SELECT * FROM cms_configuration')->fetch_object();
    echo 'Herzlich Willkommen auf-Seite.';
?>  
    
	</body>
</html>