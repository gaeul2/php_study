<?php
$file = 'read_me.txt';
$newfile = 'example.txt.bak';

//안된다면을 조건으로 걸었지만 됐을때도 포함하고 있음!
//됐을때의 행동을 안줬을 뿐!
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
