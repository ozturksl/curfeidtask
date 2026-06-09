@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Kimlik Doğrula
@endsection

@section('content')
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="text-center page-width-limit mx-auto py-5">
                        <h1 class="h3 custom-weight-6">Kimliğini Doğrula</h1>
                        <p>E-posta adresinize 6 haneli bir doğrulama kodu gönderdik. Lütfen gelen kutunuzu kontrol edin.</p>
                    </div>
                    <div class="bg-white shadow-sm rounded-2 code-width-limit mx-auto code-main p-5">
                        <form action="" class="d-flex flex-wrap flex-row gap-4 justify-content-center">
                            <input type="text" maxlength="1" pattern="\d*">
                            <input type="text" maxlength="1" pattern="\d*">
                            <input type="text" maxlength="1" pattern="\d*">
                            <input type="text" maxlength="1" pattern="\d*">
                            <input type="text" maxlength="1" pattern="\d*">
                            <input type="text" maxlength="1" pattern="\d*">
                        </form>
                        <div class="pt-5">
                            <button type="submit"
                                class="button-primary w-100 input-custom custom-weight-6 d-flex align-items-center justify-content-center">
                                <span>Hesabı Doğrula</span>
                                <i class="bi bi-arrow-right ms-3 fs-5 d-inline-block mt-1"></i>
                            </button>
                        </div>
                        <div class="text-center pt-4">
                            <p class="mb-1">Kod sana ulaşmadı mı?</p>
                            <a href="#" class="tertiary-dark-text custom-hover1 custom-weight-6 text-decoration-none">Kodu Tekrar
                                Gönder</a>
                            <!--
                                                    <div class="text-center m-0 pt-3">
                                                        <span class="text-success custom-weight-6 custom-fs1">Kod Gönderildi</span>
                                                    </div>
                                                -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
