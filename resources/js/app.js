import { createApp } from 'vue';
import App from './components/App.vue'; // Adjust this path if needed

const app = createApp(App);

// If you want to register HeroSection globally, you can add:
import HeroSection from './components/HeroSection.vue';
app.component('hero-section', HeroSection);

// Mount the Vue app to an HTML element with ID 'app'
app.mount('#app');
