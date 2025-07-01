@extends('layouts/web.main')

@section('index')

<section class="hero_self" id="hero_self">
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
                <p class="text_big">
                    @if ($competition["competition"] === "Photography")
                        Photography
                    @elseif ($competition["competition"] === "BusinessPlan")
                        Business Plan
                    @elseif ($competition["competition"] === "UIUXDesign")
                        UIUX Design
                    @elseif ($competition["competition"] === "Valorant")
                        Valorant
                    @elseif ($competition["competition"] === "MobileLegends")
                        Mobile Legends
                    @endif
                </p>
                <p class="fc_red">SIFEST 2022 Competition</p>
            </div>
            <div class="grid_container_40_50">
                <div class="grid_box_left ease2 l">
                    @if ($competition["competition"] === "Photography")
                        <div class="img_container">
                            <img src="{{ asset('assets/img/icon/photography.png') }}" alt="" style="max-width: 400px; width:100%">
                        </div>
                    @elseif ($competition["competition"] === "BusinessPlan")
                        <div class="img_container">
                            <img src="{{ asset('assets/img/icon/business_plan.png') }}" alt="" style="max-width: 400px; width:100%">
                        </div>
                    @elseif ($competition["competition"] === "UIUXDesign")
                        <div class="img_container">
                            <img src="{{ asset('assets/img/icon/uiux_design.png') }}" alt="" style="max-width: 400px; width:100%">
                        </div>
                    @elseif ($competition["competition"] === "Valorant")
                        <div class="img_container">
                            <img src="{{ asset('assets/img/icon/valorant.png') }}" alt="" style="max-width: 400px; width:100%">
                        </div>
                    @elseif ($competition["competition"] === "MobileLegends")
                        <div class="img_container">
                            <img src="{{ asset('assets/img/icon/mobile_legends.png') }}" alt="" style="max-width: 400px; width:100%">
                        </div>
                    @endif
                </div>
                <div class="grid_box_right box_rt_lb_side ease2 r">
                    <i class="box_rt_lb_side_design"></i>
                    <div class="title_in_section text_nm text_design_bot">
                        <span class="title_desc">
                            @if ($competition["competition"] === "Photography")
                                "Portrait the role of millennial generation in digital era"
                            @elseif ($competition["competition"] === "BusinessPlan")
                                "Creative and innovative ideas to get the best young entrepreneurial talent in the digital era"
                            @elseif ($competition["competition"] === "UIUXDesign")
                                "Develope your idea and make Innovation  with technology"
                            @elseif ($competition["competition"] === "Valorant")
                                "Sportivity with no limits"
                            @elseif ($competition["competition"] === "MobileLegends")
                                "Sportivity with no limits"
                            @endif
                        </span>
                    </div>
                    <p class="main_content mt6">
                        @if ($competition["competition"] === "Photography")
                            Ajang kompetisi bagi peserta yang memiliki ketertarikan di bidang fotografi. Peserta akan mengumpulkan 
                            hasil potret terbaiknya sesuai subtema yang telah ditentukan.Kegiatan ini diharapkan mampu menciptakan 
                            wadah nyata bagi setiap peserta yang memiliki hobi fotografi maupun yang berminat pada fotografi untuk 
                            mengasah kemampuannya dan berkompetisi dalam kegiatan ini. Kompetisi ini terbuka untuk Mahasiswa/i 
                            seluruh perguruan tinggi di Indonesia.
                        @elseif ($competition["competition"] === "BusinessPlan")
                            Ajang kompetisi dimana para peserta akan menyalurkan ide bisnis mereka dengan memanfaatkan kemajuan 
                            teknologi sesuai dengan subtema yang telah ditentukan dalam bentuk proposal.Tujuannya yaitu menumbuhkan 
                            jiwa wirausaha yang mandiri, kreatif, dan inovatif pada generasi muda. Kompetisi ini terbuka untuk 
                            Mahasiswa/i seluruh perguruan tinggi di Indonesia.
                        @elseif ($competition["competition"] === "UIUXDesign")
                            Ajang kompetisi perancangan user interface sekaligus user experience sebuah aplikasi berbasis mobile 
                            ataupun web. Peserta akan merancang sesuai subtema yang telah ditentukan panitia. Hasil dari UI/UX 
                            Design yang telah dibuat akan dikirimkan dalam bentuk proposal. Tujuannya adalah untuk mengasah skill 
                            peserta di bidang UI/UX Design. Kompetisi ini terbuka untuk siswa/i SMA/SMK dan Mahasiswa/i perguruan 
                            tinggi seluruh Indonesia.
                        @elseif ($competition["competition"] === "Valorant")
                            Ajang kompetisi yang ditujukan untuk khalayak umum. Kompetisi Valorant bertujuan mewadahi peserta yang 
                            memiliki kemampuan dalam dunia game agar dapat bersaing secara fair untuk meraih kemenangan dan 
                            meningkatkan solidaritas antar pemain.
                        @elseif ($competition["competition"] === "MobileLegends")
                            Ajang kompetisi yang ditujukan untuk khalayak umum. Kompetisi Mobile Legends bertujuan mewadahi peserta 
                            yang memiliki kemampuan dalam dunia game agar dapat bersaing secara fair untuk meraih kemenangan dan 
                            meningkatkan solidaritas antar pemain.
                        @endif
                    </p>
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
            <div class="title_feature text_center mb20 t">
                Timeline
            </div>
            <div class="timeline_container">
                <!-- Photography -->
                @if ($competition['competition'] === "Photography")
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">22 Sept - 27 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pendaftaran & pengumpulan</span>
                            <p class="text_sm">Bagi para calon peserta yang memiliki minat dalam kompetisi Photography dapat melakukan registrasi pendaftaran dan segera mengumpulkan karyanya sebelum tenggat waktunya habis.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">28 Oct - 30 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Penjurian</span>
                            <p class="text_sm">Karya yang telah dikirimkan oleh peserta akan diproses untuk dinilai oleh para juri yang telah berpengalaman di bidangnya.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">05 Nov 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pengumuman pemenang</span>
                            <p class="text_sm">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti pada puncak acara SI FEST 2022.</p>
                        </div>
                    </div>

                <!-- Business Plan  -->
                @elseif ($competition['competition'] === "BusinessPlan")
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">22 Sept - 23 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pendaftaran & pengumpulan</span>
                            <p class="text_sm">Bagi para calon peserta yang memiliki minat dalam kompetisi Business Plan dapat melakukan registrasi pendaftaran dan segera mengumpulkan proposal sebelum tenggat waktunya habis.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">24 Oct - 26 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Penjurian</span>
                            <p class="text_sm">Proposal yang telah dikirimkan oleh peserta akan diproses untuk dinilai oleh para juri yang telah berpengalaman di bidangnya.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">28 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pengumuman finalis</span>
                            <p class="text_sm">Pengumuman finalis kompetisi Business Plan bedasarkan hasil penjurian proposal pada proses seleksi babak pertama.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">29 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Technical meeting</span>
                            <p class="text_sm">Technical meeting dilakukan sehari sebelum babak final berlangsung, technical meeting akan dilakukan secara online.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">30 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Final</span>
                            <p class="text_sm">Finalis akan mempresentasikan hasil proposal yang telah dibuat dan dimuat kembali dalam bentuk PPT/slide.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">05 Nov 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pengumuman pemenang</span>
                            <p class="text_sm">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti pada puncak acara SI FEST 2022.</p>
                        </div>
                    </div>   

                <!-- UIUX/ Design -->
                @elseif ($competition['competition'] === "UIUXDesign")
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">22 Sept - 23 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pendaftaran & pengumpulan</span>
                            <p class="text_sm">Bagi para calon peserta yang memiliki minat dalam kompetisi UIUX Design dapat melakukan registrasi pendaftaran dan segera mengumpulkan proposal sebelum tenggat waktunya habis.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">24 Oct - 26 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Penjurian</span>
                            <p class="text_sm">Proposal yang telah dikirimkan oleh peserta akan diproses untuk dinilai oleh para juri yang telah berpengalaman di bidangnya.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">28 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pengumuman finalis</span>
                            <p class="text_sm">Pengumuman finalis kompetisi UI/UX Design bedasarkan hasil penjurian proposal pada proses seleksi babak pertama.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">29 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Technical meeting</span>
                            <p class="text_sm">Technical meeting dilakukan sehari sebelum babak final berlangsung, technical meeting akan dilakukan secara online.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">30 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Final</span>
                            <p class="text_sm">Finalis akan mempresentasikan hasil proposal yang telah dibuat dan dimuat kembali dalam bentuk PPT/slide.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">05 Nov 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pengumuman pemenang</span>
                            <p class="text_sm">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti pada puncak acara SI FEST 2022.</p>
                        </div>
                    </div> 
                    
                <!-- Valorant -->
                @elseif ($competition['competition'] === "Valorant")
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">22 Sept - 27 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pendaftaran</span>
                            <p class="text_sm">Bagi para calon peserta yang memiliki minat dalam kompetisi Valorant dapat melakukan registrasi pendaftaran sebelum tenggat waktunya habis.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">28 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Technical meeting</span>
                            <p class="text_sm">Technical meeting dilakukan sehari sebelum babak final berlangsung, technical meeting akan dilakukan secara online.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">29 Oct - 30 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pertandingan</span>
                            <p class="text_sm">Pertandingan akan dilaksanakan secara online dan diawasi oleh panitia pelaksana.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">05 Nov 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pengumuman pemenang</span>
                            <p class="text_sm">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti pada puncak acara SI FEST 2022.</p>
                        </div>
                    </div>
                    
                <!-- Mobile Legends -->
                @elseif ($competition['competition'] === "MobileLegends")
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">22 Sept - 27 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pendaftaran</span>
                            <p class="text_sm">Bagi para calon peserta yang memiliki minat dalam kompetisi Mobile Legends dapat melakukan registrasi pendaftaran sebelum tenggat waktunya habis.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">28 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Technical meeting</span>
                            <p class="text_sm">Technical meeting dilakukan sehari sebelum babak final berlangsung, technical meeting akan dilakukan secara online.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">29 Oct 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pertandingan</span>
                            <p class="text_sm">Pertandingan akan dilaksanakan secara online dan diawasi oleh panitia pelaksana.</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_red b">05 Nov 2022</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Pengumuman pemenang</span>
                            <p class="text_sm">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti pada puncak acara SI FEST 2022.</p>
                        </div>
                    </div>         
                @endif
            </div>
        </div>
    </div>
