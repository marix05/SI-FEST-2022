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
                <p class="text_big">Login</p>
                <p class="fc_red">Join our event!</p>
            </div>
            <div class="form_wrapper box_lt_rb_side p6">
                <i class="box_lt_rb_side_design"></i>
                <form action="{{ route("login") }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form_container pb2">
                        <div class="form_group">
                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Email</p>
                                        <input type="email" name="email" id="email" value="{{ old("email") }}" class="input">
                                    </div>
                                </div>
                                <div class="error_msg">
                                    <p class="text_xsm fc_red">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-lock"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Password</p>
                                        <input type="password" name="password" id="password" class="input password">
                                        <i class="password_visibility fa-solid fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <label for="remember_me" class="d_flex items_center">
                                <input id="remember_me" type="checkbox" name="remember">
                                <span class="text_sm ml2">Remember Me</span>
                            </label>
                        </div>
                    </div>
                    <div class="btn_container">
                        <button type="submit" class="btn_left form_btn" name="submit">
                            <i class="btn_left_design"></i>
                            Login
                        </button>
                        
                        <div class="separator text_sm">or use your google account</div>
                        
                        <a href="{{ route("login.google") }}" class="btn_left text_center red_btn form_btn">
                            <i class="btn_left_design"></i>
                            <i class="fa-brands fa-google"></i> Login With Google
                        </a>

                        <p class="text_sm">Don't have an account? <a href="{{ route("register") }}"><span class="fw_bold fc_red">Sign Up</span></a></p>
                        <p class="text_sm"><a href="{{ route('password.request') }}" class="fw_bold fc_red">Forgot Password ?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

