<?php

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