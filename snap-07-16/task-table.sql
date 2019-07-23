create table if not exists task (
taskID binary(20) not null PRIMARY KEY,
taskTitle varchar(255) not null,
taskStartDate datetime,
taskDueDate datetime,
taskStatus varchar(64) not null,
taskPriority varchar(64) not null,
taskDescription varchar(256)
PRIMARY KEY (taskID)
);

SELECT tweet.tweetContent, profile.profileAtHandle
FROM tweet
	INNER JOIN 'like' on tweet.tweetId=like.likeTweetId
	INNER JOIN profile ON like.likeProfileID = profile.profileId;
	WHERE tweet.tweetid="0536faef082b454e9d444cdbe7887d7a"