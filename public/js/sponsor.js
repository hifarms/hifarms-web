const sponsorGrid = document.querySelectorAll('.grid')

sponsorGrid.forEach((grid)=>{
    let openSearch = true;
   grid.addEventListener('click', (e)=>{
       let target = e.target.parentElement;
       let search = target.querySelector('.search-div')
      if(openSearch){
        search.style.display = 'block';
        openSearch = false;
      } else{
        search.style.display = 'none';
        openSearch = true;
      }
   })
})