<?php
/**Write a class with two state variables, accessors, mutators, and a method that does something.
 *extra credit:
 *instaniate the class and call to a method.
 **/
namespace djuarez11\DispatchTimes;

use http\Exception\BadQueryStringException;

class DispatchTimes {
	//id for call, primary key
	private $callId;
	//id of initial dispatch
	private $callDispatchTime;
	//id of time of arrival on scene

	/**
	 * constructor for this DispatchTime
	 * @param string $newCallId id of this call or null if new call
	 * @param \DateTime|string|null $newCallDispatchTime date and time call came in or null if set to current date and time
	 * @param \DateTime|string|null $newCallOnSceneTime date and time unit arrived on scene or null if set to current date and time
	 * @param \DateTime|string|null $newCallCompletionTime date and time unit arrived on scene or null if set to current date and time
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 */
	public function __construct($newCallId, $newCallDispatchTime=null, $newCallOnSceneTime=null, $newCallCompletionTime=null) {
		try {
			$this->setCallId($newCallId);
			$this->setCallDispatchTime($newCallDispatchTime);
		}
		//determines what exception type is thrown
		catch(\InvalidArgumentException|\RangeException|\Exception|\TypeError $exception){
			$exceptionType=get_class($exception);
			throw (new $exceptionType($exception->getMessage(),0,$exception));
		}
	}
	/**
	 * accessor method for call Id
	 *@return value of call Id
	 */
	public function getCallId() {
		return($this->callId);
	}
	/**
	 * mutator method for call id
	 * @param string $newCallId new value of call Id
	 */
	public function setCallId ($newCallId)
	{
		$this->callId($newCallId);
	}
	/**
	 * accessor method for callDispatchTime
	 * @return \DateTime value of call dispatch time
	 */

	public function getCallDispatchTime() :git \DateTime {
		return ($this->callDispatchTime);
	}

	/**
	 * mutator method for call dispatch time
	 *ran out of time to insert validators in the mutator. this was only a one hour challenge
	 */
	public function setCallDispatchTime($newCallDispatchTime=null): void {
		//base case if the date is null use current date and time
		if ($newCallDispatchTime===null) {
			$this->callDispatchTime=new \DateTime();
			return;
		}

		$this->callDispatchTime=$newCallDispatchTime;
	}






}