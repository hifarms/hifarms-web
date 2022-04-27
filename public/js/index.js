const icon = document.querySelector('#right-icon');
const icon2 = document.querySelector('#left-icon');

icon.addEventListener('click', ()=>{
    const imageContainer = document.querySelector('.image-container');
    const imageGrid = document.querySelector('.images-grid');

    imageContainer.style.left = '115px';
    imageContainer.style.transition = 'all 0.4s ease-in-out';
    imageGrid.style.left = '-210px';
    imageGrid.style.transition = 'all 0.4s ease-in-out';
    
    icon.style.display = 'none';
    icon2.style.display = 'block';
    icon2.addEventListener('click', ()=>{
        imageContainer.style.left = '315px';
        imageContainer.style.transition = 'all 0.4s ease-in-out';

        imageGrid.style.left = '0%';
        imageGrid.style.transition = 'all 0.4s ease-in-out';

        icon.style.display = 'block';
        icon2.style.display = 'none';
    })

})