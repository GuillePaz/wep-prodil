function loadScript(url){

    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = "./js/"+url+".js";
    head.appendChild(script);
}

loadScript("navbar");