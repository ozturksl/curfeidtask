@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Giriş
@endsection

@section('content')
    <section class="py-lg-0 py-2">
        <div class="container p-3 p-lg-0 pt-5 pt-lg-0">
            <div class="row">
                <div class="col-12 px-lg-0">
                    <div class="text-center">
                        <img class="pb-4" width="250" height="auto" src="{{ asset('assets/src/logo.png') }}">
                        <p class="text-center">Verimlilik ve odaklanma dünyanıza adım atın.</p>
                    </div>
                    <div class="bg-white shadow-sm rounded-2 page-width-limit mx-auto">
                        <form action="" class="px-lg-5 px-3 pb-4 pt-5 form-main">
                            <div>
                                <label for="giris_mail" class="custom-fs1">Mail Adresi</label>
                                <input class="form-control primary-light-bg border-none input-custom" name="giris_mail"
                                    type="text" placeholder="ornek@alanadi.com">
                            </div>
                            <div class="pt-4 checkbox-main">
                                <label for="giris_sifre" class="custom-fs1">Şifre</label>
                                <small class="custom-fs1 float-end custom-weight-6"><a class="custom-hover1"
                                        href="{{ route('password.forgot') }}">Şifremi
                                        Unuttum</a></small>
                                <input class="form-control primary-light-bg border-none input-custom" name="giris_sifre"
                                    type="password" placeholder="•••••••••">
                            </div>
                            <div class="pt-3">
                                <input class="form-check-input me-1" type="checkbox" id="hatirla">
                                <label class="form-check-input-label custom-fs1" for="hatirla">Beni
                                    Hatırla</label>
                            </div>
                            <div class="pt-5">
                                <button type="submit"
                                    class="button-primary w-100 input-custom custom-weight-6 d-flex align-items-center justify-content-center">
                                    <span>Giriş Yap</span>
                                    <i class="bi bi-arrow-right ms-3 fs-5 d-inline-block mt-1"></i>
                                </button>
                            </div>
                        </form>
                        <!--
                                                            <div class="text-center m-0 p-0">
                                                                <span class="text-success custom-weight-6 custom-fs1">Giriş Başarılı, Yönlendiriliyor...</span>
                                                            </div>
                                                             <div class="text-center m-0 p-0">
                                                                <span class="text-danger custom-weight-6 custom-fs1">Giriş Bilgileri Hatalı</span>
                                                             </div>
                                                            -->
                        <div class="cizgili-yazi px-lg-5 px-3 pt-4 pb-4">
                            <span class="custom-weight-6">DİĞER YÖNTEMLER</span>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center gap-3 py-5">
                                <a href="#" class="col-lg-5 col-11 text-decoration-none text-dark">
                                    <div class="border custom-hover2 border-secondary rounded-2 py-3 text-center">
                                        <img class="me-2" src="{{ asset('assets/src/google.png') }}" width="24"
                                            height="auto" alt="Google">
                                        <span class="custom-weight-6 custom-fs1">Google</span>
                                    </div>
                                </a>
                                <a href="#" class="col-lg-5 col-11 text-decoration-none text-dark">
                                    <div class="border custom-hover2 border-secondary rounded-2 py-3 text-center">
                                        <img class="me-2" src="{{ asset('assets/src/apple.png') }}" width="24"
                                            height="auto" alt="Apple">
                                        <span class="custom-weight-6 custom-fs1">Apple</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center dont-have py-4">
                        <p class="pt-lg-2 pt-3">Hesabınız yok mu?<a class="custom-hover1 ms-2 custom-weight-6"
                                href="{{ route('register') }}">Kayıt Ol</a></p>
                    </div>
                </div>
            </div>
    </section>
@endsection
