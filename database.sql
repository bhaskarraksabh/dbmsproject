CREATE DATABASE IF NOT EXISTS Project;
USE Project;
GRANT ALL PRIVILEGES ON Project.* TO 'root'@'localhost';
CREATE TABLE IF NOT EXISTS Users
(
user_name varchar(255),
email varchar(255),
passkey varchar(255)
);
CREATE TABLE IF NOT EXISTS Problems
(
qid int,
question_name varchar(255),
tags varchar(255),
problem_description text,
testcases text,
accepted_count int,
problem_input text,
output text
);
CREATE TABLE IF NOT EXISTS Contests
(
contest_id int,
contest_name varchar(255),
time_remaining varchar(255),
dt DATE
);
CREATE TABLE IF NOT EXISTS Submissions
(
sub_id int NOT NULL AUTO_INCREMENT,
submitted_code text,
PRIMARY KEY(sub_id)
);
CREATE TABLE IF NOT EXISTS Tcs
(
tc_number int,
tc_text text,
out_put text,
PRIMARY KEY(tc_number)
);
CREATE TABLE IF NOT EXISTS Announcements
(
about text,
dt date,
author varchar(255)
);
CREATE TABLE IF NOT EXISTS ContestProblem
(
contest_id int,
qid int,
title varchar(255),
number_of_ac int
);
