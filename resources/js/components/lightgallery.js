import lightGallery from 'lightgallery';


// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail';

const galleries = '';

lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgThumbnail],
    licenseKey: 'your_license_key',
    speed: 800,
    // ... other settings
});