</section>

<section class="register" id="register">
    <div class="wrapper">
        <div class="container p_relative  py20">
            <div class="title_feature text_center mb20 t">
                Register Now
            </div>
            <div class="content_box p_relative box_lt_rb_side px6 py6">
                <i class="box_lt_rb_side_design"></i>
                <div class="grid_container_40_50">
                    <div class="grid_box_left ease2 l">
                        @if ($competition["competition"] === "Photography")
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon_landscape/photography.png') }}" alt="">
                            </div>
                        @elseif ($competition["competition"] === "BusinessPlan")
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon_landscape/business_plan.png') }}" alt="">
                            </div>
                        @elseif ($competition["competition"] === "UIUXDesign")
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon_landscape/uiux_design.png') }}" alt="">
                            </div>
                        @elseif ($competition["competition"] === "Valorant")
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon_landscape/valorant.png') }}" alt="">
                            </div>
                        @elseif ($competition["competition"] === "MobileLegends")
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon_landscape/mobile_legends.png') }}" alt="">
                            </div>
                        @endif
                    </div>
                    <div class="grid_box_right p_unset ease2 r">
                        <div class="title_font text_h3">
                            Register and Win The Prize
                        </div>
                        <p class="main_content mt2 mb4">
                                Raih pengalamanmu bersama SI FEST 2022 dan menangkan hadiah berupa uang tunai pembinaan dan sertifikat pemenang. Tunggu apalagi daftar sekarang sebelum masa pendaftaran ditutup dan slot peserta habis!  
                        </p>
                        <div class="btn_container">
                            <button onclick="location.href='/registration/{{ strtolower($competition['competition']) }}'" class="btn_right text_center">
                                <i class="btn_right_design"></i>
                                Register
                            </button>
                            <a href="https://drive.google.com/drive/folders/100iQGXvAW6sWJG6_QBZv3dKuB5719gcY" target="_blank" class="btn_left text_center">
                                    <i class="btn_left_design"></i>
                                    Guide Book
                            </a>
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
                    <p class="title_font text_h3 text_center">{{ $competition['cp1'] }}</p>
                    <a href="https://line.me/R/ti/p/{{ $competition['cp1_line'] }}" class="fc_red"><i class="fa-brands fa-line"></i> {{ $competition['cp1_line'] }} </a>
                    <a href="https://wa.me/{{ $competition['cp1_wa'] }}" target="_blank" class="fc_red"><i class="fa-brands fa-whatsapp"></i> {{ $competition['cp1_wa'] }} </a>
                </div>
                @if($competition['cp2'])
                    <div class="flex_box r">
                        <p class="title_font text_h3 text_center">{{ $competition['cp2'] }}</p>
                        <a href="https://line.me/R/ti/p/{{ $competition['cp2_line'] }}" class="fc_red"><i class="fa-brands fa-line"></i> {{ $competition['cp2_line'] }} </a>
                        <a href="https://wa.me/{{ $competition['cp2_wa'] }}" target="_blank" class="fc_red"><i class="fa-brands fa-whatsapp"></i> {{ $competition['cp2_wa'] }} </a>
                    </div>
                @endif
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
                <p class="text_nm fc_red">Competition SI FEST 2022</p>
            </div>
            <div class="grid_container_space_between">
                <div class="grid_box question_box">
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apakah boleh mengikuti lebih dari satu kompetisi secara bersamaan?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Boleh-boleh saja, yang terpenting dapat bertanggung jawab atas keputusan yang diambil. 
                        </div>
                    </div>
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apakah saya bisa membatalkan pendaftaran dan meminta refund biaya pendaftaran?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Tidak bisa, jadi pastikan keputusan yang diambil ketika melakukan pendaftaran telah mutlak.
                        </div>
                    </div>
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apakah kompetisi pada SI FEST 2022 tidak dipungut biaya pendaftaran?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Sayangnya saat ini untuk berpatisipasi dalam kompetisi SI FEST 2022 ada biaya pendaftaran yang harus dibayarkan.
                        </div>
                    </div>
                </div>
                <div class="grid_box question_box">
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Apakah semua kompetisi dilaksanakan secara online?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Tidak semua kompetisi dilaksanakan secara online, untuk info lebih lanjut kamu dapat membuka <a href="https://drive.google.com/drive/folders/1-TPVVxZaXSFU7ebG1erOzleZ0BQ5_n3E" target="_blank" class="fc_red fw_bold">Guide Book</a> sebelum melakukan pendaftaran.
                        </div>
                    </div>
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Mengapa saya tidak bisa mendaftar kompetisi padahal masa pendaftaran masih dibuka?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Kemungkinan slot peserta dari kompetisi yang didaftar telah terpenuhi.
                        </div>
                    </div>
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Saya mengalami kendala ketika melakukan pendaftaran kompetisi, apa solusinya?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Silahkan hubungi contact person yang tertera, pastikan kamu screenshot masalah yang kamu alami ya. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection