<?php
// Run the pull command in the repository directory
$output = shell_exec("cd /home/ctmacademy/public_html/sites/demo.creativeitem.com.20gb/atlas-laravel && git fetch --all 2>&1");
echo "<pre>$output</pre>";
