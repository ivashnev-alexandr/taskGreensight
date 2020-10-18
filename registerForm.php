<?php
require_once 'inc/functions.php';
$users = [
    [
        'id' => 1,
        'name' => 'Василий',
        'email' => 'vasya@gmail.com'
    ],
    [
        'id' => 2,
        'name' => 'Дмитрий',
        'email' => 'dmitry@gmail.com'
    ],
    [
        'id' => 3,
        'name' => 'Генадий',
        'email' => 'genadiy@gmail.com'
    ],
    [
        'id' => 4,
        'name' => 'Павел',
        'email' => 'pavel@gmail.com'
    ],
    [
        'id' => 5,
        'name' => 'Иван',
        'email' => 'ivan@gmail.com'
    ],
    [
        'id' => 6,
        'name' => 'Николай',
        'email' => 'nikolay@gmail.com'
    ],
    [
        'id' => 7,
        'name' => 'Петр',
        'email' => 'petr@gmail.com'
    ]
];
$pathLogFile = 'logs/log.txt';

$responseData = null;
$userEmails = array_column($users, 'email');
if (in_array($_POST['email'], $userEmails)) {
    $responseData = [
        'isRegistered' => false,
        'message' => 'Пользователь с таким e-mail уже зарегистрирован'
    ];
    writeRecordInLog($pathLogFile, $responseData['message']);
    echo json_encode($responseData);
    exit();
}
if ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || $_POST['password'] !== $_POST['retryPassword'] ) {
    $responseData = [
        'isRegistered' => false,
        'message' => 'Некорректно введены данные в форме'
    ];
    writeRecordInLog($pathLogFile, $responseData['message']);
    echo json_encode($responseData);
    exit();
}
$responseData = [
    'isRegistered' => true,
    'message' => 'Поздравляем вы успешно зарегистрировались'
];
writeRecordInLog($pathLogFile, $responseData['message']);
echo json_encode($responseData);