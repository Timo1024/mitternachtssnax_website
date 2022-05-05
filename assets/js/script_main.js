initialize()

window.onload = function() {
    
    // Dark-Light mode switch
    // 0 ist light mode
    // 1 ist dark  mode

    switching_icon();

    let switch_mode = document.querySelector('#mode_switch');
    
    switch_mode.addEventListener("click", function() {
        switching();
        switching_icon()
    });
};

function switching_icon() {
    let switch_mode_new = document.querySelector('#mode_switch');
    switch (localStorage.getItem("color_mode")) {
        case "1":
            switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"sun_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#sun\"/></svg>";
            break;
        default:
            switch_mode_new.innerHTML = "<svg class=\"bi\" id=\"moon_icon\" width=\"1em\" height=\"1em\"><use xlink:href=\"#moon\"/></svg>";
            break;
    }
}

function initialize() {
    
    dark_mode = localStorage.getItem("color_mode") === "1" ? true : false;
    
    var fileref=document.createElement("link")
    fileref.setAttribute("rel", "stylesheet")
    fileref.setAttribute("type", "text/css")
    fileref.setAttribute("href", "./assets/css/dark.css")
    if(!dark_mode){fileref.setAttribute("disabled", "")}
    document.getElementsByTagName("head")[0].appendChild(fileref)
    
    var fileref2=document.createElement("link")
    fileref2.setAttribute("rel", "stylesheet")
    fileref2.setAttribute("type", "text/css")
    fileref2.setAttribute("href", "./assets/css/light.css")
    if(dark_mode){fileref2.setAttribute("disabled", "")}
    document.getElementsByTagName("head")[0].appendChild(fileref2)
    
}

function switching() {
    console.log("von: " + localStorage.getItem("color_mode"));

    switch (localStorage.getItem("color_mode")) {
        case "0":
            // dark mode
            localStorage.setItem("color_mode", "1");

            styles = document.getElementsByTagName("link")

            for(var i of styles){
                if(i.href.endsWith("light.css")){
                    i.disabled = true;
                }
                if(i.href.endsWith("dark.css")){
                    i.disabled = false;
                }
            }

            break;
        default:
            // light mode
            localStorage.setItem("color_mode", "0");

            styles = document.getElementsByTagName("link")
            
            for(var i of styles){
                if(i.href.endsWith("light.css")){
                    i.disabled = false;
                }
                if(i.href.endsWith("dark.css")){
                    i.disabled = true;
                }
            }

            break;
    }
    console.log("zu: " + localStorage.getItem("color_mode"));
}