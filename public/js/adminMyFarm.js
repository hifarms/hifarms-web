const editLoader = document.querySelector('.edit-want-to-sell-span');

const addEditLoader = (e)=>{
    e.preventDefault();

    let submitButton = document.querySelector('.edit-want-to-sell-span');
    let loader = document.querySelector('.loader-edit');
 
    submitButton.style.display = 'none'
    loader.style.display = 'block';
    
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
 
    setTimeout(()=>{
       let addItemModal = document.querySelector('.admin-add-item');
       let overlayEffect = document.querySelector('.overlay');
       let addedClass = document.querySelector('.added-successfully');
       let submitButton = document.querySelector('.edit-want-to-sell-span');
       let loader = document.querySelector('.loader-edit');
    
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

 editLoader.addEventListener('click', addEditLoader);