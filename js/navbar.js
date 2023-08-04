let minimo = $("nav").outerHeight()*2;
let footerH = $("footer").outerHeight(true);
let htmlH = $("html").outerHeight(true);
let bodyH = $("body").outerHeight(true);
$(document).ready( ()=>{
   if(htmlH>bodyH){
    $("footer").css("margin-top",(htmlH-bodyH+(footerH/2))+"px");
   }
  $(document).scroll(()=>{
    const navegador = $("html").scrollTop();
    let navmenu = $("nav");
    if(navegador > minimo){
        navmenu.addClass("sticky-top");
    }
    else {
        navmenu.removeClass("sticky-top");
    }
  })
  
})

function getParam(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}