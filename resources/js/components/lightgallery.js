import lightGallery from 'lightgallery';

// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail';

const galleries = document.getElementsByClassName('lightgallery');

for (let i = 0; i < galleries.length; i++) {
    lightGallery( galleries[i], {
        plugins: [lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 800,
        // ... other settings
    }); 
}

const gallerySlider = document.getElementsByClassName('gallery-slider');

for (let i = 0; i < gallerySlider.length; i++) {
    lightGallery( gallerySlider[i], {
        selector: '.swiper-slide',
        plugins: [lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 800,
        // ... other settings
    }); 
}



