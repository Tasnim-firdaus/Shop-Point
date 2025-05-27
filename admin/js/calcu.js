function calculate(operator) {
    var num1 = document.getElementById("num1").value;
    var num2 = document.getElementById("num2").value;
    
   
    num1 = Number(num1);
    num2 = Number(num2);
    
    var result;

    if (operator === "+") {
        result = num1 + num2;
    } else if (operator === "-") {
        result = num1 - num2;
    } else if (operator === "*") {
        result = num1 * num2;
    } else if (operator === "/") {
        result = num2 !== 0 ? num1 / num2 : "Cannot divide by zero";
    } else if (operator === "%") {
        result = num2 !== 0 ? num1 % num2 : "Cannot divide by zero";
    }

    // Update result using innerHTML
    document.getElementById("result").innerHTML = result;
}
