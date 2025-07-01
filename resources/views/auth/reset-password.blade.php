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
                <p class="text_big">Forgot Password</p>
                <p class="fc_red">Enter Your New Password</p>
            </div>
            <div class="form_wrapper box_lt_rb_side p6">
                <i class="box_lt_rb_side_design"></i>
                <form action="{{ route('password.update') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form_container pb2">
                        <div class="form_group">
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            
                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Email</p>
                                        <input type="email" name="email" id="email" value="{{ old("email", $request->email) }}" class="input" required readonly>
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
                        <button type="submit" class="btn_right form_btn" name="submit">
                            <i class="btn_right_design"></i>
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

