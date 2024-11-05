<?php
$output = shell_exec("cd /home/ctmacademy/public_html/sites/demo.creativeitem.com.20gb/atlas-laravel && git reset --hard HEAD && git pull 2>&1");
echo "<pre>$output</pre>";
