//Useful guide for working with JSON: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/JSON


// Event listeners
// document.getElementById("countries").addEventListener("load", generateCountries);

function generateCountries() {
    console.log("Generating countries...");
    // const countryData = require('../data/places.json');
    const countryData = '../data/places.json';
    const obj = JSON.parse(countryData)
    console.log(obj);
}

function raceInfo() {
    
}


