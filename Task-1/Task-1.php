<!DOCTYPE html>
<html>

<head>
  <title>Task-1</title>
</head>

<body>
  <h2> Registration Form </h2>
  <hr>

  <form action="/action_page.php">
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
          <input type="radio" name="jpro"> Junior Programmer
          <input type="radio" name="spro"> Senior Programmer
          <input type="radio" name="prol"> Project Lead
        </td>
      </tr>
      <tr>
        <td>Preferred language:</td>
        <td>
          <input type="checkbox" name="java"> JAVA
          <input type="checkbox" name="php"> PHP
          <input type="checkbox" name="cpp"> C++
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
    <input type="button" name="reset" value="Reset">
  </form>
</body>

</html>