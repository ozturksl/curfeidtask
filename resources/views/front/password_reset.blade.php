@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Şifre Oluştur
@endsection

@section('content')
    <section>
        <div class="container py-lg-5 p-4">
            <div class="row">
                <div class=" reset-width-limit col-12 pt-5 bg-white shadow-sm rounded-2 mx-auto">
                    <form action="" class="px-lg-5 px-3 pb-4 pt-5 form-main">
                        <div class="pb-4">
                            <h1 class="h2">Yeni Şifre Belirle</h1>
                            <p>Çalışma alanınızı ve verilerinizi korumak için güçlü bir parola seçin.</p>
                        </div>

                        <div>
                            <label for="reset_sifre" class="custom-fs1">Yeni Şifre</label>
                            <input class="form-control primary-light-bg border-none input-custom" name="reset_sifre"
                                type="password" placeholder="•••••••••">
                        </div>
                        <div class="pt-4">
                            <label for="reset_sifre_onay" class="custom-fs1">Yeni Şifreyi Onayla</label>
                            <input class="form-control primary-light-bg border-none input-custom" name="reset_sifre_onay"
                                type="password" placeholder="•••••••••">
                        </div>
                        <div class="pt-5">
                            <button type="submit" class="button-primary w-100 input-custom custom-weight-6">
                                Şifreyi Sıfırla
                            </button>
                        </div>
                    </form>
                    <div class="cizgili-yazi px-lg-5 px-3 pt-4"></div>
                    <div class="text-center py-5">
                        <a href="{{ route('login') }}" class="tertiary-dark-text pt-2 custom-weight-6 custom-hover1 text-decoration-none d-inline-block"><i class="bi bi-arrow-left me-2"></i>Giriş
                            Ekranına Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
