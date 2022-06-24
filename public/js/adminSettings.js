const toggleSwitch = document.querySelector('#admin-chekbox');
const reset = document.querySelector('.reset-admin')
const settingsOption = document.querySelectorAll('.settings-heading')

const toggle = () =>{
    if(toggleSwitch.checked === true){
        let disable = document.querySelector('.disable');
        disable.textContent = 'Active';
        disable.style.color = '#8BC53E'
    } else{
        let disable = document.querySelector('.disable');
        disable.textContent = 'Disabled';
        disable.style.color = '#DAD6D6'
    }    
}

toggleSwitch.addEventListener('click', toggle)


let resetBoolean = true;
const resetSettings = () =>{
    if(resetBoolean){
        let resetImage = document.querySelector('.reset-img');
        resetImage.src = "img/admin-reset.png";
       
        let resetText = document.querySelector('.res-h2');
        resetText.style.color = '#E53802';

        resetBoolean = false
    } else{
        let resetImage = document.querySelector('.reset-img');
        resetImage.src = "img/admin-reset-off.png";

        let resetText = document.querySelector('.res-h2');
        resetText.style.color = '#DAD6D6';

        resetBoolean = true
    }
}

reset.addEventListener('click', resetSettings)

settingsOption.forEach((setting)=>{
    setting.addEventListener('click', (e)=>{
        if(e.target.innerText === 'General Settings'){
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current')
            e.target.classList.add('current')
            let manageUsers = document.querySelector('.display-manage');
            let generalSettings = document.querySelector('.display-general');

            manageUsers.style.display = 'none';
            generalSettings.style.display = 'block';
        }
        else if(e.target.innerText === 'Manage Users'){
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current')
            e.target.classList.add('current')
            let manageUsers = document.querySelector('.display-manage');
            let generalSettings = document.querySelector('.display-general');

            manageUsers.style.display = 'block';
            generalSettings.style.display = 'none';
        }
    })
})