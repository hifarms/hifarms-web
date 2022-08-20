const eyeIcon = document.querySelectorAll('.eye-icon');
//const sendButton = document.querySelector('.span-class');


eyeIcon.forEach((eye)=>{
    eye.addEventListener('click', (e)=>{
        e.preventDefault();
        //Display modal
        let overlayEffect = document.querySelector('.overlay');
        overlayEffect.style.display = 'block';
    
        let mdl = document.querySelector('.eye-modal');
        mdl.style.display = 'block';
    
            //Close Modal
            let closeEditModal = document.querySelector('.eye-modal-close'); 
            closeEditModal.addEventListener('click', ()=>{
              overlayEffect.style.display = 'none';
              mdl.style.display = 'none';
            });   
    })
})