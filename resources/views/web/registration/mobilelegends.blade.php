@extends('layouts/web.main')

@section('index')

<section class="form_section">
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
            <div class="title_font text_center mt20 mb12">
                <p class="text_big">Mobile Legends Registration</p>
                <p class="fc_red">Daftar sekarang, sebelum pendaftaran ditutup</p>
            </div>
            <div class="form_wrapper_grid box_lt_rb_side p6" style="max-width: 1000px; margin:auto">
                <i class="box_lt_rb_side_design"></i>
                <form action="{{ route('registration.mobile.legends') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form_container pb2">
                        <div class="form_group">
                            <p class="title_font text_h3 mt4 mb4">
                                Participant Data
                            </p>

                            <div class="form_navs mb6" id="form_navs">
                                <button class="form_nav active" type="button" data-id="1">1</button>
                                <button class="form_nav" type="button" data-id="2">2</button>
                                <button class="form_nav" type="button" data-id="3">3</button>
                                <button class="form_nav" type="button" data-id="4">4</button>
                                <button class="form_nav" type="button" data-id="5">5</button>
                            </div>

                            <div class="form_tabs">
                                <div class="form_tab active" data-content="1">
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Full Name</p>
                                                <input type="text" name="name1" id="name1" value="{{ Auth::user()->name }}" class="input" required readonly>
                                            </div>
                                        </div>
                                        @error('name1')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Phone Number (WA)</p>
                                                <input type="tel" 
                                                    pattern="62\d+" minlength="11" maxlength="15"
                                                    name="phone_number1" id="phone_number1" class="input phone_number"
                                                    value="{{ Auth::user()->phone_number }}"
                                                    required readonly>
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                @error('phone_number1')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-line"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Line</p>
                                                <input type="text" name="line1" id="line1" value="{{ Auth::user()->line }}" class="input" required readonly>
                                            </div>
                                        </div>
                                        @error('line1')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-building-columns"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Institution</p>
                                                <input type="text" name="institution1" id="institution1" value="{{ Auth::user()->institution }}" class="input" required readonly>
                                            </div>
                                        </div>
                                        @error('institution1')
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
                                                <i class="fa-solid fa-id-card"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID card/Identifier</p>
                                                <input type="file" accept="image/*" name="idcard1" id="idcard1" value="" required>
                                            </div>
                                        </div>
                                        @error('idcard1')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_grid_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-badge"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID MoLe</p>
                                                <input type="text" name="id_mole1" id="id_mole1" value="{{ old("id_mole1") }}" class="input" maxlength="9" required>
                                            </div>
                                        </div>
                                        @error('id_mole1')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-globe"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Server</p>
                                                <input type="text" name="server_mole1" id="server_mole1" value="{{ old("server_mole1") }}" class="input" maxlength="4" required>
                                            </div>
                                        </div>
                                        @error('server_mole1')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form_tab" data-content="2">
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Full Name</p>
                                                <input type="text" name="name2" id="name2" value="{{ old('name2') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('name2')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Phone Number (WA)</p>
                                                <input type="tel" 
                                                    pattern="62\d+" minlength="11" maxlength="15"
                                                    name="phone_number2" id="phone_number2" class="input phone_number"
                                                    value="{{ old('phone_number2') }}"
                                                    required         
                                                >
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                @error('phone_number2')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-line"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Line</p>
                                                <input type="text" name="line2" id="line2" value="{{ old('line2') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('line2')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-building-columns"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Institution</p>
                                                <input type="text" name="institution2" id="institution2" value="{{ old('institution2') }}" class="input" required>
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                Jika tidak sedang menempuh pendidikan isi "Umum"
                                                @error('institution2')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-card"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID card/Identifier</p>
                                                <input type="file" accept="image/*" name="idcard2" id="idcard2" value="" required>
                                            </div>
                                        </div>
                                        @error('idcard2')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_grid_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-badge"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID MoLe</p>
                                                <input type="text" name="id_mole2" id="id_mole2" value="{{ old("id_mole2") }}" class="input" maxlength="9" required>
                                            </div>
                                        </div>
                                        @error('id_mole2')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-globe"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Server</p>
                                                <input type="text" name="server_mole2" id="server_mole2" value="{{ old("server_mole2") }}" class="input" maxlength="4" required>
                                            </div>
                                        </div>
                                        @error('server_mole2')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form_tab" data-content="3">
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Full Name</p>
                                                <input type="text" name="name3" id="name3" value="{{ old('name3') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('name3')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Phone Number (WA)</p>
                                                <input type="tel" 
                                                    pattern="62\d+" minlength="11" maxlength="15"
                                                    name="phone_number3" id="phone_number3" class="input phone_number"
                                                    value="{{ old('phone_number3') }}"
                                                    required         
                                                >
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                @error('phone_number3')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-line"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Line</p>
                                                <input type="text" name="line3" id="line3" value="{{ old('line3') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('line3')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-building-columns"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Institution</p>
                                                <input type="text" name="institution3" id="institution3" value="{{ old('institution3') }}" class="input" required>
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                Jika tidak sedang menempuh pendidikan isi "Umum"
                                                @error('institution3')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-card"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID card/Identifier</p>
                                                <input type="file" accept="image/*" name="idcard3" id="idcard3" value="" required>
                                            </div>
                                        </div>
                                        @error('idcard3')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_grid_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-badge"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID MoLe</p>
                                                <input type="text" name="id_mole3" id="id_mole3" value="{{ old("id_mole3") }}" class="input" maxlength="9" required>
                                            </div>
                                        </div>
                                        @error('id_mole3')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-globe"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Server</p>
                                                <input type="text" name="server_mole3" id="server_mole3" value="{{ old("server_mole3") }}" class="input" maxlength="4" required>
                                            </div>
                                        </div>
                                        @error('server_mole3')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form_tab" data-content="4">
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Full Name</p>
                                                <input type="text" name="name4" id="name4" value="{{ old('name4') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('name4')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Phone Number (WA)</p>
                                                <input type="tel" 
                                                    pattern="62\d+" minlength="11" maxlength="15"
                                                    name="phone_number4" id="phone_number4" class="input phone_number"
                                                    value="{{ old('phone_number4') }}"
                                                    required         
                                                >
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                @error('phone_number4')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-line"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Line</p>
                                                <input type="text" name="line4" id="line4" value="{{ old('line4') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('line4')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-building-columns"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Institution</p>
                                                <input type="text" name="institution4" id="institution4" value="{{ old('institution4') }}" class="input" required>
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                Jika tidak sedang menempuh pendidikan isi "Umum"
                                                @error('institution4')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-card"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID card/Identifier</p>
                                                <input type="file" accept="image/*" name="idcard4" id="idcard4" value="" required>
                                            </div>
                                        </div>
                                        @error('idcard4')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_grid_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-badge"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID MoLe</p>
                                                <input type="text" name="id_mole4" id="id_mole4" value="{{ old("id_mole4") }}" class="input" maxlength="9" required>
                                            </div>
                                        </div>
                                        @error('id_mole4')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-globe"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Server</p>
                                                <input type="text" name="server_mole4" id="server_mole4" value="{{ old("server_mole4") }}" class="input" maxlength="4" required>
                                            </div>
                                        </div>
                                        @error('server_mole4')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form_tab" data-content="5">
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Full Name</p>
                                                <input type="text" name="name5" id="name5" value="{{ old('name5') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('name5')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Phone Number (WA)</p>
                                                <input type="tel" 
                                                    pattern="62\d+" minlength="11" maxlength="15"
                                                    name="phone_number5" id="phone_number5" class="input phone_number"
                                                    value="{{ old('phone_number5') }}"
                                                    required         
                                                >
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                @error('phone_number5')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-brands fa-line"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Line</p>
                                                <input type="text" name="line5" id="line5" value="{{ old('line5') }}" class="input" required>
                                            </div>
                                        </div>
                                        @error('line5')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-building-columns"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Institution</p>
                                                <input type="text" name="institution5" id="institution5" value="{{ old('institution5') }}" class="input" required>
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_red">
                                                Jika tidak sedang menempuh pendidikan isi "Umum"
                                                @error('institution5')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-card"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID card/Identifier</p>
                                                <input type="file" accept="image/*" name="idcard5" id="idcard5" value="" required>
                                            </div>
                                        </div>
                                        @error('idcard5')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_grid_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-id-badge"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">ID MoLe</p>
                                                <input type="text" name="id_mole5" id="id_mole5" value="{{ old("id_mole5") }}" class="input" maxlength="9" required>
                                            </div>
                                        </div>
                                        @error('id_mole5')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-globe"></i>
                                            </div> 
                                            <div class="input_div">
                                                <p class="input_title title_font">Server</p>
                                                <input type="text" name="server_mole5" id="server_mole5" value="{{ old("server_mole5") }}" class="input" maxlength="4" required>
                                            </div>
                                        </div>
                                        @error('server_mole5')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_red">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form_group">
                            <p class="title_font text_h3 mt4 mb2">
                                Team Data
                            </p>
                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Email</p>
                                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="input" required readonly>
                                    </div>
                                </div>
                                @error('email')
                                <div class="error_msg">
                                    <p class="text_xsm fc_red">
                                        {{ $message }}
                                    </p>
                                </div>
                                @enderror
                            </div>

                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-people-group"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Team Name</p>
                                        <input type="text" name="team_name" id="team_name" value="{{ old("team_name") }}" class="input" required>
                                    </div>
                                </div>
                                @error('team_name')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            {{ $message }}
                                        </p>
                                    </div>
                                @enderror
                            </div>

                            <p class="title_font text_h3 mt4 mb2">
                                Registration Fee
                            </p>
                            <div class="input_wrapper">
                                <div class="input_info mb6">
                                    <p>
                                        Calon peserta dikenakan fee registrasi sebesar <span class="fc_red fw_bold">Rp 50.000</span>, peserta dapat melakukan proses pembayaran melalui beberapa opsi : 
                                        <ul style="list-style: circle !important" class="ml4">
                                            <li>BCA <span class="fc_red fw_bold">0214014447</span> a.n. Belia Citra</li>
                                            <li>Ovo/Dana/Gopay <span class="fc_red fw_bold">082269166672</span> a.n. Belia Citra</li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="input_container focus">
                                    <div class="icon">
                                        <i class="fa-solid fa-file-invoice-dollar"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Proof Of Payment</p>
                                        <input type="file" accept="image/*" name="payment" id="payment" value="" required>
                                    </div>
                                </div>
                                @error('payment')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            {{ $message }}
                                        </p>
                                    </div>
                                @enderror
                                <label for="verify_data" class="d_flex mt4">
                                    <input id="verify_data" type="checkbox" required>
                                    <span class="text_sm ml2">Saya menyatakan bahwa bukti pembayaran dan data yang saya kirimkan benar, tanpa rekayasa</span>
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="btn_container pb4">
                        <button type="submit" class="btn_left form_btn" name="submit">
                            <i class="btn_left_design"></i>
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

