const buttonCSV = document.querySelector('#csv');
const buttonPDF = document.querySelector('#pdf');

const addLoaderCSV = ()=>{
    let submitButton = document.querySelector('.span-1');
    let loader = document.querySelector('.loader-csv');
 
    submitButton.style.display = 'none'
    loader.style.display = 'block';
 
    setTimeout(()=>{
       let addedClass = document.querySelector('.added-successfully');
    
       submitButton.style.display = 'flex'
       submitButton.style.marginLeft= '25px'
       loader.style.display = 'none';
       addedClass.style.display = 'block'

       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
    
 
       setTimeout(()=>{
          //let addedClass = document.querySelector('.added-successfully');
          addedClass.style.display = 'none'
       }, 2000)
       
    }, 600)
 }

 const addLoaderPDF = ()=>{
    let submitButton = document.querySelector('.span-2');
    let loader = document.querySelector('.loader-pdf');
 
    submitButton.style.display = 'none'
    loader.style.display = 'block';
 
    setTimeout(()=>{
       let addedClass = document.querySelector('.added-successfully');
    
       submitButton.style.display = 'flex'
       submitButton.style.marginLeft= '25px'
       loader.style.display = 'none';
       addedClass.style.display = 'block'

       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
    
 
       setTimeout(()=>{
          //let addedClass = document.querySelector('.added-successfully');
          addedClass.style.display = 'none'
       }, 2000)
       
    }, 600)
 }

 buttonCSV.addEventListener('click', addLoaderCSV);
 buttonPDF.addEventListener('click', addLoaderPDF)