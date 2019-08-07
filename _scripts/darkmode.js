function darkmode(){
    body = document.getElementById("body");
    header = document.getElementById("header");
    footer = document.getElementById("footer");
    section = document.querySelector("section");
  

    moon = document.getElementById("moon");
    sun = document.getElementById("sun");

    body.style.backgroundColor = "#272727";
    body.style.color = "#fff";
    header.style.backgroundColor = "#121212";
    footer.style.backgroundColor = "#121212";
    section.style.backgroundColor = "#121212"

    moon.style.display = "none";
    sun.style.display = "block";
}

function lightmode(){
    body = document.getElementById("body");
    header = document.getElementById("header");
    footer = document.getElementById("footer");
    section = document.querySelector("section");

    moon = document.getElementById("moon");
    sun = document.getElementById("sun");

    body.style.backgroundColor = "#ddd";
    body.style.color = "#000";
    header.style.backgroundColor = "#fff";
    footer.style.backgroundColor = "#fff";
    section.style.backgroundColor = "#fff"

    moon.style.display = "block";
    sun.style.display = "none";

    
}