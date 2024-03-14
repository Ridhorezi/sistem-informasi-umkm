@extends('layouts.main-umkm')

@section('container')
    <!-- contact us -->

    <!-- Section Location -->
    <section class="location">
        <div class="gap-section">
            <div class="section-title">lokasi</div>
            <div class="line-title"></div>
            <iframe width="820" height="560" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Jl.+Pandawa+No.129%2C+Bendungan%2C+Kec.+Cilegon%2C+Kota+Cilegon%2C+Banten+42417&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </section> <!-- End Section Location -->

    <!-- Contact Form -->
    <section class="contact-us">
        <div class="gap-section">
            <div class="section-title">kontak</div>
            <div class="line-title"></div>
            <div class="row-item">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <span>
                            <h5>Alamat</h5>
                            <p>Jl. Pandawa No.129, Bendungan, Kec. Cilegon, Kota Cilegon, Banten 42417</p>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>Telepon</h5>
                            <p>(+62) 878714994339</p>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>Email</h5>
                            <p>info@rbc.or.id</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form action="https://formsubmit.co/info@rbc.or.id" method="POST">
                        <input type="text" name="name" placeholder="nama" required />
                        <input type="email" name="email" placeholder="email" required />
                        <input type="text" name="subject" placeholder="subject" required />
                        <textarea rows="6" name="message" placeholder="pesan" required></textarea>
                        <button type="submit" class="primary-btn blue-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section> <!-- Contact Form -->
@endsection
