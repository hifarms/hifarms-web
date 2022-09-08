const toggleSwitch = document.querySelector('#admin-chekbox');
const reset = document.querySelector('.reset-admin')
const settingsOption = document.querySelectorAll('.settings-heading');
const changePassword = document.querySelector('.pass');
const manageUsers = document.querySelector('.display-manage');
const generalSettings = document.querySelector('.display-general');
const statistics = document.querySelector('.user-statistics');
const weather = document.querySelector('.weather')
const inbox = document.querySelector('.inbox');
const togglePassword = document.querySelectorAll('.toggle-password');
const editLoader = document.querySelector('.edit-want-to-sell-span');


const toggle = ()=>{
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
        resetImage.src = "../img/admin-reset.png";

        let resetText = document.querySelector('.res-h2');
        resetText.style.color = '#E53802';

        resetBoolean = false
    } else {
        let resetImage = document.querySelector('.reset-img');
        resetImage.src = "../img/admin-reset-off.png";

        let resetText = document.querySelector('.res-h2');
        resetText.style.color = '#DAD6D6';

        resetBoolean = true
    }
}

reset.addEventListener('click', resetSettings)

settingsOption.forEach((setting) => {
    setting.addEventListener('click', (e) => {

        if (e.target.innerText[0] === 'G') {
            let currentClass = document.querySelector('.kurrent');
            currentClass.classList.remove('kurrent')
            e.target.classList.add('kurrent')

            generalSettings.style.display = 'block';
            statistics.style.display = 'none';
            weather.style.display  = 'none';
            inbox.style.display = 'none';
        } else if (e.target.innerText[0] === 'S') {
            let currentClass = document.querySelector('.kurrent');
            currentClass.classList.remove('kurrent')
            e.target.classList.add('kurrent')

            statistics.style.display = 'block';
            weather.style.display  = 'none'
           inbox.style.display = 'none';
            generalSettings.style.display = 'none';
        } else if (e.target.innerText[0] === 'W') {
            let currentClass = document.querySelector('.kurrent');
            currentClass.classList.remove('kurrent');
            e.target.classList.add('kurrent');

            statistics.style.display = 'none';
            weather.style.display  = 'block'
            inbox.style.display = 'none'
            generalSettings.style.display = 'none';
        } else if (e.target.innerText[0] === 'I') {
            let currentClass = document.querySelector('.kurrent');
            currentClass.classList.remove('kurrent');
            e.target.classList.add('kurrent');

            statistics.style.display = 'none';
            generalSettings.style.display = 'none';
            inbox.style.display = 'block';
            weather.style.display = 'none';
        }
    })
})

togglePassword.forEach((icon) => {
    let isToggled = false;
    icon.addEventListener('click', () => {
        if (!isToggled) {
            icon.src = '../img/visible.png';

            let input = icon.parentElement.querySelector('.pass-val')
            input.type = 'text';

            isToggled = true;
        } else if (isToggled == true) {
            icon.src = '../img/invisible.png';

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