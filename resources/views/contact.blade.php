@extends('layouts.guest')
	@section('content')
    
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><br><br><br>
                <h3 class="section-title wow fadeInUp">Hubungi Kami</h3>
                <p class="subheading wow fadeInUp"> Mari bekerja bersama kami! </p>
                </div>
                <div class="col-md-7 wow fadeInUp">
                <div id="message"></div>
                <form method="post" action="php/contact-form.php.htm" name="contactform" id="contactform">
                    <fieldset>
                        <input name="name" type="text" id="name" placeholder="Name"/>
                        <input name="email" type="text" id="email" placeholder="Email"/>
                        <input name="subject" type="text" id="subject" placeholder="Subject"/>
                    </fieldset>
                    <fieldset>
                        <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message"></textarea>
                    </fieldset>
                    <input type="submit" class="submit" id="submit" value="Send Message" />
                </form>
                </div>
                <div class="col-md-4 wow fadeInLeft">
                <h4> Workshop 1</h4>
                <address>
                Toko Bangunan Pusaka / Konveksi, <br>
                Jl. Bintaro Permai Gang Samping No.56, RT.4/RW.2, <br>
                Pesanggrahan, Kec. Pesanggrahan, Kota Jakarta Selatan, <br>
                Daerah Khusus Ibukota Jakarta 12320 <br>
                </address>
                </div>
                <div class="col-md-4 wow fadeInLeft">
                <h4> Workshop 2</h4>
                <address>
                Segera Hadir
                </address>               
                </div>
                <div class="col-md-4 wow fadeInLeft">
                <h4> Hubungi Kami : </h4>
                <address>
                <a href="tel:085281573272" target="_blank"><h4><i class="fa-solid fa-phone"></i> 0852-8157-3272</h4></a>
                <abbr title="Email">
                <strong>Email </strong>
                </abbr> : cigem.creative@gmail.com
                </address>
                </div>
            </div>
        </div>
    </section>

    <div id="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.064780548511!2d106.75797137372074!3d-6.255196261240877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1b58e28dae5%3A0x39b9e86872da122e!2sSABI%20Konveksi%20Bintaro%20%7C%20Sablon%20Kaos%20Bintaro%20%7C%20Vendor%20Merchandise%20%7C%20Vendor%20Printing!5e0!3m2!1sen!2sid!4v1700149537098!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    @endsection