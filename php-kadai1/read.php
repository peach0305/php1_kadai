<?php
// ファイルの用意
$file = fopen('./data/data.txt', 'r');

while($str = fgets($file)){
    echo n12br($str);
}

fclose($file);

?>