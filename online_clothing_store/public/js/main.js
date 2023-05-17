
//Start login form validation
let emailInput = document.getElementById('Emailaddress')
let passwordInput = document.getElementById('Password')
let roleSelection = document.getElementById('UserType')
let valueOfSelection = roleSelection.value;
let text = roleSelection.options[roleSelection.selectedIndex].text;

let loginBtn = document.getElementById('loginBtn')

console.log(valueOfSelection,text);


function validateLogin(){
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/ //anystring@anystring.anystring 
    let passRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/  // "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters


    if(emailInput.value !='' && passwordInput != ''){
        if(emailRegex.test(emailInput.value) == true && passRegex.test(passwordInput) == true){
            emailInput.classList.add('is-valid')
            passwordInput.classList.add('is-valid')
        }
        else {
            emailInput.classList.add('is-invalid')
            passwordInput.classList.add('is-invalid')
            errorMsg.style.display = "block"
        }

        return true;

    }

    else {
        errorMsg.style.display = "none"
        return false;
    }
}

console.log(errorMsg);
//End login form validation



