<?php

class Book {
    private $title;
    private $author;
    private $isAvailable;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true; 
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function isAvailable() {
        return $this->isAvailable;
    }

    public function setAvailable($status) {
        $this->isAvailable = $status;
    }
}

class User {
    private $name;
    private $userID;
    private $borrowedBooks = [];
    private $penalty = 0;

    public function __construct($name, $userID) {
        $this->name = $name;
        $this->userID = $userID;
    }

    public function borrowBook($book, $dueDate) {
        if ($book->isAvailable()) {
            $book->setAvailable(false);
            $this->borrowedBooks[] = [
                'book' => $book,
                'dueDate' => $dueDate
            ];
            echo "Книга '{$book->getTitle()}' успешно взята на срок до $dueDate.\n";
        } else {
            echo "Книга '{$book->getTitle()}' недоступна.\n";
        }
    }

    public function returnBook($book) {
        foreach ($this->borrowedBooks as $key => $borrowedBook) {
            if ($borrowedBook['book'] === $book) {
                $book->setAvailable(true);
                $dueDate = $borrowedBook['dueDate'];
                $currentDate = date('Y-m-d');

                if ($currentDate > $dueDate) {
                    $daysLate = (strtotime($currentDate) - strtotime($dueDate)) / (60 * 60 * 24);
                    $this->penalty += $daysLate * 10;
                    echo "Книга '{$book->getTitle()}' возвращена с опозданием на $daysLate дней. Штраф: {$this->penalty}.\n";
                } else {
                    echo "Книга '{$book->getTitle()}' возвращена вовремя.\n";
                }

                unset($this->borrowedBooks[$key]);
                return;
            }
        }
        echo "Книга '{$book->getTitle()}' не найдена в списке взятых.\n";
    }

    public function getPenalty() {
        return $this->penalty;
    }

    public function getName() {
        return $this->name;
    }

    public function getUserID() {
        return $this->userID;
    }
}

class Library {
    private $books = [];
    private $users = [];

    public function addBook($book) {
        $this->books[] = $book;
        echo "Книга '{$book->getTitle()}' добавлена в библиотеку.\n";
    }

    public function registerUser($user) {
        $this->users[] = $user;
        echo "Пользователь '{$user->getName()}' зарегистрирован.\n";
    }
    public function findBookByTitle($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        echo "Книга с названием '$title' не найдена.\n";
        return null;
    }

    public function findUserById($userID) {
        foreach ($this->users as $user) {
            if ($user->getUserID() === $userID) {
                return $user;
            }
        }
        echo "Пользователь с ID '$userID' не найден.\n";
        return null;
    }
}


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