<?php

/**
 *Using the Tweet.php class found on the Object Oriented PHP page, write and document a getTweetsByTweetDate method
that takes a DateTime object as a parameter and returns an array of all Tweets on that date.
link to OOP Tweet example: https://bootcamp-coders.cnm.edu/class-materials/object-oriented/object-oriented-php.php
Message #web-captains-log
 */


/**
*gets Tweets by TweetDate from a given date
 * This also requires the rest of the getters and setters, and private variables to be set in order to function
 * correctly
 * @param string $tweetContent tweet content to search for
*@return \SplFixedArray SplFixedArray of Tweets found
*@throws \PDOexception when mySQL related error occur
*@throws \TypeError when variables are not the correct data
 * @throws \RangeException if TweetDate is a date that does not exist
 * @throws \InvalidArgumentException if TweetDate is not a valid object or string
*/

public static function getTweetbyTweetDate (\PDO $pdo, DateTime $tweetDate): \SplFIxedArry {
	//sanitize tweetDate before searching
	try {
		$tweetDate= self::validatedate($tweetDate);
	} catch (\RangeException|\InvalidArgumentException|\Exception|\TypeError $exception) {
		throw (new \PDOException ($exception->getMessage(),0,$exception));
	}
}

//create query template
$query = "Select tweetId, tweetProfileId, tweetContent, tweetDate from tweet where tweetDate= :tweetDate";
$statement=$pdo->prepare(query);

//bind the Tweet Date to the placeholder in the template
$parameters =["tweetDate"=>$tweetDate->getBytes()];
$statement->execute($parameters);
//build an array of tweets
$tweets= new \SplFixedArray($statement->rowCount ());
$statement->setFetchMode (\PDO::FETCH_ASSOC);
while(($row=$statement->fetch()!==false))
	try {
		$tweet=new Tweet($row["tweetId"], $row[tweetProfileId], $row["tweetContent"], $row["tweetDate"]);
		$tweets [$tweets->key()]=$tweet;
	} catch (\Exception $exception) {
		//if the row couldn't be converted, rethrow it
		throw (new \PDOException($exception->getMessage(),0,$exception));
	}
	return ($tweets);