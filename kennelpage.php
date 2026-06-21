<?php
    require "dogdaycareconfig.php";

    $conn = new mysqli($host, $user, $password, $dbname, $port);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = " SELECT dog_id, name FROM dogs WHERE dog_id NOT IN ( SELECT d.dog_id FROM dogs d JOIN kennel k USING(dog_id) ); ";
    $result4 = $conn->query($sql);
    mysqli_close($conn);
?>

<HTML>
<HEAD>
<TITLE>Test PHP-MySQL-2018</TITLE>
</HEAD>
<BODY bgcolor = ffffff>
<CENTER>
<DIV><H2>Display Kennel Status</H2></DIV>
<DIV>
<FORM action="kennelpage.php" method="post">
DogID: <input type="text" name="dogid"><br>
KennelID: <input type="text" name="kennelid"><br>
<INPUT type="submit">
</FORM>
</DIV>

<DIV>
<FORM action="kennelpage.php" method="post">
KennelID to clear: <input type="text" name="clearkennelid"><br>
<INPUT type="submit">
</FORM>
</DIV>

</CENTER>

<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* check if dogid and kennelid have been entered in the form */
if (isset($_POST["dogid"]))
{
    $dogid = $_POST["dogid"];
}
if (isset($_POST["kennelid"]))
{
    $kennelid = $_POST["kennelid"];
}

$ownerid = "";

if (isset($_POST["dogid"]))
{
    /* if dogid has been set, find the owner id */
    $statement1 = "SELECT owner_id FROM dogs WHERE dog_id = $dogid";

    $result = $conn->query($statement1);
    $row = $result->fetch_row();
       if ($row[0] > 0)
        {
            $ownerid = $row[0];
        }

   if( isset($_POST["kennelid"]) )
   {
    $statement2 = "UPDATE kennel SET occupied=1, dog_id=$dogid, owner_id=$ownerid WHERE kennelslot_id=$kennelid";
    $result2 = $conn->query($statement2);
   }
    mysqli_close($conn);
}
?>

<?php

$conn = new mysqli($host, $user, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/* check if clearkennelid has been set */
if (isset($_POST["clearkennelid"]))
{
    $clearkennelid = $_POST["clearkennelid"];
    $clearownerid = 'NULL';
    $cleardogid = 'NULL';
    $stmnt = "UPDATE kennel SET occupied=0, dog_id=$cleardogid, owner_id=$clearownerid WHERE kennelslot_id=$clearkennelid";
    $result3 = $conn->query($stmnt);

    mysqli_close($conn);
}
?>

<?php

/* Connect to MySQL */
$mysqli = new mysqli($host, $user, $password, $dbname, $port);


/* Check connection error*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


/* Access Kennel table */
$result = $mysqli->query("SELECT k.dog_id, k.kennelslot_id, name FROM kennel k JOIN dogs USING(dog_id) Where occupied = 1");

?>
<CENTER>
<DIV style = " position:relative; left:150px; " >
</DIV>
<DIV>
<TABLE Border="1" >
<CAPTION>Occupied Kennels</CAPTION>
<TR>

<?php
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

<?php

/* Connect to MySQL */
$mysqli = new mysqli($host, $user, $password, $dbname, $port);


/* Check connection error*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


/* Access Kennel table */
$result = $mysqli->query("SELECT kennelslot_id FROM kennel Where occupied = 0");

?>
</TR>
</DIV>
<CENTER>
<DIV>
<TABLE Border="1">
<CAPTION>Unoccupied Kennels</CAPTION>
<TR>
<?php
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
</DIV>
</CENTER>

<BR><BR>
<CENTER>
<a href = dogdaycare.html>Return to Main Web Page</a>
</CENTER>
</BODY>
</HTML>
