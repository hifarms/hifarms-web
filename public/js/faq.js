//faq functionality 
//const faqButton = document.querySelectorAll('.faq-button');
const faq1 = document.querySelector('.faq-1');
let open = true;
faq1.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open){
            let image = document.querySelector('.faq-1');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-1-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-8-line');
            line1.style.marginBottom = '95px';
            open = false;
        } else{
            let image = document.querySelector('.faq-1');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-1-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-8-line');
            line1.style.marginBottom = 'unset';
            open = true;
        }
});


//Faq 2
const faq2 = document.querySelector('.faq-2');
let open2 = true;
faq2.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open2){
            let image = document.querySelector('.faq-2');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-2-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-9-line');
            line1.style.marginBottom = '95px';
            open2 = false;
        } else{
            let image = document.querySelector('.faq-2');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-2-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-9-line');
            line1.style.marginBottom = 'unset';
            open2 = true;
        }
    });

//faq3 
const faq3 = document.querySelector('.faq-3');
let open3 = true;
faq3.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open3){
            let image = document.querySelector('.faq-3');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-3-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-10-line');
            line1.style.marginBottom = '95px';
            open3 = false;
        } else{
            let image = document.querySelector('.faq-3');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-3-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-10-line');
            line1.style.marginBottom = 'unset';
            open3 = true;
        }
    });

//faq4

const faq4 = document.querySelector('.faq-4');
let open4= true;
faq4.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open4){
            let image = document.querySelector('.faq-4');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-4-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-11-line');
            line1.style.marginBottom = '95px';
            open4 = false;
        } else{
            let image = document.querySelector('.faq-4');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-4-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-11-line');
            line1.style.marginBottom = 'unset';
            open4 = true;
        }
    }); 

//faq 5
const faq5 = document.querySelector('.faq-5');
let open5= true;
faq5.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open5){
            let image = document.querySelector('.faq-5');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-5-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-12-line');
            line1.style.marginBottom = '95px';
            open5 = false;
        } else{
            let image = document.querySelector('.faq-5');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-5-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-12-line');
            line1.style.marginBottom = 'unset';
            open5 = true;
        }
    });

//faq 6
const faq6 = document.querySelector('.faq-6');
let open6= true;
faq6.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open6){
            let image = document.querySelector('.faq-6');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-6-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-13-line');
            line1.style.marginBottom = '95px';
            open6 = false;
        } else{
            let image = document.querySelector('.faq-6');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-6-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-13-line');
            line1.style.marginBottom = 'unset';
            open6 = true;
        }
    });

//faq 7
const faq7 = document.querySelector('.faq-7');
let open7 = true;
faq7.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open7){
            let image = document.querySelector('.faq-7');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-7-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-14-line');
            line1.style.marginBottom = '95px';
            open7 = false;
        } else{
            let image = document.querySelector('.faq-7');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-7-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-14-line');
            line1.style.marginBottom = 'unset';
            open7 = true;
        }
    });


//Faq 8
const faq8 = document.querySelector('.faq-8');
let open8 = true;
faq8.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open8){
            let image = document.querySelector('.faq-8');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-8-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-1-line');
            line1.style.marginBottom = '95px';
            open8 = false;
        } else{
            let image = document.querySelector('.faq-8');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-8-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-1-line');
            line1.style.marginBottom = 'unset';
            open8 = true;
        }
});

//Faq 9
const faq9 = document.querySelector('.faq-9');
let open9 = true;
faq9.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open9){
            let image = document.querySelector('.faq-9');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-9-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-2-line');
            line1.style.marginBottom = '95px';
            open9 = false;
        } else{
            let image = document.querySelector('.faq-9');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-9-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-2-line');
            line1.style.marginBottom = 'unset';
            open9 = true;
        }
    });

//Faq10
const faq10 = document.querySelector('.faq-10');
let open10 = true;
faq10.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open10){
            let image = document.querySelector('.faq-10');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-10-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-3-line');
            line1.style.marginBottom = '95px';
            open10 = false;
        } else{
            let image = document.querySelector('.faq-10');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-10-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-3-line');
            line1.style.marginBottom = 'unset';
            open10 = true;
        }
    });

//Faq11
const faq11 = document.querySelector('.faq-11');
let open11 = true;
faq11.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open11){
            let image = document.querySelector('.faq-11');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-11-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-4-line');
            line1.style.marginBottom = '95px';
            open11 = false;
        } else{
            let image = document.querySelector('.faq-11');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-11-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-4-line');
            line1.style.marginBottom = 'unset';
            open11 = true;
        }
    });

//Faq12
const faq12 = document.querySelector('.faq-12');
let open12 = true;
faq12.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open12){
            let image = document.querySelector('.faq-12');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-12-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-5-line');
            line1.style.marginBottom = '95px';
            open12 = false;
        } else{
            let image = document.querySelector('.faq-12');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-12-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-5-line');
            line1.style.marginBottom = 'unset';
            open12 = true;
        }
    });


//Faq13
const faq13 = document.querySelector('.faq-13');
let open13 = true;
faq13.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open13){
            let image = document.querySelector('.faq-13-faq');
            image.src = 'img/arrow-up-faq.svg';
            console.log(image);
            let line = document.querySelector('.faq-13-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-6-line');
            line1.style.marginBottom = '95px';
            open13 = false;
        } else{
            let image = document.querySelector('.faq-13-faq');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-13-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-6-line');
            line1.style.marginBottom = 'unset';
            open13 = true;
        }
    });


//Faq14
const faq14 = document.querySelector('.faq-14');
let open14 = true;
faq14.addEventListener('click', (e)=>{
        let faqButton =  e.target.parentElement.parentElement;
        let faqContent = faqButton.querySelector('.faq-content'); 
        //getting the line div
        if(open14){
            let image = document.querySelector('.faq-14');
            image.src = 'img/arrow-up-faq.svg';
            let line = document.querySelector('.faq-14-line');
            line.style.marginTop = '0px';
            faqContent.style.display = 'block';
            let line1 = document.querySelector('.faq-7-line');
            line1.style.marginBottom = '95px';
            open14 = false;
        } else{
            let image = document.querySelector('.faq-14');
            image.src = 'img/Group 119.svg';
            let line = document.querySelector('.faq-14-line');
            line.style.marginTop = '30px';
            faqContent.style.display = 'none';
            let line1 = document.querySelector('.faq-7-line');
            line1.style.marginBottom = 'unset';
            open14 = true;
        }
    });
