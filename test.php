<pre>
<?php
$cookie_name = "arun";
$cookie_value = $_SERVER['REQUEST_URI'];
setcookie($cookie_name, $cookie_value, time() + (84000 * 30), "/");
print("_SERVER \n");
print_r($_SERVER);
print("_GET \n");
print_r($_GET);
print("_POST \n");
print_r($_POST);
print("_FILES\n");
print_r($_FILES);
print("_COOKIE");
print_r($_COOKIE);
?>
</pre>