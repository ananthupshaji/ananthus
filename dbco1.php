<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);

mysql_select_db('db5');

$no = $_GET["bookno"];
$titl = $_GET["title"];
$autho = $_GET["author"];
$editi = $_GET["edition"];
$publi = $_GET["publisher"];

mysql_query("insert into book values($no,'$titl','$autho',$editi,'$publi')");
echo "1 row inserted";
/*$result = mysql_query("select * from book");
while($row = mysql_fetch_row($result))
{
echo "book no:".$row[0]."<br>"."title:".$row[1]."<br>"."author:".$row[2]."<br>"."edition:".$row[3]."<br>"."publisher:".$row[4]."<br><hr>";
}*/


 ?>