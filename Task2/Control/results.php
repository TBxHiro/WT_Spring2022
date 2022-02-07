<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];

if (strlen($fname) < 5 || strlen($lname) < 5) {
  echo "Names must be 5 characters or more";
  echo "; Your Name is " . $fname . " " . $lname;
} else {
  echo "Your Name is " . $fname . " " . $lname;
}

echo "<br>";
$pass = $_POST["password"];

if (strlen($pass) < 8) {
  echo "Password must be 8 characters or more";
  echo "; Your password is " . $pass;
} else {
  echo "Your password is " . $pass;
}

echo "<br>";
$age = $_POST["age"];

if (strlen($age) < 1) {
  echo "You must Enter valid age";
  echo "; Your age is 0";
} else {
  echo "Your age is " . $age;
}

echo "<br>";
if (isset($_POST["rd"])) {
  echo "You have selected " . $_POST["rd"];
} else {
  echo "You have no radio selection";
}

echo "<br>";

if (isset($_POST["c1"]) || isset($_POST["c2"]) || isset($_POST["c3"])) {
  echo "You have selected checkbox ";

  if (isset($_POST["c1"]))
    echo $_POST["c1"] . ", ";
  if (isset($_POST["c2"]))
    echo $_POST["c2"] . ", ";
  if (isset($_POST["c3"]))
    echo $_POST["c3"];
} else {
  echo "You have no checkbox selection";
}

echo "<br>";
$email = $_POST["email"];

if (strlen($email) < 1) {
  echo "You must Enter valid email";
} else {
  echo "Your email is " . $email;
}
