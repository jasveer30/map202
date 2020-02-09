<html>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
echo 'hello, your faviourte fruite is '.$_POST['fruits'].' good choice!';
}
?>
<form action="form.php" method="post">
Name: <input type="text" name="name"><br>
<br>
Address: <input type="text" name="address"><br>
<br>
E-mail: <input type="text" name="email"><br>
<br>

<?php
$servername = "remotemysql.com";
$username = "tDAhg3QU3a";
$password = "aJak84zpGF";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tDAhg3QU3a", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

$stmt = $conn->query('SELECT name FROM fruits');
echo "Favourite Fruites <select name='fruits' >";
while ($row = $stmt->fetch())
{
echo "<option value=".$row['name'].">".$row['name']."</option>";
}
echo "</select>";

}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

<input type="submit">
</form>

</body>
</html>
