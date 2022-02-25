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
const checkBox =document.querySelector ("#check-box");

form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (checkInput() !== false) {
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
        return false;
    }
    else {
        if (schoolName.value.length > 35) {
            setErorr(schoolName, 'نام مدرسه طوالانی هست');
            return false;
        } else {
            if (just_persian(schoolNameValue)) {
                setSuccess(schoolName);
            } else {
                setErorr(schoolName, 'نام مدرسه باید فارسی باشد');
                return false;
            }
        }
    }
    // Condition of phone manager number
    if (numberManagerValue === '') {
        numberManager.focus();
        setErorr(numberManager, 'شماره تلفن مدیر مدرسه را وارد کنید');
        return false;
    } else {
        setSuccess(numberManager);
    }
    // Condition of password
    if (passwordValue === '') {
        password.focus();
        setErorr(password, 'رمز عبور خود را وارد کنید');
        return false;
    } else {
        if (password.value.length < 8) {
            setErorr(password, 'رمز عبور شما باید بیشتر از 8 کاراکتر باشد');
            return false;
        } else {
            setSuccess(password);
        }
    }
    // Condition of password2
    if (password2Value === '') {
        password2.focus();
        setErorr(password2, 'تکرار رمز عبور خود را وارد کنید');
        return false;
    } else if (passwordValue !== password2Value) {
        setErorr(password2, 'رمز عبور اشتباه وارد شده');
        return false;
    } else {
        if (password2.value.length < 8) {
            setErorr(password2, 'رمز عبور شما باید بیشتر از 8 کاراکتر باشد');
            return false;
        } else {
            setSuccess(password2);
        }
    }

    // Condition of UserName
    if (userNameValue === '') {
        userName.focus();
        setErorr(userName, 'نام کاربری را وارد کنید');
        return false;
    } else {
        if ((new RegExp("^[a-zA-Z0-9_]{5,}[a-zA-Z]+[0-9]*$")).test(userNameValue)) {
            setSuccess(userName);
        } else {
            setErorr(userName, 'نامعتبر : نام کاربری باید با لاتین نوشته شود');
            return false;
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
