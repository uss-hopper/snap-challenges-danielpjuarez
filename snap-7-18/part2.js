/** adds the unique positive factors of a number
 * @param number to be factored
 * @return the sum of the unique positive factors
 */

function sumUniquePositiveFactors (number) {
	//make sure to define sum as some reasonable value so that there can be an
	let sum = 0;
	//we are surrounding this with a for loop
	for(i = 1; i <= number; i++) {
		//% sign is modulo, must be equal to 0 when a number is divided by a factor
		if(number % i === 0) {
			sum = sum + 1;
		}
		//you always have to have a return value
	}
	return sum;
}
console.log(sumUniquePositiveFactors(18));
