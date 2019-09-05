const nameArray = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', ' Sarah'];

nameArray.map(nameArray => {

	const newName = document.createElement("p");

	const newContent = document.createTextNode(nameArray);

	newName.appendChild(newContent);

	document.getElementById("nameArray").appendChild(newName);
});
