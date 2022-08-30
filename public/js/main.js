//Blog Functionality
const allBlogs = document.querySelector('.all-blog');
const agricTechBlog = document.querySelector('.agritech');
const agricScienceBlog = document.querySelector('.agric-science');
const updateBlog = document.querySelector('.update');
const successBlog = document.querySelector('.success-story');
const outbreakBlog = document.querySelector('.out-break');
const othersBlog = document.querySelector('.others');

const section = document.querySelectorAll('.section');

section.forEach((single)=>{
    single.addEventListener('click', (e)=>{
        //adding color and border bottom;
        single.style.color = "#49a760";
        single.style.borderBottom = '7px solid #49a760'

        section.forEach((minisec)=>{
           

            minisec.style.color = "#404a3d";
            minisec.style.borderBottom = "none";

            if(minisec===single){
                single.style.color = "#49a760";
                single.style.borderBottom = '7px solid #49a760'
                
            }

            
        })
    
    
    
    });
})

agricTechBlog.addEventListener('click', ()=>{
    //adding color and border bottom;
    agricTechBlog.style.color = "#49a760";
    agricTechBlog.style.borderBottom = '7px solid #49a760'

    allBlogs.style.color = "#404a3d";
    allBlogs.style.borderBottom = "none";

    agricScienceBlog.style.color = "#404a3d";
    agricScienceBlog.style.borderBottom = "none";

    updateBlog.style.color = "#404a3d";
    updateBlog.style.borderBottom = "none";

    successBlog.style.color = "#404a3d";
    successBlog.style.borderBottom = "none";

    outbreakBlog.style.color = "#404a3d";
    outbreakBlog.style.borderBottom = "none";

    othersBlog.style.color = "#404a3d";
    othersBlog.style.borderBottom = "none"; 

    //showing only section containers
    let allContainer = document.querySelector('.all-blog-container');
    let agriscienceContainer = document.querySelector('.agric-science-container');
    let agritechContainer = document.querySelector('.agritech-container');
    let updateContainer = document.querySelector('.update-blog-container');
    let successContainer = document.querySelector('.success-stories-blog');
    let outbreakContainer = document.querySelector('.out-break-blog');
    let otherContainer = document.querySelector('.other-blog');

    allContainer.style.display = 'none';
    agriscienceContainer.style.display = 'none';
    updateContainer.style.display = 'none';
    successContainer.style.display = 'none';
    agritechContainer.style.display = 'block'
    outbreakContainer.style.display = 'none';
    otherContainer.style.display = 'none';

});


agricScienceBlog.addEventListener('click', ()=>{
      //adding color and border bottom;
      agricTechBlog.style.color = "#404a3d";
      agricTechBlog.style.borderBottom = 'none'
  
      allBlogs.style.color = "#404a3d";
      allBlogs.style.borderBottom = "none";
  
      agricScienceBlog.style.color = "#49a760";
      agricScienceBlog.style.borderBottom = "7px solid #49a760";
  
      updateBlog.style.color = "#404a3d";
      updateBlog.style.borderBottom = "none";
  
      successBlog.style.color = "#404a3d";
      successBlog.style.borderBottom = "none";
  
      outbreakBlog.style.color = "#404a3d";
      outbreakBlog.style.borderBottom = "none";
  
      othersBlog.style.color = "#404a3d";
      othersBlog.style.borderBottom = "none"; 
  
      //showing only section containers
      let allContainer = document.querySelector('.all-blog-container');
      let agritechContainer = document.querySelector('.agritech-container');
      let updateContainer = document.querySelector('.update-blog-container');
      let successContainer = document.querySelector('.success-stories-blog');
      let outbreakContainer = document.querySelector('.out-break-blog');
      let otherContainer = document.querySelector('.other-blog');
      let agriscienceContainer = document.querySelector('.agric-science-container')
  
      allContainer.style.display = 'none';
      agritechContainer.style.display = 'none';
      updateContainer.style.display = 'none';
      successContainer.style.display = 'none';
      outbreakContainer.style.display = 'none';
      otherContainer.style.display = 'none';
      agriscienceContainer.style.display = 'block'
}) 

