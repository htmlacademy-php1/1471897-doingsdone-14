<?php
function countTasks($tasks, $project) {
    $tc = 0;
    foreach ($tasks as $task) {
    if ($task ['category'] === $project) {$tc++;}
    }return $tc;
}

