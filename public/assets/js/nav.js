window.onload=function() {

        var buttonHamburgeur = document.getElementById('btn-hamburgeur')
        buttonHamburgeur.addEventListener('click', function () {
                gsap.to('.menu-mobile', { duration: 0.5, ease: "expo.out", right :'0%'});
        });


        var buttonHamburgeurClose = document.getElementById('close-mobile-menu')
        buttonHamburgeurClose.addEventListener('click', function () {
                gsap.to('.menu-mobile', { duration: 0.5, ease: "expo.out", right :'-100%'});
        });


}