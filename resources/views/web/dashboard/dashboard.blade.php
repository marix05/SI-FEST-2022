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
        <div class="container p_relative pt40 py20">
            <div class="grid_container_40_50">
                <div class="grid_box_left p_unset ease2">
                    <div class="text_center title_font mb10">
                        <p class="text_big">Complete your data</p>
                        <p class="fc_red">To participate in our events</p>
                    </div>
                    <div class="img_container">
                        <img src="{{ asset('assets/img/sifest2022/maskot_pose2.png') }}" alt="">
                    </div>
                </div>
                <div class="grid_box_right box_lt_rb_side p6">
                    <i class="box_lt_rb_side_design"></i>
                    <p class="mb8 title_font text_h3 text_center">Your Data</p>
                    <form action="{{ route('dashboard') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form_container pb2">
                            <div class="form_group">
                                <div class="input_wrapper">
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-solid fa-user"></i>
                                        </div> 
                                        <div class="input_div">
                                            <p class="input_title title_font">Full Name</p>
                                            <input type="text" name="name" id="name" placeholder="-" value="{{ ucwords(strtolower(Auth::user()->name)) }}" required>
                                        </div>
                                    </div>
                                    @error('name')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="input_wrapper">
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div> 
                                        <div class="input_div">
                                            <p class="input_title title_font">Email</p>
                                            <input type="text" name="email" id="email" placeholder="-" value="{{ Auth::user()->email }}" readonly required>
                                        </div>
                                    </div>
                                    @error('email')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                {{ $message }}\
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="input_wrapper">
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </div> 
                                        <div class="input_div">
                                            <p class="input_title title_font">Phone Number (WA)</p>
                                            <input type="tel" 
                                                pattern="62\d+" minlength="11" maxlength="15"
                                                name="phone_number" id="phone_number" class="phone_number"
                                                placeholder="628xxxxxxxxxx" value="{{ Auth::user()->phone_number }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            @error('phone_number')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="input_wrapper">
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-brands fa-line"></i>
                                        </div> 
                                        <div class="input_div">
                                            <p class="input_title title_font">Line</p>
                                            <input type="text" name="line" id="line" placeholder="idxxxx" value="{{ Auth::user()->line }}" required>
                                        </div>
                                    </div>
                                    @error('line')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="input_wrapper">
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-solid fa-building-columns"></i>
                                        </div> 
                                        <div class="input_div">
                                            <p class="input_title title_font">institution</p>
                                            <input type="text" name="institution" id="institution" placeholder="Universitas Sriwijaya" value="{{ Auth::user()->institution }}" required>
                                        </div>
                                    </div>
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            Jika tidak sedang menempuh pendidikan isi "Umum"
                                        @error('institution')
                                            {{ $message }}
                                        @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="input_wrapper">
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-solid fa-venus-mars"></i>
                                        </div> 
                                        <div class="input_div">
                                            <p class="input_title title_font">Gender</p>
                                            <select name="gender" id="gender" required>
                                                <option {{ Auth::user()->gender === Null ? "selected" : "" }} value="" disabled hidden>-</option>
                                                <option {{ Auth::user()->gender === "Laki-laki" ? "selected" : "" }} value="Laki-laki">Laki-laki</option>
                                                <option {{ Auth::user()->gender === "Perempuan" ? "selected" : "" }} value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    @error('gender')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="input_wrapper">
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-solid fa-user"></i>
                                        </div> 
                                        <div class="input_div">
                                            <p class="input_title title_font">Birth Date</p>
                                            <input type="date" name="birth_date" value="{{ Auth::user()->birth_date }}" id="birth_date" required>
                                        </div>
                                    </div>
                                    @error('birth_date')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="btn_container pb4">
                            <button type="submit" class="btn_left form_btn" name="submit">
                                <i class="btn_left_design"></i>
                                Save Change
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="participate" id="participate">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_font text_center">
                <p class="text_big">Your Participation</p>
            </div>
            <div class="dashboard box_lt_rb_side">
                <i class="box_lt_rb_side_design"></i>
                <p class="title_font">
                    <span class="text_h1">Competition <i class="fa-solid fa-arrow-right-long fc_red"></i></span> 
                </p>
                <div class="swiper-container dashboard_swiper my4">
                    <div class="swiper-wrapper">
                        @if ($competitions['Photography'])
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="img_container dashboard_img">
                                        <img src="{{ asset('assets/img/icon_landscape/photography.png') }}" alt="">
                                    </div>
                                    <div class="main_content">
                                        <div class="text_content py2">
                                            <p class="title_font text_h3 my2 fc_red">Photography</p>
                                            <div class="data_peserta mb2">
                                                <p>
                                                    <span class="title_font">{{ $competitions['Photography']['name'] }}</span> <br>
                                                    <span>{{ $competitions['Photography']['email'] }}</span>
                                                </p>
                                            </div>
                                            @if ($competitions['Photography']['verification'] === "Verified")
                                                <div class="btn_dashboard">
                                                    <a href="{{ route("submission.photography") }}" class="btn_right btn_red text_center">
                                                        <i class="btn_right_design"></i>
                                                        Submission
                                                    </a>
                                                    <a href="https://line.me/R/ti/g/5VVPpDZh6G" target="_blank" class="btn_left text_center">
                                                        <i class="btn_left_design"></i>
                                                        Line Group
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="logo">
                                            <div class="img_container">
                                                <img src="{{ asset('assets/img/sifest2022/logo_sifest.png') }}" alt="">
                                            </div>
                                            <p class="title_font">SI Fest</p>
                                        </div>
                                        <p class="title_font {{ $competitions['Photography']['verification'] === "Not Verified" ? "fc_red" : ""}} status"> 
                                            {{ 
                                                $competitions['Photography']['verification'] === null ? "Pending ..." : $competitions['Photography']['verification'];
                                            }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($competitions['BusinessPlan'])
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="img_container dashboard_img">
                                        <img src="{{ asset('assets/img/icon_landscape/business_plan.png') }}" alt="">
                                    </div>
                                    <div class="main_content">
                                        <div class="text_content py2">
                                            <p class="title_font text_h3 my2 fc_red">Business Plan</p>
                                            <div class="data_peserta mb2">
                                                <p>
                                                    <span class="title_font">{{ $competitions['BusinessPlan']['team_name'] }}</span> <br>
                                                    <span>{{ $competitions['BusinessPlan']['email'] }}</span>
                                                </p>
                                            </div>
                                            <div class="btn_dashboard">
                                                @if ($competitions['BusinessPlan']['verification'] === "Verified")
                                                    <a href="{{ route("submission.business.plan") }}" class="btn_right btn_red text_center">
                                                        <i class="btn_right_design"></i>
                                                        Submission
                                                    </a>
                                                    <a href="https://line.me/R/ti/g/63SrYgGfiV" target="_blank" class="btn_left text_center">
                                                        <i class="btn_left_design"></i>
                                                        Line Group
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="logo">
                                            <div class="img_container">
                                                <img src="{{ asset('assets/img/sifest2022/logo_sifest.png') }}" alt="">
                                            </div>
                                            <p class="title_font">SI Fest</p>
                                        </div>
                                        <p class="status title_font {{ $competitions['BusinessPlan']['verification'] === "Not Verified" ? "fc_red" : ""}}"> 
                                            {{ 
                                                $competitions['BusinessPlan']['verification'] === null ? "Pending ..." : $competitions['BusinessPlan']['verification'];
                                            }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($competitions['UIUXDesign'])
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="img_container dashboard_img">
                                        <img src="{{ asset('assets/img/icon_landscape/uiux_design.png') }}" alt="">
                                    </div>
                                    <div class="main_content">
                                        <div class="text_content py2">
                                            <p class="title_font text_h3 my2 fc_red">UIUX Design</p>
                                            <div class="data_peserta mb2">
                                                <p>
                                                    <span class="title_font">{{ $competitions['UIUXDesign']['team_name'] }}</span> <br>
                                                    <span>{{ $competitions['UIUXDesign']['email'] }}</span>
                                                </p>
                                            </div>
                                            @if ($competitions['UIUXDesign']['verification'] === "Verified")
                                                <div class="btn_dashboard">
                                                    <a href="{{ route("submission.uiux.design") }}" class="btn_right btn_red tex_center">
                                                        <i class="btn_right_design"></i>
                                                        Submission
                                                    </a>
                                                    <a href="https://line.me/R/ti/g/Z83jV6vVQA" target="_blank" class="btn_left tex_center">
                                                        <i class="btn_left_design"></i>
                                                        Line Group
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="logo">
                                            <div class="img_container">
                                                <img src="{{ asset('assets/img/sifest2022/logo_sifest.png') }}" alt="">
                                            </div>
                                            <p class="title_font">SI Fest</p>
                                        </div>
                                        <p class="title_font {{ $competitions['UIUXDesign']['verification'] === "Not Verified" ? "fc_red" : ""}} status"> 
                                            {{ 
                                                $competitions['UIUXDesign']['verification'] === null ? "Pending ..." : $competitions['UIUXDesign']['verification'];
                                            }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($competitions['ValorantTeam'])
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="img_container dashboard_img">
                                        <img src="{{ asset('assets/img/icon_landscape/valorant.png') }}" alt="">
                                    </div>
                                    <div class="main_content">
                                        <div class="text_content py2">
                                            <p class="title_font text_h3 my2 fc_red">Valorant Team</p>
                                            <div class="data_peserta mb2">
                                                <p>
                                                    <span class="title_font">{{ $competitions['ValorantTeam']['team_name'] }}</span> <br>
                                                    <span>{{ $competitions['ValorantTeam']['email'] }}</span>
                                                </p>
                                            </div>
                                            @if ($competitions['ValorantTeam']['verification'] === "Verified")
                                                <div class="btn_dashboard">
                                                    <a href="https://line.me/R/ti/g/c5fFBOi9It" target="_blank" class="btn_left text_center">
                                                        <i class="btn_left_design"></i>
                                                        Line Group
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="logo">
                                            <div class="img_container">
                                                <img src="{{ asset('assets/img/sifest2022/logo_sifest.png') }}" alt="">
                                            </div>
                                            <p class="title_font">SI Fest</p>
                                        </div>
                                        <p class="title_font {{ $competitions['ValorantTeam']['verification'] === "Not Verified" ? "fc_red" : ""}} status"> 
                                            {{ 
                                                $competitions['ValorantTeam']['verification'] === null ? "Pending ..." : $competitions['ValorantTeam']['verification'];
                                            }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($competitions['ValorantSolo'])
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="img_container dashboard_img">
                                        <img src="{{ asset('assets/img/icon_landscape/valorant.png') }}" alt="">
                                    </div>
                                    <div class="main_content">
                                        <div class="text_content py2">
                                            <p class="title_font text_h3 my2 fc_red">Valorant Solo</p>
                                            <div class="data_peserta mb2">
                                                <p>
                                                    <span class="title_font">{{ $competitions['ValorantSolo']['name'] }}</span> <br>
                                                    <span>{{ $competitions['ValorantSolo']['email'] }}</span>
                                                </p>
                                            </div>
                                            @if ($competitions['ValorantSolo']['verification'] === "Verified")
                                                <div class="btn_dashboard">
                                                    <a href="https://line.me/R/ti/g/c5fFBOi9It" target="_blank" class="btn_left text_center">
                                                        <i class="btn_left_design"></i>
                                                        Line Group
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="logo">
                                            <div class="img_container">
                                                <img src="{{ asset('assets/img/sifest2022/logo_sifest.png') }}" alt="">
                                            </div>
                                            <p class="title_font">SI Fest</p>
                                        </div>
                                        <p class="title_font {{ $competitions['ValorantSolo']['verification'] === "Not Verified" ? "fc_red" : ""}} status"> 
                                            {{ $competitions['ValorantSolo']['verification'] === null ? "Pending ..." : $competitions['ValorantSolo']['verification'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($competitions['MobileLegends'])
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="img_container dashboard_img">
                                        <img src="{{ asset('assets/img/icon_landscape/mobile_legends.png') }}" alt="">
                                    </div>
                                    <div class="main_content">
                                        <div class="text_content py2">
                                            <p class="title_font text_h3 my2 fc_red">Mobile Legends</p>
                                            <div class="data_peserta mb2">
                                                <p>
                                                    <span class="title_font">{{ $competitions['MobileLegends']['team_name'] }}</span> <br>
                                                    <span>{{ $competitions['MobileLegends']['email'] }}</span>
                                                </p>
                                            </div>
                                            @if ($competitions['MobileLegends']['verification'] === "Verified")
                                                <div class="btn_dashboard">
                                                    <a href="https://line.me/R/ti/g/zproNMJOc5" target="_blank" class="btn_left text_center">
                                                        <i class="btn_left_design"></i>
                                                        Line Group
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="logo">
                                            <div class="img_container">
                                                <img src="{{ asset('assets/img/sifest2022/logo_sifest.png') }}" alt="">
                                            </div>
                                            <p class="title_font">SI Fest</p>
                                        </div>
                                        <p class="title_font {{ $competitions['MobileLegends']['verification'] === "Not Verified" ? "fc_red" : ""}} status"> 
                                            {{ $competitions['MobileLegends']['verification'] === null ? "Pending ..." : $competitions['MobileLegends']['verification'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (
                                $competitions["Photography"] == null && $competitions["BusinessPlan"] == null && 
                                $competitions["UIUXDesign"] == null && $competitions["ValorantTeam"] == null && 
                                $competitions["ValorantSolo"] == null && $competitions["MobileLegends"] == null
                            )
                            <div class="swiper-slide">
                                <div class="no_participate">
                                    <p class="fc_red mb4 text_center">Anda belum terdaftar di kompetisi SI FEST 2022 </p>
                                    <div class="btn_dashboard">
                                        <a href="{{ route("competitions") }}" class="btn_right text_center btn_red">
                                            <i class="btn_right_design"></i>
                                            Cek Kompetisi
                                        </a>
                                        <a href="https://drive.google.com/drive/folders/1-TPVVxZaXSFU7ebG1erOzleZ0BQ5_n3E" target="_blank" class="btn_left text_center">
                                            <i class="btn_left_design"></i>
                                            Guide Book
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="dashboard_footer">
                    <div class="btn_dashboard py2">
                        @if (
                            $competitions["Photography"] || $competitions["BusinessPlan"] || 
                                $competitions["UIUXDesign"] || $competitions["ValorantTeam"] || 
                                $competitions["ValorantSolo"] || $competitions["MobileLegends"] 
                        )
                            <a href="{{ route("competitions") }}" class="btn_right text_center btn_red">
                                <i class="btn_right_design"></i>
                                Cek Kompetisi
                            </a>
                            <a href="https://drive.google.com/drive/folders/1-TPVVxZaXSFU7ebG1erOzleZ0BQ5_n3E" target="_blank" class="btn_left text_center">
                                <i class="btn_left_design"></i>
                                Guide Book
                            </a>
                        @endif
                    </div>
                    <p class="title_font text_right text_h3 pt2">SI FEST 2022</p>
                </div>
            </div>
            
            <div class="dashboard box_lt_rb_side">
                <i class="box_lt_rb_side_design"></i>
                <p class="title_font text_h1">Seminar</p>
                <div class="swiper-container dashboard_swiper my4">
                    <div class="swiper-wrapper">
                        @if (!$Seminar)
                            <div class="swiper-slide">
                                <div class="no_participate">
                                    <p class="fc_red mb4 text_center">Anda belum terdaftar di seminar SI FEST 2022 </p>
                                    <div class="btn_dashboard">
                                        <a href="{{ route("seminar") }}" class="btn_right btn_red">
                                            <i class="btn_right_design"></i>
                                            Cek Seminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="img_container dashboard_img">
                                        <img src="{{ asset('assets/img/icon_landscape/seminar.png') }}" alt="">
                                    </div>
                                    <div class="main_content">
                                        <div class="text_content py2">
                                            <p class="title_font text_h3 my2 fc_red">Seminar ({{ $Seminar['type'] }})</p>
                                            <div class="data_peserta mb2">
                                                <p>
                                                    <span class="title_font">{{ $Seminar['name'] }}</span> <br>
                                                    <span>{{ $Seminar['email'] }}</span>
                                                </p>
                                            </div>
                                            <p class="title_font text_h3 my2 fc_red">ID. {{ $Seminar['id'] }}</p>
                                            @if ($Seminar['verification'] === "Verified")
                                                <div class="btn_dashboard">
                                                    <a href="https://chat.whatsapp.com/HbWWVCHP1IRHsWzwIpMipK" target="_blank" class="btn_left text_center">
                                                        <i class="btn_left_design"></i>
                                                        Whatsapp Group
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="logo">
                                            <div class="img_container">
                                                <img src="{{ asset('assets/img/sifest2022/logo_sifest.png') }}" alt="">
                                            </div>
                                            <p class="title_font">SI Fest</p>
                                        </div>
                                        <p class="title_font {{ $Seminar['verification'] === "Not Verified" ? "fc_red" : ""}} status"> 
                                            {{ $Seminar['verification'] === null ? "Pending ..." : $Seminar['verification'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <p class="title_font text_right text_h3">SI FEST 2022</p>
            </div>
        </div>
    </div>
</section>

@endsection