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
        setError(password, 'Please enter a valid password!');
    }
    else {
        count++;
    }

    if(count == 2){
        window.location.href="./db.blade.php";
    }
};

// Display nav overlay

function show(){
    var x = document.getElementById("nav-overlay");
    if (x.style.visibility === "hidden") {
      x.style.visibility = "visible";
    } else {
      x.style.visibility = "hidden";
    }
}