updateBlog.addEventListener('click', ()=>{
    //adding color and border bottom;
    agricTechBlog.style.color = "#404a3d";
    agricTechBlog.style.borderBottom = 'none'

    allBlogs.style.color = "#404a3d";
    allBlogs.style.borderBottom = "none";

    agricScienceBlog.style.color = "#404a3d";
    agricScienceBlog.style.borderBottom = "none";

    updateBlog.style.color = "#49a760";
    updateBlog.style.borderBottom = "7px solid #49a760";

    successBlog.style.color = "#404a3d";
    successBlog.style.borderBottom = "none";

    outbreakBlog.style.color = "#404a3d";
    outbreakBlog.style.borderBottom = "none";

    othersBlog.style.color = "#404a3d";
    othersBlog.style.borderBottom = "none"; 

    //showing only section containers
    let allContainer = document.querySelector('.all-blog-container');
    let agritechContainer = document.querySelector('.agritech-container');
    let updateContainer = document.querySelector('.update-blog-container');
    let successContainer = document.querySelector('.success-stories-blog');
    let outbreakContainer = document.querySelector('.out-break-blog');
    let otherContainer = document.querySelector('.other-blog');
    let agriscienceContainer = document.querySelector('.agric-science-container')

    allContainer.style.display = 'none';
    agritechContainer.style.display = 'none';
    updateContainer.style.display = 'block';
    successContainer.style.display = 'none';
    outbreakContainer.style.display = 'none';
    otherContainer.style.display = 'none';
    agriscienceContainer.style.display = 'none'
}) 

successBlog.addEventListener('click', ()=>{
    //adding color and border bottom;
    agricTechBlog.style.color = "#404a3d";
    agricTechBlog.style.borderBottom = 'none'

    allBlogs.style.color = "#404a3d";
    allBlogs.style.borderBottom = "none";

    agricScienceBlog.style.color = "#404a3d";
    agricScienceBlog.style.borderBottom = "none";

    updateBlog.style.color = "#404a3d";
    updateBlog.style.borderBottom = "none";

    successBlog.style.color = "#49a760";
    successBlog.style.borderBottom = "7px solid #49a760";

    outbreakBlog.style.color = "#404a3d";
    outbreakBlog.style.borderBottom = "none";

    othersBlog.style.color = "#404a3d";
    othersBlog.style.borderBottom = "none"; 

    //showing only section containers
    let allContainer = document.querySelector('.all-blog-container');
    let agritechContainer = document.querySelector('.agritech-container');
    let updateContainer = document.querySelector('.update-blog-container');
    let successContainer = document.querySelector('.success-stories-blog');
    let outbreakContainer = document.querySelector('.out-break-blog');
    let otherContainer = document.querySelector('.other-blog');
    let agriscienceContainer = document.querySelector('.agric-science-container')

    allContainer.style.display = 'none';
    agritechContainer.style.display = 'none';
    updateContainer.style.display = 'none';
    successContainer.style.display = 'block';
    outbreakContainer.style.display = 'none';
    otherContainer.style.display = 'none';
    agriscienceContainer.style.display = 'none'
}) 

