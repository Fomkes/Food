document.addEventListener('DOMContentLoaded', () => {
    'use strict'



    //Place all your custom Javascript functions and plugin calls below this line
    function init_template(){
        //Caching Global Variables
        let i, e, el, evt, event; //https://www.w3schools.com/js/js_performance.asp








        //Auto Activate OffCanvas
        var autoActivateMenu = document.querySelectorAll('[data-auto-activate]')[0];
        if(autoActivateMenu){
            setTimeout(function(){
                var autoActivate = new bootstrap.Offcanvas(autoActivateMenu)
                autoActivate.show();
            },600)
        }

        //Open Offcanvas and Hide Automatically
        var autoHide = document.querySelectorAll('[data-auto-hide-target]')
        autoHide.forEach(el => el.addEventListener('click',e =>{
            var offCanvasID = el.getAttribute('data-auto-hide-target');
            var offCanvasTime = el.getAttribute('data-auto-hide-time');
            var autoHideMenu = document.querySelectorAll(offCanvasID)[0];
            var canvasIdenter = new bootstrap.Offcanvas(autoHideMenu);
            canvasIdenter.show();
            setTimeout(function(){
                canvasIdenter.hide();
            },offCanvasTime)
        }));




        //Activating Off Canvas
        var offCanvasBoxes = document.querySelectorAll('.offcanvas');
        if(offCanvasBoxes){
            setTimeout(function(){
                offCanvasBoxes.forEach(function(e){
                    e.style.display ="block";
                })
            },250)
        }

        //Remove Bootstrap OffCanvas Overflow on Load
        setTimeout(function(){
            var body = document.body;
            body.removeAttribute('style')
        },100);

    }


    init_template();
});