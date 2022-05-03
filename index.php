<?php
$show_complete_tasks = rand(0, 1);
date_default_timezone_set('Europe/Moscow');
require_once('helpers.php');
require_once('functions.php');
/*
$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$tasks = [
    [
    'task_name' => 'Собеседование в IT компании',
    'date_of_completion' => '01.12.2029',
    'category' => 'Работа',
    'completed' => false
    ],

    [
    'task_name' => 'Выполнить тестовое задание',
    'date_of_completion' => '25.12.2019',
    'category' => 'Работа',
    'completed' => false
    ],

    [
    'task_name' => 'Сделать задание первого раздела',
    'date_of_completion' => '21.12.2019',
    'category' => 'Учеба',
    'completed' => true
    ],

    [
    'task_name' => 'Встреча с другом',
    'date_of_completion' => '10.04.2022',
    'category' => 'Входящие',
    'completed' => false
    ],

    [
    'task_name' => 'Купить корм для кота',
    'date_of_completion' => null,
    'category' => 'Домашние дела    ',
    'completed' => false
    ],

    [
    'task_name' => 'Заказать пиццу',
    'date_of_completion' => null,
    'category' => 'Домашние дела    ',
    'completed' => false
    ]
];
*/
$con = mysqli_connect("localhost", "root", "", "dela_v_poryadke");
if ($con == false) {
   print("Ошибка подключения: " . mysqli_connect_error());
};
mysqli_set_charset($con, "utf8");

$sql_projects = "SELECT * FROM projects WHERE user_id = 1";
$sqlresult_projects = mysqli_query($con, $sql_projects);
$projects = mysqli_fetch_all($sqlresult_projects, MYSQLI_ASSOC);
foreach ($projects as $project) {
   print($project['name']);
}

$sql_tasks = "SELECT * FROM tasks WHERE user_id= 1";
$sqlresult_tasks = mysqli_query($con, $sql_tasks);
$tasks = mysqli_fetch_all($sqlresult_tasks, MYSQLI_ASSOC);
foreach ($tasks as $task) {
   print($task['name']);
}

$page_content = include_template('main.php', [
'tasks' => $tasks,
'projects' => $projects,
'show_complete_tasks' => $show_complete_tasks
]);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'user' => 'Павлик',
    'title' => 'Дела в порядке'
]);
print($layout_content);
