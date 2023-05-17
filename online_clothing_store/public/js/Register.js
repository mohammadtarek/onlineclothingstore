let firstName = document.getElementById('firstName')
let lastName = document.getElementById('lastName')

let email = document.getElementById('emailAddress')
let phone  = document.getElementById('phone')

let role = document.getElementById('UserType')
let roleSelection = role.value;
let roletext = role.options[role.selectedIndex].text;
//console.log(roleSelection,roletext,role)

let address = document.getElementById('address')
let dateOfBirth = document.getElementById('dateOfBirth')

let password = document.getElementById('Password')
let confirmPassword = document.getElementById('confirmPassword')

let gender = document.getElementById('gender')
let genderSelection = gender.value;
let genderText = gender.options[gender.selectedIndex].text;
//console.log(genderText,genderSelection)

let errorMsg = document.getElementById('errorMsg')

let registerBtn = document.getElementById('loginBtn')

function validateRegister(){
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/ //anystring@anystring.anystring
    let passRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/ // "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters
    let confirmPasswordRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/ // same as password regex
    let firstNameRegex = /^[a-zA-Z ]+$/  
    let lastNameRegex = /^[a-zA-Z ]+$/  


    if(firstName.value !='' && lastName.value != '' && email.value != '' && password.value !='' && confirmPassword.value !='' &&
            roleSelection !='' && address.value !='' && dateOfBirth.value !='' && genderSelection != '') {
                
                //Check regex condition
        if( emailRegex.test(email.value) == true && passRegex.test(password.value) == true && firstNameRegex.test(firstName.value) == true 
            && lastNameRegex.test(lastName.value) == true && confirmPasswordRegex.test(confirmPassword.value) == true ){
            
            firstName.classList.add('is-valid')
            lastName.classList.add('is-valid')
            email.classList.add('is-valid')
            password.classList.add('is-valid')
            confirmPassword.classList.add('is-valid')
            phone.classList.add('is-valid')
            address.classList.add('is-valid')
            dateOfBirth.classList.add('is-valid')
        }
        else {
            firstName.classList.add('is-invalid')
            lastName.classList.add('is-invalid')
            email.classList.add('is-invalid')
            password.classList.add('is-invalid')
            confirmPassword.classList.add('is-invalid')
            phone.classList.add('is-valid')
            address.classList.add('is-valid')
            dateOfBirth.classList.add('is-valid')
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