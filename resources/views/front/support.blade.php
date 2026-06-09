@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Destek
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row p-lg-0 p-5">
                <div class="col-12 text-center my-5">
                    <h1 class="custom-weight-6">Hala yardıma mı ihtiyacınız var?</h1>
                    <p class="pt-4">Destek ekibimiz size yardımcı olmak için burada. Bize ulaşın, kısa bir süre içinde size
                        geri dönelim.
                    </p>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="d-flex align-items-start py-5">
                        <div
                            class="bi bi-envelope p-3 custom-support-bg fs-4 rounded-circle me-3 d-flex align-items-center justify-content-center custom-icon-box">
                        </div>
                        <div>
                            <h3 class="h4 mb-1">E-Posta Desteği</h3>
                            <p class="text-muted mb-2">Genel sorularınız ve faturalandırma hakkında her türlü bilgi için.
                            </p>
                            <a href="#" class="text-decoration-none tertiary-dark-text">ornek@gmail.com</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-start py-5">
                        <div
                            class="bi bi-envelope p-3 custom-support-bg fs-4 rounded-circle me-3 d-flex align-items-center justify-content-center custom-icon-box">
                        </div>
                        <div>
                            <h3 class="h4 mb-1">Canlı Destek</h3>
                            <p class="text-muted mb-2">Pzt-Cum, 09:00 - 18:00 (EST) arası hizmetinizdeyiz.
                            </p>
                            <a href="#" class="text-decoration-none tertiary-dark-text">Sohbeti Başlat</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-start py-5">
                        <div
                            class="bi bi-telephone p-3 custom-support-bg fs-4 rounded-circle me-3 d-flex align-items-center justify-content-center custom-icon-box">
                        </div>
                        <div>
                            <h3 class="h4 mb-1">Telefon Desteği</h3>
                            <p class="text-muted mb-2">Acil durumlar ve doğrudan görüşmeler için bizi arayın.</p>
                            <a href="tel:+902120000000" class="text-decoration-none tertiary-dark-text">+90 (212) 000 00
                                00</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="custom-border shadow-sm p-5 mt-4 rounded-4 bg-white">
                        <h1 class="custom-fs1 custom-weight-6">BİZE YAZIN</h1>
                        <form action="" class="pt-4">
                            <div>
                                <label for="">Konu</label>
                                <select name="konusec" id="" class="form-select primary-light-bg">
                                    <option value="orn1">Konu 1</option>
                                    <option value="orn1">Konu 2</option>
                                    <option value="orn1">Konu 3</option>
                                </select>
                            </div>
                            <div class="mt-5">
                                <label for="">Mesajınız</label>
                                <textarea class="primary-light-bg form-control" name="" id="" cols="30" rows="5"
                                    placeholder="Size nasıl yardımcı olabileceğimizi açıklayın..."></textarea>
                            </div>
                            <button type="submit" class="button-primary w-100 input-custom custom-weight-6 d-flex align-items-center justify-content-center mt-5">Mesaj Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
