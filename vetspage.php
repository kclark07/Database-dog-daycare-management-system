<HTML>
<HEAD>
<TITLE>
Vet Information
</TITLE>
</HEAD>
<BODY bgcolor = ffffff >
<CENTER>
<H2>Display Health Records and Vet Information </H2>
<CENTER>
<HR height=8>
<P>

<?php

require "dogdaycareconfig.php";

/* Connect to MySQL */
$mysqli = new mysqli($host, $user, $password, $dbname, $port);


/* Check connection error*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>

<form method="post">
<label><b>Select Dog: </b></label>

<?php
if($r_set = $mysqli->query("SELECT * from dogs")){

echo "<select dog_id=name name=name class='form-control' style='width:100px;'>";
while ($row = $r_set->fetch_assoc()) {

echo "<option value=$row[dog_id]>$row[name]</option>";

}
echo "</select>";
}else{
echo $connection->error;
}

?>
</select>
<input type="submit" name="submit" value="Select"/>
</form>

<TABLE Border="1">
<TR>
<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (isset($_POST["submit"]))
{
    $dogid = $_POST["name"];
}

if(isset($_POST['submit'])){

echo "Dog Informaton";
$statement2 = "SELECT * FROM dogs WHERE dog_id = $dogid";
$result2 = $conn->query($statement2);

/* print the dog field */
while ($field=$result2->fetch_field())
{
   echo "<TH>";
   echo "$field->name";
   echo "</TH>";
}
echo "</TR>";
if($result2)
   while($row=$result2->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result2->field_count; $i++)
      {
         echo "<TD> $row[$i] </TD>";
      }
      echo "</TR>\n";
   }



$result2->close();
$conn->close();

}
?>

<br>
<TABLE Border="1">
<TR>

<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (isset($_POST["submit"]))
{
    $dogid = $_POST["name"];
}

if(isset($_POST['submit'])){

echo "Health Informaton";
$statement3 = "SELECT * FROM health_record WHERE dog_id = $dogid";
$result3 = $conn->query($statement3);


 /* print the health records for the eslected dog */
while ($field=$result3->fetch_field())
{
   echo "<TH>";
   echo "$field->name";
   echo "</TH>";
}
echo "</TR>";
if($result3)
   while($row=$result3->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result3->field_count; $i++)
      {
         echo "<TD> $row[$i] </TD>";
      }
      echo "</TR>\n";
   }

$result3->close();
$conn->close();

}

?>

<br>
<TABLE Border="1">
<TR>
<br>
<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (isset($_POST["submit"]))
{
    $dogid = $_POST["name"];
}

if(isset($_POST['submit'])){

echo "Veterinarian Informaton";
$statement4 = "SELECT * FROM vetinfo WHERE vet_id =
                    (SELECT vet_id FROM health_record WHERE dog_id =
                    (SELECT dog_id FROM dogs WHERE dog_id = $dogid))";
$result4 = $conn->query($statement4);


 /* print the health records for the eslected dog */
while ($field=$result4->fetch_field())
{
   echo "<TH>";
   echo "$field->name";
   echo "</TH>";
}
echo "</TR>";
if($result3)
   while($row=$result4->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result4->field_count; $i++)
      {
         echo "<TD> $row[$i] </TD>";
      }
      echo "</TR>\n";
   }

$result4->close();
$conn->close();

}

?>
</TABLE>

<br>
<br>
<br>

<form method="post">
<label><b>Select Veterinarian: </b></label>

<?php
if($r_set = $mysqli->query("SELECT * from vetinfo")){

echo "<select vet_id=name name=name class='form-control' style='width:100px;'>";
while ($row = $r_set->fetch_assoc()) {

echo "<option value=$row[vet_id]>$row[fname] $row[lname], $row[business]</option>";

}
echo "</select>";
}else{
echo $connection->error;
}

?>
</select>
<input type="submit" name="select" value="Select"/>
</form>

<TABLE Border="1">
<TR>
<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (isset($_POST["select"]))
{
    $vetid = $_POST["name"];
}

if(isset($_POST['select'])){

echo "Vet Information";
$statement6 = "SELECT * FROM vetinfo WHERE vet_id = $vetid";
$result6 = $conn->query($statement6);

while ($field=$result6->fetch_field())
{
   echo "<TH>";
   echo "$field->name";
   echo "</TH>";
}
echo "</TR>";
if($result6)
   while($row=$result6->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result6->field_count; $i++)
      {
         echo "<TD> $row[$i] </TD>";
      }
      echo "</TR>\n";
   }


$result6->close();
$conn->close();

}
?>


<TABLE Border="1">
<TR>
<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (isset($_POST["select"]))
{
    $vetid = $_POST["name"];
}

if(isset($_POST['select'])){

echo "Dogs associated with this Vet";
$statement7 = "SELECT dog_id, name FROM dogs WHERE dog_id IN
                (SELECT dog_id FROM health_record WHERE vet_id = $vetid)";
$result7 = $conn->query($statement7);

while ($field=$result7->fetch_field())
{
   echo "<TH>";
   echo "$field->name";
   echo "</TH>";
}
echo "</TR>";
if($result7)
   while($row=$result7->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result7->field_count; $i++)
      {
         echo "<TD> $row[$i] </TD>";
      }
      echo "</TR>\n";
   }


$result7->close();
$conn->close();

}
?>



</TABLE>
</DIV>
</CENTER>
<BR>
<BR>
<CENTER>
<a href = dogdaycare.html>Return to Main Web Page</a>
</CENTER>
</BODY>
</HTML>