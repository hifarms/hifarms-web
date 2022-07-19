const walletBtn = document.querySelector('.wallet-ledge-btn');
const sendButton = document.querySelector('.span-class');


walletBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    //Display modal
    let overlayEffect = document.querySelector('.overlay');
    overlayEffect.style.display = 'block';

    let mdl = document.querySelector('.add-status-modal');
    mdl.style.display = 'block';

        //Close Modal
        let closeEditModal = document.querySelector('.close-status'); 
        closeEditModal.addEventListener('click', ()=>{
          overlayEffect.style.display = 'none';
          mdl.style.display = 'none';
        });   
})

const addLoader = (e)=>{
    e.preventDefault();

    let submitButton = document.querySelector('.span-class');
    let loader = document.querySelector('.loader-span');
 
    submitButton.style.display = 'none'
    loader.style.display = 'block';
    
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
 
    setTimeout(()=>{
       let addItemModal = document.querySelector('.add-status-modal');
       let overlayEffect = document.querySelector('.overlay');
       let addedClass = document.querySelector('.added-successfully');
       let submitButton = document.querySelector('.span-class');
       let loader = document.querySelector('.loader-span');
    
       submitButton.style.display = 'block'
       loader.style.display = 'none';
       overlayEffect.style.display = 'none';
       addItemModal.style.display = 'none';
       addedClass.style.display = 'block';
 
       setTimeout(()=>{
          let addedClass = document.querySelector('.added-successfully');
          addedClass.style.display = 'none'
       }, 2500)
       
    }, 1500)
 
 }

 sendButton.addEventListener('click', addLoader);
