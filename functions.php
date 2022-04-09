<?php
function countTasks($tasks, $project) {
    $task_count = 0;
    foreach ($tasks as $task) {
    if ($task ['category'] === $project) {$task_count++;}
    }return $task_count;
}

