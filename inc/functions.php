<?php
function writeRecordInLog($pathLogFile, $message)
{
    $record = date("Y-m-d H:i:s") . PHP_EOL;
    $record .= "Имя: {$_POST['name']}, фамилия: {$_POST['surname']}, email: {$_POST['email']},"
        . " пароль: {$_POST['password']}, повтор пароля: {$_POST['retryPassword']}" . PHP_EOL;
    $record .=  $message . PHP_EOL . PHP_EOL;
    if ( !is_dir(dirname($pathLogFile)) ) {
        mkdir(dirname($pathLogFile));
    }
    file_put_contents($pathLogFile, $record,FILE_APPEND );
}