<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
echo "<p style='color:blue'>Form has been submitted</p>";
die;
}
?>
<form method='POST'>


<html>
<head>
<title>LAB 3</title>
</head>

<body>
<h2>
Student Data
</h2>




<form>
<label for ="Number">Phone Number</label>
<select  Phone Number="Phone Number">

 
<?php
$dbhost = "remotemysql.com";
    $dbname = 'tDAhg3QU3a';
    $dbuser = 'tDAhg3QU3a';
    $dbpass = 'aJak84zpGF';
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$query = "SELECT * FROM Class";
     $stmt = $conn->prepare($query);
     $stmt->execute();

     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $child)
{
echo "<option value='".$child["phone"]."'>".$child["phone"]."</option>";
}
?>
 </select>
<br><br>
<br>
Student Name<input type="text" name="Name" required placeholder="student name"><br><br>
Adress<input type="text" name="address" required placeholder="student address"><br><br>
<input type="submit" value="Submit" />
</form>
</body>
</html>