outbreakBlog.addEventListener('click', ()=>{
    //adding color and border bottom;
    agricTechBlog.style.color = "#404a3d";
    agricTechBlog.style.borderBottom = 'none'

    allBlogs.style.color = "#404a3d";
    allBlogs.style.borderBottom = "none";

    agricScienceBlog.style.color = "#404a3d";
    agricScienceBlog.style.borderBottom = "none";

    updateBlog.style.color = "#404a3d";
    updateBlog.style.borderBottom = "none";

    successBlog.style.color = "#404a3d";
    successBlog.style.borderBottom = "none";

    outbreakBlog.style.color = "#49a760";
    outbreakBlog.style.borderBottom = "7px solid #49a760";

    othersBlog.style.color = "#404a3d";
    othersBlog.style.borderBottom = "none"; 

    //showing only section containers
    let allContainer = document.querySelector('.all-blog-container');
    let agritechContainer = document.querySelector('.agritech-container');
    let updateContainer = document.querySelector('.update-blog-container');
    let successContainer = document.querySelector('.success-stories-blog');
    let outbreakContainer = document.querySelector('.out-break-blog');
    let otherContainer = document.querySelector('.other-blog');
    let agriscienceContainer = document.querySelector('.agric-science-container')

    allContainer.style.display = 'none';
    agritechContainer.style.display = 'none';
    updateContainer.style.display = 'none';
    successContainer.style.display = 'none';
    outbreakContainer.style.display = 'block';
    otherContainer.style.display = 'none';
    agriscienceContainer.style.display = 'none'
}) 


othersBlog.addEventListener('click', ()=>{
    //adding color and border bottom;
    agricTechBlog.style.color = "#404a3d";
    agricTechBlog.style.borderBottom = 'none'

    allBlogs.style.color = "#404a3d";
    allBlogs.style.borderBottom = "none";

    agricScienceBlog.style.color = "#404a3d";
    agricScienceBlog.style.borderBottom = "none";

    updateBlog.style.color = "#404a3d";
    updateBlog.style.borderBottom = "none";

    successBlog.style.color = "#404a3d";
    successBlog.style.borderBottom = "none";

    outbreakBlog.style.color = "#404a3d";
    outbreakBlog.style.borderBottom = "none";

    othersBlog.style.color = "#49a760";
    othersBlog.style.borderBottom = "7px solid #49a760"; 

    //showing only section containers
    let allContainer = document.querySelector('.all-blog-container');
    let agritechContainer = document.querySelector('.agritech-container');
    let updateContainer = document.querySelector('.update-blog-container');
    let successContainer = document.querySelector('.success-stories-blog');
    let outbreakContainer = document.querySelector('.out-break-blog');
    let otherContainer = document.querySelector('.other-blog');
    let agriscienceContainer = document.querySelector('.agric-science-container')

    allContainer.style.display = 'none';
    agritechContainer.style.display = 'none';
    updateContainer.style.display = 'none';
    successContainer.style.display = 'none';
    outbreakContainer.style.display = 'none';
    otherContainer.style.display = 'block';
    agriscienceContainer.style.display = 'none'
})

allBlogs.addEventListener('click', ()=>{
    //adding color and border bottom;
    agricTechBlog.style.color = "#404a3d";
    agricTechBlog.style.borderBottom = 'none'

    allBlogs.style.color = "#49a760";
    allBlogs.style.borderBottom = "7px solid #49a760";

    agricScienceBlog.style.color = "#404a3d";
    agricScienceBlog.style.borderBottom = "none";

    updateBlog.style.color = "#404a3d";
    updateBlog.style.borderBottom = "none";

    successBlog.style.color = "#404a3d";
    successBlog.style.borderBottom = "none";

    outbreakBlog.style.color = "#4043ad";
    outbreakBlog.style.borderBottom = "none";

    othersBlog.style.color = "#404a3d";
    othersBlog.style.borderBottom = "none"; 

    //showing only section containers
    let allContainer = document.querySelector('.all-blog-container');
    let agritechContainer = document.querySelector('.agritech-container');
    let updateContainer = document.querySelector('.update-blog-container');
    let successContainer = document.querySelector('.success-stories-blog');
    let outbreakContainer = document.querySelector('.out-break-blog');
    let otherContainer = document.querySelector('.other-blog');
    let agriscienceContainer = document.querySelector('.agric-science-container')

    allContainer.style.display = 'block';
    agritechContainer.style.display = 'block';
    updateContainer.style.display = 'block';
    successContainer.style.display = 'block';
    outbreakContainer.style.display = 'block';
    otherContainer.style.display = 'block';
    agriscienceContainer.style.display = 'block'
})

