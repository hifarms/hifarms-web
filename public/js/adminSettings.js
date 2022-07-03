
const toggleSwitch = document.querySelector('#admin-chekbox');
const reset = document.querySelector('.reset-admin')
const settingsOption = document.querySelectorAll('.settings-heading');
const togglePassword = document.querySelectorAll('.toggle-password');
const changePassword = document.querySelector('.pass');
const manageUsers = document.querySelector('.display-manage');
const generalSettings = document.querySelector('.display-general');
const statistics = document.querySelector('.display-stats');

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
            
            statistics.style.display = 'none';
            manageUsers.style.display = 'none';
            generalSettings.style.display = 'block';
        } else if(e.target.innerText === 'Manage Users'){
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current')
            e.target.classList.add('current')
            
            statistics.style.display = 'none';
            manageUsers.style.display = 'block';
            generalSettings.style.display = 'none';
        } else if(e.target.innerText === 'Statistics'){
            let currentClass = document.querySelector('.current');
            currentClass.classList.remove('current');
            e.target.classList.add('current');
 
            statistics.style.display = 'block';
            manageUsers.style.display = 'none';
            generalSettings.style.display = 'none';
        }
    
    })
})

togglePassword.forEach((icon)=>{
    let isToggled = false;
    icon.addEventListener('click', ()=>{
        if(!isToggled){
            icon.src = 'img/visible.png';
            
            let input = icon.parentElement.querySelector('.pass-val')
            input.type = 'text';

            isToggled = true;
        } else if(isToggled == true) {
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

     overlay.style.display ='block';
     changePasswordModal.style.display = 'block';

     //Close Modal
     const closeModal = document.querySelector('.close-add-item');
     closeModal.addEventListener('click', ()=>{
        let overlay = document.querySelector('.overlay');
        let changePasswordModal = document.querySelector('.change-password');
   
        overlay.style.display ='none';
        changePasswordModal.style.display = 'none';
     })
} 

changePassword.addEventListener('click', (e)=>{
    e.preventDefault();
    showPasswordModal();
})