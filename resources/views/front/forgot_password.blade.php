@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Şifremi Unuttum
@endsection

@section('content')
    <section class="primary-light-bg">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="bg-white shadow-sm rounded-2 code-width-limit mx-auto p-5">
                        <div class="text-center">
                            <h1 class="h3 custom-weight-6">Şifreni Mi Unuttun?</h1>
                            <p>Hiç sorun değil! Aşağıya e-posta adresinizi girin, hesabınızı sıfırlamak için size güvenli
                                bir bağlantı göndereceğiz.
                            </p>
                        </div>
                        <form action="">
                            <div>
                                <label for="giris_mail" class="custom-fs1">Mail Adresi</label>
                                <input class="form-control primary-light-bg border-none input-custom" name="giris_mail"
                                    type="text" placeholder="ornek@alanadi.com">
                            </div>

                            <div class="pt-5">
                                <button type="submit" class="button-primary w-100 input-custom custom-weight-6">
                                    Kodu Gönder
                                </button>
                            </div>
                        </form>
                        <div class="cizgili-yazi px-lg-5 px-3 pt-5 pb-4"></div>
                        <div class="text-center">
                            <a href="{{ route('login') }}"
                                class="tertiary-dark-text custom-hover1 custom-weight-6 text-decoration-none">
                                <i class="bi bi-arrow-left me-2"></i>Giriş Sayfasına Dön
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
