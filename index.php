<?php
date_default_timezone_set('Europe/Moscow');
require_once('helpers.php');
require_once('functions.php');
$show_complete_tasks = rand(0, 1);
$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$tasks = [
    [
    'task_name' => 'Собеседование в IT компании',
    'date_of_completion' => '01.12.2019',
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
    'date_of_completion' => '22.12.2019',
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

$page_content = include_template('main.php', [
'tasks' => $tasks,
'projects' => $projects
]);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'user' => 'Павлик',
    'title' => 'Дела в порядке'
]);
print($layout_content);






