@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Kayıt Ol
@endsection

@section('content')
    <section>
        <div class="container p-4 p-lg-0">
            <div class="row py-lg-3 py-1">
                <div class="col-lg-5 col-12 pt-5 pb-4 pb-lg-0">
                    <img src="{{ asset('assets/src/logo.png') }}" width="250" height="auto" class="py-3">
                    <h1 class="">Planlı çalışma, huzurlu sonuçlar.</h1>
                    <p class="py-4">Gereksiz detaylardan arındırılmış, sezgisel ve minimalist görev yönetimi
                        ekosistemimiz,
                        gününüzü bölmek yerine sizi başarıya odaklar. Zamanı doğru yönetmenin ve iş-yaşam dengesini kurmanın
                        huzurunu yaşayan, kariyerinde fark yaratan binlerce profesyonel gibi siz de bugün ilk adımı atın ve
                        iş günlerinizi yeniden şekillendirin.
                    </p>
                    <img src="{{ asset('assets/src/register.jpg') }}" class="img-fluid rounded-3" alt="">
                </div>
                <div class="col-lg-5 col-12 pt-5 bg-white shadow-sm rounded-2 ms-lg-5">
                    <form action="" class="px-lg-5 px-3 pb-4 pt-5 form-main">
                        <div class="pb-4">
                            <h1 class="h2">Hesabınızı Oluşturun</h1>
                            <p>Düzenli bir hayata doğru yolculuğunuza bugün başlayın.</p>
                        </div>

                        <div>
                            <label for="kayit_isim" class="custom-fs1">Ad Soyad</label>
                            <input class="form-control primary-light-bg border-none input-custom" name="kayit-isim"
                                type="text" placeholder="Örn. Salih Öztürk">
                        </div>
                        <div class="pt-4 checkbox-main">
                            <label for="kayit-mail" class="custom-fs1">Mail Adresi</label>
                            <input class="form-control primary-light-bg border-none input-custom" name="kayit-mail"
                                type="text" placeholder="ornek@alanadi.com">
                        </div>
                        <div class="pt-4 checkbox-main">
                            <label for="kullanici-sifre" class="custom-fs1">Şifre</label>
                            <input class="form-control primary-light-bg border-none input-custom" name="kullanici-sifre"
                                type="password" placeholder="•••••••••">
                        </div>
                        <div class="pt-3 d-flex align-items-center">
                            <input class="form-check-input me-2 mt-0" type="checkbox" id="hatirla">
                            <label class="custom-fs1" for="hatirla">
                                <a class="tertiary-dark-text custom-weight-6 custom-hover1 text-decoration-none" href="{{ route('privacy.policy') }}">Hizmet
                                    Şartları</a> ve
                                <a class="tertiary-dark-text custom-weight-6 custom-hover1 text-decoration-none" href="#">Gizlilik
                                    Politikası'nı</a> kabul ediyorum.
                            </label>
                        </div>
                        <div class="pt-5">
                            <button type="submit" class="button-primary w-100 input-custom custom-weight-6 d-flex align-items-center justify-content-center">
                                Hesap Oluştur
                            </button>
                        </div>
                    </form>
                    <!--
                                                                                        <div class="text-center m-0 p-0">
                                                                                            <span class="text-success custom-weight-6 custom-fs1">Kayıt Başarılı, Yönlendiriliyor...</span>
                                                                                        </div>
                                                                                         <div class="text-center m-0 p-0">
                                                                                            <span class="text-danger custom-weight-6 custom-fs1">Giriş Bilgileri Hatalı</span>
                                                                                         </div>
                                                                                        -->
                    <div class="cizgili-yazi px-lg-5 px-3 pt-4 pb-4"></div>
                    <div class="text-center dont-have py-4">
                        <p class="">Zaten hesabınız var mı?<a class="ms-2 custom-hover1 custom-weight-6"
                                href="{{ route('login') }}">Giriş Yap</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
