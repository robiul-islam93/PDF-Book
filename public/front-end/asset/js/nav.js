// $(document).ready(function(){
//     $('.navbar-togglers').click(function(){
//         $('.navbar-collapses').slideToggle(300);
//     });
    
//     smallScreenMenu();
//     let temp;
//     function resizeEnd(){
//         smallScreenMenu();
//     }

//     $(window).resize(function(){
//         clearTimeout(temp);
//         temp = setTimeout(resizeEnd, 100);
//         resetMenu();
//     });
// });


// const subMenus = $('.sub-menu');
// const menuLinks = $('.menu-link');

// function smallScreenMenu(){
//     if($(window).innerWidth() <= 992){
//         menuLinks.each(function(item){
//             $(this).click(function(){
//                 $(this).next().slideToggle();
//             });
//         });
//     } else {
//         menuLinks.each(function(item){
//             $(this).off('click');
//         });
//     }
// }

// function resetMenu(){
//     if($(window).innerWidth() > 992){
//         subMenus.each(function(item){
//             $(this).css('display', 'none');
//         });
//     }
// }


function openNav() {
    document.getElementById("mySidenav").style.width = "450px";
}
document.getElementById("mySidenav").style.width = "0";

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}