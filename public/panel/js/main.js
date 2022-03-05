(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    //new devs

    function sortIt() {
        if (document.getElementById('items')) {
            new Sortable(document.getElementById('items'), {
                group: {
                    name: 'qux',
                    put: ['bar'],
                },
                animation: 250,
            });
        }
    }

    $(document).pjax('a', '#pjax-container', {
        timeout: 10000
    });
    $(document).on('pjax:send', function () {
        $('#pjax-container').css("filter", "blur(10px)");
    });
    $(document).on('pjax:end', function () {
        $('#pjax-container').css("filter", "blur(0px)");
    });

    $(".pjaxmenu a").click(function () {
        $(".pjaxmenu a").removeClass("active");
        $(this).addClass("active");
    });

    sortIt();
    botsetting_js();
    profile_js();
    discounter();
    $(document).ajaxComplete(function () {
        /**function place */
        sortIt();
        botsetting_js();
        profile_js();
        discounter();
    });


    //bot Setting part ************************************

    function botsetting_js() {

        if ($('.opt')) {
            $('.opt').click(function (ev) {
                var optionName = this.getAttribute('option_name');
                var optionId = this.getAttribute('option_id') * 1;
                if (optionId === 8 && optionName != null) {
                    var result = survey(optionName);
                    return $('#items').append(result);
                }
                if (optionId === 6 && optionName != null) {
                    var result = voting(optionName);
                    return $('#items').append(result);
                }
                if (optionName != null) {
                    var result = hamgam(optionName);
                    return $('#items').append(result);
                }
            });


            $("#items").on("click", ".add-btn", function () {
                var newchg = this.parentElement.parentElement.firstChild.nextSibling;
                var placeholder = $(this).attr('add-placeholder');
                var result = inputNew(placeholder);
                $(newchg).append(result);
            });
            $("#items").on("click", ".remove-btn", function () {
                $('#input-add').remove();
            });

            $("#items").on("click", ".part-remove", function () {
                var result = this.parentElement.parentElement.parentElement;
                $(result).remove();
            });
        }
    }
    function inputNew(name) {
        return `<input class="form-control mb-3 border-0 bg-light input-add" id="input-add" type="text" placeholder="${name}" aria-label="default input example">`;
    }

    function hamgam(name) {
        return ` <div class="bg-white shadow-sm text-center rounded p-4 mt-4"> <details> <summary class="sum"> <h4>${name}</h4> </summary> <br><form class="d-md-flex ms-4"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example"> </form> <div class="d-flex justify-content-between align-items-center"> <button type="button" class="btn btn-danger m-2 part-remove">حذف این بخش</button> <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button> </div></details> </div>`;
    }
    function survey(name) {
        return `  <div class="bg-white shadow-sm text-center rounded p-4 mt-4"> <details> <summary class="sum"> <h4>${name}</h4> </summary> <br><form class="ms-4"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example"> <div class="d-md-flex col-lg-12"> <div class="col-lg-8 col-md-6"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="مورد گزینه" aria-label="default input example"> </div><div class="col-lg-4 col-md-6"> <button type="button" add-placeholder="مورد گزینه" class="btn btn-outline-success m-2 border-delet add-btn">افزودن مورد <i class="fa fa-plus ms-2"></i></button> <button type="button" class="btn btn-outline-danger m-2 border-delet remove-btn">حذف مورد <i class="fa fa-minus ms-2"></i></button> </div></div></form>  <div class="d-flex justify-content-between align-items-center"> <button type="button" class="btn btn-danger m-2 part-remove">حذف این بخش</button> <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button> </div></details> </div>`;
    }
    function voting(name) {
        return `  <div class="bg-white shadow-sm text-center rounded p-4 mt-4"> <details> <summary class="sum"> <h4>${name}</h4> </summary> <br><form class="ms-4"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example"> <div class="d-md-flex col-lg-12"> <div class="col-lg-8 col-md-6 new_chq"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="نام کاندید" aria-label="default input example"> </div><div class="col-lg-4 col-md-6"> <button type="button" add-placeholder="نام کاندید" class="btn btn-outline-success m-2 border-delet add-btn">افزودن کاندید <i class="fa fa-plus ms-2"></i></button> <button type="button" class="btn btn-outline-danger m-2 border-delet remove-btn">حذف کاندید <i class="fa fa-minus ms-2"></i></button> </div></div></form>  <div class="d-flex justify-content-between align-items-center"> <button type="button" class="btn btn-danger m-2 part-remove">حذف این بخش</button> <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button> </div></details> </div>`;
    }

    function profile_js() {
        if (document.querySelector("#schoolName")) {
            //Profil Image Upload
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function () {
                readURL(this);
            });
            //Profil Validation ---------------------------------------------

            function just_persian(str) {
                var p = /^[\u0600-\u06FF\s]+$/;

                if (!p.test(str)) {
                    return false;
                }
                return true;
            }
            const form = document.querySelector("#form");

            const schoolName = document.querySelector("#schoolName");
            const schoolAddress = document.querySelector("#address");
            const numberSchool = document.querySelector("#numSchool");
            const numberManager = document.querySelector("#numPerson");
            const password = document.querySelector("#password");
            const password2 = document.querySelector("#password2");



            form.addEventListener('submit', (event) => {
                event.preventDefault();
                if (checkInput() !== false) {
                    form.submit();
                }
            });
            function checkInput() {
                const schoolNameValue = schoolName.value.trim();
                const schoolAddressValue = schoolAddress.value.trim();
                const numberSchoolValue = numberSchool.value.trim();
                const numberManagerValue = numberManager.value.trim();
                const passwordValue = password.value.trim();
                const password2Value = password2.value.trim();
                // Condition of school name
                if (schoolNameValue === '') {
                    schoolName.focus();
                    setErorr(schoolName, 'نام مدرسه را وارد کنید');
                    return false;
                }
                else {
                    if (schoolName.value.length > 13) {
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
                // Condition of School Adress
                if (schoolAddressValue === '') {
                    schoolAddress.focus();
                    setErorr(schoolAddress, 'آدرس مدرسه را وارد کنید را وارد کنید');
                    return false;
                } else {
                    if (schoolAddress.value.length > 10 && schoolAddress.value.length < 225) {
                        if (just_persian(schoolAddressValue)) {
                            setSuccess(schoolAddress);
                        } else {
                            setErorr(schoolAddress, 'آدرس مدرسه باید فارسی باشد');
                            return false;
                        }

                    } else {
                        setErorr(schoolAddress, 'آدرس نه کوتاه باشد نه طولانی (حد وسط 20 تا 50 کلمه) ');
                        return false;
                    }
                }
                // Condition of phone school number
                if (numberSchoolValue === '') {
                    numberSchool.focus();
                    setErorr(numberSchool, 'شماره تلفن مدرسه را وارد کنید');
                    return false;
                } else {
                    setSuccess(numberSchool);
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

            }
            const setErorr = (input, message) => {
                input.classList.remove("border-0")
                input.style.border = "2px solid #eb0b0b";
                input.nextElementSibling.innerHTML = message;
            }
            const setSuccess = (input) => {
                input.style.borderColor = "";
                input.nextElementSibling.innerHTML = "";
            }
        }
    }

    // check for discount -------------------------------------------

    function discounter() {
        if (document.querySelector("#off-input")) {
            $('#off-button').click(function () {
                var code = $('#off-input').val();
                var sendRequest = new XMLHttpRequest();
                sendRequest.open("GET",`${weburl}/api/offcheck/${code}/user/${userId}`);
                sendRequest.send();
                sendRequest.onload = function () {
                    var result = JSON.parse(this.response);
                    if (result.Satuse == "success") {
                        $('#off-button').removeClass(['btn-primary','btn-danger','btn-success'])
                        .addClass('btn-success');
                        $('#offresult').html(`<span class="text-success">${result.discount} ${result.Message}</span>`);
                        $('#final-price').html(`<span class="text-success text-flicker-in-glow">${(new Intl.NumberFormat().format(result.FinalPrice))}</span>`);
                    } else {
                        $('#off-button').removeClass(['btn-primary','btn-success','btn-danger'])
                        .addClass('btn-danger');
                        $('#offresult').html(`<span class="text-danger">${result.Message}</span>`);
                        $('#final-price').html(`<span class="text-flicker-in-glow">${(new Intl.NumberFormat().format(result.LastPrice))}</span>`);
                    }
                }
            });
        }
    }

    // Back to top button-------------------------------------------
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, { offset: '80%' });


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav: false
    });


    // Worldwide Sales Chart
    var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                label: "USA",
                data: [15, 30, 55, 65, 60, 80, 95],
                backgroundColor: "rgba(0, 156, 255, .7)"
            },
            {
                label: "UK",
                data: [8, 35, 40, 60, 70, 55, 75],
                backgroundColor: "rgba(0, 156, 255, .5)"
            },
            {
                label: "AU",
                data: [12, 25, 45, 55, 65, 70, 60],
                backgroundColor: "rgba(0, 156, 255, .3)"
            }
            ]
        },
        options: {
            responsive: true
        }
    });


    // Salse & Revenue Chart
    var ctx2 = $("#salse-revenue").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                label: "Salse",
                data: [15, 30, 55, 45, 70, 65, 85],
                backgroundColor: "rgba(0, 156, 255, .5)",
                fill: true
            },
            {
                label: "Revenue",
                data: [99, 135, 170, 130, 190, 180, 270],
                backgroundColor: "rgba(0, 156, 255, .3)",
                fill: true
            }
            ]
        },
        options: {
            responsive: true
        }
    });



    // Single Line Chart
    var ctx3 = $("#line-chart").get(0).getContext("2d");
    var myChart3 = new Chart(ctx3, {
        type: "line",
        data: {
            labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
            datasets: [{
                label: "Salse",
                fill: false,
                backgroundColor: "rgba(0, 156, 255, .3)",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Single Bar Chart
    var ctx4 = $("#bar-chart").get(0).getContext("2d");
    var myChart4 = new Chart(ctx4, {
        type: "bar",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(0, 156, 255, .7)",
                    "rgba(0, 156, 255, .6)",
                    "rgba(0, 156, 255, .5)",
                    "rgba(0, 156, 255, .4)",
                    "rgba(0, 156, 255, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Pie Chart
    var ctx5 = $("#pie-chart").get(0).getContext("2d");
    var myChart5 = new Chart(ctx5, {
        type: "pie",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(0, 156, 255, .7)",
                    "rgba(0, 156, 255, .6)",
                    "rgba(0, 156, 255, .5)",
                    "rgba(0, 156, 255, .4)",
                    "rgba(0, 156, 255, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Doughnut Chart
    var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(0, 156, 255, .7)",
                    "rgba(0, 156, 255, .6)",
                    "rgba(0, 156, 255, .5)",
                    "rgba(0, 156, 255, .4)",
                    "rgba(0, 156, 255, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


})(jQuery);

