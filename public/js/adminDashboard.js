const displayStatistics = document.querySelector('.info-1');
const addNewProduct = document.querySelector('.add-new-product');
let submitButton = document.querySelector('.span-class');

const openSettings = () => {
   const settings = window.open('adminSettings.html');
   
   settings.onload = function (){
      const manageUsers = settings.document.querySelector('.display-manage');
      const generalSettings = settings.document.querySelector('.display-general');
      const statistics = settings.document.querySelector('.display-stats');
      let stats = settings.document.querySelector('.stars');
  
      let currentClass = settings.document.querySelector('.current');
      if(currentClass){
         currentClass.classList.remove('current')
         stats.classList.add('current')
      }

      manageUsers.style.display = 'none';
      statistics.style.display = 'block'
      generalSettings.style.display = 'none';
      
    }
}

displayStatistics.addEventListener('click', openSettings)

//Add new product
const openModal = () => {
    let addItemModal = document.querySelector('.admin-add-item');
    let overlayEffect = document.querySelector('.overlay');
     
    overlayEffect.style.display = 'block';
    addItemModal.style.display = 'block';

    const closeItem = document.querySelector('.close-add-item');

    closeItem.addEventListener('click', ()=>{
      overlayEffect.style.display = 'none';
      addItemModal.style.display = 'none';
    })
}

const addLoader = ()=>{
   let submitButton = document.querySelector('.span-class');
   let loader = document.querySelector('.loader');

   submitButton.style.display = 'none'
   loader.style.display = 'block';

   setTimeout(()=>{
      let addItemModal = document.querySelector('.admin-add-item');
      let overlayEffect = document.querySelector('.overlay');
      let addedClass = document.querySelector('.added-successfully');
      let submitButton = document.querySelector('.span-class');
      let loader = document.querySelector('.loader');
   
      submitButton.style.display = 'block'
      loader.style.display = 'none';
      overlayEffect.style.display = 'none';
      addItemModal.style.display = 'none';
      addedClass.style.display = 'block'

      setTimeout(()=>{
         let addedClass = document.querySelector('.added-successfully');
         addedClass.style.display = 'none'
      }, 2500)
      
   }, 1500)

}

submitButton.addEventListener('click', addLoader)
addNewProduct.addEventListener('click', openModal)