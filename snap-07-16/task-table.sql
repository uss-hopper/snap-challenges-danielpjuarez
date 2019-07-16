drop table task;

create table task (
taskID binary(20) not null PRIMARY KEY,
taskTitle varchar(255) not null,
taskStartDate datetime,
taskDueDate datetime,
taskStatus varchar(64) not null,
taskPriority varchar(64) not null,
taskDescription varchar(256)
);

