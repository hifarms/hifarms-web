const openSellModal = document.querySelector('.farmer-section');

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