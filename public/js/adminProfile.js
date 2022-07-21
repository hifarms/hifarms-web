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
}

editProfile.addEventListener('click', showModal)


//open file to upload picture
const uploadImg =  document.querySelector('.upload-img');
  uploadImg.addEventListener('click', ()=>{
      let file = document.querySelector('.file');
      file.click();
  })

  const addLoaderMain = document.querySelector('.add-main-dash');
  addLoaderMain.addEventListener('click', (e)=>{
    e.preventDefault();

    let submitButton = document.querySelector('.add-main-dash');
    let loader = document.querySelector('.loader-add-main');
 
    submitButton.style.display = 'none'
    loader.style.display = 'block';
    
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
 
    setTimeout(()=>{
       let addItemModal = document.querySelector('.admin-add-item');
       let overlayEffect = document.querySelector('.overlay');
       let addedClass = document.querySelector('.added-successfully');
       let submitButton = document.querySelector('.add-main-dash');
       let loader = document.querySelector('.loader-add-main');
    
       submitButton.style.display = 'block'
       loader.style.display = 'none';
       overlayEffect.style.display = 'none';
       addItemModal.style.display = 'none';
       addedClass.style.display = 'block';
 
       setTimeout(()=>{
          let addedClass = document.querySelector('.added-successfully');
          addedClass.style.display = 'none'
       }, 2500)
       
    }, 1500)
 
 })