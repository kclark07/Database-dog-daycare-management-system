<HTML>
<HEAD>
<TITLE>
Registered Owners
</TITLE>
</HEAD>
<BODY bgcolor = ffffff >
<H2>Display Registered Owners</H2>
<HR height=8>
<P>

<DIV>
<H3>Register New Owner</H3>
<FORM action="ownerspage.php" method="post">
First Name: <input type="text" name="newFName">
Last Name: <input type="text" name="newLName">
Address: <input type="text" name="newAddress"><br>
City: <input type="text" name="newCity">
State: <input type="text" name="newState">
Phone Number: <input type="text" name="newPhoneNumber"><br>
<INPUT type="submit">
</FORM>
</DIV>

<DIV>
<FORM action="ownerspage.php" method="post">
Deregister OwnerID: <input type="text" name="deregisterID">
<INPUT type="submit">
</FORM>
</DIV>

<?php
require "dogdaycareconfig.php";

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["newFName"]))
{
    $nFName = $_POST["newFName"];
}
if (isset($_POST["newLName"]))
{
    $nLName = $_POST["newLName"];
}
if (isset($_POST["newAddress"]))
{
    $nAddress = $_POST["newAddress"];
}
if (isset($_POST["newCity"]))
{
    $nCity = $_POST["newCity"];
}
if (isset($_POST["newState"]))
{
    $nState = $_POST["newState"];
}
if (isset($_POST["newPhoneNumber"]))
{
    $nPNum = $_POST["newPhoneNumber"];
}

if (isset($_POST["newFName"]))
{
   $statement = "INSERT INTO `owners`(`owner_id`, `fname`, `lname`, `address`, `city`, `state`, `phone`) VALUES ('','$nFName','$nLName','$nAddress','$nCity','$nState','$nPNum')";

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

    $stmnt = "DELETE FROM owners WHERE owner_id=$deregID";
    $result3 = $conn->query($stmnt);
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

$result = $mysqli->query("Select * from owners");
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