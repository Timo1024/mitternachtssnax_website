window.onload = function() {
    
    // Dark-Light mode switch
    // 0 ist light mode
    // 1 ist dark  mode

    new_color = localStorage.getItem("color_mode") == "1" ? "0" : "1";
    localStorage.setItem("color_mode", new_color);
    switching_icon();

    let switch_mode = document.querySelector('#mode_switch');
    
    switch_mode.addEventListener("click", function() {
        switching();
    });
};

new_color = localStorage.getItem("color_mode") == "1" ? "0" : "1";
localStorage.setItem("color_mode", new_color);
switching();

function switching_icon() {
    let switch_mode_new = document.querySelector('#mode_switch');
    switch (localStorage.getItem("color_mode")) {
        case "0":
            switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"sun_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#sun\"/></svg>";
            break;
        default:
            switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"moon_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#moon\"/></svg>";
            break;
    }
}

function switching() {
    console.log("von: " + localStorage.getItem("color_mode"));

    // let switch_mode_new = document.querySelector('#mode_switch');
    // let doc_body = document.querySelector('body');
    // let text_in_header = document.querySelector('.fs-4');
    // let menu_top = document.getElementsByClassName('nav-link');

    switch (localStorage.getItem("color_mode")) {
        case "0":
            // dark mode
            localStorage.setItem("color_mode", "1");
            // switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"sun_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#sun\"/></svg>";
            // doc_body.classList.add("dark");
            // text_in_header.classList.add("dark");
            // for (var i of menu_top){i.classList.add("dark")};

            break;
        default:
            // light mode
            localStorage.setItem("color_mode", "0");
            // switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"moon_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#moon\"/></svg>";
            // doc_body.classList.remove("dark");
            // text_in_header.classList.remove("dark");
            // for (var i of menu_top){i.classList.remove("dark")};

            break;
    }
    console.log("zu: " + localStorage.getItem("color_mode"));
}