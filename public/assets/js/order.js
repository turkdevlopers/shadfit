function just_persian(str) {
    var p = /^[\u0600-\u06FF\s]+$/;

    if (!p.test(str)) {
        return false;
    }
    return true;
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
const form = document.querySelector("#form");

const schoolName = document.querySelector("#schoolName");
const numStudent = document.querySelector("#numOff");
const schoolAddress = document.querySelector("#address");
const numberSchool = document.querySelector("#numSchool");
const numberManager = document.querySelector("#numPerson");
const userName = document.querySelector("#username");
const password = document.querySelector("#password");
const password2 = document.querySelector("#password2");
const firstPrice = document.querySelector("#first-price");
const addPrice = document.querySelector("#add-price");
const lastPrice = document.querySelector("#last-price");
const plans = document.querySelector("#plans");



form.addEventListener('submit', (event) => {
    event.preventDefault();
    checkInput();
});
function checkInput() {
    const schoolNameValue = schoolName.value.trim();
    const numStudentValue = numStudent.value.trim();
    const schoolAddressValue = schoolAddress.value.trim();
    const numberSchoolValue = numberSchool.value.trim();
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
        if (schoolName.value.length > 13) {
            setErorr(schoolName, 'نام مدرسه طوالانی هست');
        } else {
            if (just_persian(schoolNameValue)) {
                setSuccess(schoolName);
            } else {
                setErorr(schoolName, 'نام مدرسه باید فارسی باشد');
            }
        }
    }
    // Condition of number of student
    if (numStudentValue === '') {
        numStudent.focus();
        setErorr(numStudent, 'تعداد دانش آموز را وارد کنید');
    } else {
        setSuccess(numStudent);
    }
    // Condition of School Adress
    if (schoolAddressValue === '') {
        schoolAddress.focus();
        setErorr(schoolAddress, 'آدرس مدرسه را وارد کنید را وارد کنید');
    } else {
        if (schoolAddress.value.length > 20 && schoolAddress.value.length < 50) {
            if (just_persian(schoolAddressValue)) {
                setSuccess(schoolAddress);
            } else {
                setErorr(schoolAddress, 'آدرس مدرسه باید فارسی باشد');
            }

        } else {
            setErorr(schoolAddress, 'آدرس نه کوتاه باشد نه طولانی (حد وسط 20 تا 50 کلمه) ');
        }
    }
    // Condition of phone school number
    if (numberSchoolValue === '') {
        numberSchool.focus();
        setErorr(numberSchool, 'شماره تلفن مدرسه را وارد کنید');
    } else {
        setSuccess(numberSchool);
    }
    // Condition of phone manager number
    if (numberManagerValue === '') {
        numberManager.focus();
        setErorr(numberManager, 'شماره تلفن مدیر مدرسه را وارد کنید');
    } else {
        setSuccess(numberManager);
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

numStudent.addEventListener("keyup", function (e) {
    var plan = plans.value * 1;
    var num = numStudent.value * 1;
    firstPrice.innerHTML = numberWithCommas(num * plan);
    lastPrice.innerHTML = numberWithCommas((num * plan) + 3000);
});
plans.addEventListener("change", function (e) {
    var plan = plans.value * 1;
    var num = numStudent.value * 1;
    firstPrice.innerHTML = numberWithCommas(num * plan);
    lastPrice.innerHTML = numberWithCommas((num * plan) + 3000);
});
userName.addEventListener("focusout", (event) => {
    var sendRequest = new XMLHttpRequest();
    sendRequest.open("GET", UserCheckApiUrl + "/" + userName.value.trim());
    sendRequest.send();
    sendRequest.onload = function () {
        var result = JSON.parse(this.response);
        setErorr(userName, result.Message);
    }
});