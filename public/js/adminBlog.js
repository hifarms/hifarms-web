//Declaring Variables
const submitButton = document.querySelector(".span-class");
const editButton = document.querySelector('.edit-want-to-sell-span')
const addNewBlog = document.querySelectorAll('.add-new-blog');
const allBlogEdit = document.querySelectorAll('.blog-edit');
const allBlogdelete = document.querySelectorAll('.blog-delete');
const allBlogDraft = document.querySelectorAll('.blog-draft');
const settingsOption = document.querySelectorAll('.settings-heading');
const publishedBlogs = document.querySelector('.published-blogs');
const DraftedBlogs = document.querySelector('.drafted-blogs');
const TrashedBlogs = document.querySelector('.trashed-blogs');


//Functions
addNewBlog.forEach((button) => {
    button.addEventListener('click', () => {
        let addItemModal = document.querySelector('.admin-add-item');
        let overlayEffect = document.querySelector('.overlay');

        overlayEffect.style.display = 'block';
        addItemModal.style.display = 'block';

        const closeItem = document.querySelector('.close-modal');

        closeItem.addEventListener('click', () => {
            overlayEffect.style.display = 'none';
            addItemModal.style.display = 'none';
        })
    })
})

settingsOption.forEach((setting) => {
    setting.addEventListener('click', (e) => {
        if (e.target.innerText[0] === 'P') {
            let currentClass = document.querySelector('.currently');
            currentClass.classList.remove('currently')
            e.target.classList.add('currently')

            TrashedBlogs.style.display = 'none';
            DraftedBlogs.style.display = 'none';
            publishedBlogs.style.display = 'block';
        } else if (e.target.innerText[0] === 'D') {
            let currentClass = document.querySelector('.currently');
            currentClass.classList.remove('currently')
            e.target.classList.add('currently')

            TrashedBlogs.style.display = 'none';
            DraftedBlogs.style.display = 'block';
            publishedBlogs.style.display = 'none';
        } else if (e.target.innerText[0] === 'T') {
            let currentClass = document.querySelector('.currently');
            currentClass.classList.remove('currently');
            e.target.classList.add('currently');

            TrashedBlogs.style.display = 'block';
            DraftedBlogs.style.display = 'none';
            publishedBlogs.style.display = 'none';
        }

    })
})

allBlogDraft.forEach((item) => {
    item.addEventListener('mouseover', () => {
        item.src = 'img/draft-hover-blog.png';
    })
    item.addEventListener('mouseout', () => {
        item.src = 'img/blog-draft.png';
    })

    item.addEventListener('click', () => {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        let notification = document.querySelector('.moved-to-draft');
        notification.style.display = 'block';

        setTimeout(() => {
            let notification = document.querySelector('.moved-to-draft');
            notification.style.display = 'none'
        }, 1500)
    })
})

allBlogEdit.forEach((edit) => {
    edit.addEventListener('click', (e) => {
        e.preventDefault()
        let card = e.target.parentElement.parentElement.parentElement;
        console.log(card)

        let editModal = document.querySelector('.edit-modal');
        let overlay = document.querySelector('.overlay');

        editModal.style.display = 'block'
        overlay.style.display = 'block'

        const closeItem = document.querySelector('.close-blogedit-modal');

        closeItem.addEventListener('click', () => {
            overlay.style.display = 'none';
            editModal.style.display = 'none';
        })
    })
})

allBlogdelete.forEach((item) => {
    item.addEventListener('mouseover', () => {
        item.src = 'img/delete-hover-blog.png';
    })
    item.addEventListener('mouseout', () => {
        item.src = 'img/blog-delete.png';
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

            let addedClass = document.querySelector('.moved-successfully');
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
            let itemCard = item.parentElement.parentElement;
            //console.log(itemCard);
            itemCard.remove()
        })
    })
})

const addEditLoader = (e) => {
  

    let submitButton = document.querySelector('.edit-want-to-sell-span');
    let loader = document.querySelector('.loader-edit');

    submitButton.style.display = 'none'
    loader.style.display = 'block';

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    setTimeout(() => {
        let addItemModal = document.querySelector('.edit-modal');
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
}


const addLoader = () => {
    let submitButton = document.querySelector('.span-class');
    let loader = document.querySelector('.loader');

    submitButton.style.display = 'none'
    loader.style.display = 'block';

    setTimeout(() => {
        let addItemModal = document.querySelector('.admin-add-item');
        let overlayEffect = document.querySelector('.overlay');
        let addedClass = document.querySelector('.added-successfully');
        let submitButton = document.querySelector('.span-class');
        let loader = document.querySelector('.loader');


        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        submitButton.style.display = 'block'
        loader.style.display = 'none';
        overlayEffect.style.display = 'none';
        addItemModal.style.display = 'none';
        addedClass.style.display = 'block'

        setTimeout(() => {
            let addedClass = document.querySelector('.added-successfully');
            addedClass.style.display = 'none'
        }, 2500)

    }, 1500)

}

submitButton.addEventListener('click', addLoader);
editButton.addEventListener('click', addEditLoader);
//addNewBlog.addEventListener('click', showModal);