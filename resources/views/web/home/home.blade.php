@extends('layouts/web.main')

@section('index')

<!-- Hero section  -->
<section class="hero" id="hero">
    <div class="wrapper">
        <div class="container p_relative pt40 pb20">
            <div class="img_container ease2">
                <img src="{{ asset('assets/img/sifest2022/maskot_halfbody.png') }}" alt="">
            </div>
            <div class="content_box path_rt_lb_side ease2 py8 px4">
                <div class="title_font fw-bold mb8">
                    <p class="text_big mb4">SI FEST</p>
                    <p class="text_h2">HIMSI FASILKOM UNSRI</p>
                </div>
                <a href="#about" class="btn_right">
                    <i class="btn_right_design"></i>
                    More about SI FEST
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section  -->
<section class="about" id="about">
        <div class="break_section_top"></div>
    <div class="wrapper">
        <div class="container p_relative pt20">
            <div class="grid_container_40_50">
                <div class="grid_box_left ease2 l">
                    <!-- About Section Img -->
                    <img src="{{ asset('assets/img/sifest2022/maskot_pose3.png') }}" alt="">
                </div>
                <div class="grid_box_right box_rt_lb_side ease2 r">
                    <i class="box_rt_lb_side_design"></i>
                    <!-- About Text Content  -->
                    <div class="title_in_section text_design_bot">
                        <span class="text_border text_h2">SI FEST</span>
                        <span class="title_desc text_nm">"Storage"</span>
                    </div>
                    <p class="main_content mt6">
                        SI FEST merupakan acara event tahunan terbesar yang diadakan oleh HIMSI Fasilkom UNSRI, 
                        SI FEST selalu berinovasi untuk tetap berkontribusi aktif di dalam bidang teknologi. 
                        <b>Smart Technology for Smart Generation <span class="fc_red">(STORAGE)</span></b> 
                        hadir dengan harapan agar semua pengalaman, ilmu dan pembelajaran yang 
                        di dapat dari acara ini dapat selamanya tersimpan dan dikenang.
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper_container p_relative">
            <div class="swiper coverflow_swiper py20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide box_all_side">
                        <img src="{{ asset('assets/img/sifest_old/sifest1.jpg') }}" alt="">
                        <i class="box_all_side_design"></i>
                        <i class="box_all_side_design2"></i>
                    </div>
                    <div class="swiper-slide box_all_side">
                        <img src="{{ asset('assets/img/sifest_old/sifest2.jpg') }}" alt="">
                        <i class="box_all_side_design"></i>
                        <i class="box_all_side_design2"></i>
                    </div>
                    <div class="swiper-slide box_all_side">
                        <img src="{{ asset('assets/img/sifest_old/sifest3.jpg') }}" alt="">
                        <i class="box_all_side_design"></i>
                        <i class="box_all_side_design2"></i>
                    </div>
                    <div class="swiper-slide box_all_side">
                        <img src="{{ asset('assets/img/sifest_old/sifest4.jpg') }}" alt="">
                        <i class="box_all_side_design"></i>
                        <i class="box_all_side_design2"></i>
                    </div>
                    <div class="swiper-slide box_all_side">
                        <img src="{{ asset('assets/img/sifest_old/sifest5.jpg') }}" alt="">
                        <i class="box_all_side_design"></i>
                        <i class="box_all_side_design2"></i>
                    </div>
                </div>
            </div>
            <div class="swiper_title title_in_section text_center text_border text_big p_absolute index_min">
                SI FEST
            </div>
        </div>
    </div>
</section>

