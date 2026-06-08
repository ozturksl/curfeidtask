@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('title')
    Hizmet Şartları
@endsection

@section('content')
    <section>
        <div class="container">

            <div class="row p-5">
                <h1>Hizmet Şartları</h1>
                <p class="pt-2">Son Güncelleme: 24 Ekim 2026</p>
                <p>Herkes için huzurlu ve verimli bir çalışma alanı sağlamak amacıyla CurfeidTask'ı kullanmadan önce
                    lütfen bu şartları dikkatlice okuyun.</p>
                <div class="col-lg-3 col-12 text-center text-lg-start sticky-top">
                    <div class="pt-5  sticky-top ">
                        <div class="rounded-3 mini-card custom-color-other-bg px-4 py-5 custom-border">
                            <h1 class="tertiary-dark-text custom-weight-6">İÇİNDEKİLER</h1>
                            <ul class="list-unstyled ms-lg-4">
                                <li><a class="text-decoration-none" href="#sartlar">Şartların Kabulü</a></li>
                                <li><a class="text-decoration-none" href="#kullanicihesap">Kullanıcı Hesapları</a></li>
                                <li><a class="text-decoration-none" href="#yasak">Yasaklanmış Faaliyetler</a></li>
                                <li><a class="text-decoration-none" href="#fikrimulk">Fikri Mülkiyet</a></li>
                                <li><a class="text-decoration-none" href="#verivegizlilik">Veri ve Gizlilik</a></li>
                                <li><a class="text-decoration-none" href="#fesih">Fesih</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-12 pt-5">
                    <div class="rounded-4 custom-border p-5 custom-hover4" id="sartlar">
                        <h1 class="tertiary-dark-text pb-4 h3">1. Şartların Kabulü</h1>
                        <p>CurfeidTask platformuna erişerek veya bu platformu kullanarak, bu Hizmet Şartlarına
                            bağlı kalmayı kabul etmiş olursunuz. Şartların ve koşulların tamamını kabul etmiyorsanız,
                            Hizmet'e
                            erişemez veya Hizmet'i kullanamazsınız.</p>
                        <p>
                            Bu şartları herhangi bir zamanda güncelleme veya değiştirme hakkımızı saklı tutarız.
                            Değişiklikler
                            yayınlandıktan sonra platformu kullanmaya devam etmeniz, revize edilmiş şartları kabul ettiğiniz
                            anlamına gelir.
                        </p>
                    </div>
                    <div class="rounded-4 custom-border p-5 mt-5 custom-hover4" id="kullanicihesap">
                        <h1 class="tertiary-dark-text pb-4 h3">2. Kullanıcı Hesapları</h1>
                        <p>Hizmetin belirli özelliklerine erişmek için bir hesap oluşturmanız gerekmektedir. Kayıt işlemi
                            sırasında doğru, güncel ve eksiksiz bilgiler sağlamayı ve hesap bilgilerinizi güncel tutmayı
                            kabul edersiniz.</p>
                        <ul>
                            <li class="lh-lg">Şifrenizin güvenliğini sağlamaktan siz sorumlusunuz.</li>
                            <li class="lh-lg">Hesabınızın her türlü yetkisiz kullanımını derhal bize bildirmelisiniz.</li>
                            <li class="lh-lg">Bir kişi veya kuruluş birden fazla ücretsiz hesap açamaz.</li>
                        </ul>
                    </div>
                    <div class="rounded-4 custom-border mt-5 overflow-hidden">
                        <img class="img-fluid rounded-4 img-hover-zoom" src="{{ asset('assets/src/ofis.jpg') }}" alt="">
                    </div>
                    <div class="rounded-4 custom-border p-5 mt-5" id="yasak">
                        <h1 class="tertiary-dark-text pb-4 h3">3. Yasaklanmış Faaliyetler</h1>
                        <p>TaskSanctuary, odaklanmış çalışma ve iş birliği için tasarlanmıştır. Aşağıdaki yasaklanmış
                            faaliyetlerde bulunmamayı kabul edersiniz:</p>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-12 me-lg-4 custom-color-other-bg p-3 rounded-4 custom-border custom-card-effect ">
                                <h1 class="custom-fs1 custom-weight-6">Sistem Müdahelesi</h1>
                                <p class="custom-fs1">Robotlar veya örümcekler dahil olmak üzere otomatik sistemleri
                                    kullanarak Hizmet'e bir
                                    insanın makul bir şekilde üretebileceğinden daha fazla istek mesajı gönderecek şekilde
                                    erişmek.</p>
                            </div>
                            <div
                                class="col-lg-5 col-12 mt-3 mt-lg-0  custom-color-other-bg p-3 rounded-4 custom-border custom-card-effect ">
                                <h1 class="custom-fs1 custom-weight-6">Uygunsuz İçerik</h1>
                                <p class="custom-fs1">Yasa dışı, zararlı, tehdit edici, kötüye kullanım içeren veya başka
                                    bir şekilde sakıncalı
                                    olan herhangi bir içeriği yüklemek, paylaşmak veya iletmek.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-4 custom-border p-5 mt-5" id="fikrimulk">
                        <h1 class="tertiary-dark-text pb-4 h3">4. Fikri Mülkiyet</h1>
                        <p>Hizmet ve orijinal içeriği, özellikleri ve işlevselliği CurfeidTask ve lisans verenlerinin
                            münhasır mülkiyetindedir ve öyle kalacaktır. Ticari markalarımız ve ticari takdim şeklimiz,
                            TaskSanctuary'nin önceden yazılı izni olmaksızın herhangi bir ürün veya hizmetle bağlantılı
                            olarak kullanılamaz.</p>
                        <div class="p-4 rounded-4 custom-card-effect ">
                            <i>"Platforma yüklediğiniz içerik üzerindeki tüm mülkiyet haklarınızı saklı tutarsınız, ancak bu
                                içeriği size hizmet sunmak amacıyla kullanmamız, barındırmamız ve saklamamız için bize dünya
                                çapında, münhasır olmayan bir lisans verirsiniz."</i>
                        </div>
                    </div>
                    <div class="rounded-4 custom-border p-5 mt-5 custom-hover4" id="verivegizlilik">
                        <h1 class="tertiary-dark-text pb-4 h3">5. Veri ve Gizlilik</h1>
                        <p>Gizliliğiniz bizim için çok önemlidir. Hizmet'in kullanımı, bu şartlara atıf yapılarak dahil
                            edilen Gizlilik Politikamıza da tabidir. Görev verilerinizi ve kişisel bilgilerinizi korumak
                            için endüstri standardı şifreleme yöntemleri kullanıyoruz.</p>
                    </div>
                    <div class="rounded-4 custom-border p-5 mt-5 custom-hover4" id="fesih">
                        <h1 class="tertiary-dark-text pb-4 h3">6. Fesih</h1>
                        <p>Şartların ihlali dahil ancak bununla sınırlı olmamak üzere, tamamen kendi takdirimize bağlı
                            olarak herhangi bir nedenle ve önceden bildirimde bulunmaksızın veya sorumluluk kabul etmeksizin
                            hesabınızı derhal feshedebilir veya askıya alabilir ve Hizmete erişiminizi engelleyebiliriz.</p>
                        <p>
                            Fesih durumunda, Hizmeti kullanma hakkınız derhal sona erecektir. Şartların doğası gereği
                            fesihten sonra da devam etmesi gereken tüm hükümleri yürürlükte kalacaktır.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
