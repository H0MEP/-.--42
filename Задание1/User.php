<?php

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