<section class="events" id="events">
    <div class="break_section_bot"></div>
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center mb20 t">
                <span class="text_h2">Annual</span>
                HIMSI UNSRI
                <span class="text_h2">Event</span>
            </div>
            
            <div id="event_tabs" class="event_tabs">
                <div class="event_tab" data-content="1">
                    <div class="grid_container_40_50 p_relative">
                        <div class="grid_box_left p_unset ease2">
                            <div class="img_container path_lt_rb_side">
                                <img src="{{ asset('assets/img/icon/bazaar.png') }}" alt="" style="max-width: 400px; width:100%;">
                            </div>
                        </div>
                        <div class="grid_box_right box_rt_lb_side ease2">
                            <i class="box_rt_lb_side_design"></i>
                            <div class="title_in_section text_design_bot">
                                <span class="text_border text_h2">Bazaar</span>
                            </div>
                            <p class="main_content mt6 mb4">
                                Bazaar menjadi sarana SI FEST untuk menjual merchandise-merchandise terkait pelaksanaan SI FEST 2022 agar acara tahunan SI FEST dapat selalu dikenang, selain itu Bazaar juga memiliki berbagai macam produk selain merchandise seperti makanan dan minuman. Nantikan dan jangan lupa hadir !
                            </p>
                            <a href="{{ route('bazaar') }}" class="btn_right">
                                <i class="btn_right_design"></i>
                                More about Bazaar
                            </a>
                        </div>
                    </div>
                </div>

                <div class="event_tab active" data-content="2">
                    <div class="grid_container_40_50 p_relative">
                        <div class="grid_box_left p_unset ease2">
                            <div class="img_container path_lt_rb_side">
                                <img src="{{ asset('assets/img/icon/event.png') }}" alt="" style="max-width: 400px; width:100%;">
                            </div>
                        </div>
                        <div class="grid_box_right box_rt_lb_side ease2">
                            <i class="box_rt_lb_side_design"></i>
                            <div class="title_in_section text_design_bot">
                                <span class="text_border text_h2">Competition</span>
                            </div>
                            <p class="main_content mt6 mb4">
                                Competition menjadi kegiatan yang mewadahi semangat serta jiwa kompetensi mahasiswa untuk bersaing meraih pengalamannya di bidangnya. Sehingga terbentuk mahasiswa yang inovatif, solutif, dan dapat bersaing.
                            </p>
                            <a href="{{ route('competitions') }}" class="btn_right">
                                <i class="btn_right_design"></i>
                                More about Competition
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event_tab" data-content="3">
                    <div class="grid_container_40_50 p_relative">
                        <div class="grid_box_left p_unset ease2">
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon/seminar.png') }}" alt="" style="max-width: 400px; width:100%;">
                            </div>
                        </div>
                        <div class="grid_box_right box_rt_lb_side ease2">
                            <i class="box_rt_lb_side_design"></i>
                            <div class="title_in_section text_design_bot">
                                <span class="text_border text_h2">Seminar</span>
                            </div>
                            <p class="main_content mt6 mb4">
                                Seminar menjadi puncak SI FEST 2022, selain itu seminar menjadi kegiatan umum yang bertujuan untuk memberikan wawasan dan ilmu baru kepada para masyarakat. Melalui seminar, SI FEST telah ikut berpatisipasi untuk mengedukasi masyarakat Indonesia.
                            </p>
                            <a href="{{ route('seminar') }}" class="btn_right">
                                <i class="btn_right_design"></i>
                                More about Seminar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="event_navs mt20 b" id="event_navs">
                <button class="event_nav fw_sbold" data-id="1">
                    Bazaar
                    <span class="circle"></span>
                    <span class="fc_red text_center">16 Oct - 24 Oct</span>
                </button>
                <button class="event_nav fw_sbold active box_rt_lb_side " data-id="2">
                    Competition
                    <span class="circle"></span>
                    <span class="fc_red text_center">22 Sept - 05 Nov</span>
                </button>
                <button class="event_nav fw_sbold" data-id="3">
                    Seminar
                    <span class="circle"></span>
                    <span class="fc_red text_center">17 Oct - 05 Nov</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faq">
    <div class="break_section_bot"></div>
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center mb20 t">
                FAQ
                <p class="text_nm fc_red">SI FEST 2022</p>
            </div>
            <div class="grid_container_space_between ease2">
                <div class="grid_box question_box ease2">
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apa saja rangkaian kegiatanan yang akan dilaksanakan pada SI FEST 2022 nantinya?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            SI FEST 2022 memiliki 3 event utama, yaitu Bazaar, Competition, dan Seminar. Ketiga kegiatan tersebut sebentar lagi akan dilaksanakan bersamaa secara berurutan, so stay tune.
                        </div>
                    </div>
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Kompetisi apa saja yang dilaksanakan pada SI FEST 2022?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Terdapat 5 Jenis kompetisi dari berbagai bidang yang diadakan oleh SI FEST, mulai dari Photography, UI UX Design, Business Plan, Mobile Legends, dan Valorant.
                        </div>
                    </div>
                </div>
                <div class="grid_box question_box ease2">
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Apakah boleh berpatisipasi lebih dari satu kegiatan secara bersamaan?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Boleh-boleh saja, baik mengikuti lebih dari satu perlombaan ataupun mengikuti kompetisi dan seminar, yang terpenting dapat bertanggung jawab atas keputusan yang diambil.
                        </div>
                    </div>
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Apakah seluruh kegiatan SI FEST 2022 dibuka untuk umum?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Selain kompetisi Valorant, seluruh rangkaian kegiatan pada SI FEST 2022 terbuka untuk umum. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sponsor" id="sponsor">
    <div class="wrapper">
        <div class="container pt20">
            <div class="title_feature text_center mb20 t">
                Sponsor
            </div>
            <div class="flex_container">
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/6.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/7.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/8.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/9.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/10.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sponsor/11.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medpar" id="medpar">
    <div class="wrapper">
        <div class="container pt20 pb24">
            <div class="title_feature text_center mb20 t">
                Medpar
            </div>
            <div class="flex_container">
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/6.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/7.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/8.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/9.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/10.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/11.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/12.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side l">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/13.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box box_all_side r">
                    <i class="box_all_side_design"></i>
                    <i class="box_all_side_design2"></i>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/medpar/14.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection