let nonsenseStarTrekBabble = "Ensign Babyface! Your shields were failing, sir. This should be interesting. Your head is not an artifact! What's a knock-out like you doing in a computer-generated gin joint like this? Why don't we just give everybody a promotion and call it a night - 'Commander'? But the probability of making a six is no greater than that of rolling a seven. What? We're not at all alike! I recommend you don't fire until you're within 40,000 kilometers. Wouldn't that bring about chaos? Flair is what marks the difference between artistry and mere competence.";

let nonSenseStarTrekBabbleArray = nonsenseStarTrekBabble.split(" ");

// console.log(nonSenseStarTrekBabbleArray);

let startsWithE = nonSenseStarTrekBabbleArray.filter((nonsenseStarTrek) => nonsenseStarTrek.startsWith("E"||"e"));

console.log(startsWithE);

// alternate way that is actually complete

let newNonsenseStarTrek = nonsenseStarTrekBabble.split(' ');
let filteredNonsenseStarTrek = newNonsenseStarTrek.filter(word => !(word[0].toLowerCase()=='e'))
let words = filteredNonsenseStarTrek.join (' ');
console.log(words);



