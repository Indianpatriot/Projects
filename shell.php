<?php
$output = shell_exec('git pull');
if(strlen($output) > "1"){
echo "<pre>$output</pre>";
}else{
echo "<pre>Nothing to Pull</pre>";
}
// echo strlen($output);
?>