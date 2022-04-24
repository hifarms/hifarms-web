const chevron = document.querySelector('.chevron');

let openForm = true;
chevron.addEventListener('click', ()=>{
    if(openForm){
        const form = document.querySelector('.add-product-modal');
        const totalButton = document.querySelector('.total-item');
        const sellButton = document.querySelector('.sell-button');

        form.style.display = 'block';
        totalButton.style.display = 'flex';
        sellButton.style.display = 'flex';

        openForm = false;
    } else{
        const form = document.querySelector('.add-product-modal');
        const totalButton = document.querySelector('.total-item');
        const sellButton = document.querySelector('.sell-button');

        form.style.display = 'none';
        totalButton.style.display = 'none';
        sellButton.style.display = 'none';

        openForm = true;
    }
});