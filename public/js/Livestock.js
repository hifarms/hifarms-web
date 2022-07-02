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
    showFarms.style.visibility = 'hidden';
    showFarms.style.transition = '0.4s all ease-in-out';

    const leftArrow = document.querySelector('.arrow-left-user');
    leftArrow.style.marginLeft = '180px';
    leftArrow.style.transition = '0.9s all ease-in-out';

    const background = document.querySelector('.view-existing-farm');
    background.style.backgroundColor = 'rgba(64, 74, 61, 1)';
    background.style.transition = '0.4s all ease-in-out';

    const market = document.querySelector('.existing-farm');
    market.src = 'img/exisiting-mkt.png'
    market.style.transition = '0.9s all ease-in-out';

    const blab = document.querySelector('.blab');
    blab.style.color = '#fff';
    blab.style.transition = '0.9s all ease-in-out';

    const line = document.querySelector('.line-add');
    line.style.marginRight = '25px'
    line.style.visibility = 'visible'
    line.style.transition = '0.9s all ease-in-out';

    const options = document.querySelector('.types-farming');
    line.style.marginRight = '16px'
    options.style.visibility = 'visible'
    options.style.transition = '0.9s all ease-in-out';
}

showFarms.addEventListener('click', displayFarms)
showAddFarm.addEventListener('click', showOption)
addNewFarm.addEventListener('click', openModal)