<?php

class UserService {
    public static function sortByUsername(array $users, $ascending = true) {
        usort($users, function ($a, $b) use ($ascending) {
            $cmp = strcmp($a->getUsername(), $b->getUsername());
            return $ascending ? $cmp : -$cmp;
        });
        return $users;
    }

    public static function sortByBirthday(array $users, $ascending = true) {
        usort($users, function ($a, $b) use ($ascending) {
            $cmp = $a->getBirthday() <=> $b->getBirthday();
            return $ascending ? $cmp : -$cmp;
        });
        return $users;
    }
}