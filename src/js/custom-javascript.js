window.addEventListener("load" , () => {
    const loader = document.querySelector('.loader');
    loader.classList.add('loader-disable');
    console.log('page has loaded');
});

// Add your custom JS here.
let clickableGallery = document.querySelector(".clickable-gallery");
    //If it isn't "undefined" and it isn't "null", then it exists.
let isActive = false;

const lightbox = (event) => {
    const lightBoxContainer = document.querySelector('.lightboxContainer');
    console.log(lightBoxContainer);

    if(event.target.tagName === 'IMG' && isActive == false) {
        console.log('this a image');
        isActive = !isActive;
        lightBoxContainer.classList.add('active-lightbox');
    
    }

    if(event.target == lightBoxContainer && isActive == true) {
        isActive = !isActive;
        lightBoxContainer.classList.remove('active-lightbox');

    }

    const showImage = () => {
        if(isActive) {
            console.log(event.target.src);
            lightBoxContainer.innerHTML = `<div class="image-background"></div><div class="image-container"><img src="${event.target.src}" alt=""></div>`;

        }
        else {
            lightBoxContainer.innerHTML = ``;

        }

    }

    showImage();

}

const eventHandler = (event) => {
    if(typeof(clickableGallery) != 'undefined' && clickableGallery != null){
        lightbox(event);
    
    }

}

document.addEventListener('click', eventHandler);



