CREATE DATABASE IF NOT EXISTS tasksDB;

USE tasksDB;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    completed BOOLEAN NOT NULL DEFAULT FALSE,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DELIMITER //

CREATE PROCEDURE createTask(
    IN taskTitle VARCHAR(255),
    IN taskCompleted BOOLEAN
)
BEGIN
    INSERT INTO tasks (title, completed)
    VALUES (taskTitle, taskCompleted);
END //


CREATE PROCEDURE selectAllTasks()
BEGIN
    SELECT * FROM tasks;
END //



CREATE PROCEDURE selectTask(
    IN taskId INT
)
BEGIN
        SELECT * FROM tasks 
        WHERE id = taskId;
END //



CREATE PROCEDURE updateTaskTitle(
    IN taskId  INT,
    IN taskTitle VARCHAR(255)
)
BEGIN
    UPDATE tasks
    SET title = taskTitle 
    WHERE id = taskId;
END //



CREATE PROCEDURE updateTaskCompleted(
    IN taskId INT,
    IN taskCompleted BOOLEAN
)
BEGIN
    UPDATE tasks
    SET completed = taskCompleted
    WHERE id = taskId;
END //



CREATE PROCEDURE deleteTask(
    IN taskId INT
)
BEGIN
    DELETE FROM tasks
    WHERE id = taskId;
END //

DELIMITER  ;