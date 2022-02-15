function just_persian(str) {
    var p = /^[\u0600-\u06FF\s]+$/;

    if (!p.test(str)) {
        return false;
    }
    return true;
}

const form = document.querySelector("#form");

const schoolName = document.querySelector("#schoolName");
const numberManager = document.querySelector("#numPerson");
const userName = document.querySelector("#username");
const password = document.querySelector("#password");
const password2 = document.querySelector("#password2");

form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (checkInput()) {
        form.submit();
    }
});

function checkInput() {
    const schoolNameValue = schoolName.value.trim();
    const numberManagerValue = numberManager.value.trim();
    const userNameValue = userName.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    // Condition of school name
    if (schoolNameValue === '') {
        schoolName.focus();
        setErorr(schoolName, 'نام مدرسه را وارد کنید');
    }
    else {
        if (schoolName.value.length > 35) {
            setErorr(schoolName, 'نام مدرسه طوالانی هست');
            return false;
        } else {
            if (just_persian(schoolNameValue)) {
                setSuccess(schoolName);
                return true;
            } else {
                setErorr(schoolName, 'نام مدرسه باید فارسی باشد');
            }
        }
    }
    // Condition of phone manager number
    if (numberManagerValue === '') {
        numberManager.focus();
        setErorr(numberManager, 'شماره تلفن مدیر مدرسه را وارد کنید');
    } else {
        setSuccess(numberManager);
        return true;
    }
    // Condition of password
    if (passwordValue === '') {
        password.focus();
        setErorr(password, 'رمز عبور خود را وارد کنید');
    } else {
        if (password.value.length < 8) {
            setErorr(password, 'رمز عبور شما باید بیشتر از 8 کاراکتر باشد');
        } else {
            setSuccess(password);
            return true;
        }
    }
    // Condition of password2
    if (password2Value === '') {
        password2.focus();
        setErorr(password2, 'تکرار رمز عبور خود را وارد کنید');
    } else if (passwordValue !== password2Value) {
        setErorr(password2, 'رمز عبور اشتباه وارد شده');
    } else {
        if (password2.value.length < 8) {
            setErorr(password2, 'رمز عبور شما باید بیشتر از 8 کاراکتر باشد');
        } else {
            setSuccess(password2);
            return true;
        }
    }

    // Condition of UserName
    if (userNameValue === '') {
        userName.focus();
        setErorr(userName, 'نام کاربری را وارد کنید');
    } else {
        if ((new RegExp("^[a-zA-Z0-9_]{5,}[a-zA-Z]+[0-9]*$")).test(userNameValue)) {
            setSuccess(userName);
            return true;
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