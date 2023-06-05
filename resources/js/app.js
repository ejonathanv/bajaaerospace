import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const { createApp } = Vue

createApp({
    data() {
        return {
            headerFixed: false,
        }
    },
    mounted() {
        this.toggleHeader();
    },
    methods: {
        toggleHeader() {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 0) {
                    this.headerFixed = true;
                } else {
                    this.headerFixed = false;
                }
            }
            );
        } 
    }
}).mount('#app')
