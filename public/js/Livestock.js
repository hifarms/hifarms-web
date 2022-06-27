const addNewFarm = document.querySelector('.add-new-farm-item');
const showAddFarm = document.querySelector('.eye-icon');
const showFarms = document.querySelector('.arrow-right-user')

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

const showOption = () => {
   let menu = document.querySelector('.add-farm-view-farm');

   menu.style.visibility = 'visible';
   menu.style.marginTop = '25px'
}

const displayFarms = () =>{
    showFarms.style.marginRight = '70px';
    showFarms.style.transition = '0.4s all ease-in-out'
}

showFarms.addEventListener('click', displayFarms)
showAddFarm.addEventListener('click', showOption)
addNewFarm.addEventListener('click', openModal)