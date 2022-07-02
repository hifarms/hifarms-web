//Setting variable
const addItem = document.querySelector('.admin-add-pic');
const deleteItem = document.querySelectorAll('.delete-admin');
const editIcon = document.querySelectorAll('.edit-icon');

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


//Edit Modal
editIcon.forEach((edit)=>{
  edit.addEventListener('click', ()=>{

    let itemName = edit.parentElement.parentElement.querySelector('h1');
    let itemPrice = edit.parentElement.parentElement.querySelector('.h3-dashboard');
    let itemLocation = edit.parentElement.parentElement.querySelector('.location');
    let itemPercentage = edit.parentElement.parentElement.querySelector('.percentage-sold');

    const editItemModal = document.querySelector('.edit-add-item')
    editItemModal.innerHTML = `
    <div class="admin-add-item-container">
    <div class="close-edit-item">x</div>
    <h1>Edit Item</h1>
    <label class="class-name">Name</label> <br>
    <input type="text"placeholder="Enter item name" value="${itemName.innerHTML}" class="name">
   <div class="category-percentage-flex">
                <div class="category" style="width:55%; margin-right: 20px;">
                    <label>Category</label> <br> 
                    <select class="category-select add-item">
                        <option>${itemName.innerHTML}</option>
                        <option>Livestock</option>
                        <option>Meat Breeding</option>
                        <option>Cattle Farming</option>
                    </select>
                </div>
                <div class="percentage">
                    <label>Percentage Sold(%)</label>  <br>
                    <select>
                        <option>${itemPercentage.innerHTML}</option>
                        <option>10%</option>
                        <option>40%</option>
                        <option>60%</option>
                        <option>80%</option>
                        <option>100%</option>
                    </select>
                </div>
            </div>
    <div class="price-image-flex">
        <div class="price">
            <label>Item Price(₦)</label> <br>
             <input type="text" value="${itemPrice.innerHTML}" placeholder="Enter Price...">
        </div>
        <div class="image">
            <label style="margin-left: 20px;">Image</label> <br>
            <input type="file" class="category-select">
        </div>
    </div>
    <label class="admin-location">Location</label> <br>
    <select class="admin-location-input">
        <option>${itemLocation.innerHTML}</option>
        <option>Sokoto</option>
        <option>Kebbi</option>
        <option>Zamfara</option>
    </select> <br>
    <div class="button-admin-container">
        <button class="add-item-submit">Update</button>
    </div>
</div>
    `;
    let overlayEffect = document.querySelector('.overlay');
       
    overlayEffect.style.display = 'block';
    editItemModal.style.display = 'block';

    //Close Modal
    let closeEditModal = editItemModal.querySelector('.close-edit-item'); 
    closeEditModal.addEventListener('click', ()=>{
      overlayEffect.style.display = 'none';
      editItemModal.style.display = 'none';
    });


  })
})

