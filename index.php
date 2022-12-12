<?php

echo "testCookies_3";

setcookie("style_3[color]", "red");
setcookie("style_3[font]", "Tahoma");
setcookie("style_3[layout]", "boxed");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style_3"])) {
    echo $_COOKIE["style_3"]["font"];
}