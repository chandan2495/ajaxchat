<?php

$file=  file_get_contents('countries.txt',FILE_INCLUDE_PATH);

$countries=  explode("\n", $file);

echo json_encode($countries);

?>
