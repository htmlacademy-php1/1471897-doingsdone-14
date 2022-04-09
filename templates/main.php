<?php $show_complete_tasks = rand(0, 1); 
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
?>
        <div class="content">
            <section class="content__side">
                <h2 class="content__side-heading">Проекты</h2>

                <nav class="main-navigation">
                    <ul class="main-navigation__list">
                        <?php foreach ($projects as $project): ?>
                        <li class="main-navigation__list-item">
                            <a class="main-navigation__list-item-link" href="#"><?= $project ?></a>
                            <span class="main-navigation__list-item-count">
                                <?= countTasks($tasks, $project); ?>
                            </span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <a class="button button--transparent button--plus content__side-button"
                   href="pages/form-project.html" target="project_add">Добавить проект</a>
            </section>

            <main class="content__main">
                <h2 class="content__main-heading">Список задач</h2>

                <form class="search-form" action="index.php" method="post" autocomplete="off">
                    <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

                    <input class="search-form__submit" type="submit" name="" value="Искать">
                </form>

                <div class="tasks-controls">
                    <nav class="tasks-switch">
                        <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
                        <a href="/" class="tasks-switch__item">Повестка дня</a>
                        <a href="/" class="tasks-switch__item">Завтра</a>
                        <a href="/" class="tasks-switch__item">Просроченные</a>
                    </nav>

                    <label class="checkbox">
                        <input class="checkbox__input visually-hidden show_completed" type="checkbox" <?php if ($show_complete_tasks > 0): ?> checked <?php endif; ?>>
                        <span class="checkbox__text">Показывать выполненные</span>
                    </label>
                </div>

                <table class="tasks">
                    <?php foreach ($tasks as $task): ?>
                    <?php if ($task['completed'] === true and $show_complete_tasks === 0): continue; endif; ?>
                    <tr class="tasks__item task <?php if ($task['completed'] === true): ?> task--completed<?php endif; ?>">
                        <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" <?php if ($task['completed'] === true): ?>checked<?php endif; ?>>
                                <span class="checkbox__text"><?= $task['task_name'] ?></span>
                            </label>
                        </td>
                        <td class="task__date"><?= $task['date_of_completion'] ?></td>
                        <td class="task__controls"><?= $task['category'] ?></td>    
                    </tr>
                    <?php endforeach; ?>
                </table>

            </main>
        </div>