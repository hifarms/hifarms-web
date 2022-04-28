const hamburger = document.querySelector('.hamburger');
 let openHamburger = true;

 hamburger.addEventListener('click', ()=>{
    if(openHamburger){
        let hamburgerModal = document.querySelector('.hamburger-modal');
        hamburgerModal.style.top = '7%';
        hamburgerModal.style.transition = '0.6s all ease-in-out'
        setTimeout(()=>{
            hamburger.src = 'img/cancel-hamburger.svg'
        }, 400)
        openHamburger =  false
    } else{
        let hamburgerModal = document.querySelector('.hamburger-modal');
        hamburgerModal.style.top = '-100%';
        hamburgerModal.style.transition = '0.6s all ease-in-out'
        setTimeout(()=>{
            hamburger.src = 'img/hamburger.svg'
        }, 400)
        openHamburger = true;
    }
 })