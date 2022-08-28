const investBtn = document.querySelectorAll('.investBtn');
const submitButton = document.querySelector('.span-class');

investBtn.forEach((btn)=>{{
    btn.addEventListener('click', (e)=>{
      e.preventDefault()
       let InvestModal = document.querySelector('.invest-modal');
       let overlay = document.querySelector('.overlay');
       InvestModal.style.display = 'block';
       overlay.style.display = 'block';
       let closeModal = document.querySelector('.add-user-close');
       closeModal.addEventListener('click', ()=>{
        InvestModal.style.display = 'none';
        overlay.style.display = 'none';
       })
    })
}});

const addLoader = (e)=>{
    e.preventDefault();
  
    let submitButton = document.querySelector('.span-class');
    let loader = document.querySelector('.loader-span');
  
    submitButton.style.display = 'none'
    loader.style.display = 'block';
    
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  
    setTimeout(()=>{
       let addItemModal = document.querySelector('.admin-add-item');
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
  
  submitButton.addEventListener('click', addLoader);