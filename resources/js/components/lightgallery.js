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
