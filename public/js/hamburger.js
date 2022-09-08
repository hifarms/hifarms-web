const hamburger = document.querySelector('.hamburger');
 let openHamburger = true;
 hamburger.addEventListener('click', ()=>{

    if(openHamburger){
        let hamburgerModal = document.querySelector('.hamburger-modal');
        hamburgerModal.style.top = '7%';
        hamburgerModal.style.transition = '1.5s all ease-in-out'
        setTimeout(()=>{
            hamburger.src = 'img/cancel-hamburger.svg'
        }, 900)
        openHamburger =  false
    } else{
        let hamburgerModal = document.querySelector('.hamburger-modal');
        hamburgerModal.style.top = '-1250%';
        hamburgerModal.style.transition = '1.5s all ease-in-out'
        setTimeout(()=>{
            hamburger.src = 'img/hamburger.svg'
        }, 500)
        openHamburger = true;
    }
 })