<?php

$raw = file_get_contents('data.txt');
$data = str_replace("\n\n"," ",$raw);
$data = explode(" ", $data);

foreach ($data as $item) {
    $elves[] = explode("\n",$item);
}

foreach ($elves as $elf) {
    $calories[] = array_sum($elf);
}

$richElf = max($calories);

var_dump($richElf);