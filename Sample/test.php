<?php
$lang = "ja_JP.UTF-8";
$domain = "messages";
setlocale(LC_ALL, $lang);
bindtextdomain($domain, "./locale/");
textdomain($domain);
echo _("hello world");
?>