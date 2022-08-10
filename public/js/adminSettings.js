const toggleSwitch = document.querySelector('#admin-chekbox');
const reset = document.querySelector('.reset-admin')
const settingsOption = document.querySelectorAll('.settings-heading');
const togglePassword = document.querySelectorAll('.toggle-password');
const changePassword = document.querySelector('.pass');
const manageUsers = document.querySelector('.display-manage');
const generalSettings = document.querySelector('.display-general');
const statistics = document.querySelector('.display-stats');
const inbox = document.querySelector('.inbox')
    if (toggleSwitch.checked === true) {
        let disable = document.querySelector('.disable');
        disable.textContent = 'Active';
        disable.style.color = '#8BC53E'
    } else {
        let disable = document.querySelector('.disable');
        disable.textContent = 'Disabled';
        disable.style.color = '#DAD6D6'
    }
}

toggleSwitch.addEventListener('click', toggle)


let resetBoolean = true;
const resetSettings = () => {
    if (resetBoolean) {
        let resetImage = document.querySelector('.reset-img');
        resetImage.src = "img/admin-reset.png";

        let resetText = document.querySelector('.res-h2');
        resetText.style.color = '#E53802';

        resetBoolean = false
    } else {
        let resetImage = document.querySelector('.reset-img');
        resetImage.src = "img/admin-reset-off.png";

        let resetText = document.querySelector('.res-h2');
        resetText.style.color = '#DAD6D6';

        resetBoolean = true
    }
}

reset.addEventListener('click', resetSettings)

settingsOption.forEach((setting) => {
    setting.addEventListener('click', (e) => {

        if (e.target.innerText === 'General Settings') {
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current')
            e.target.classList.add('current')

            statistics.style.display = 'none';
            manageUsers.style.display = 'none';
            inbox.style.display = 'none'
            generalSettings.style.display = 'block';
        } else if (e.target.innerText === 'Manage Users') {
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current')
            e.target.classList.add('current')

            statistics.style.display = 'none';
            manageUsers.style.display = 'block';
            inbox.style.display = 'none'
            generalSettings.style.display = 'none';
        } else if (e.target.innerText === 'Statistics') {
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current');
            e.target.classList.add('current');

            statistics.style.display = 'block';
            manageUsers.style.display = 'none';
            inbox.style.display = 'none'
            generalSettings.style.display = 'none';
        } else if (e.target.innerText === 'Inbox') {
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current');
            e.target.classList.add('current');

            statistics.style.display = 'none';
            manageUsers.style.display = 'none';
            generalSettings.style.display = 'none';
            inbox.style.display = 'block'
        }
    })
})

togglePassword.forEach((icon) => {
    let isToggled = false;
    icon.addEventListener('click', () => {
        if (!isToggled) {
            icon.src = 'img/visible.png';

            let input = icon.parentElement.querySelector('.pass-val')
            input.type = 'text';

            isToggled = true;
        } else if (isToggled == true) {
            icon.src = 'img/invisible.png';

            let input = icon.parentElement.querySelector('.pass-val')
            input.type = 'password';

            isToggled = false
        }
    })
});

const showPasswordModal = () => {
    let overlay = document.querySelector('.overlay');
    let changePasswordModal = document.querySelector('.change-password');

    overlay.style.display = 'block';
    changePasswordModal.style.display = 'block';

    //Close Modal
    const closeModal = document.querySelector('.close-add-item');
    closeModal.addEventListener('click', () => {
        let overlay = document.querySelector('.overlay');
        let changePasswordModal = document.querySelector('.change-password');

        overlay.style.display = 'none';
        changePasswordModal.style.display = 'none';
    })
}

changePassword.addEventListener('click', (e) => {
    e.preventDefault();
    showPasswordModal();
})

const editLoader = document.querySelector('.edit-want-to-sell-span');

