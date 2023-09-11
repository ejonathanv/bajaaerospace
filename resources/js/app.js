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

$(document).ready(function() {

    let carousel = $(".owl-carousel");

    carousel.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        items: 1,
    });

    $('.owl-next').click(function(event) {
        event.preventDefault();
        carousel.trigger('next.owl.carousel');
    });
   
    $('.owl-prev').click(function(event) {
        event.preventDefault();
        carousel.trigger('prev.owl.carousel');
    });

});
    

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
        this.number_counter_on_scroll();
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
        },
        number_counter_on_scroll() {
            // let number_counter = $('.number_counter');
            // Each counter has a data-number_counter attribute with the number to count to
            let number_counter = $('.number_counter');

            $(window).scroll(function() {
                number_counter.each(function() {
                    let $this = $(this);
                    let top_of_element = $this.offset().top;
                                        

                    if($this.text() == 0 && $(window).scrollTop() + $(window).height() > top_of_element) {
                        let number = $this.data('number_counter');
                        $({ Counter: 0 }).animate({ Counter: number }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    }
                });
            });
        }
    }
}).mount('#app')
