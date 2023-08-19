
html = $("html");
body = $("body");
new ResizeSensor(body,footer);

function footer(){
    if(html.outerHeight() >= body.outerHeight()){
        $("footer").addClass("footer-p");
    }
    else{
        $("footer").removeClass("footer-p");
    }
}

footer();