function just_persian(str){
    var p = /^[\u0600-\u06FF\s]+$/;

    if (!p.test(str)) {
        return false;
    }
}

const form = document.querySelector("#form");

const userName = document.querySelector("#username");
const password = document.querySelector("#password");
const password2 = document.querySelector("#password2");

form.addEventListener('submit', (event) => {
    event.preventDefault();
    checkInput();
});

function checkInput() {

    const userNameValue = userName.value.trim();
    const passwordValue = password.value.trim();

          // Condition of password
         if (passwordValue === '') {
            password.focus();
             setErorr(password, 'رمز عبور خود را وارد کنید');
          }      else {
            if (password.value.length < 8) {
                setErorr(password, 'رمز عبور شما باید بیشتر از 8 کاراکتر باشد');
            } else{
                setSuccess(password); 
            }
        }

    // Condition of UserName
    if (userNameValue === '') {
        userName.focus();
        setErorr(userName, 'نام کاربری را وارد کنید');
    } else {
        if ((new RegExp("^[a-zA-Z0-9_]{5,}[a-zA-Z]+[0-9]*$")).test(userNameValue)) {
            setSuccess(userName);
        } else {
            setErorr(userName, 'نامعتبر : نام کاربری باید با لاتین نوشته شود');
        }
    }
}
const setErorr = (input, message) => {
    input.style.borderColor = "#ef5350";
    input.nextElementSibling.innerHTML = message;
}
const setSuccess = (input) => {
    input.style.borderColor = "";
    input.nextElementSibling.innerHTML = "";
}
