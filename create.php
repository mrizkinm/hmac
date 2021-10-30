<?php
    error_reporting(0);
    echo "Masukkan nama file: ";
    $file = trim(fgets(STDIN));
    echo "Masukkan password: ";
    $password = trim(fgets(STDIN));
    $hash = hash_hmac_file('sha1', $file, $password);
    if ($hash) {
        echo "MAC: ".$hash;
    } else {
        echo 'File tidak ada';
    }
?>