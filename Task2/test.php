<!DOCTYPE html>
<html>

<head>
  <title>Task2</title>
</head>

<body>
  <h2> Validation Form </h2>
  <hr>

  <form action="Control/results.php" method="post">
    <table>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname"></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname"></td>
      </tr>
      <tr>
        <td>Age:</td>
        <td><input type="text" name="age"></td>
      </tr>
      <tr>
        <td>Designation:</td>
        <td>
          <input type="radio" name="rd" value="Junior Programmer"> Junior Programmer
          <input type="radio" name="rd" value="Senior Programmer"> Senior Programmer
          <input type="radio" name="rd" value="Project Lead"> Project Lead
        </td>
      </tr>
      <tr>
        <td>Preferred language:</td>
        <td>
          <input type="checkbox" name="c1" value="JAVA"> JAVA
          <input type="checkbox" name="c2" value="PHP"> PHP
          <input type="checkbox" name="c3" value="C++"> C++
        </td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td>Please choose a file:</td>
        <td><input type="file" name="file"></td>
      </tr>

    </table>

    <input type="submit" name="submit">
    <input type="reset" name="reset">
  </form>
</body>

</html>