@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Gizlilik Politikası
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h1>Gizlilik Politikası</h1>
                    <p class="pt-2">Son Güncelleme: 24 Ekim 2026</p>
                    <div class="shadow-sm rounded-2 p-5 custom-hover4">
                        <h1 class="h4 tertiary-dark-text custom-weight-6"><i class="bi bi-info-circle me-2"></i>Giriş</h1>
                        <p class="pt-4">
                            CurfeidTask'a hoş geldiniz. Gizliliğiniz, en önemli projelerinizi ve verilerinizi yönetmemiz
                            için bize duyduğunuz güvenin temel taşıdır. Bu Gizlilik Politikası, hizmetlerimizi
                            kullandığınızda CurfeidTask'ın kişisel bilgilerinizi nasıl
                            topladığını, kullandığını ve paylaştığını açıklar.
                            <br><br>
                            CurfeidTask platformunu kullanarak, bilgilerin bu politikaya uygun olarak toplanmasını ve
                            kullanılmasını kabul etmiş olursunuz. Deneyiminizin bir "dijital sığınak" gibi—organize, güvenli
                            ve özel—kalmasını sağlamaya kararlıyız.
                        </p>
                    </div>
                    <div class="pt-5 pb-3">
                        <h1 class="h4">1. Bilgi Toplama</h1>
                        <p>Size hizmetimizi sağlamak ve geliştirmek amacıyla çeşitli amaçlarla farklı türde bilgiler
                            topluyoruz:</p>
                        <ul class="ps-0 ps-lg-5">
                            <li class="pt-2"><b>Kişisel Veriler:</b> Hizmetimizi kullanırken, sizinle iletişim kurmak veya
                                kimliğinizi
                                belirlemek için kullanılabilecek e-posta adresi, ad ve soyad ile profil resimleri dahil
                                olmak üzere belirli kişisel olarak tanımlanabilir bilgileri bize sağlamanızı isteyebiliriz.
                            </li>
                            <li class="pt-4">
                                <b>Kullanım Verileri:</b> Hizmete nasıl erişildiğine ve kullanıldığına dair bilgiler de
                                toplayabiliriz. Bu Kullanım Verileri, bilgisayarınızın IP adresi, tarayıcı türü, tarayıcı
                                sürümü, Hizmetimizin ziyaret ettiğiniz sayfaları ve diğer tanılama verileri gibi bilgileri
                                içerebilir.
                            </li>
                            <li class="pt-4">
                                <b>Görev Verileri:</b> CurfeidTask içinde oluşturduğunuz görev başlıkları, açıklamalar ve
                                dosya
                                ekleri dahil olmak üzere içerikler güvenli bir şekilde saklanır.
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="pt-5 pb-3">
                        <h1 class="h4">2. Veri Kullanımı</h1>
                        <div class="pt-4">
                            <p>CurfeidTask toplanan verileri çeşitli amaçlar için kullanır:</p>
                            <ul class="list-unstyled">
                                <li class="pt-2 custom-move-x">
                                    <i class="bi bi-check-circle fs-4 me-3"></i>Cihazlar arasında kesintisiz görev
                                    senkronizasyonu
                                    sağlayarak Hizmetimizi
                                    sunmak ve sürdürmek.
                                </li>
                                <li class="pt-4 custom-move-x">
                                    <i class="bi bi-check-circle fs-4 me-3"></i>Hizmetimizdeki değişiklikler veya
                                    paylaşılan
                                    projelerinizdeki güncellemeler hakkında sizi
                                    bilgilendirmek.
                                </li>
                                <li class="pt-4 custom-move-x">
                                    <i class="bi bi-check-circle fs-4 me-3"></i>Müşteri desteği sağlamak ve kullanıcı
                                    arayüzünü
                                    iyileştirmek için analizler toplamak.
                                </li>
                                <li class="pt-4 custom-move-x">
                                    <i class="bi bi-check-circle fs-4 me-3"></i>Teknik sorunları veya güvenlik açıklarını
                                    tespit etmek,
                                    önlemek ve gidermek.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="pt-4 pb-3">
                        <div class="custom-gray-bg border-seconday border shadow-sm rounded-3 p-4">
                            <h1 class="h4">3. Çerezler ve İzleme</h1>
                            <div class="pt-4">
                                <p>Hizmetimizdeki etkinliği izlemek ve belirli bilgileri tutmak için çerezler ve benzer
                                    izleme
                                    teknolojileri kullanıyoruz. Çerezler, anonim bir benzersiz tanımlayıcı içerebilen az
                                    miktarda veri içeren dosyalardır.</p>
                                <div class="container pt-4">
                                    <div class="row">
                                        <div
                                            class="col-lg-6 col-12 rounded-4 mini-card-limit mx-auto p-4 custom-card-effect">
                                            <p class="tertiary-dark-text custom-weight-6">Oturum Çerezleri</p>
                                            <p>Hizmetimizi çalıştırmak ve giriş durumunuzu korumak için kullanılır.</p>
                                        </div>
                                        <div class="col-lg-6 col-12 rounded-4 custom-card-effect mini-card-limit mt-lg-0 mt-3 mx-auto p-4">
                                            <p class="tertiary-dark-text custom-weight-6">Tercih Çerezleri</p>
                                            <p>Ayarlarınızı ve karanlık mod gibi çeşitli tercihlerinizi hatırlamak için
                                                kullanılır.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="pt-4 pb-3">
                        <div class="tertiary-dark-bg rounded-5 p-5 text-center">
                            <h1 class="h2 text-white">Verilerinizle ilgili sorularınız mı var?</h1>
                            <h1 class="h5 pt-3 text-white">Özel gizlilik ekibimiz, her türlü endişenizi gidermek için
                                burada.</h1>
                            <a href="{{ route('support') }}"
                                class="custom-policy-button text-decoration-none rounded-5 fs-5 custom-weight-6 d-inline-block mt-4 shadow-lg px-lg-5 px-3 py-1 py-lg-3 ">
                                Destek İle İletişime Geçin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
