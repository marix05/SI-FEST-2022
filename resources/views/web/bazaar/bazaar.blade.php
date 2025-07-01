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
                <img src='assets/img/maskot_pose1.png' alt="">
            </div>
        </div>
    </div>
</section> --}}

<section class="hero" id="hero">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_font text_center my20 t">
                <p class="text_big">Bazaar</p>
                <p class="fc_red">SIFEST 2022 HIMSI FASILKOM UNSRI</p>
            </div>
            <div class="grid_container_40_50">
                <div class="grid_box_left ease2 l">
                    <!-- About Section Img -->
                    <div class="img_container">
                        <img src="{{ asset('assets/img/icon/bazaar.png') }}" alt="" style="max-width: 400px; width:100%;">
                    </div>
                </div>
                <div class="grid_box_right box_rt_lb_side ease2 r">
                    <i class="box_rt_lb_side_design"></i>
                    <!-- About Text Content  -->
                    <div class="title_in_section text_design_bot">
                        <span class="text_border text_h2">Bazaar</span>
                    </div>
                    <p class="main_content mt6">
                        Bazaar SI FEST 2022 telah hadir !!. Bazaar menjadi salah satu kegiatan yang wajib diadakan oleh SI FEST tiap tahunnya loh.
                        Tidak perlu ragu untuk mencicipi makanan dan minuman yang dijual disana, dijamin enak, lezat, dan bergizi. 
                        Temukan juga berbagai macam merchandise SI FEST 2022 yang lucu-lucu dan pastinya bisa digunakan di kehidupan sehari-hari.
                        Tempat dan tanggalnya bisa di lihat melalui laman ini ya, <b class="fc_red">catat tanggalnya dan jangan lupa hadir</b>.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="timeline" id="timeline">
    <div class="break_section_top"></div>
    <div class="break_section_bot"></div>
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_font text_center mb20 t">
                <p class="text_big">Meet Us Here</p>
            </div>
            <div class="flex_container">
                <div class="flex_box p2 l">
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sifest2022/pamflet_bazaar.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex_box map_bazar p2 r">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.544350611939!2d104.7471067!3d-2.9901952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x476edb23622568df!2sTaman%20Kambang%20Iwak%20Besak!5e0!3m2!1sid!2sid!4v1659494013238!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="main_content p6">
                        <h3 class="title_font mb4">
                            <i class="fa-solid fa-location-dot"></i> Taman Kambang Iwak
                        </h3>
                        <table>
                            <tr>
                                <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                <td class="pr1">Minggu 16 Oktober 2022</td>
                                <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                <td class="pr1">07.00 WIB</td>
                            </tr>
                            <tr>
                                <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                <td class="pr1">Sabtu 22 Oktober 2022</td>
                                <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                <td class="pr1">16.00 WIB</td>
                            </tr>
                            <tr>
                                <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                <td class="pr1">Minggu 23 Oktober 2022</td>
                                <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                <td class="pr1">07.00 WIB</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center t mb20">
                Online Purchase
            </div>
            <div class="flex_container">
                <div class="flex_box l">
                    <i class="fa-brands fa-whatsapp text_h1 fc_red"></i>
                    <p class="title_font text_h3 text_center">Sely Tria Amanda</p>
                    <a href="https://wa.me/6285383822470" target="_blank" class="fc_red">6285383822470 </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection