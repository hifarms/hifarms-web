const addItem = document.querySelector('.admin-add-pic');
const submitButton = document.querySelector('.span-class');
const deleteItem = document.querySelectorAll('.delete-admin');
const editIcon = document.querySelectorAll('.edit-icon');
const addStatus = document.querySelector('.add-status-btn');
const addedCart = document.querySelectorAll('.button-invest');
const addLoaderBtn = document.querySelector('.add-admin-dash')

//add event listeners

const investBtn = document.querySelectorAll('.button-inves');


addedCart.forEach((btn)=>{{

    btn.addEventListener('click', (e)=>{
        e.preventDefault()
       let InvestModal = document.querySelector('.invest-modal');
       let overlay = document.querySelector('.overlay');
       InvestModal.style.display = 'block';
       overlay.style.display = 'block';
       document.querySelector('.investmentSelected').value = btn.id;
       let closeModal = document.querySelector('.add-user-close');
       closeModal.addEventListener('click', ()=>{
        InvestModal.style.display = 'none';
        overlay.style.display = 'none';
       })
    })
}});


addItem.addEventListener('click', () => {
    let addItemModal = document.querySelector('.admin-add-item');
    let overlayEffect = document.querySelector('.overlay');

    overlayEffect.style.display = 'block';
    addItemModal.style.display = 'block';

    const closeItem = document.querySelector('.close-add-item');

    closeItem.addEventListener('click', () => {
        overlayEffect.style.display = 'none';
        addItemModal.style.display = 'none';
    })
})

deleteItem.forEach((item) => {
    item.addEventListener('mouseover', () => {
        item.src = '../img/admin-delete.png'
    })
    item.addEventListener('mouseout', () => {
        item.src = '../img/delete-edit.png'
    })
    item.addEventListener('click', (e) => {
        let deleteModal = document.querySelector('.delete-modal');
        let overlayEffect = document.querySelector('.overlay');

        let mainDelete = document.querySelector('.main-delete');

        mainDelete.addEventListener('click', (e) => {
            e.preventDefault();

            let deleteModal = document.querySelector('.delete-modal');
            let overlay = document.querySelector('.overlay');

            deleteModal.style.display = 'none';
            overlay.style.display = 'none';

            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

            let addedClass = document.querySelector('.deleted-successfully');
            addedClass.style.display = 'block'

            setTimeout(() => {
                addedClass.style.display = 'none'
            }, 2500)
        })

        overlayEffect.style.display = 'block';
        deleteModal.style.display = 'block';

        const closeModal = document.querySelector('.close-delete-modal')

        closeModal.addEventListener('click', () => {
            overlayEffect.style.display = 'none';
            deleteModal.style.display = 'none';
        })

        const noCloseModal = document.querySelector('.no-delete-modal');

        noCloseModal.addEventListener('click', (e) => {
            e.preventDefault();
            overlayEffect.style.display = 'none';
            deleteModal.style.display = 'none';
        })

        const yesCloseModal = document.querySelector('.yes-delete-modal');

        yesCloseModal.addEventListener('click', (e) => {
            e.preventDefault()
            overlayEffect.style.display = 'none';
            deleteModal.style.display = 'none';
            let itemCard = item.parentElement.parentElement.parentElement;
            //console.log(itemCard);
            itemCard.remove()
        })
    })
})


