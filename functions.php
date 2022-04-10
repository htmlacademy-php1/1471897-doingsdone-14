<?php
/** 
* Считает количество задач в проекте 
* @param array $tasks Массив с задачами
* @param string $project Название проекта
* 
* @return int $task_count Число задач в проекте
*/

function countTasks($tasks, $project) {
    $task_count = 0;
    foreach ($tasks as $task) {
    if ($task ['category'] === $project) {$task_count++;}
    }return $task_count;
}