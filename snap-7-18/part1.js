/**convert weight or mass to grams
 *given weightLb set wegithgram to weightLbs/2.2046
 *@param mass Te weight or mass to be converted
 * @param units The abbreviation for the units specified in the mass
 * @return converted mass in grams
 */

function converttograms (mass, units) {
	$convertedValue = 0;

	if (units==='g'){
		return mass;
	} else if (units=== 'lbs') {
		return mass * 453.592;
	} else if (units === 'oz') {
		return mass *28.34952
	} else if (units === 'kg') {
		return mass*1000
	}else if (units === 'mg') {
		return mass/1000
	}
	return $convertedValue;
}

console.log(converttograms(30,'kg'));
