
let maxNumber = prompt("Enter a max limit:");

let guessNumber = prompt("Enter guess number:");

let randomNumber = Math.floor((Math.random() * maxNumber) + 1);

while (true) {
    if (guessNumber == randomNumber) {
        alert("Correct");
        break;
    } else {
        guessNumber = prompt("Try again");
    }
}
