INSERT INTO user (email, name, password)
VALUES ('vasiliy.pupkin@gmail.com', 'Васян', 'qwerty123');

INSERT INTO user (email, name, password)
VALUES ('jesus_hreestozzz@mail.ru', 'Иисус', 'Rojdestvo');


INSERT INTO projects (user_id, name)
VALUES (1, 'Входящие');

INSERT INTO projects (user_id, name)
VALUES (1, 'Учеба');

INSERT INTO projects (user_id, name)
VALUES (1, 'Работа');

INSERT INTO projects (user_id, name)
VALUES (1, 'Домашние дела');

INSERT INTO projects (user_id, name)
VALUES (1, 'Авто');

INSERT INTO projects (user_id, name)
VALUES (2, 'Апокалипсис');


INSERT INTO tasks (project_id, user_id, name, deadline)
VALUES (1, 1, 'Встреча с другом', 1670612400);

INSERT INTO tasks (project_id, user_id, name, deadline, status)
VALUES (2, 1, 'Сделать задание первого раздела', 1576868400, true);

INSERT INTO tasks (project_id, user_id, name, deadline)
VALUES (3, 1, 'Собеседование в IT компании', 1890759600);

INSERT INTO tasks (project_id, user_id, name, deadline)
VALUES (3, 1, 'Выполнить тестовое задание', 1577214000);

INSERT INTO tasks (project_id, user_id, name)
VALUES (4, 1, 'Купить корм для кота');

INSERT INTO tasks (project_id, user_id, name)
VALUES (4, 1, 'Заказать пиццу');

INSERT INTO tasks (project_id, user_id, name)
VALUES (1, 2, 'Покарать еретиков');

/* Чтение списка из всех проектов для одного пользователя */
SELECT name FROM projects WHERE user_id = 1;

/* Чтение списка из всех задач для одного проекта */
SELECT name FROM tasks WHERE project_id = 3;

/* Изменение статуса задачи */
UPDATE tasks SET status = true WHERE name = 'Заказать пиццу';

/* Изменение названия задачи по идентификатору */
UPDATE tasks SET name = 'Купить гробик для кота' WHERE id = 5;