//Edit Modal
editIcon.forEach((edit) => {
    
    edit.addEventListener('mouseover', () => {
        edit.src = '../img/edit-admin-dashboard.png'
    })
    edit.addEventListener('mouseout', () => {
        edit.src = '../img/edit-fade.png'
    })
    edit.addEventListener('click', () => {
        
        let itemName = edit.parentElement.parentElement.parentElement.querySelector('h1');
        let itemPrice = edit.parentElement.parentElement.parentElement.querySelector('.h3-dashboard');
        let itemLocation = edit.parentElement.parentElement.parentElement.querySelector('.lc');
        let qs = edit.parentElement.parentElement.parentElement.querySelector('.qs').value;
        const editItemModal = document.querySelector('.edit-add-item');
        let category = document.querySelector('.cs');
        editItemModal.innerHTML = `
        <form method="post" action="/admin/farm-update/${edit.id}" enctype="multipart/form-data">
    <div class="edit-item-i-want-to-sell">
    <div class="admin-add-item-container">
        <div class="close-edit-item close-edit-want-to-sell">x</div>
        <h1>Edit Item</h1>
        <label class="class-name">Name</label> <br>
        <input type="text"placeholder="Enter item name" value="${itemName.innerHTML}" class="name" name="name">
       <div class="category-percentage-flex">
                    <div class="category" style="width:55%; margin-right: 20px;">
                        ${category.innerHTML}
                    </div>
                    <div class="price quant-invest">
                            <label>Quantity</label> <br>
                            <input type="number" placeholder="Quantity" value="${qs}" name="i_units">
                        </div>
                </div>
        <div class="price-image-flex">
            <div class="price">
                <label>Item Price(₦)</label> <br>
                 <input type="text" name='unit_price' value="${Number(itemPrice.innerHTML.substring(1).replace(/,/g,''))}" placeholder="Enter Price...">
            </div>
            <div class="image">
                <label style="margin-left: 20px;">Image</label> <br>
                <input type="file" class="category-select" name='image'>
            </div>
        </div>
        <input type='hidden'  value="${$('meta[name="_token"]').attr('content')}" name='_token' />
        <label class="admin-location">Location</label> <br>
        <input class="admin-location-input" value=' ${itemLocation.innerHTML}' name="location">
        
       
        <div class="button-admin-container"  style="margin-top: 30px;">
            <button type="submit" class="add-item-submit admin-dash-submit"><span style="padding-left:39px ;padding-right: 39px;" class="edit-want-to-sell-span">Update</span>  <img class="loader loader-edit" src="../../img/loader-hifarm.gif" alt="#"> </button>
        </div>
    </div>
 </div>
 </form>
    `;

        let editMain = document.querySelector('.edit-want-to-sell-span');


        editMain.addEventListener('click', (e) => {

            let submitButton = document.querySelector('.edit-want-to-sell-span');
            let loader = document.querySelector('.loader-edit');

            submitButton.style.display = 'none'
            loader.style.display = 'block';

            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
           
            setTimeout(() => {
                let addItemModal = document.querySelector('.edit-add-item');
                let overlayEffect = document.querySelector('.overlay');
                let addedClass = document.querySelector('.edited-successfully');
                let submitButton = document.querySelector('.edit-want-to-sell-span');
                let loader = document.querySelector('.loader-edit');

                submitButton.style.display = 'block'
                loader.style.display = 'none';
                overlayEffect.style.display = 'none';
                addItemModal.style.display = 'none';
                addedClass.style.display = 'block';

                setTimeout(() => {
                    let addedClass = document.querySelector('.edited-successfully');
                    addedClass.style.display = 'none'
                }, 2500)

            }, 1500)

        })

        let overlayEffect = document.querySelector('.overlay');

        overlayEffect.style.display = 'block';
        editItemModal.style.display = 'block';

        //Close Modal
        let closeEditModal = editItemModal.querySelector('.close-edit-item');
        closeEditModal.addEventListener('click', () => {
            overlayEffect.style.display = 'none';
            editItemModal.style.display = 'none';
        });
    })
})

addStatus.addEventListener('click', (e) => {
    e.preventDefault();
    //Display modal
    let overlayEffect = document.querySelector('.overlay');
    overlayEffect.style.display = 'block';

    let mdl = document.querySelector('.add-status-modal');
    mdl.style.display = 'block';

    //Close Modal
    let closeEditModal = document.querySelector('.close-status');
    closeEditModal.addEventListener('click', () => {
        overlayEffect.style.display = 'none';
        mdl.style.display = 'none';
    });
})

const addLoader = (e) => {
    e.preventDefault();

    let submitButton = document.querySelector('.span-class');
    let loader = document.querySelector('.loader-span');

    submitButton.style.display = 'none'
    loader.style.display = 'block';

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    setTimeout(() => {
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

        setTimeout(() => {
            let addedClass = document.querySelector('.added-successfully');
            addedClass.style.display = 'none'
        }, 2500)

    }, 1500)

}

const addLoaderHover = (e) => {
    e.preventDefault();

    let submitButton = document.querySelector('.add-admin-dash');
    let loader = document.querySelector('.loader-add');

    submitButton.style.display = 'none'
    loader.style.display = 'block';

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    setTimeout(() => {
        
        let addItemModal = document.querySelector('.admin-add-item');
        let overlayEffect = document.querySelector('.overlay');
        let addedClass = document.querySelector('.category-added');
        let submitButton = document.querySelector('.add-admin-dash');
        let loader = document.querySelector('.loader-add');

        submitButton.style.display = 'block'
        loader.style.display = 'none';
        overlayEffect.style.display = 'none';
        addItemModal.style.display = 'none';
        addedClass.style.display = 'block';

        setTimeout(() => {
            //let addedClass = document.querySelector('.added-successfully');
            addedClass.style.display = 'none'
        }, 2500)

    }, 1500)

}

//submitButton.addEventListener('click', addLoader);
//addLoaderBtn.addEventListener('click', addLoaderHover)