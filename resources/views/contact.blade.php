@extends('layouts.app')
@section('content')
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
    <div class="row">
    <div class="col-xl-12">
    <div class="bradcam_text">
    <h3>contact us</h3>
    </div>
    </div>
    </div>
    </div>
</div>

<div class="container">
    <section class="content-section">
        <div class="row mt-5 pt-5">
            <div class="col-md-6 mb-4">
                <h4>HEAD SHOWROOM - NOLFF</h4>
                <p>Jakarta Design Center Building 2nd Fl. SR. 14 Jl. Gatot Subroto Kav. 53 Slipi Jakarta Barat 10260</p>    
                <p>P.	(021) 572 0358</p>
                <p>(021) 530 4540</p>
                <p>(021) 572 0360</p>
                <p>F.	(021) 572 0544</p>                
            </div>
            <div class="col-md-6 mb-4">
                <h4>BRANCHES - NOLFF</h4>
                <p>Istana Kuta Galleria Blok VLI / 20 Jl. Patih Jelantik Kuta - Bali 80361</p>                 
                <p>P. / F.	(0361) 769 300</p>             
            </div>
            <div class="col-md-6 mb-4">
                <h4>BRANCHES - ELOI</h4>
                <p>Jl. Pinangsia Raya No. 16R Jakarta Barat</p>         
            </div>
            <div class="col-md-6 mb-4">
                <h4>BRANCHES - NOLFF</h4>
                <p>Bukit Darmbo Boulevard - Office Park 2 Blok B2 No.9 Bukit Darmo Golf - Surabaya</p>                          
            </div>
            <div class="col-md-6 mb-4">
                <h4>BRANCHES - NOLFF</h4>
                <p>Mall Artha Gading SR. 3F / B5 / 09 Jl. Boulevard Artha Gading Selatan No.1 Jakarta Utara 14240</p>                                     
            </div>
        </div>
        <div class="row mt-5 pt-5">
            <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
            <div class="col-12">
            <div class="form-group">
            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
            </div>
            </div>
            <div class="col-12">
            <div class="form-group">
            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
            </div>
            </div>
            </div>
            <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
            </div>
            </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
            <h3>Jakarta Design Center Building 2nd Fl</h3>
            <p>Jakarta Barat 10260</p>
            </div>
            </div>
            <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
            <h3>(021) 572 0358</h3>
            <p>Mon to Fri 9am to 6pm</p>
            </div>
            </div>
            <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
            <h3><a href="#">nolff@interior.com</a></h3>
            <p>Send us your query anytime!</p>
            </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection