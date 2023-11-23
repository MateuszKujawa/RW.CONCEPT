<!DOCTYPE html>
<html lang="pl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna | R/W Concept</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- font's -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- Slider CDN's -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- Cards script defer -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-darkgray">
    <div id="loading-overlay" class="z-50">
        <img src="./images/icons/loading.gif" alt="Ładowanie..." id="loading-gif">
        <p class="btn-shine" target="_blank">Trwa ładowanie strony...</p>
    </div>


    <div id="page-content" style="display: none;">
            <nav class="fixed flex items-center bg-darkgray p-3 flex-wrap w-full z-40" data-aos="fade-down">
                <a href="index.html" class="mr-4 inline-flex items-center">
                    <img src="./images/icons/logo-small.webp" alt="logo rw.concept" class="w-14">
                </a>
        
                <button class="text-white inline-flex rounded lg:hidden ml-auto outline-none nav-toggler" data-target="#navigation" id="navButton">
                    <i class="fa-solid fa-bars text-3xl p-3 hover:text-yellow-500 duration-300"></i>
                </button>
        
                <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto h-[100vh] md:h-auto" id="navigation">
                    <div class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto mt-10 lg:mt-0 border-t-2 border-yellow-700 lg:border-t-0">
                        
                        <a href="index.php" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-yellow-500 font-semibold font-raleway uppercase items-center justify-center hover:bg-yellow-500 hover:text-darkgray duration-300 mt-4 lg:mt-0 mr-2">
                            <span>Strona główna</span>
                        </a>
        
                        <a href="#partners" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white font-raleway font-medium uppercase items-center justify-center hover:bg-yellow-500 hover:text-darkgray duration-300 mr-2">
                            <span>Partnerzy</span>
                        </a>
        
                        <a href="#aboutus" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white font-raleway font-medium uppercase items-center justify-center hover:bg-yellow-500 hover:text-darkgray duration-300 mr-2">
                            <span>O nas</span>
                        </a>
        
                        <a href="#news" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white font-raleway font-medium uppercase items-center justify-center hover-bg-yellow-500 hover:text-darkgray hover:bg-yellow-500 duration-300 mr-2">
                            <span>Aktualności</span>
                        </a>
        
                        <a href="#gallery" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white font-raleway font-medium uppercase items-center justify-center hover-bg-yellow-500 hover:text-darkgray hover:bg-yellow-500 duration-300 mr-2">
                            <span>Galeria</span>
                        </a>
        
                        <div class="relative group w-full md:w-auto">
                            <button class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white font-raleway font-medium uppercase items-center justify-between hover:bg-yellow-500 hover:text-darkgray duration-300 dropdown-button text-left" id="productsDropdownButton">
                                <span>Sklep</span>
                                <i class="fa-solid fa-chevron-down text-current ml-2 transform rotate-0 duration-100"></i>
                            </button>
                            <div class="absolute hidden lg:mt-4 py-2 pb-4 w-[250px] bg-zinc-800 text-white border border-darkgray border-t-0 rounded-lg z-10 dropdown-menu transition-all duration-300" id="productsDropdown">
                                <a href="shop.php" class="block px-3 py-2 font-normal hover:bg-yellow-500 hover:text-darkgray duration-300">Strona główna</a>
                                <a href="shop.html#howToBuy" class="block px-3 py-2 font-normal hover:bg-yellow-500 hover:text-darkgray duration-300">Jak zamówić produkt?</a>
                                <a href="shop.php#bestProducts" class="block px-3 py-2 font-normal hover:bg-yellow-500 hover:text-darkgray duration-300">Polecane produkty</a>
                                <a href="shop.php#katalog" class="block px-3 py-2 font-normal hover:bg-yellow-500 hover:text-darkgray duration-300">Katalogi producentów</a>
                            </div>
                        </div>
        
                        <a href="#contact" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white font-raleway font-medium uppercase items-center justify-center hover:bg-yellow-500 hover:text-darkgray duration-300 mr-2">
                            <span>Kontakt</span>
                        </a>
                    </div>
                </div>
            </nav>
        
            <header class="relative items-center justify-center  overflow-hidden h-screen z-10">

                <video autoplay loop muted class="absolute -z-10 w-auto min-w-full min-h-full max-w-none top-0 left-0">
                    <source src="./images/backgrounds/Video_RWCONCEPT.webm" type="video/mp4" />Your browser does not support the video tag.
                </video>
        
                <div class="flex justify-center items-center h-full" data-aos="fade-up">
                    <div class="w-full mx-auto text-center">
                        <img src="./images/icons/logo-small.webp" class="flex mx-auto mt-10">
                            <div class="h-0.5 w-1/2 mx-auto bg-yellow-500 rotate-3 mt-10 mb-4 md:mb-10"></div>
                            <h2 class="text-white font-poppins font-thin uppercase text-xl md:text-3xl rotate-3">Wpadnij do nas!</h2>
            
                            <a href="#partners" class="relative inline-flex items-center justify-center p-4 px-14 py-3 overflow-hidden font-medium text-white bg-darkgray transition duration-300 ease-out border-gray-950 border rounded-full shadow-md group mt-24">
                                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-darkgray duration-300 -translate-y-full bg-yellow-500 group-hover:translate-y-0 ease">
                                    <svg class="w-6 h-6 transform " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7 7m0 0l7-7m-7 7v-14"></path>
                                    </svg>
                                </span>
                                <span class="absolute flex items-center justify-center w-full h-full text-yellow-500 font-roboto text-xl transition-all duration-300 transform group-hover:translate-y-full ease">PRZEJDŹ DALEJ</span>
                                <span class="relative invisible font-roboto">PRZEJDŹ DALEJ</span>
                            </a>

                    </div>
                </div>
            </header>
        
        
            <section class="h-auto flex justify-center items-center bg-yellow-500 scroll-mt-[50px]" id="partners">
                <div class="w-full">
                    <div class="slider-title w-full h-auto px-5 md:px-10" data-aos="fade-up">
                        <h1 class="font-extrabold text-darkgray text-center uppercase text-5xl md:text-7xl pt-10 mt-10">partnerzy i przyjaciele</h1>
                    </div>

                    <!-- Slider -->
                    <div class="brand-carousel owl-carousel pt-10 md:pt-20 pb-10" data-aos="fade-up">
                        <div class="single-logo w-[100px] h-[100px] md:w-auto md:h-auto">
                            <img src="./images/partners_images/tec.jpg" alt="">
                        </div>
                        <div class="single-logo w-[100px] h-[100px] md:w-auto md:h-auto">
                            <img src="./images/partners_images/fresso.jpg" alt="">
                        </div>
                        <div class="single-logo w-[100px] h-[100px] md:w-auto md:h-auto">
                            <img src="./images/partners_images/tec.jpg" alt="">
                        </div>
                        <div class="single-logo w-[100px] h-[100px] md:w-auto md:h-auto">
                            <img src="./images/partners_images/fresso.jpg" alt="">
                        </div>
                        <div class="single-logo w-[100px] h-[100px] md:w-auto md:h-auto">
                            <img src="./images/partners_images/tec.jpg" alt="">
                        </div>
                        <div class="single-logo w-[100px] h-[100px] md:w-auto md:h-auto">
                            <img src="./images/partners_images/fresso.jpg" alt="">
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="hidden md:block">
                        <path fill="#0f0f0f" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,218.7C384,203,480,149,576,154.7C672,160,768,224,864,218.7C960,213,1056,139,1152,96C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                      </svg>
                </div>
            </section>
        
            
        
        
            <section id="aboutus" class="relative h-fit flex bg-darkgray scroll-mt-[65px]">
                    <div class="text-container w-full md:w-1/2 flex flex-col justify-center items-start p-4 md:p-16">
                        <p class="text-white font-raleway text-sm md:text-base lg:text-lg pt-10 pb-10 md:pt-0" data-aos="fade-right" data-aos-offset="100" data-aos-delay="100">
                        Sklep <strong>R/W CONCEPT</strong> to prawdziwy raj dla miłośników motoryzacji, oferujący szeroki asortyment części samochodowych i motocyklowych, akcesoriów oraz chemii detailingowej. Bez względu na to, czy jesteś pasjonatem tuningu czy poszukujesz niezbędnych elementów do konserwacji swojego pojazdu, nasz sklep ma wszystko, czego potrzebujesz.<br><br>

                        Nasza oferta nie ogranicza się tylko do praktycznych rozwiązań – znajdziesz u nas także unikalne gadżety motoryzacyjne, które z pewnością umilą Ci czas spędzony za kierownicą. Oferujemy również bogaty wybór wysokiej jakości narzędzi, olejów i innych niezbędnych produktów, byś mógł zadbać o swój pojazd jak profesjonalista.<br><br>

                        <strong>R/W CONCEPT</strong> to nie tylko sklep, to miejsce, gdzie pasja do motoryzacji spotyka się z profesjonalizmem obsługi. Nasz zespół ekspertów chętnie służy pomocą i fachowym doradztwem, abyś zawsze był pewien, że dokonujesz najlepszych wyborów dla swojego pojazdu.<br><br>

                        Zapraszamy Cię do odwiedzenia naszego sklepu, abyście mogli na własne oczy przekonać się o bogactwie naszej oferty.
                        </p>
                        
                        <h3 class="text-xl text-yellow-500 pb-6" data-aos="fade-down" data-aos-offset="-100" data-aos-delay="100">Wpadnij na nasze social media!</h3>
                        <div class="flex w-fit h-fit space-x-4" data-aos="fade-down" data-aos-offset="-100" data-aos-delay="100">
                            <a href="https://www.facebook.com/ConceptRW?locale=pl_PL" class="text-4xl text-gray-400 hover:text-yellow-500 pr-4 pt-4 hover:-translate-y-1 duration-300 ease">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/concept.r.w/" class="text-4xl text-gray-400 hover:text-yellow-500 p-4 hover:-translate-y-1 duration-300 ease">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#tiktok.rwconcept.soon" class="text-4xl text-gray-400 hover:text-yellow-500 p-4 hover:-translate-y-1 duration-300 ease">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                            <a href="#youtube.rwconcept.soon" class="text-4xl text-gray-400 hover:text-yellow-500 p-4 hover:-translate-y-1 duration-300 ease">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <div class="image-container w-full md:w-1/2 bg-image bg-center bg-no-repeat bg-cover justify-center items-center">
                        <div class="image-text flex justify-center items-center">
                            <h1 class="text-white font-raleway font-extrabold uppercase text-5xl md:text-5xl lg:text-7xl bg-black/60 px-4 py-2" data-aos="fade-left" data-aos-offset="-300" data-aos-delay="100">O nas</h1>
                        </div>
                    </div>
            </section>
        
            
        
            <section x-data="xData()" class="h-auto bg-yellow-500 py-20 md:pt-20 scroll-mt-[45px] -z-10" id="news">
                <h1 class="text-yellow-500 font-raleway font-extrabold uppercase text-4xl md:text-7xl py-4 px-4 bg-darkgray w-fit text-center" data-aos="fade-right" data-aos-offset="0" data-aos-delay="100">Aktualności</h1>
            
                <!-- Card Grid -->
                <div class="mt-10 px-4">
                    <!-- JAK BĘDĄ 4 POSTY TO WTEDY ZMIENIĆ GRID NA: 
                        class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1" 
                    ZAMIAST FLEX, JUSTYFI-CENTER ITEMS-CENTER
                    -->
                    <div class="flex justify-center items-center" data-aos="fade-down" data-aos-offset="0">
                        <template x-for="post in posts">
                            <!-- Card Item (Clickable) -->
                            <a :href="post.linkToNewsPage" class="card my-8 rounded shadow-lg shadow-gray-900 bg-darkgray duration-300 hover:-translate-y-2">
                                <div>
                                    <figure>
                                        <!-- Image -->
                                        <img :src="post.image + '?auto=format&fit=crop&w=400&q=50'" class="rounded-t h-72 w-full object-cover" />
            
                                        <figcaption class="p-4">
                                            <!-- Title -->
                                            <p class="text-lg mb-4 font-bold leading-relaxed text-white" x-text="post.title"></p>
            
                                            <!-- Description -->
                                            <small class="leading-5 text-gray-400" x-text="post.description"></small>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </template>
                    </div>
            
                    <div class="w-full mx-auto text-center mt-10" data-aos="fade-up" data-aos-offset="-200">
                        <a href="news.html" class="relative inline-flex items-center justify-center p-4 px-10 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-darkgray rounded-md shadow-md group">
                            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-darkgray group-hover:translate-x-0 ease">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                            <span class="absolute flex items-center justify-center w-full h-full text-darkgray text-xl transition-all duration-300 transform group-hover:translate-x-full ease uppercase">Wszystkie aktualności</span>
                            <span class="relative invisible uppercase">Wszystkie aktualności</span>
                        </a>
                    </div>
                </div>

            </section>
        
        
            <section id="gallery" class="bgimg-gallery flex h-fit md:h-screen w-full bg-cover bg-fixed scroll-mt-[70px] justify-center items-center py-20 md:py-0">
                <div class="h-max w-full">
                    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true" pagination="true" data-aos="fade-down" data-aos-delay="300">
                        <swiper-slide>
                            <img src="./images/gallery/4.11/1.webp" />
                        </swiper-slide>
            
                        <swiper-slide>
                            <img src="./images/gallery/4.11/2.webp" />
                        </swiper-slide>
            
                        <swiper-slide>
                            <img src="./images/gallery/4.11/3.webp" />
                        </swiper-slide>
            
                        <swiper-slide>
                            <img src="./images/gallery/4.11/4.webp" />
                        </swiper-slide>
    
                        <swiper-slide>
                            <img src="./images/gallery/4.11/5.webp" />
                        </swiper-slide>
                    </swiper-container>
            
                    <swiper-container class="mySwiper2 z-30" loop="true" space-between="10" slides-per-view="4" free-mode="true" watch-slides-progress="true" data-aos="fade-up" data-aos-delay="300" data-aos-offset="-400">
                        <swiper-slide>
                            <img src="./images/gallery/4.11/1.webp" />
                        </swiper-slide>
            
                        <swiper-slide>
                            <img src="./images/gallery/4.11/2.webp" />
                        </swiper-slide>
            
                        <swiper-slide>
                            <img src="./images/gallery/4.11/3.webp" />
                        </swiper-slide>
            
                        <swiper-slide>
                            <img src="./images/gallery/4.11/4.webp" />
                        </swiper-slide>
    
                        <swiper-slide>
                            <img src="./images/gallery/4.11/5.webp" />
                        </swiper-slide>
                    </swiper-container>
                </div>
        
            </section>
        
            <section id="contact">
                <div class="py-20 bg-darkgray">
                    <div class="max-w-6xl mx-auto bg-darkgray rounded-lg">
                        <div class="grid md:grid-cols-2 items-center gap-16 sm:p-10 p-4 font-[sans-serif]">
                            <div data-aos="fade-right" data-aos-delay="300" data-aos-offset="-100">
                                <h1 class="text-4xl font-extrabold text-white">Skontaktuj się z nami</h1>
                                <p class="text-sm text-gray-400 mt-3">Masz pytanie lub jesteś zainteresowany współpracą z nami? Napisz do nas a na pewno się odezwiemy!</p>
                                <ul class="mt-12 space-y-4">
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='rgb(234 179 8)'
                                            viewBox="0 0 479.058 479.058">
                                            <path
                                                d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                                data-original="#000000" />
                                        </svg>
                                        <p class="text-white text-base ml-3">
                                            <strong>rwconceptcompany@gmail.com</strong>
                                        </p>
                                    </li>
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='rgb(234 179 8)' viewBox="0 0 482.6 482.6">
                                            <path d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z" data-original="#000000"></path>
                                        </svg>
                                        <a href="tel: 730-101-204" class="text-white text-base ml-3 hover:text-yellow-500 duration-300">
                                            <strong>730 101 204</strong>
                                        </a>
                                    </li>
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='rgb(234 179 8)' viewBox="0 0 368.16 368.16">
                                            <path d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z" data-original="#000000"></path>
                                            <path d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z" data-original="#000000"></path>
                                        </svg>
                                        <a href="#map" class="text-white text-base ml-3 hover:text-yellow-500 duration-300">
                                            <strong>Słupca, Plac Wolności 3/4</strong>
                                        </a>
                                    </li>
                                </ul>
                                
                                <div class="mt-10">
                                    <h3 class="text-2xl text-gray-300 py-2">Godziny otwarcia:</h3>
                                    <ul class="text-white">
                                        <li class="py-1">
                                            Pon - Pt : <span class="text-yellow-500 font-semibold">8:00 - 17:00</span> 
                                        </li>
                                        <li class="py-1">
                                            Sobota : <span class="text-yellow-500 font-semibold">8:00 - 14:00</span> 
                                        </li>
                                        <li class="py-1">
                                            Niedziela : <span class="text-yellow-500 font-semibold">Zamknięte</span> 
                                        </li>
                                    </ul>
                                </div>

                                <div class="flex w-fit h-fit space-x-6 mt-10">
                                    <a href="https://www.facebook.com/ConceptRW?locale=pl_PL" target="_blank" class="text-2xl text-gray-400 hover:text-yellow-500 hover:-translate-y-1 duration-300 ease">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/concept.r.w/" target="_blank" class="text-2xl text-gray-400 hover:text-yellow-500 hover:-translate-y-1 duration-300 ease">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/@d_d_detailing" target="_blank" class="text-2xl text-gray-400 hover:text-yellow-500 hover:-translate-y-1 duration-300 ease">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=IneeFc6pROQ&ab_channel=AKFilms" target="_blank" class="text-2xl text-gray-400 hover:text-yellow-500 hover:-translate-y-1 duration-300 ease">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>


                            </div>
                            <div class="bg-zinc-800 p-6 rounded-lg" data-aos="fade-left" data-aos-delay="300" data-aos-offset="-100">
                                <p class="text-lg font-semibold text-gray-200">Napisz do nas...</p>
                                <form class="form-contact mt-8 space-y-4" action="#">
                                    <input type='text' placeholder='Imie i nazwisko' required
                                        class="w-full rounded-md py-3 px-4 text-sm outline-darkgray" id="name"/>
                                    <input type='email' placeholder='Email' required
                                        class="w-full rounded-md py-3 px-4 text-sm outline-darkgray" id="email"/>
                                    <input type='text' placeholder='Numer telefonu' required maxlength="15"
                                        class="w-full rounded-md py-3 px-4 text-sm outline-darkgray" id="phone"/>
                                    <textarea placeholder='Treść wiadomości...' required rows="6"
                                        class="w-full rounded-md px-4 text-sm pt-3 outline-darkgray" id="message"></textarea>
                                    <button type='submit'
                                        class="text-white bg-yellow-500 hover:bg-darkgray duration-200 font-semibold rounded-md text-sm px-4 py-3 flex items-center justify-center w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2" viewBox="0 0 548.244 548.244">
                                            <path fill-rule="evenodd" d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z" clip-rule="evenodd" data-original="#000000" />
                                        </svg>
                                        Wyślij email
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div id="map" class="flex p-4" data-aos="fade-down" data-aos-delay="300" data-aos-offset="-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2052.3057427263893!2d17.869723234430413!3d52.28666231776824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704c5fd6caba093%3A0x1528502a05a5f901!2splac%20Wolno%C5%9Bci%203%2F4%2C%2062-400%20S%C5%82upca!5e0!3m2!1spl!2spl!4v1699221962236!5m2!1spl!2spl" width="100%" height="500" style="border: 0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        
            <section id="footer">
                <p class="text-center text-xs bg-darkgray text-gray-400 py-1">© 2023 RW/CONCEPT, All Rights Reserved. | Created by: <a href="https://portfolio2023mk-l77o6i5zq-mateuszkujawa.vercel.app/">MKujawaDev.pl</a></p>
            </section>
    </div>



    <!-- Scripts -->
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Loading Page Script -->
        <script src="./js/loading.js"></script>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Menu -->
        <script src="./js/menu.js"></script>
        <!-- Dropdown menu -->
        <script src="./js/dropdown.js"></script>
        <!-- Slider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="./js/slider.js"></script>
        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        <script src="./js/swiper.js"></script>
        <!-- SmtpJS Mail sender -->
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="./js/mailsender.js"></script>
        <!-- Awesome Icons -->
        <script src="https://kit.fontawesome.com/3fd4863eda.js" crossorigin="anonymous"></script>
        <!-- Cards -->
        <script src="./js/newsCards.js"></script>
</body>
</html>