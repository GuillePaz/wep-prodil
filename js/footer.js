export function footer(){


const html = $("html");
const body = $("body");
new ResizeSensor(body,footerD);

function footerD(){
    if(html.outerHeight() >= body.outerHeight()){
        $("footer").addClass("footer-p");
    }
    else{
        $("footer").removeClass("footer-p");
    }
}
}

export default footer;
