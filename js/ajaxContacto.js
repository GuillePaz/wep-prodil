export function ajaxContacto(){
    $("#contactar").submit(function (e) { 
        e.preventDefault();
        
    });
    $.post("./", data,
        function (data, textStatus, jqXHR) {
            
        },
        "dataType"
    );
}

export default ajaxContacto;