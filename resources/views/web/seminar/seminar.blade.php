@extends('layouts/web.main')

@section('index')

{{-- <section class="comingsoon" id="comingsoon">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_font text_center index_min">
                <p class="text_big">Coming <span class="fc_red">Soon</span></p>
                <p>SIFEST 2022 HIMSI FASILKOM UNSRI</p>
            </div>
            <div class="img_container">
                <img src='assets/img/sifest2022/maskot_pose1.png' alt="">
            </div>
        </div>
    </div>
</section> --}}

<section class="hero" id="hero">
    <div class="wrapper">
        @if(session()->has("success"))
            <div class="alert success">
                <p class="alert_msg">{{ session("success") }}</p>
                <i class="fa-solid fa-xmark alert_toggle"></i>
            </div>
        @endif
        @if(session()->has("error"))
            <div class="alert error">
                <p class="alert_msg">{{ session("error") }}</p>
                <i class="fa-solid fa-xmark alert_toggle"></i>
            </div>
        @endif
        <div class="container p_relative py20">
            <div class="title_font text_center my20 t">
                <p class="text_big">Seminar</p>
                <p class="fc_red">SIFEST 2022 HIMSI FASILKOM UNSRI</p>
            </div>
            <div class="grid_container_40_50">
                <div class="grid_box_left ease2 l">
                    <!-- About Section Img -->
                    <div class="img_container">
                        <img src="assets/img/icon/seminar.png" alt="" style="max-width: 400px; width:100%;">
                    </div>
                </div>
                <div class="grid_box_right box_rt_lb_side ease2 r">
                    <i class="box_rt_lb_side_design"></i>
                    <div class="title_in_section text_nm text_design_bot">
                        <span class="title_desc">
                            Maximize Your Potential with Technology to Compete in Society 5.0
                        </span>
                    </div>
                    <p class="main_content mt6">
                        Membahas bagaimana cara kita memaksimalkan potensi yang kita miliki di dalam diri kita 
                        dan di kombinasikan dengan teknologi yang tersedia agar dapat bersaing di era Society 5.0 ini, 
                        karena pada dasarnya di era ini kita telah di bekali dengan berbagai teknologi canggih untuk dapat 
                        bertahan dan memanfaatkan teknologi untuk pengembangan diri.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="speaker" id="speaker">
    <div class="break_section_top"></div>
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center t mb20">
                Meet Our Speakers
            </div>
            <div class="flex_container">
                <div class="flex_box p2 l">
                    <div class="img_container">
                        <img src='assets/img/sifest2022/speaker_aka.png' alt="">
                    </div>
                    <div class="main_content px2">
                        <p class="text_nm desc">
                            Farhan merupakan konten kreator muda yang kerap membagikan konten seputar Matematika dan juga Fisika di dalam sosial medianya. 
                            Melalui kecerdasan dan konten bermanfaat Farhan membuatnya kini diidolakan oleh banyak orang. 
                        </p>
                    </div>
                </div>
                <div class="flex_box p2 r">
                    <div class="img_container">
                        <img src='assets/img/sifest2022/speaker_nonaka.png' alt="">
                    </div>
                    <div class="main_content px2">
                        <p class="text_nm desc">
                            Joy Gabriel merupakan seorang data scientist, software developer, consultant, tech leader, dan innovator. 
                            Joy Gabriel telah mengembangkan berbagai Sistem Informasi yang bermanfaat bagi Indonesia 
                            di bidang kesehatan. Beberapa diantaranya adalah Satu Pintu, Tele Sehat Desa, dan Tele Detection.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p_relative pb20">
            <div class="title_feature text_center t mb20">
                Our Moderator
            </div>
            <div class="flex_container">
                <div class="flex_box p2 b">
                    <div class="img_container">
                        <img src='assets/img/sifest2022/moderator.png' alt="">
                    </div>
                    <div class="main_content px2">
                        <p class="text_nm desc">
                            Allya merupakan seorang content creator yang berasal dari palembang. Melalui kemampuan public speaking dan prestasi yang dimiliki, 
                            membuat Allya sudah sering menjadi narasumber dan moderator di berbagai event yang ada di Palembang loh.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="timeline" id="timeline">
        <div class="break_section_bot"></div>
    <div class="wrapper">
        <div class="container p_relative pb20">
            <div class="title_feature text_center t mb20">
                Timeline
            </div>
            <div class="timeline_container">
                <div class="timeline_item">
                    <div class="timeline_dot"></div>
                    <div class="timeline_date fc_red b">17 - 19 Oct 2022</div>
                    <div class="timeline_content box_lt_rb_side">
                        <i class="box_lt_rb_side_design"></i>
                        <span class="title_font">Open Presale Registration</span>
                        <p class="text_sm">Pembukaan perdana pendaftaran seminar SI FEST 2022, dapatkan potongan harga. Segera lakukan registrasi sebelum kehabisan slot pre sale</p>
                    </div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_dot"></div>
                    <div class="timeline_date fc_red b">20 Oct - 01 Nov 2022</div>
                    <div class="timeline_content box_lt_rb_side">
                        <i class="box_lt_rb_side_design"></i>
                        <span class="title_font">Open Sale Registration</span>
                        <p class="text_sm">Pendaftaran semnari SI FEST 2022, dengan harga normal. Pastikan untuk mendaftar sesegera mungkin sebelum kehabisan slot peserta</p>
                    </div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_dot"></div>
                    <div class="timeline_date fc_red b">05 Nov 2022</div>
                    <div class="timeline_content box_lt_rb_side">
                        <i class="box_lt_rb_side_design"></i>
                        <span class="title_font">Puncak SI FEST, Seminar</span>
                        <p class="text_sm">Seminar diadakan dengan mengundang para pembicara yang berpengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="register" id="register">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center mb20 t">
                Register Now
            </div>
            <div class="content_box p_relative box_lt_rb_side px6 py6">
                <i class="box_lt_rb_side_design"></i>
                <div class="grid_container_40_50">
                    <div class="grid_box_left ease2 l">
                        <div class="img_container">
                            <img src='assets/img/icon_landscape/seminar.png' alt="">
                        </div>
                    </div>
                    <div class="grid_box_right p_unset ease2 r">
                        <div class="title_font text_h3">
                            Improve Your Intelectuallity With Our Seminar
                        </div>
                        <p class="main_content mt2 mb4">
                            SI FEST 2022 menghadirkan pembicara yang tentunya berpengalaman di bidangnnya baik akademik maupun non akademik. 
                            Tunggu apa lagi daftar sekarang sebelum masa pendaftaran ditutup dan slot peserta habis! 
                        </p>
                        <div class="btn_container">
                            <button onclick="location.href='/registration/seminar'" class="btn_right text_center">
                                <i class="btn_right_design"></i>
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="wrapper">
        <div class="container p_relative pb20">
            <div class="title_feature text_center mb20 t">
                Contact Person
            </div>
            <div class="flex_container">
                <div class="flex_box l">
                    <p class="title_font text_h3 text_center">Kanastain</p>
                    <a href="https://line.me/R/ti/p/kanassss01" class="fc_red"><i class="fa-brands fa-line"></i> kanassss01 </a>
                    <a href="https://wa.me/622181097004" target="_blank" class="fc_red"><i class="fa-brands fa-whatsapp"></i> 622181097004 </a>
                </div>
                <div class="flex_box r">
                    <p class="title_font text_h3 text_center">Arizanti Randa Indriani</p>
                    <a href="https://line.me/R/ti/p/randa2201" class="fc_red"><i class="fa-brands fa-line"></i> randa2201 </a>
                    <a href="https://wa.me/82282806202" target="_blank" class="fc_red"><i class="fa-brands fa-whatsapp"></i> 82282806202 </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faq">
    <div class="break_section_top"></div>
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center mb20 t">
                FAQ
                <p class="text_nm fc_red">Seminar SI FEST 2022</p>
            </div>
            <div class="grid_container_space_between">
                <div class="grid_box question_box">
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apakah ada Batasan usia untuk mendaftar seminar sifest?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Selama kalian adalah seorang berjiwa muda berapapun usia kalian, kalian tetap boleh mendaftar kok.
                        </div>
                    </div>
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apa saja benefit yang didapatkan ketika mengikuti seminar SIFEST 2022?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Untuk benefit yang bisa didapatkan tentu saja adalah ilmu yang super keren dari para pembicara nanti, 
                            dan tentu saja kalian juga akan mendapatkan sertifikat nasional, mantap kann, jangan lupa join yaa.
                        </div>
                    </div>
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apa Perbedaan Benefit Tiket Tera dan Giga?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Yang pastinya benefit tiket Tera (VIP) akan lebih banyak di banding tiket Giga (Reguler). 
                            Salah satunya bagi peserta yang memiliki tiket Tera akan berkesempatan untuk dapat foto bersama secara eksklusif bersama guest star kita yang keren.
                        </div>
                    </div>
                </div>
                <div class="grid_box question_box">
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Apa ada syarat syarat khusus untuk mengikuti seminar ini?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Untuk syarat sendiri para peserta wajib membeli tiket secara online maupun offline. 
                            Selain itu, jangan lupa mengambil tiket fisikmu apabila mendaftar secara online saat menghadiri acara seminar. 
                            Tunjukan bukti bahwa anda sudah terdaftar melalui laman dashboard anda di web SI FEST saat penurakan tiket fisik.
                        </div>
                    </div>
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Untuk informasi tambahan mengenai seminar dan sifest dapat dicari dimana ya?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Untuk informasi seminar dan sifest dapat di check di Instagram dengan username <a href="http://intagram.com/sifest.unsri" target="_blank" class="fc_red fw_bold">@sifest.unsri</a>
                            , atau langsung hubungi contact person yang telah tertera di dalam website.
                        </div>
                    </div>
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Bagaimana cara membeli tiket Seminar sifest?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Kita ada dua cara pembelian tiket seminar ini. yang pertama pembelian secara online dengan mendaftarkan diri dan membuat akun pada web SI FEST 
                            lalu membeli tiket pada menu seminar, setelah itu melakukan penukaran tiket fisik secara offline. 
                            Yang kedua pembelian secara offline dengan datang ke tempat penjualan yang akan kita sediakan. gampang kann, ayo sebelum kehabisann.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