const addEditLoader = (e) => {
    e.preventDefault();

    let submitButton = document.querySelector('.edit-want-to-sell-span');
    let loader = document.querySelector('.loader-edit');

    submitButton.style.display = 'none'
    loader.style.display = 'block';

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    setTimeout(() => {
        let addItemModal = document.querySelector('.admin-add-item');
        let overlayEffect = document.querySelector('.overlay');
        let addedClass = document.querySelector('.added-successfully');
        let submitButton = document.querySelector('.edit-want-to-sell-span');
        let loader = document.querySelector('.loader-edit');

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

editLoader.addEventListener('click', addEditLoader);

const saveLoader = document.querySelector('.save-changes');

saveLoader.addEventListener('click', (e) => {
    e.preventDefault()

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    let addedClass = document.querySelector('.save-successful');
    addedClass.style.display = 'block'

    setTimeout(() => {
        addedClass.style.display = 'none'
    }, 1500)
})

const addUserSetting = document.querySelector('.line-add-user');

addUserSetting.addEventListener('click', (e) => {
    e.preventDefault()
    let addUserModal = document.querySelector('.admin-add-user');
    let overlay = document.querySelector('.overlay');
    console.log(overlay);

    addUserModal.style.display = 'block';
    overlay.style.display = 'block';

    let closeModal = document.querySelector('.add-user-close');
    closeModal.addEventListener('click', () => {
        addUserModal.style.display = 'none';
        overlay.style.display = 'none';

    })
})

const editUserSetting = document.querySelectorAll('.edit-setting');

editUserSetting.forEach((editUser) => {
    editUser.addEventListener('mouseover', () => {
        editUser.src = 'img/edit-clicked-admin.png'
    })
    editUser.addEventListener('mouseout', () => {
        editUser.src = 'img/user-list-edit.png'
    })
    editUser.addEventListener('click', (e) => {
        e.preventDefault()
        let addUserModal = document.querySelector('.admin-edit-user');
        let overlay = document.querySelector('.overlay');
        console.log(overlay);

        addUserModal.style.display = 'block';
        overlay.style.display = 'block';

        let closeModal = document.querySelector('.edit-user-close');
        closeModal.addEventListener('click', () => {
            addUserModal.style.display = 'none';
            overlay.style.display = 'none';

        })

        const editUserBtn = document.querySelector('.edit-want-to-edit-span');

        //  editUserBtn.forEach((btn)=>{
        editUserBtn.addEventListener('click', (e) => {
                e.preventDefault();

                let submitButton = document.querySelector('.edit-want-to-edit-span');
                let loader = document.querySelector('.loader-user-edit');

                submitButton.style.display = 'none'
                loader.style.display = 'block';

                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;

                setTimeout(() => {
                    let addItemModal = document.querySelector('.admin-edit-user');
                    let overlayEffect = document.querySelector('.overlay');
                    let addedClass = document.querySelector('.added-successfully-2');
                    let submitButton = document.querySelector('.edit-want-to-edit-span');
                    let loader = document.querySelector('.loader-user-edit');

                    submitButton.style.display = 'block'
                    loader.style.display = 'none';
                    overlayEffect.style.display = 'none';
                    addItemModal.style.display = 'none';
                    addedClass.style.display = 'block';

                    setTimeout(() => {
                        let addedClass = document.querySelector('.added-successfully-2');
                        addedClass.style.display = 'none'
                    }, 2500)

                }, 1500)
            })
            // })
    })

    const addUserBtn = document.querySelector('.edit-want-to-add-span');

    const addUserLoader = (e) => {
        e.preventDefault();

        let submitButton = document.querySelector('.edit-want-to-add-span');
        let loader = document.querySelector('.loader-add');

        submitButton.style.display = 'none'
        loader.style.display = 'block';

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        setTimeout(() => {
            let addItemModal = document.querySelector('.admin-add-user');
            let overlayEffect = document.querySelector('.overlay');
            let addedClass = document.querySelector('.added-successfully-2');
            let submitButton = document.querySelector('.edit-want-to-add-span');
            let loader = document.querySelector('.loader-add');

            submitButton.style.display = 'block'
            loader.style.display = 'none';
            overlayEffect.style.display = 'none';
            addItemModal.style.display = 'none';
            addedClass.style.display = 'block';

            setTimeout(() => {
                let addedClass = document.querySelector('.added-successfully-2');
                addedClass.style.display = 'none'
            }, 2500)

        }, 1500)
    }

    addUserBtn.addEventListener('click', addUserLoader);


    /*const editUserBtn = document.querySelector('.edit-want-to-edit-span');

    editUserBtn.forEach((btn)=>{
         btn.addEventListener('click', (e)=>{
           e.preventDefault();

           let submitButton = document.querySelector('.edit-want-to-edit-span');
           let loader = document.querySelector('.loader-user-edit');
        
           submitButton.style.display = 'none'
           loader.style.display = 'block';
           
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
        
           setTimeout(()=>{
              let addItemModal = document.querySelector('.admin-edit-user');
              let overlayEffect = document.querySelector('.overlay');
              let addedClass = document.querySelector('.added-successfully-2');
              let submitButton = document.querySelector('.edit-want-to-edit-span');
              let loader = document.querySelector('.loader-user-edit');
           
              submitButton.style.display = 'block'
              loader.style.display = 'none';
              overlayEffect.style.display = 'none';
              addItemModal.style.display = 'none';
              addedClass.style.display = 'block';
        
              setTimeout(()=>{
                 let addedClass = document.querySelector('.added-successfully-2');
                 addedClass.style.display = 'none'
              }, 2500)
              
           }, 1500)
         })
    }) */

    const togglePriv = document.querySelector('.toggle-priv');

    togglePriv.addEventListener('change', () => {
        if (togglePriv.checked !== true) {
            let all = document.querySelectorAll('.all');
            all.forEach((btn) => {
                btn.checked = false;
            })
        } else {
            let all = document.querySelectorAll('.all');
            all.forEach((btn) => {
                btn.checked = true
            })
        }
    })

    // priviledge modal
    const openPriv = document.querySelectorAll('.priv-setting');

    openPriv.forEach((open) => {
        open.addEventListener('mouseover', () => {
            open.src = 'img/priv-clicked.png'
        })
        open.addEventListener('mouseout', () => {
            open.src = 'img/Priviledges.png'
        })
        open.addEventListener('click', () => {
            let overlayEffect = document.querySelector('.overlay');
            let privModal = document.querySelector('.admin-edit-priv');

            overlayEffect.style.display = 'block';
            privModal.style.display = 'block';

            const closePriv = document.querySelector('.priv-close');
            closePriv.addEventListener('click', () => {
                let overlayEffect = document.querySelector('.overlay');
                let privModal = document.querySelector('.admin-edit-priv');

                overlayEffect.style.display = 'none';
                privModal.style.display = 'none';
            })
        })

        const savePriv = document.querySelector('.save-priv');

        savePriv.addEventListener('click', () => {
            let overlayEffect = document.querySelector('.overlay');
            let privModal = document.querySelector('.admin-edit-priv');

            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

            overlayEffect.style.display = 'none';
            privModal.style.display = 'none';

            let addedClass = document.querySelector('.priv-added');
            addedClass.style.display = 'block'
            setTimeout(() => {
                addedClass.style.display = 'none'
            }, 2500)

        })

    })

    //Delete Manage users
    let mainDelete = document.querySelector('.delete-all');

    mainDelete.addEventListener('click', (e) => {
        e.preventDefault();

        let deleteModal = document.querySelector('.delete-modal');
        let overlay = document.querySelector('.overlay');

        deleteModal.style.display = 'block';
        overlay.style.display = 'block';

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        let closeModal = document.querySelector('.close-delete-modal');
        closeModal.addEventListener('click', () => {
            deleteModal.style.display = 'none';
            overlay.style.display = 'none';
        })

        let nocloseModal = document.querySelector('.no-delete-modal');
        nocloseModal.addEventListener('click', () => {
            deleteModal.style.display = 'none';
            overlay.style.display = 'none';
        })

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
    })
})

//Delete modal
const allDelete = document.querySelectorAll('.delete-setting');
allDelete.forEach((btn) => {
    btn.addEventListener('mouseover', () => {
        btn.src = 'img/delete-clicked.png'
    })
    btn.addEventListener('mouseout', () => {
        btn.src = 'img/user-list-delete.png'
    })

    btn.addEventListener('click', (e) => {
        e.preventDefault();

        let deleteModal = document.querySelector('.btn-delete');
        let overlay = document.querySelector('.overlay');

        deleteModal.style.display = 'block';
        overlay.style.display = 'block';

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        let closeModal = document.querySelector('.btn-delete-modal');
        closeModal.addEventListener('click', () => {
            deleteModal.style.display = 'none';
            overlay.style.display = 'none';
        })

        let nocloseModal = document.querySelector('.no-delete-modal-btn');
        nocloseModal.addEventListener('click', () => {
            deleteModal.style.display = 'none';
            overlay.style.display = 'none';
        })

        let maiDelete = document.querySelector('.approve');
        maiDelete.addEventListener('click', (e) => {
            e.preventDefault();
            //console.log(44);
            //console.log(mainDelete);
            let currentElement = btn.parentElement.parentElement;
            currentElement.remove()
            let deleteModal = document.querySelector('.btn-delete');
            let overlay = document.querySelector('.overlay');

            deleteModal.style.display = 'none';
            overlay.style.display = 'none';

            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

            let addedClass = document.querySelector('.deleted-successfully-2');
            addedClass.style.display = 'block'
            setTimeout(() => {
                addedClass.style.display = 'none'
            }, 2500)
        })
    })
})

const sendMsg = document.querySelector('.send-msg');

sendMsg.addEventListener('click', () => {
    let modal = document.querySelector('.msg-modal');
    let overlay = document.querySelector('.overlay');

    modal.style.display = 'block';
    overlay.style.display = 'block';

    let closeModal = document.querySelector('.close-modal');
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        overlay.style.display = 'none';

    })

    let send = document.querySelector('.sent');
    send.addEventListener('click', () => {
        modal.style.display = 'none';
        overlay.style.display = 'none';

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        let mailSent = document.querySelector('.mail-sent');
        mailSent.style.display = 'flex';

        setTimeout(() => {
            mailSent.style.display = 'none'
        }, 2000)
    })
})