<!-- Section Header -->
<section class="header"
    style="background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url({{ asset('img/background.png') }})">
    <nav>
        <a href="/"><img style="width:10%; height:10%" src="{{ asset('/img/logo.png') }}" /></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/registrasi">Pendaftaran</a></li>
                <li><a href="/contact">Kontak</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

    <div class="text-box">
        <h1>Pendaftaran UMKM Rumah Berdaya Cilegon</h1>
        <p>
            Melalui website ini Anda dapat melakukan pendaftaran usaha Anda sehingga dapat meningkatkan potensi ekonomi
            lokal yang berdaya saing di Kota Cilegon dan di dunia Internasional.
        </p>
        <a href="/registrasi" class="primary-btn">Daftar</a>
    </div>
</section> <!-- End Section Header -->
