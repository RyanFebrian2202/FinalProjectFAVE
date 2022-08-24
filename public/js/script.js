const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');    
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();        
    let passwordBuffer = true;
    let count = 0;

    if(usernameValue === '' || usernameValue == null) {
        setError(username, 'Username not found!');
    } else {        
        count++;
    }

    if(passwordValue === '' || passwordValue == null) {
        passwordBuffer = false
        setError(password, 'Password is incorrect!');
    }
    else {        
        count++;
    }

    if(count == 2){ 
        window.location.href="./dashboard.html";
    }
};