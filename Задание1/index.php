<?php

require_once 'Book.php';
require_once 'User.php';
require_once 'Library.php';

$library = new Library();

$book1 = new Book("1984", "George Orwell");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");
$library->addBook($book1);
$library->addBook($book2);

$user1 = new User("Alice", 1);
$user2 = new User("Bob", 2);
$library->registerUser($user1);
$library->registerUser($user2);

$user1->borrowBook($book1, "2023-10-15");
$user2->borrowBook($book2, "2023-10-10");

$user1->returnBook($book1);
$user2->returnBook($book2);

echo "Штраф пользователя {$user2->getName()}: {$user2->getPenalty()}\n";

?>