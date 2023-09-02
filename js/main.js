import { footer } from "./footer.js";
import { ajaxContacto } from "./ajaxContacto.js";

footer();
$(document).ready(function () {



  /*function loadScript(url) {
  
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = "./js/" + url + ".js";
    head.appendChild(script);
  
  } */




let minimo = $("nav").outerHeight() * 2;
/*let footerH = $("footer").outerHeight(true);
let htmlH = $("html").outerHeight(true);
let bodyH = $("body").outerHeight(true);
   if(htmlH>bodyH){
    $("footer").css("margin-top",(htmlH-bodyH+(footerH/2))+"px");
   }*/
/*$(document).scroll(() => {
  const navegador = $("html").scrollTop();
  let navmenu = $("nav");
  if (navegador < minimo) {
    navmenu.addClass("sticky-top");
  }
  else {
    navmenu.removeClass("sticky-top");
  }
});*/



function getParam(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
  return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var URL = $(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1);

if (URL == "contactanos") {

  ajaxContacto();
}
//loadScript("navbar");
//loadScript("footer");




});


