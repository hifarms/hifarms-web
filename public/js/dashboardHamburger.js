const hamburger = document.querySelector('.hamburger1');
 let openHamburger = true;
 console.log(444);
 hamburger.addEventListener('click', ()=>{
    console.log(333);
    if(openHamburger){
        let hamburgerModal = document.querySelector('.dashboard-hamburger');
        hamburgerModal.style.left = '0%';
        hamburgerModal.style.transition = '0.6s all ease-in-out'
        setTimeout(()=>{
            hamburger.src = 'http://127.0.0.1:8000/img/cancel-hamburger.svg'
        }, 400)
        openHamburger =  false
    } else{
        let hamburgerModal = document.querySelector('.dashboard-hamburger');
        hamburgerModal.style.left = '-115%';
        hamburgerModal.style.transition = '0.6s all ease-in-out'
        setTimeout(()=>{
            hamburger.src = 'http://127.0.0.1:8000/img/hamburger.svg'
        }, 400)
        openHamburger = true;
    }
 })