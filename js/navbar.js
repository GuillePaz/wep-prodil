export function NavBar(){


    const navbar = $("nav");
    const body = $("body");
    let sizeNavbar = navbar.outerHeight();

    new ResizeSensor(body,()=>{
        body.css("padding-top", 0);
    });


}
    
    export default NavBar;