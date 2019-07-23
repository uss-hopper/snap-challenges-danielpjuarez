create table dispatchtimes(
callId binary(16) NOT NULL,
callDispatchtime DATETIME NOT NULL,
callOnSceneTime, DATETIME NOT NULL
callCompletionTime DATETIME NOT NULL,
primary key(callId)
);