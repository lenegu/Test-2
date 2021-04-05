
<table border="1" width="30%" cellpadding="5">
<?php
$connection = new PDO('mysql:host=localhost;dbname=fp;charset=utf8','root');
$statement = $connection->query("SELECT * FROM `users` WHERE bdate LIKE '%1990%'");
while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   		echo "<th>",$row["id"],"</th>";
        echo "<th>",$row["firt_name"],"</th>";
        echo "<th>",$row["last_name"],"<tr>";
}
?>

