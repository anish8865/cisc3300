const person = {
    name: "Anish",
    age: 19,
    occupation: "Developer"
};

for (const key in person) {
    if (person.hasOwnProperty(key)) {
        console.log(person[key]);
    }
}
