const editProfile = document.querySelector('.edit-profile');

const showModal = ()=>{
    let modal = document.querySelector('.edit-profile-modal');
    let overlay = document.querySelector('.overlay');

    modal.style.display = 'block';
    overlay.style.display = 'block';
    
    //Close Modal
    let closeModal = document.querySelector('.close-add-item');
    
    closeModal.addEventListener('click', ()=>{
        let modal = document.querySelector('.edit-profile-modal');
        let overlay = document.querySelector('.overlay');
    
        modal.style.display = 'none';
        overlay.style.display = 'none';
    })

    //Update Profile
    let updateProfile = document.querySelector('.add-item-submit');

    updateProfile.addEventListener('click', ()=>{
        let modal = document.querySelector('.edit-profile-modal');
        let overlay = document.querySelector('.overlay');
    
        modal.style.display = 'none';
        overlay.style.display = 'none';

        //setting values
        setTimeout(()=>{
           
        }, 4000)
    })
}

editProfile.addEventListener('click', showModal)