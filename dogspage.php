<HTML>
<HEAD>
<TITLE>
Registered Dogs
</TITLE>
</HEAD>
<BODY bgcolor = ffffff >
<H2>Display Registered Dogs</H2>
<HR height=8>
<P>

<DIV>
<H3>Register New Dog</H3>
<FORM action="dogspage.php" method="post">
OwnerID: <input type="text" name="newDogOwnerID">
Name: <input type="text" name="newName">
Breed: <input type="text" name="newBreed"><br>
Age: <input type="text" name="newAge">
Gender: <input type="text" name="newGender">
Size: <input type="text" name="newSize"><br>
Weight: <input type="text" name="newWeight">
Note: <input type="text" name="newNote"><br>
<INPUT type="submit">
</FORM>
</DIV>

<DIV>
<FORM action="dogspage.php" method="post">
Deregister DogID: <input type="text" name="deregisterID">
<INPUT type="submit">
</FORM>
</DIV>

<?php
require "dogdaycareconfig.php";

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["newDogOwnerID"]))
{
    $nID = $_POST["newDogOwnerID"];
}
if (isset($_POST["newName"]))
{
    $nName = $_POST["newName"];
}
if (isset($_POST["newBreed"]))
{
    $nBreed = $_POST["newBreed"];
}
if (isset($_POST["newAge"]))
{
    $nAge = $_POST["newAge"];
}
if (isset($_POST["newGender"]))
{
    $nGender = $_POST["newGender"];
}
if (isset($_POST["newSize"]))
{
    $nSize = $_POST["newSize"];
}
if (isset($_POST["newWeight"]))
{
    $nWeight = $_POST["newWeight"];
}
if (isset($_POST["newNote"]))
{
    $nNote = $_POST["newNote"];
}

if (isset($_POST["newDogOwnerID"]))
{
   $statement = "INSERT INTO `dogs`(`dog_id`, `owner_id`, `name`, `breed`, `age`, `gender`, `size`, `weight`, `note`) VALUES ('','$nID','$nName','$nBreed','$nAge','$nGender','$nSize','$nWeight','$nNote')";

   $result = $conn->query($statement);

   mysqli_close($conn);
}
?>

<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["deregisterID"]))
{
    $deregID = $_POST["deregisterID"];

    $stmnt = "DELETE FROM dogs WHERE dog_id=$deregID";
    $result = $conn->query($stmnt);
}

mysqli_close($conn);
?>

<TABLE Border="1">
<TR>

<?php

/* Connect to MySQL */
$mysqli = new mysqli($host, $user, $password, $dbname, $port);


/* Check connection error*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$result = $mysqli->query("Select * from dogs");
/* Fetch and display the attribute names */
while ($field=$result->fetch_field())
{
   echo "<TH>";
   echo "$field->name";
   echo "</TH>";
}
echo "</TR>";

/* Fetch and displays each row of $result */ 
if($result)
   while($row=$result->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result->field_count; $i++)
      {
         echo "<TD> $row[$i] </TD>";
      }
      echo "</TR>\n";
   }

$result->close();
$mysqli->close();
?>

</TABLE>

<BR>
<BR>
<CENTER>
<a href = dogdaycare.html>Return to Main Web Page</a>
</CENTER>
</BODY>
</HTML>