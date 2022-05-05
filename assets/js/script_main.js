// function chimage(url) {
//     document.getElementById('b').style.content = "url(" + url + ")";
// }

// function chimage2(url) {
//     document.getElementById('d').style.content = "url(" + url + ")";
// }


window.onload = function() {

    // Dark-Light mode switch
    // 0 ist light mode
    // 1 ist dark  mode

    new_color = localStorage.getItem("color_mode") == "1" ? "0" : "1";
    localStorage.setItem("color_mode", new_color);
    switching();

    let switch_mode = document.querySelector('#mode_switch');
    
    switch_mode.addEventListener("click", function(switch_mode) {
        switching();
    });
};

function switching() {
    console.log("von: " + localStorage.getItem("color_mode"));

    let switch_mode_new = document.querySelector('#mode_switch');
    let doc_body = document.querySelector('body');
    let text_in_header = document.querySelector('.fs-4');

    switch (localStorage.getItem("color_mode")) {
        case null || "1":
            // light mode
            localStorage.setItem("color_mode", "0");
            switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"moon_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#moon\"/></svg>";
            doc_body.classList.remove("dark");
            text_in_header.classList.remove("dark");
            // $('.icon-square').each(function() {
            //     $(this).removeClass('dark_icon_square');
            // });
            // $('.nav-link').each(function() {
            //     $(this).removeClass('dark_nav_link');
            //     $(this).addClass('light_nav_link');
            // });
            // $('.nav-item').each(function() {
            //     $(this).removeClass('dark_nav_item');
            //     $(this).addClass('light_nav_item');
            // });
            // $('.fs-4').each(function() {
            //     $(this).removeClass('dark_fs_4');
            // });
            // $('.text-muted').each(function() {
            //     $(this).removeClass('dark_text_muted');
            // });
            // $('.modal-content').each(function() {
            //     $(this).css("background", "#fff");
            // });
            // $('.album').each(function() {
            //     $(this).addClass('bg-light');
            //     $(this).removeClass('bg-dark');
            // });
            // $(".card").css("background-color", "white");
            // $(".btn-sm").css("color", "black");
            // $('#body').css("background", "#fff");
            break;
        case "0":
            // dark mode
            localStorage.setItem("color_mode", "1");
            switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"sun_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#sun\"/></svg>";
            doc_body.classList.add("dark");
            text_in_header.classList.add("dark");
            // $('.icon-square').each(function() {
            //     $(this).addClass('dark_icon_square');
            // });
            // $('.nav-link').each(function() {
            //     $(this).addClass('dark_nav_link');
            //     $(this).removeClass('light_nav_link');
            // });
            // $('.nav-item').each(function() {
            //     $(this).addClass('dark_nav_item');
            //     $(this).removeClass('light_nav_item');
            // });
            // $('.fs-4').each(function() {
            //     $(this).addClass('dark_fs_4');
            // });
            // $('.text-muted').each(function() {
            //     $(this).addClass('dark_text_muted');
            // });
            // $('.modal-content').each(function() {
            //     $(this).css("background", "#131a1f");
            // });
            // $(".btn-close").css("background-color", "#fff");
            // $('.album').each(function() {
            //     $(this).removeClass('bg-light');
            //     $(this).addClass('bg-dark');
            // });
            // // $(".card-text").css("color", "black");
            // $(".card").css("background-color", "#131a1f");
            // $(".btn-sm").css("color", "white");
            // $(".accordion-body").css("color", "black");
            // $(".textarea_label").css("color", "black");
            // $('#body').css("background", "##131a1f");
            break;
        // case "1":
        //     // light mode
        //     localStorage.setItem("color_mode", "0");
        //     switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"moon_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#moon\"/></svg>";
        //     doc_body.classList.remove("dark");
        //     text_in_header.classList.remove("dark");
        //     // $('.icon-square').each(function() {
        //     //     $(this).removeClass('dark_icon_square');
        //     // });
        //     // $('.nav-link').each(function() {
        //     //     $(this).removeClass('dark_nav_link');
        //     //     $(this).addClass('light_nav_link');
        //     // });
        //     // $('.nav-item').each(function() {
        //     //     $(this).removeClass('dark_nav_item');
        //     //     $(this).addClass('light_nav_item');
        //     // });
        //     // $('.fs-4').each(function() {
        //     //     $(this).removeClass('dark_fs_4');
        //     // });
        //     // $('.text-muted').each(function() {
        //     //     $(this).removeClass('dark_text_muted');
        //     // });
        //     // $('.modal-content').each(function() {
        //     //     $(this).css("background", "#fff");
        //     // });
        //     // $('.album').each(function() {
        //     //     $(this).addClass('bg-light');
        //     //     $(this).removeClass('bg-dark');
        //     // });
        //     // $(".card").css("background-color", "white");
        //     // $(".btn-sm").css("color", "black");
        //     // $('#body').css("background", "#fff");
        //     break;
        default:
            localStorage.setItem("color_mode", "0");
            break;
    }
    console.log("zu: " + localStorage.getItem("color_mode"));
}