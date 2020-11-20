<footer>
    <section class="container-fluid">
        <section class="container">
               <section class="row">
                    <section class="col footer_slogan">
                           <h3>get in touch today</h3>
                    </section>
                    <section class="col">
                           
                    </section>
                    <section class="col footer_contact">
                        <h4>contact</h4>
                        <div class="contact_type">
                            <ul>
                                <li>+995 55 55 55</li>
                                <li>123 Anywhere St. Any City, ST 12345</li>
                                <li>hello@reallygreatsite.com</li>
                                
                            </ul>
                        </div>
                        <div class="socials">
                             <nav >
                               <ul class="d-flex">
                                   <li><a href=""> <i class="fab fa-instagram"></i></a></li>
                                   
                                   <li><a href=""> <i class="fab fa-youtube"></i></a></li>
                              
                                   <li><a href=""><i class="fab fa-facebook"></i></a></li>
                               </ul>
                           </nav>
                        </div>
                            
                            
                    </section> 
        </section> 
        </section>
            
    </section>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- <script src="/js/owl.carousel.min.js"></script> -->

<script>
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:3,
        margin:10,
        loop:true,
        center:true,
        nav:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        },
        responsiveBaseElement: '.container'

    });
    });
</script>

<!-- animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 400,
        duration: 1000
    });
  </script>
<?php wp_footer();?>
</body>
</html>