<?php
$json = 
'{
"uglify-js": "1.3.4"
, "jshint": "0.9.1"
, "recess": "1.1.8"
, "connect": "2.1.3"
, "hogan.js": "2.0.0"
}';
var_dump(json_decode($json));
echo "\n";
var_dump(json_decode($json, true));
