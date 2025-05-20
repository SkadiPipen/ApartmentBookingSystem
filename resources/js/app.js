import './bootstrap';
import { createApp } from 'vue';

const app = createApp({
    data() {
        return {
            currentSection: 'home'
        };
    },
    mounted() {
        console.log('Vue mounted!');
    }
});

app.mount('#app');
