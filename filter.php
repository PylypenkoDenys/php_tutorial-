<?php
$hdr = '<h1 style="color: red">PHP для заканчивающих</h1>';
echo $hdr;

$hdr = filter_var($hdr, FILTER_SANITIZE_STRING);
echo "Отфильрованный заголовок: $hdr";

function validate($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {echo ("<hr>$email - ДОПУСТИМЫЙ адрес электронной почты");}
    else
    {echo("<hr>$email - НЕДОПУСТИМЫЙ адрес электроннной почты");}
}
$email = 'mike @example.com';
validate($email);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
validate($email);