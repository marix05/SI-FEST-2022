@extends('layouts/web.main')

@section('index')

<section class="form_section">
    <div class="wrapper">
        @if(session('status') == 'verification-link-sent')
            <div class="alert success">
                <p class="alert_msg">A new verification link has been sent</p>
                <i class="fa-solid fa-xmark alert_toggle"></i>
            </div>
        @endif
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
                <p class="text_big">Verification Email</p>
                <p class="fc_red">Check your email</p>
            </div>
            <div class="form_wrapper box_lt_rb_side p6">
                <i class="box_lt_rb_side_design"></i>
                <p class="mb4">Thank you for register your account, please check your email and <span class="fw_bold">verify your email account</span>, then get started.</p>
                <form action="{{ route('verification.send') }}" method="post" autocomplete="off" class="pb2">
                    @csrf
                    <div class="btn_container">
                        <button type="submit" class="btn_left form_btn" name="submit">
                            <i class="btn_left_design"></i>
                            Resend Verification
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

