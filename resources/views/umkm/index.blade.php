@extends('layouts.main-umkm')

@section('container')
    <!-- Section Sambutan -->
    {{-- <section class="sambutan">
        <div class="gap-section">
            <div class="section-title">Sambutan Direktur RBC</div>
            <div class="line-title"></div>
            <div class="row-item">
                <div class="sambutan-col1">
                    <div>
                        <h3>Direktur Rumah Berdaya Cilegon</h3>
                        <img src="{{ asset('/img/nia-desmalia.png') }}" alt="foto direktur rbc">
                        <h3>Nia Desmalia, A.Md</h3>
                    </div>
                </div>
                <div class="sambutan-col2">
                    <h3>Assalamu'alaikum Wr. Wb.</h3>
                    <p>Puji dan syukur kehadirat Allah SWT atas segala ridho-Nya, Rumah Berdaya Cilegon
                        menghadirkan tampilan baru pada website kami. Perkembangan teknologi informasi dan telekomunikasi
                        telah membawa perubahan yang sangat mendasar terhadap kecepatan penyebaran informasi, sehingga
                        sangat mudah dan cepat untuk diakses oleh masyarakat di belahan dunia manapun.
                    </p>
                    <p>Sebagai salah satu media informasi yang berisi aktivitas kami dan Usaha Mikro di Kota
                        Cilegon, website yang kami kembangkan memungkinkan para pihak yang memiliki kepentingan dalam
                        memberikan kebijakan maupun para pihak yang memiliki kepentingan dalam menjalin bisnis dengan
                        Koperasi dan Usaha Mikro di Kota Cilegon dapat secara langsung berinteraksi.
                    </p>
                    <p>Harapan kami sederhana dengan media ini semoga Koperasi dan Usaha Mikro di kota cilegon bisa
                        mengikuti kemajuan
                        teknologi informasi dan dapat berkompetisi, yang pada akhirnya Koperasi dan Usaha Mikro dapat tumbuh
                        dan berkembang serta mampu mewujudkan sebagai pilar perekonomian di Kota Cilegon khususnya dan
                        seluruh Indonesia pada umumnya.
                    </p>
                    <h3>Wassalamu'alaikum Wr. Wb</h3>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Section Sambutan -->

    <!-- Section Videos -->
    {{-- <section class="videos">
        <div class="gap-section">
            <div class="section-title">Video Kami</div>
            <div class="line-title"></div>
            <div class="row-item">
                <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/6tI1gG5OYnk?si=v076pojD-U0RRLWr" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/YAKakljKoSA?si=VYWZtpCiQZ6vOwwH"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section> --}}
    <!-- End Section Videos -->

    <!-- Section Link Web -->
    {{-- <section class="link-web">
        <div class="gap-section">
            <div class="section-title">Tautan Situs Web</div>
            <div class="line-title"></div>
            <div class="row-item">
                <div class="link-web-col">
                    <a target="_blank" href="https://sedulur.cilegon.go.id/data-umkm-cilegon">
                        <h3>- DINAS KOPERASI & UMK KOTA CILEGON -</h3>
                        <p>DATA UMKM Kota Cilegon</p>
                    </a>
                </div>

                <div class="link-web-col">
                    <a target="_blank"
                        href="https://dprd-bantenprov.go.id/2023/01/12/panggil-dinas-koperasi-dan-ukm-provinsi-banten-komisi-ii-inginkan-pembangunan-plut-sesuai-rencana/">
                        <h3>- DPRD Provinsi Banten -</h3>
                        <p>Panggil Dinas Koperasi dan UKM Provinsi Banten, Komisi II Inginkan Pembangunan PLUT Sesuai
                            Rencana</span> terlebih dahulu.</p>
                    </a>
                </div>

                <div class="link-web-col">
                    <a target="_blank" href="https://dinkopukm.bantenprov.go.id/Data-Koperasi-dan-UKM-KEMENKOP">
                        <h3>- Dinas Koperasi dan UKM Provinsi Banten -</h3>
                        <p>Data koperasi & ukm (kemenkop) Provinsi Banten</p>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Call To Action -->
    <section class="cta"
        style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url({{ asset('img/img-umkm/banner2.jpg') }});">
        <h1>Jika ada kendala dalam proses registrasi, segera hubungi tim kami melalui kontak di bawah ini!</h1>
        <a href="/contact" class="primary-btn">kontak</a>
    </section>
@endsection
