//Setting variable
const addItem = document.querySelector('.admin-add-pic');
const deleteItem = document.querySelectorAll('.delete-admin')

//add event listeners
addItem.addEventListener('click', ()=>{
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

deleteItem.forEach((item)=>{
    item.addEventListener('click', (e)=>{
        let deleteModal = document.querySelector('.delete-modal');
        let overlayEffect = document.querySelector('.overlay');
       
        overlayEffect.style.display = 'block';
        deleteModal.style.display = 'block';

        const closeModal = document.querySelector('.close-delete-modal')
        
        closeModal.addEventListener('click', ()=>{
          overlayEffect.style.display = 'none';
          deleteModal.style.display = 'none';
        })

        const noCloseModal = document.querySelector('.no-delete-modal');

        noCloseModal.addEventListener('click', (e)=>{
            e.preventDefault();
            overlayEffect.style.display = 'none';
            deleteModal.style.display = 'none';
        })

        const yesCloseModal = document.querySelector('.yes-delete-modal');

        yesCloseModal.addEventListener('click', (e)=>{
            e.preventDefault()
            overlayEffect.style.display = 'none';
            deleteModal.style.display = 'none';
            let itemCard = item.parentElement.parentElement;
            itemCard.remove()
        })
    })
})