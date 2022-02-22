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
    if(document.getElementById('items')){
        new Sortable(document.getElementById('items'), {
        group: {
            name: 'qux',
            put: ['bar'],
        },
        animation: 250 ,
        });
    }
}

    $(document).pjax('a', '#pjax-container', {
        timeout: 10000
    });
$(document).on('pjax:send', function() {
    $('#pjax-container').css("filter","blur(10px)");
});
$(document).on('pjax:end', function() {
    $('#pjax-container').css("filter","blur(0px)");
});

$(".pjaxmenu a").click(function () {
    $(".pjaxmenu a").removeClass("active");
    $(this).addClass("active");
});

sortIt();
botsetting_js();
$(document).ajaxComplete(function () {
    /**function place */
    sortIt();
    botsetting_js();
});


//hossein ************************************

function botsetting_js(){

    $('.opt').click(function (ev) {
       var optionName = this.getAttribute('option_name');
       var optionId = this.getAttribute('option_id') * 1;
        if (optionId <= 5 && optionName != null ) {
            var result = hamgam(optionName);
            $('#items').append(result);
        }
        if (optionId === 7 && optionName != null ) {
            var result = survey(optionName);
            $('#items').append(result);
        }
        if (optionId === 6 && optionName != null ) {
            var result = voting(optionName);
            $('#items').append(result);
        }
    });


    $( "#items" ).on( "click", ".add-btn", function() {
        var newchg = this.parentElement.parentElement.firstChild.nextSibling;
        var placeholder = $(this).attr('add-placeholder');
        var result = inputNew(placeholder) ;
        $(newchg).append(result);
    });
    $( "#items" ).on( "click", ".remove-btn", function() {
        $('#input-add').remove(); 
    });
    

 }
 function inputNew(name) {
    return `<input class="form-control mb-3 border-0 bg-light input-add" id="input-add" type="text" placeholder="${name}" aria-label="default input example">` ;
}

function hamgam(name) {
    return `<div class="bg-white shadow-sm text-center rounded p-4 mt-4"> <details> <summary class="sum"> <h4>${name}</h4> </summary> <br><form class="d-md-flex ms-4"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example"> </form> <div class="d-flex"> <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button> </div></details> </div>` ;
}
function survey(name) {
    return `  <div class="bg-white shadow-sm text-center rounded p-4 mt-4"> <details> <summary class="sum"> <h4>نظرسنجی</h4> </summary> <br><form class="ms-4"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example"> <div class="d-md-flex col-lg-12"> <div class="col-lg-8 col-md-6"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="مورد گزینه" aria-label="default input example"> </div><div class="col-lg-4 col-md-6"> <button type="button" add-placeholder="مورد گزینه" class="btn btn-outline-success m-2 border-delet add-btn">افزودن مورد <i class="fa fa-plus ms-2"></i></button> <button type="button" class="btn btn-outline-danger m-2 border-delet remove-btn">حذف مورد <i class="fa fa-minus ms-2"></i></button> </div></div></form> <div class="d-flex"> <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button> </div></details> </div>` ;
}
function voting(name) {
    return `  <div class="bg-white shadow-sm text-center rounded p-4 mt-4"> <details> <summary class="sum"> <h4>${name}</h4> </summary> <br><form class="ms-4"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example"> <div class="d-md-flex col-lg-12"> <div class="col-lg-8 col-md-6 new_chq"> <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="نام کاندید" aria-label="default input example"> </div><div class="col-lg-4 col-md-6"> <button type="button" add-placeholder="نام کاندید" class="btn btn-outline-success m-2 border-delet add-btn">افزودن کاندید <i class="fa fa-plus ms-2"></i></button> <button type="button" class="btn btn-outline-danger m-2 border-delet remove-btn">حذف کاندید <i class="fa fa-minus ms-2"></i></button> </div></div></form> <div class="d-flex"> <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button> </div></details> </div>` ;
}


    //Profil Image Upload
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
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
    }, {offset: '80%'});


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
        nav : false
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

