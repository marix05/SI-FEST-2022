@extends('layouts/web.main')

@section('index')

<section class="form_section">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_font text_center mt20 mb12">
                <p class="text_big">Register</p>
                <p class="fc_red">Let's make your account!</p>
            </div>
            <div class="form_wrapper box_lt_rb_side p6">
                <i class="box_lt_rb_side_design"></i>
                <form action="{{ route('register') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form_container pb2">
                        <div class="form_group">
                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-user"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Full Name</p>
                                        <input type="text" name="name" id="name" value="{{ old("name") }}" class="input" required>
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
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Email</p>
                                        <input type="email" name="email" id="email" value="{{ old("email") }}" class="input" required>
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
                                        <i class="fa-solid fa-lock"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Password</p>
                                        <input type="password" name="password" id="password" class="input password" required>
                                        <i class="password_visibility fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="error_msg">
                                    <p class="text_xsm fc_red">
                                        @error('password')
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
                                        <p class="input_title title_font">Confirm Pasword</p> 
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="input password" required>
                                        <i class="password_visibility fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="error_msg">
                                    <p class="text_xsm fc_red">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_container">
                        <button type="submit" class="btn_left form_btn" name="submit">
                            <i class="btn_left_design"></i>
                            Register
                        </button>
                        <p class="text_sm">Already have an account? <a href="{{ route('login') }}"><span class="fw_bold fc_red">Login</span></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

