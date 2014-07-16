$(document).ready(function () {
    Cufon.replace('#main-menu > ul > li > a');
    Cufon.replace('#banner-1 .slider a');
    Cufon.replace('.dc-1, .dc-2');
    Cufon.replace('h1, h2, h3, h4, h5, #content h6');
    Cufon.replace('.button-a button, .button-b button');
    Cufon.replace('table.type-2 th .title, table.type-2 th .subtitle');
    var ie7 = (document.all && !window.opera && window.XMLHttpRequest) ? true : false;
    
    if (ie7 == false) {
        Cufon.replace('.toggle-2 li > span');    
    }
    
    Cufon.replace('.form label, .submit');
});
