<!doctype html>

<html>
<head>
<h1>Login Page</h1><br>
<p> Please login to jh2199's Fintech Services</p><br>
</head>
<body>
<form method = "post">
<label for="username">Username: </label><br>
<input type ="text" name ="Username"><br>
<label for="Password"> Pa
ssword: </label><br>
<input type ="text" name="Password"><br>
<br><input type ="submit" value="Submit">
</form>
</body>
</html>





<?php

echo "<h1>Your Details with jh2199's Fintech</h1>";

   echo "<table border='1' style='float: left; margin-left: 20px'>";
   echo "<tr><th>Username</th><th>Id</th><th>Balance</th><th></th></tr>";

   foreach ($Data as $item) {
      echo "<tr>";
      echo "<td>" . $item->CID . "</td>";
      echo "<td>" . $item->username . "</td>";
      echo "<td>" . $item->Balance . "</td>";
      echo "</tr>";
   }

?>


