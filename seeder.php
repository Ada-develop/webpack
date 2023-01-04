<?php

// Seeder is only for development purposes
// Through terminal use php seeder.php

$users = [
    ['name' => 'Bebras', 'psw' => '123', 'color' => 'red'],
    ['name' => 'Zebras', 'psw' => '124', 'color' => 'blue'],
    ['name' => 'Briedis', 'psw' => '125', 'color' => 'pink']
];

file_put_contents(__DIR__.'/users',serialize($users));