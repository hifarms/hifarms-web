const addItem = document.querySelector('.admin-add-pic');
const submitButton = document.querySelector('.span-class');
const deleteItem = document.querySelectorAll('.delete-admin');
const editIcon = document.querySelectorAll('.edit-icon');
const addStatus = document.querySelector('.add-status-btn');
const addedCart = document.querySelectorAll('.button-invest');
const addLoaderBtn = document.querySelector('.add-admin-dash')

//add event listeners
addedCart.forEach((cart) => {
    cart.addEventListener('click', (e) => {
        e.preventDefault();

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        let addToCart = document.querySelector('.added-successfully');
        addToCart.style.display = 'block';

        setTimeout(() => {
            //let addedClass = document.querySelector('.added-successfully');
            addToCart.style.display = 'none'
        }, 2500)

    })
})

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
        item.src = 'img/admin-delete.png'
    })
    item.addEventListener('mouseout', () => {
        item.src = 'img/delete-edit.png'
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
        edit.src = 'img/edit-admin-dashboard.png'
    })
    edit.addEventListener('mouseout', () => {
        edit.src = 'img/edit-fade.png'
    })
    edit.addEventListener('click', () => {

        let itemName = edit.parentElement.parentElement.parentElement.querySelector('h1');
        let itemPrice = edit.parentElement.parentElement.parentElement.querySelector('.h3-dashboard');
        let itemLocation = edit.parentElement.parentElement.parentElement.querySelector('.location');
        let itemPercentage = edit.parentElement.parentElement.parentElement.querySelector('.percentage-sold');
        const editItemModal = document.querySelector('.edit-add-item');

        editItemModal.innerHTML = `
    <div class="edit-item-i-want-to-sell">
    <div class="admin-add-item-container">
        <div class="close-edit-item close-edit-want-to-sell">x</div>
        <h1>Edit Item</h1>
        <label class="class-name">Name</label> <br>
        <input type="text"placeholder="Enter item name" value="${itemName.innerHTML}" class="name">
       <div class="category-percentage-flex">
                    <div class="category" style="width:55%; margin-right: 20px;">
                        <label>Status</label> <br> 
                        <select class="category-select add-item">
                            <option>Out of Stock</option>
                            <option>Sold Out</option>
                            <option>New</option>
                        </select>
                    </div>
                    <div class="percentage">
                        <label>Percentage Sold(%)</label>  <br>
                        <select>
                        <option>${itemName.innerHTML}</option>
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
        <div class="button-admin-container"  style="margin-top: 30px;">
            <button class="add-item-submit admin-dash-submit"><span style="padding-left:39px ;padding-right: 39px;" class="edit-want-to-sell-span">Update</span>  <img class="loader loader-edit" src="../img/loader-hifarm.gif" alt="#"> </button>
        </div>
    </div>
 </div>
    `;

        let editMain = document.querySelector('.edit-want-to-sell-span');


        editMain.addEventListener('click', (e) => {

            e.preventDefault();

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

submitButton.addEventListener('click', addLoader);
addLoaderBtn.addEventListener('click', addLoaderHover)