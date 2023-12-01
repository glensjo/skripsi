@extends('layouts.guest')
@section('content')
    <section id="home-slider">
        <div class="hero">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/team.png" data-delay="10000" data-saveperformance="on" data-title="We Are Cigem Creative">
                        <img src="img/backgrounds/team.png" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption sft"
                                                data-x="center"  
                                                data-y="260"
                                                data-speed="1200"
                                                data-start="1100"
                                                data-easing="Power3.easeInOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                            <h2 class="home-heading op-1">Cigem Creative</h2>
                        </div>
                        <div class="tp-caption home-subheading sft "
                                                data-x="center" 
                                                data-y="360" 
                                                data-speed="1200"
                                                data-start="1350"
                                                data-easing="Power3.easeInOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                            <div class="op-1">PT. SOLUSI ANDALAN BANGSA INDONESIA</div>
                        </div>
                        <div class="tp-caption home-button sft fadeout"
                                                data-x="center" 
                                                data-y="400" 
                                                data-speed="1200"
                                                data-start="1550"
                                                data-easing="Power3.easeInOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                            <div class="op-1">
                                <a href="#about" class="btn btn-primary btn-scroll">
                                Siapa Kami?
                                </a>
                            </div>
                        </div>
                    </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
                <div class="home-bottom">
                    <div class="container text-center">
                    <div class="move bounce">
                        <a href="#about" class="ion-ios-arrow-down btn-scroll">
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section id="about">
        <div class="container">
            <div class="col-md-12 text-center wow fadeInUp">
                <h3 class="section-title">Tentang Perusahaan Kami</h3>
                <p class="subheading">Apapun yang kamu mau,<span class="highlight"> sabiin aja</span>.</p><br>
            </div>
            <div class="row about-row wow fadeInUp">
                <div class="col-md-4 col-sm-12 about-column">
                <div class="about-icon">
                    <span class="icon-tag size-2x highlight"></span>
                    <span class="icon-tag back-icon"></span>
                </div>
                <div class="about-info">
                    <h4>Harga Terjangkau</h4>
                    <p class="about-description text-justify">Menyediakan produk berkualiatas dengan harga yang terjangkau dan dapat disesuaikan dengan keinginan Anda.</p>
                </div>
                </div>
                <div class="col-md-4 col-sm-12 about-column">
                <div class="about-icon">
                    <i class="icon-clock size-2x highlight"></i>
                    <i class="icon-clock back-icon"></i>
                </div>
                <div class="about-info">
                    <h4>Tepat Waktu</h4>
                    <p class="about-description text-justify">Proses produksi yang cepat dengan kualitas pengerjaan terjamin dan dapat disesuaikan dengan kebutuhan Anda.</p>
                </div>
                </div>
                <div class="col-md-4 col-sm-12 about-column">
                <div class="about-icon">
                    <i class="icon-badge size-2x highlight"></i>
                    <i class="icon-badge back-icon"></i>
                </div>
                <div class="about-info">
                    <h4>Kualitas Premium</h4>
                    <p class="about-description text-justify">Produksi menggunakan bahan baku dengan kualitas premium sehingga menjamin kenyamanan dari pemakaian.</p>
                </div>
                </div>
            </div>      
            <div class="row">
                <div class="col-md-6 text-center about-text">
                <h3 class="wow fadeInUp">Cerita Kami</h3>
                <p class="wow fadeInUp text-justify">Berdiri pada tahun 2017, kami adalah sebuah vendor yang hadir untuk menyediakan dan memenuhi segala kebutuhan merchandise dan barang promosi dari sebuah event, organisasi, komunitas, dan perusahaan Anda, mulai dari skala kecil hingga skala besar.</p>
                <p class="wow fadeInUp text-justify">Kami memiliki workshop pribadi yang dapat dikunjungi untuk menyediakan kebutuhan konveksi, merchandise, dan printing membuat kami siap menjadi vendor tunggal untuk menyediakan dan memenuhi seluruh kebutuhan kreatif yang Anda butuhkan.</p> <br>
                <p class="wow fadeInUp">
                    <button type="button" class="btn btn-primary btn-md" onclick="location.href='#contact'">Hubungi</button>
                </p>
                </div>
                <div class="col-md-6 wow fadeInUp about-text">
                <h3 class="wow fadeInUp">Visi</h3>
                <p class="wow fadeInUp">Menjadi top of mind vendor merchandise promosi di Indonesia dan menjawab semua tantangan didalam industri promosi.</p><br>
                <h3 class="wow fadeInUp">Misi</h3>                
                <ul class="text-justify">
                    <li><p class="wow fadeInUp">Memberikan pelayanan yang berfokus pada customer oriented, mengedukasi, dan memposisikan sebagai teman dari customer.</p></li>
                    <li><p class="wow fadeInUp">Memiliki waktu produksi terbaik yang dapat memenuhi berbagai kebutuhan segmentasi market.</p></li>
                    <li><p class="wow fadeInUp">Menjadi one stop solution vendor merchandise.</p></li>
                    <li><p class="wow fadeInUp">Dapat menjalankan produki sekala kecil maupun besar.</p></li>
                    <li><p class="wow fadeInUp">Memiliki asset produksi in house untuk menunjang efisiensi dan pemantauan kualitas.</p></li>
                </ul>                  
                </div>
            </div>
        </div>
    </section>
    
    <section id="fun-facts" class="parallax-section-2">
        <div class="container">
            <div class="col-md-12 text-center white wow fadeInUp">
                <h3 class="section-title">Kapasitas Produksi</h3>
                <p class="subheading">Bangga dengan <span class="highlight">cigem</span> tim.</p>
            </div>
            <div class="counter-row row text-center wow fadeInUp">
                <div class="col-md-4 col-sm-6 fact-container">
                <div class="fact">
                    <span class="counter highlight">30.000</span>
                    <h4>Kaos</h4>
                </div>
                </div>
                <div class="col-md-4 col-sm-6 fact-container">
                <div class="fact">
                    <span class="counter highlight">5.400</span>
                    <h4>Jaket</h4>
                </div>
                </div>
                <div class="col-md-4 col-sm-6 fact-container">
                <div class="fact">
                    <span class="counter highlight">150.000</span>
                    <h4>Printing</h4>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 fact-container">
                <div class="fact">
                    <span class="counter highlight">4.500</span>
                    <h4>Kemeja PDL</h4>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 fact-container">
                <div class="fact">
                    <span class="counter highlight">60.000</span>
                    <h4>Merchandise</h4>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="team">
        <div class="container">
            <div class="col-md-12 text-center wow fadeInUp">
                <h3 class="section-title">Tim Kami</h3>
                <p class="subheading">Ketekunan dan semangat menghasilkan  <span class="highlight">kesuksesan yang besar</span>.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 team-member">
                <div class="effect effects wow fadeInUp">
                    <div class="img">
                        <img src="img/team/ceo.jpeg" class="img-responsive" alt="CEO Cigem Creative" />
                        <div class="overlay">
                            <div class="expand social-icon">
                            <a href="https://www.instagram.com/samdwik">
                                <i class="icon ion-social-instagram-outline"></i>
                            </a>
                            </div>
                            <a class="close-overlay hidden">
                            x
                            </a>
                        </div>
                    </div>
                </div>
                <div class="member-info wow fadeInUp">
                    <h4>Samuel Dwi Kurnia</h4>
                    <h5 class="highlight">CEO / Founder</h5>
                    <p>"Living life to the fullest of capacity anytime."</p>
                </div>
                </div>
                <div class="col-md-3 col-sm-3 team-member">
                <div class="effect effects wow fadeInUp">
                    <div class="img">
                        <img src="img/team/Kefas COO2.jpg" class="img-responsive" alt="COO Cigem Creative" />
                        <div class="overlay">
                            <div class="expand social-icon">
                            <a href="https://www.instagram.com/kefasleonhart">
                                <i class="icon ion-social-instagram-outline"></i>
                            </a>
                            </div>
                            <a class="close-overlay hidden">
                            x
                            </a>
                        </div>
                    </div>
                </div>
                <div class="member-info wow fadeInUp">
                    <h4>Kefas Leonhart</h4>
                    <h5 class="highlight">Chief Operating Officer (COO)</h5>
                    <p>"Yesterday is a history, tomorrow is a mistery, but today is a gift. That is why it's called 'Present'."</p>
                </div>
                </div>
                <div class="col-md-3 col-sm-3 team-member">
                <div class="effect effects wow fadeInUp">
                    <div class="img">
                        <img src="img/team/cmo.jpg" class="img-responsive" alt="CMO Cigem Creative" />
                        <div class="overlay">
                            <div class="expand social-icon">
                            <a href="https://www.instagram.com/erio_boy">
                                <i class="icon ion-social-instagram-outline"></i>
                            </a>
                            </div>
                            <a class="close-overlay hidden">
                            x
                            </a>
                        </div>
                    </div>
                </div>
                <div class="member-info wow fadeInUp">
                    <h4>Erio Boy Somara</h4>
                    <h5 class="highlight">Chief Marketing Officer (CMO)</h5>
                    <p>"Life is an unending agony."</p>
                </div>
                </div>
                <div class="col-md-3 col-sm-3 team-member">
                <div class="effect effects wow fadeInUp">
                    <div class="img">
                        <img src="img/team/komisaris.jpeg" class="img-responsive" alt="Komisaris Cigem Creative" />
                        <div class="overlay">
                            <div class="expand social-icon">
                            <a href="https://www.instagram.com/yoshelramlie">
                                <i class="icon ion-social-instagram-outline"></i>
                            </a>
                            </div>
                            <a class="close-overlay hidden">
                            x
                            </a>
                        </div>
                    </div>
                </div>
                <div class="member-info wow fadeInUp">
                    <h4>Yoshel Ramlie</h4>
                    <h5 class="highlight">Komisaris</h5>
                    <p>"Not taking a risk is the biggest risk of all."</p>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="quote" class="parallax-section-3">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-12 wow fadeInUp" style="z-index:3">
                <div id="quote-slider" class="owl-carousel">
                    <div>
                        <blockquote>
                            <i class="icon-left ion-quote ion-2x highlight"></i>
                            <span> Bersama Cigem Apapun Kebutuhannya Sabiin Aja </span>
                            <i class="icon-right ion-quote ion-2x highlight"></i>
                        </blockquote>
                        <h4 class="quote-author highlight">Cigem Creative</h4>
                    </div>                  
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="catalog" >
        <div class="separator"></div>
        <div class="container-fluid">
            <div class="col-md-12 text-center">
                <h3 class="section-title wow fadeInUp">Katalog Kami</h3>
                <p class="subheading wow fadeInUp">Ciptakan produk dan promosikan <i>brand</i> bersama <span class="highlight">cigem creative</span>.</p>
            </div>
            <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
                <ul>
                <li class="cbp-item effect effects konveksi">
                    <div class="img">
                        <img src="img/catalog/products/1.png" class="img-responsive" alt="Kaos" />
                        <div class="overlay">
                            <ul class="expand">
                            <li class="cbp-l-icon">
                                <a href="img/catalog/details/1.png" class="cbp-lightbox" data-title="Kaos">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <!-- <li class="cbp-l-icon">
                                <a href="projects/project1.html" class="cbp-singlePage">
                                    <i class="icon-link"></i>
                                </a>
                            </li> -->
                            <li class="cbp-l-caption-title">Kaos</li>
                            <li class="cbp-l-caption-desc"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="cbp-item effect effects konveksi">
                    <div class="img">
                        <img src="img/catalog/products/2.png" class="img-responsive" alt="Polo" />
                        <div class="overlay">
                            <ul class="expand">
                            <li class="cbp-l-icon">
                                <a href="img/catalog/details/2.png" class="cbp-lightbox" data-title="Polo">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <!-- <li class="cbp-l-icon">
                                <a href="projects/project2.html" class="cbp-singlePage">
                                    <i class="icon-link"></i>
                                </a>
                            </li> -->
                            <li class="cbp-l-caption-title">Polo</li>
                            <li class="cbp-l-caption-desc"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="cbp-item effect effects konveksi">
                    <div class="img">
                        <img src="img/catalog/products/3.png" class="img-responsive" alt="Jersey" />
                        <div class="overlay">
                            <ul class="expand">
                            <li class="cbp-l-icon">
                                <a href="img/catalog/details/3.png" class="cbp-lightbox" data-title="Jersey">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <!-- <li class="cbp-l-icon">
                                <a href="projects/project3.html" class="cbp-singlePage">
                                    <i class="icon-link"></i>
                                </a>
                            </li> -->
                            <li class="cbp-l-caption-title">Jersey</li>
                            <li class="cbp-l-caption-desc"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="cbp-item effect effects konveksi">
                    <div class="img">
                        <img src="img/catalog/products/4.png" class="img-responsive" alt="Kemeja" />
                        <div class="overlay">
                            <ul class="expand">
                            <li class="cbp-l-icon">
                                <a href="img/catalog/details/4.png" class="cbp-lightbox" data-title="Kemeja">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <!-- <li class="cbp-l-icon">
                                <a href="projects/project4.html" class="cbp-singlePage">
                                    <i class="icon-link"></i>
                                </a>
                            </li> -->
                            <li class="cbp-l-caption-title">Kemeja</li>
                            <li class="cbp-l-caption-desc"></li>
                            </ul>
                        </div>
                    </div>
                </li>                
                </ul>
            </div>
            <div class="cbp-l-loadMore-button">
                <a href="/view" class="cbp-l-loadMore-button-link wow fadeInUp">
                SHOW ME MORE
                </a>                
            </div>
        </div>
    </section>

    <section id="services" class="parallax-section-4">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3 class="section-title wow fadeInUp">Apa Yang Dapat Kita Lakukan</h3>
                <p class="subheading wow fadeInUp">Semua <span class="highlight">inovasi dan ide kreatif</span> harus diwujudkan.</p>
            </div>
            <div class="row features-row wow fadeInUp">
                <div class="col-md-4 feature-column">
                <div class="feature-icon">
                    <i class="icon-handbag size-2x highlight"></i>
                </div>
                <div class="feature-info">
                    <h4>Konveksi</h4>
                    <p class="feature-description">Kaos, Polo, Totebag, Jersey, Hoodie, Kemeja, Jaket, Varsity, Almamater, Apron, Topi, Jas Lab, Celana, dan lainnya</p>
                </div>
                </div>
                <div class="col-md-4 feature-column">
                <div class="feature-icon">
                    <i class="icon-pencil size-2x highlight"></i>
                </div>
                <div class="feature-info">
                    <h4>Merchandise</h4>
                    <p class="feature-description">Mug, Pulpen, Tumbler, Korek, Handuk, Gelang, ID Card + Lanyard</p>
                </div>
                </div>
                <div class="col-md-4 feature-column">
                <div class="feature-icon">
                    <i class="icon-notebook size-2x highlight"></i>
                </div>
                <div class="feature-info">
                    <h4>Printing</h4>
                    <p class="feature-description">Sticker, Brosur, Notebook, Kalender</p>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <h3 class="section-title wow fadeInUp">Klien Kami</h3>
                <p class="subheading wow fadeInUp">Tanggung jawab dan kepercayaan menjadi <span class="highlight">kunci keberhasilan</span>.</p>
                </div>
                <div class="clients">
                <div id="client-slider" class="owl-carousel">
                    <div class="item">
                        <img src="img/clients/kompas.png" alt="Kompas Gramedia" />
                    </div>
                    <div class="item">
                        <img src="img/clients/wuling.png" alt="Wuling" />
                    </div>
                    <div class="item">
                        <img src="img/clients/ted.png" alt="TedX" />
                    </div>
                    <div class="item">
                        <img src="img/clients/shopee.png" alt="Shopee" />
                    </div>
                    <div class="item">
                        <img src="img/clients/bca.png" alt="BCA" />
                    </div>
                    <div class="item">
                        <img src="img/clients/allo.png" alt="Allo Bank" />
                    </div>
                    <div class="item">
                        <img src="img/clients/atma.png" alt="Universitas Atma Jaya" />
                    </div>
                    <div class="item">
                        <img src="img/clients/umnn.png" alt="Universitas Multimedia Nusantara" />
                    </div>
                    <div class="item">
                        <img src="img/clients/uphh.png" alt="Universitas Pelita Harapan" />
                    </div>
                    <div class="item">
                        <img src="img/clients/indomie.png" alt="Indomie" />
                    </div>
                    <div class="item">
                        <img src="img/clients/ipbb.png" alt="Institut Pertanian Bogor" />
                    </div>
                    <div class="item">
                        <img src="img/clients/matanajwa.png" alt="Mata Najwa" />
                    </div>
                    <div class="item">
                        <img src="img/clients/jay.png" alt="Jaya Konstruksi" />
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="parallax-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <h3 class="section-title white wow fadeInUp">Tanggapan Klien</h3>
                <p class="subheading grey wow fadeInUp">Apa yang klien bilang tentang kami?</p>
                </div>
                <div class="col-md-12 text-center wow fadeInUp">
                <div id="owl-testimonials" class="owl-carousel">
                    <div>
                        <div class="testimonial">
                            <img src="img/review/rev1.png" alt="Review 1" />
                        </div>                     
                    </div>
                    <div>
                        <div class="testimonial">
                            <img src="img/review/rev2.png" alt="Review 2" />
                        </div>
                    </div>
                    <div>
                        <div class="testimonial">
                            <img src="img/review/rev3.png" alt="Review 3" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection