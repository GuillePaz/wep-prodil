let minimo = $("nav").outerHeight()*2;

$(document).ready( ()=>{
   
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