<?php
$conn = new mysqli("localhost","root","","skill_db");
$result = $conn->query("SELECT * FROM skills");
?>

<!DOCTYPE html>
<html>

<head>

<title>Skill Sharing Platform</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<nav>

<h2>SkillShare</h2>

<a href="signup.html">Signup</a>
<a href="login.html">Login</a>
<a href="addskill.html">Add Skill</a>

</nav>

<h1>Available Skills</h1>

<div class="skills">

<?php

while($row = $result->fetch_assoc()){

echo "<div class='card'>";

echo "<img src='images/".$row['image']."' width='200'>";

echo "<h3>".$row['skillname']."</h3>";

echo "<p>".$row['description']."</p>";

echo "</div>";

}

?>

</div>

</body>

</html>