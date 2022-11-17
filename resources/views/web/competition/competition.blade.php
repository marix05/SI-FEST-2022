@extends('layouts/web.main')

@section('index')

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
        <div class="container pt20 pb40">
            <div class="title_font text_center my20">
                <p class="text_big">Competition</p>
                <p class="fc_red">SIFEST 2022 HIMSI FASILKOM UNSRI</p>
            </div>
            <div class="content_box box_lt_rb_side p_relative pb40">
                <i class="box_lt_rb_side_design"></i>
                <div class="grid_container_40_50">
                    <div class="grid_box_left px6 ease2">
                        <!-- About Section Img -->
                        <div class="img_container path_lt_rb_side">
                            <img src="{{ asset('assets/img/icon/uiux_design.png') }}" id="img_compe" alt="" style="max-width: 400px; width:100%; margin:auto">
                        </div>
                    </div>
                    <div class="grid_box_right px6 py4 ease2">
                        <!-- About Text Content  -->
                        <div class="title_in_section text_design_bot">
                            <span class="text_border text_h2" id="title_compe">UIUX Design</span>
                        </div>
                        <p class="main_content mt6 mb4" id="desc_compe">
                            UIUX Design Competition merupakan kompetisi merancang user interace sekaligus user experience sebuah 
                            aplikasi berbasis mobile ataupun web.
                        </p>
                        <div class="btn_container">
                            <a href="{{ url('/registration/uiuxdesign') }}" id="btn_regis" class="btn_right">
                                <i class="btn_right_design"></i>
                                Register
                            </a>
                            <a href="{{ url('/competition/uiuxdesign') }}" id="btn_compe" class="btn_left btn_red">
                                <i class="btn_left_design"></i>
                                More Info
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content_navs">
                    <div class="swiper_container p_relative">
                        <div class="swiper content_navs_swiper pt8 pb20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide box_all_side">
                                    <img src="{{ asset('assets/img/icon_landscape/photography.png') }}" alt="Photography">
                                    <i class="box_all_side_design"></i>
                                    <i class="box_all_side_design2"></i>
                                </div>
                                <div class="swiper-slide box_all_side">
                                    <img src="{{ asset('assets/img/icon_landscape/business_plan.png') }}" alt="Business Plan">
                                    <i class="box_all_side_design"></i>
                                    <i class="box_all_side_design2"></i>
                                </div>
                                <div class="swiper-slide box_all_side">
                                    <img src="{{ asset('assets/img/icon_landscape/uiux_design.png') }}" alt="UI/UX Design">
                                    <i class="box_all_side_design"></i>
                                    <i class="box_all_side_design2"></i>
                                </div>
                                <div class="swiper-slide box_all_side">
                                    <img src="{{ asset('assets/img/icon_landscape/valorant.png') }}" alt="Valorant">
                                    <i class="box_all_side_design"></i>
                                    <i class="box_all_side_design2"></i>
                                </div>
                                <div class="swiper-slide box_all_side">
                                    <img src="{{ asset('assets/img/icon_landscape/mobile_legends.png') }}" alt="Mobile Legends">
                                    <i class="box_all_side_design"></i>
                                    <i class="box_all_side_design2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection