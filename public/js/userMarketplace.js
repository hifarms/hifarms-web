const openSellModal = document.querySelector('.farmer-section');
const submitButton = document.querySelector('.span-class');

//add event listeners
openSellModal.addEventListener('click', ()=>{
    let addItemModal = document.querySelector('.admin-add-item');
    let overlayEffect = document.querySelector('.overlay');
     
    overlayEffect.style.display = 'block';
    addItemModal.style.display = 'block';

    const closeItem = document.querySelector('.close-add-item');

    closeItem.addEventListener('click', ()=>{
      overlayEffect.style.display = 'none';
      addItemModal.style.display = 'none';
    })
})

//Add notifications
const addCart = document.querySelectorAll('.add-card');
console.log(addCart);

addCart.forEach((add)=>{
  add.addEventListener('click', ()=>{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    let added = document.querySelector('.added-successfully');
    added.style.display = 'block';

    setTimeout(()=>{
      added.style.display = 'none';
    }, 1500)
  })
})

const addLoader = (e)=>{
  e.preventDefault();

  let submitButton = document.querySelector('.span-class');
  let loader = document.querySelector('.loader-span');

  submitButton.style.display = 'none'
  loader.style.display = 'block';
  
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  e.submit()
  setTimeout(()=>{
     let addItemModal = document.querySelector('.admin-add-item');
     let overlayEffect = document.querySelector('.overlay');
     let addedClass = document.querySelector('.sell-successfully');
     let submitButton = document.querySelector('.span-class');
     let loader = document.querySelector('.loader-span');
  
     submitButton.style.display = 'block'
     loader.style.display = 'none';
     overlayEffect.style.display = 'none';
     addItemModal.style.display = 'none';
     addedClass.style.display = 'block';

     setTimeout(()=>{
        let addedClass = document.querySelector('.sell-successfully');
        addedClass.style.display = 'none'
     }, 2500)
     
  }, 1500)

}

submitButton.addEventListener('click', addLoader);