import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

ClassicEditor
.create( document.querySelector( '#editor' ), {
    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
})
.then( editor => {
    editor.model.document.on( 'change:data', () => {
        let input = document.querySelector( '#postContent' );
        input.value = editor.getData();
    });
})
.catch( error => {
    console.error( error );
} );

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
