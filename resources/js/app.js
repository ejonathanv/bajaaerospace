import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let editorBox = document.querySelector( '#editor' );

if( editorBox ) {
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
}
    

const { createApp } = Vue

createApp({
    
    data() {
        return {
            headerFixed: false,
            mobileMenu: false,
            section: null
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
        },
        toggleMobileMenu() {
            this.mobileMenu = !this.mobileMenu;

            if (this.mobileMenu) {
                document.body.style.overflow = 'hidden';
                window.scrollTo(0, 0);
            }else{
                document.body.style.overflow = 'auto';
            }
        },
        toggleSection(id){
            this.section = id == this.section ? null : id;

            let sectionRef = this.$refs['section'+id];
            window.scrollTo(0, sectionRef.offsetTop - 100);
        }
    }
}).mount('#app')
