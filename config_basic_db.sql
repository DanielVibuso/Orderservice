CREATE TABLE users(
id INT(11) NOT NULL PRIMARY KEY,
login VARCHAR(255) NOT NULL,
`password` VARCHAR(32) NOT NULL);

INSERT INTO users SET login = 'daniel@vibuso.com', `password` = MD5('12345');

CREATE TABLE teams(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255),
begin_time TIME,
end_time TIME
) ENGINE=INNODB  CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE employees(
id INT(11)  PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255),
lastname VARCHAR(255),
born_at DATE,
team_id INT(11) ,
salary DECIMAL(10,2),
CONSTRAINT FK_TeamEmployee FOREIGN KEY (team_id)
REFERENCES teams(id) ON DELETE CASCADE
) ENGINE=INNODB  CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE ticket_category(
id INT(11) PRIMARY KEY  AUTO_INCREMENT,
`name` VARCHAR(11)
) ENGINE=INNODB  CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE ticket(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(11),
`value` DECIMAL(10,2),
ticket_category_id INT(11),
due_date DATE,
paid_in DATE,
recurrence BOOLEAN,
recurrence_time INT(2),
`status` VARCHAR(33),
CONSTRAINT FK_TicketCategoryTicket FOREIGN KEY (ticket_category_id)
REFERENCES ticket_category(id) ON DELETE CASCADE
) ENGINE=INNODB  CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE users;
DROP TABLE teams;
DROP TABLE employees;
DROP TABLE ticket_category;
DROP TABLE ticket;



