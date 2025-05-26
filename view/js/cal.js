function calculate(operator) {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    
   
    num1 = Number(num1);
    num2 = Number(num2);
    
    let result;

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

    
    document.getElementById("result").innerHTML = result;
}
