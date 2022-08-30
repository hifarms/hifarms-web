const toggleSwitch = document.querySelector('#admin-chekbox');
const reset = document.querySelector('.reset-admin')
const settingsOption = document.querySelectorAll('.settings-heading');
const changePassword = document.querySelector('.pass');
const manageUsers = document.querySelector('.display-manage');
const generalSettings = document.querySelector('.display-general');
const statistics = document.querySelector('.user-statistics');
const weather = document.querySelector('.weather')
const inbox = document.querySelector('.inbox');


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