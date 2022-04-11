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

/** 
* Считает количество дней до дедлайна, если количество дней меньше 1 - добавляет задаче класс, иначе - пустую строку
* @param array $task Массив с информацией о задаче
* 
* @return string $alert Класс задачи
*/

function task_date_complet($task) { 
    $alert = '';
    $timestamp = time();
    $seconds_in_day = 86400;
    $end_timestamp = strtotime($task ['date_of_completion']);
    $timestamp_diff = $end_timestamp - $timestamp;
    $days_until_end = $timestamp_diff / $seconds_in_day;
    if ($days_until_end < 1 and ($task['date_of_completion'] != 0)) {
        $alert = 'task--important';
    } return $alert;
}
