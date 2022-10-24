<?php

if(issset($_POST["submit"])){
  $name = FILTER_INPUT(input_post, "name", filter_sanitize_special_chars);
  $age = FILTER_INPUT(input_post, "age", filter_sanitize_special_chars);
  echo $_GET["name"];
  echo $_GET["age"];
}



 ?>

<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=JOE & age=29.9">Click</a>

<form class="<?php echo $_SERVER["PHP_SELF"]; ?>" action="index.html" method="post">
  <div class="">
    <label for="name">Name: </label>
    <input type="text" name="name" value="">
    <br>
    <label for="age">Age: </label>
    <input type="text" name="age" value="">
    <br>
    <input type="submit" name="submit" value="submit">

  </div>

</form>
