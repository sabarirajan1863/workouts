<html>
    <body>
<h1> LOGIN </h1>
<?php
$nameErr =$emailErr=$emailErr1=$nameErr1=$websiteErr=$websiteErr1= "";
$email_pattern=("/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@gmail.com$/");
$name_pattern="/^[a-zA-Z'. -]+$/";
$website_pattern="/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
      $nameErr="*Name is required";
    } elseif (!preg_match($name_pattern,$_POST["name"])){
        $nameErr1="*Name only contain alphabets";
    }
    if (empty($_POST["email"])) {
        $emailErr="*Email is required";
    } elseif(!preg_match($email_pattern,$_POST["email"])) {
        $emailErr1="*Invalid email";
    }
    if (empty($_POST["website"])){
        $websiteErr="*website is required";
    } elseif(!preg_match($website_pattern,$_POST["website"])){
        $websiteErr1="*Invalid URL";
    }
          
  }
?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ="post">
<div><?php echo "$nameErr";?></div>
<div><?php echo "$nameErr1";?></div>
Name: <input type="text" name="name">
<br><br>
<div><?php echo "$emailErr";?></div>
<div><?php echo "$emailErr1";?></div>
E-mail: <input type="email" name="email">
<br><br>
<div><?php echo "$websiteErr";?></div>
<div><?php echo "$websiteErr1";?></div>
Website: <input type="text" name="website">
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br><br>
Female<input type="radio" name="gender" value="female">
Male<input type="radio" name="gender" value="male">
Others<input type="radio" name="gender" value="other">
<input type="submit">
</form>
<?php
if  ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "You have submitted the form";
}
?>
</body>
</html>