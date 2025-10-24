<x-main title="Bosh sahifa" >
    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">🩺 Sog‘lig‘ingiz uchun ishonchli maslahatchi – MediHelp.uz</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Ekspert doktorlar</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Foydalanuvchilar</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Savol-javoblar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Cardiology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Neurology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Pulmonary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/about-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/about-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Biz haqimizda</p>
                    <h1 class="mb-4">Biz eshitamiz, maslahat beramiz, g‘amxo‘rlik qilamiz!</h1>
                    <p>MediHelp — sog‘lom hayot sari yo‘ldoshingiz. Bizning platformamizda siz o‘zingizni qiynayotgan savollarga javob olasiz, malakali shifokorlar bilan bevosita muloqot qilasiz va sun’iy intellekt yordamchisi orqali tezkor tibbiy tavsiyalar olasiz.</p>
                    <p class="mb-4">MediHelp sizga vaqt va joydan qat’i nazar, tibbiy maslahat olish imkoniyatini yaratadi.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Sifatli tibbiy xizmatlar</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Faqat malakali shifokorlar</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Tibbiy tadqiqot va innovatsiyalar</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="{{route('about')}}">Ko'rish</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Tibbiy xizmatlar</p>
                <h1>Sog‘liqni asrash bo‘yicha yechimlar</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Kardiologiya</h4>
                        <p class="mb-4">Kardiolog mutaxassislar yurak ritmi, qon bosimi, yurak xastaligi va qon aylanish tizimi bilan bog‘liq muammolarni aniqlaydi va davolash bo‘yicha maslahat beradi.</p>
                        <a class="btn" href="{{ route('specialties.show', 2) }}"><i class="fa fa-plus text-primary me-3"></i>Ko'rish</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Pulmonologiya</h4>
                        <p class="mb-4">Pulmonologlar nafas olish tizimi, o‘pka kasalliklari va allergik nafas yo‘li muammolari bo‘yicha maslahatlarga ixtisoslashgan.</p>
                        <a class="btn" href="{{ route('specialties.show', 1) }}"><i class="fa fa-plus text-primary me-3"></i>Ko'rish</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Nevrologiya</h4>
                        <p class="mb-4">Nevrologlar bosh miya, orqa miya va asab tizimi kasalliklarini aniqlaydi, bosh og‘rigi, uyqusizlik va stress kabi muammolarga yechim taklif etadi.</p>
                        <a class="btn" href="{{ route('specialties.show', 3) }}"><i class="fa fa-plus text-primary me-3"></i>Ko'rish</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-wheelchair text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Orthopedics</h4>
                        <p class="mb-4">Ortopedlar suyak, bo‘g‘im, mushak va tayanch-harakat tizimidagi shikastlanishlar va kasalliklarni davolash bilan shug‘ullanadi.</p>
                        <a class="btn" href="{{ route('specialties.show', 10) }}"><i class="fa fa-plus text-primary me-3"></i>Ko'rish</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-tooth text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Tish jarrohligi</h4>
                        <p class="mb-4">Tish jarrohlari og‘iz bo‘shlig‘i, tish ildizlari, milk va chaynov tizimi bilan bog‘liq muammolarni hal etish bo‘yicha xizmat ko‘rsatadi.</p>
                        <a class="btn" href="{{ route('specialties.show', 5) }}"><i class="fa fa-plus text-primary me-3"></i>Ko'rish</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Laboratoriya diagnostikasi</h4>
                        <p class="mb-4">Laboratoriya mutaxassislari qon, siydik va boshqa namunalarni tahlil qilib, shifokorlarga aniq diagnostika uchun zarur ma’lumotlarni taqdim etadi.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Ko'rish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Afzalliklar</p>
                        <h1 class="text-white mb-4">Nega aynan bizni tanlaysiz?</h1>
                        <p class="text-white mb-4 pb-2">Sog‘lig‘ingizga befarq bo‘lmagan jamoamiz sizga qulay, tezkor va ishonchli tibbiy maslahatlarni taqdim etadi.
                            MediHelp — bu zamonaviy tibbiyot va texnologiyaning uyg‘unligi, inson hayotiga g‘amxo‘rlik bilan yondashadigan raqamli platforma.
                            Biz bilan siz sog‘lom hayot sari bir qadam yaqinroq bo‘lasiz!</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Tajriba</p>
                                        <h5 class="text-white mb-0">Shifokorlar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Sifat</p>
                                        <h5 class="text-white mb-0">Xizmatlar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Foydali</p>
                                        <h5 class="text-white mb-0">suxbat</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 soatlik</p>
                                        <h5 class="text-white mb-0">Doimiy qo‘llab-quvvat</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Shifokorlar</p>
                <h1>Bizning Tajriba Shifokorlar</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <a href="{{ route('doctor.show', 5) }}">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Maftuna Eshonhujayeva</h5>
                            <p class="text-primary">Tish shifokori</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <a href="{{ route('doctor.show', 4) }}">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Doctor Eshchanov</h5>
                            <p class="text-primary">Ginikolog</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <a href="{{ route('doctor.show', 3) }}">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Xurmatoy Xamroqulova</h5>
                            <p class="text-primary">Ginikolog</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <a href="{{ route('doctor.show', 2) }}">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Farg'onalik Tabib</h5>
                            <p class="text-primary">HA Otam</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Qabulga yozilish</p>
                    <h1 class="mb-4">Shifokor bilan uchrashuvni hoziroq belgilang!</h1>
                    <p class="mb-4">Sog‘lig‘ingiz muhim — vaqtni boy bermang. MediHelp platformasi orqali sizga mos shifokorni tanlang, uchrashuv vaqtini belgilang va sifatli tibbiy maslahat oling. Bizning tajribali mutaxassislarimiz sizni kutmoqda.</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Bizga hoziroq qo‘ng‘iroq qiling</p>
                            <h5 class="mb-0">+998942551397</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Yoki bizga yozing</p>
                            <h5 class="mb-0">Raxmatullayev@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choose Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                               class="form-control border-0 datetimepicker-input"
                                               placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                               class="form-control border-0 datetimepicker-input"
                                               placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Yuborish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Sharhlar</p>
                <h1>Bemorlarning fikrlari!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>“MediHelp orqali shifokor bilan bog‘lanish juda qulay ekan. Yurak sohasidagi savolimga qisqa fursatda aniq javob oldim. Eng yoqqan jihati — platformadagi tartib va ishonchlilik.”</p>
                        <h5 class="mb-1">Dilnoza Karimova</h5>
                        <span class="fst-italic">28 yosh, Toshkent sh.</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>“Ish bilan band bo‘lganim sabab shifokor huzuriga bora olmasdim. MediHelp menga haqiqiy yordam bo‘ldi. Sun’iy intellekt chat orqali dastlabki maslahat olib, keyin shifokor bilan muloqot qildim — juda foydali xizmat.”</p>
                        <h5 class="mb-1">Jamshid Murodov</h5>
                        <span class="fst-italic">35 yosh, Navoiy viloyati</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>“Tibbiy maslahat olish hech qachon bunchalik oson bo‘lmagan. Shifokorlar mulohazali, javoblari aniq va tushunarli. Fikr qoldirish imkoniyati ham yoqdi — xizmatlar haqidagi fikrimizni bildirish orqali tizim yanada yaxshilanmoqda.”</p>
                        <h5 class="mb-1">Sarvar Abdullayev</h5>
                        <span class="fst-italic">41 yosh, Samarqand sh.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


</x-main>
