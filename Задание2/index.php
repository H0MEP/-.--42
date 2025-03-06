<?php

require_once 'User.php';
require_once 'UserService.php';

$users = [
    new User("alice", "pass123", new DateTime("1990-05-15")),
    new User("bob", "pass456", new DateTime("1985-10-20")),
    new User("charlie", "pass789", new DateTime("2000-01-01"))
];

echo "Сортировка по username (по возрастанию):\n";
$sortedByUsername = UserService::sortByUsername($users, true);
foreach ($sortedByUsername as $user) {
    echo $user->getUsername() . " - " . $user->getBirthday()->format('Y-m-d') . "\n";
}

echo "\nСортировка по username (по убыванию):\n";
$sortedByUsernameDesc = UserService::sortByUsername($users, false);
foreach ($sortedByUsernameDesc as $user) {
    echo $user->getUsername() . " - " . $user->getBirthday()->format('Y-m-d') . "\n";
}

echo "\nСортировка по birthday (по возрастанию):\n";
$sortedByBirthday = UserService::sortByBirthday($users, true);
foreach ($sortedByBirthday as $user) {
    echo $user->getUsername() . " - " . $user->getBirthday()->format('Y-m-d') . "\n";
}

echo "\nСортировка по birthday (по убыванию):\n";
$sortedByBirthdayDesc = UserService::sortByBirthday($users, false);
foreach ($sortedByBirthdayDesc as $user) {
    echo $user->getUsername() . " - " . $user->getBirthday()->format('Y-m-d') . "\n";
}