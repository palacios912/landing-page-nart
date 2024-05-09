const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;
    


        nxtBtn[i].addEventListener('click', () => {
           item.scrollLeft += containerWidth / 3;
           console.log(containerWidth)
           console.log(containerWidth/3.6)
           console.log(containerWidth/4)
        })
    
        preBtn[i].addEventListener('click', () => {
            item.scrollLeft -= containerWidth /3;
        })
      
  
})