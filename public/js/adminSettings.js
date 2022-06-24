const toggleSwitch = document.querySelector('#admin-chekbox');

function toggle(){
    if(toggleSwitch.checked === true){
        console.log(123);
        let disable = document.querySelector('.disable');
        disable.textContent = 'Active';
        disable.style.color = '#8BC53E'
    } else{
        console.log(456);
        let disable = document.querySelector('.disable');
        disable.textContent = 'Disabled';
        disable.style.color = '#DAD6D6'
    }    
}

toggleSwitch.addEventListener('click', toggle)