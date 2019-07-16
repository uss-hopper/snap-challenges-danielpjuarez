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

SELECT tweet.tweetContent, profile.likeProfileId FROM tweet WHERE tweetID = UNHEX("0536faef082b454e9d444cdbe7887d7a") FROM `like`
OUTER JOIN RIGHT