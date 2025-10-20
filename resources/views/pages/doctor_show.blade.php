<x-main title="Shifokor">
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Shifokorlar</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('main')}}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ $doctor->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container py-5">
        {{-- Shifokor profili --}}
        <div class="card shadow-lg border-0 mb-4">
            <div class="card-body d-flex align-items-center">
                <img src="{{ asset($doctor->doctorProfile->avatar_path ?? 'avatars/default.png') }}"
                     alt="Doctor Image"
                     class="rounded-circle me-4"
                     width="130" height="130">

                <div>
                    <h3 class="fw-bold mb-1">{{ $doctor->name }}</h3>
                    <p class="mb-1 text-muted">{{ $doctor->doctorProfile->specialty->name ?? 'Noma’lum soha' }}</p>
                    <p class="mb-1">🏢 {{ $doctor->doctorProfile->workplace ?? 'Ma’lumot yo‘q' }}</p>
                    <p class="mb-1">🧑‍⚕️ Tajriba: {{ $doctor->doctorProfile->experience_years ?? 0 }} yil</p>
                    <p class="mb-2">📜 {{ $doctor->doctorProfile->bio ?? 'Biografiya kiritilmagan' }}</p>

                    {{-- Ijtimoiy tarmoqlar --}}
                    <div>
                        @if(isset($doctor->doctorProfile->social_links['facebook']))
                            <a href="{{ $doctor->doctorProfile->social_links['facebook'] }}" target="_blank" class="me-2">
                                <i class="fab fa-facebook text-primary fs-4"></i>
                            </a>
                        @endif
                        @if(isset($doctor->doctorProfile->social_links['instagram']))
                            <a href="{{ $doctor->doctorProfile->social_links['instagram'] }}" target="_blank" class="me-2">
                                <i class="fab fa-instagram text-danger fs-4"></i>
                            </a>
                        @endif
                    </div>

                    {{-- Chat tugmasi --}}
                    <a href="{{ route('chat.show', $doctor->id) }}" class="btn btn-success mt-3">
                        💬 Chatga o‘tish
                    </a>
                </div>
            </div>
        </div>

        {{-- Sharhlar ro‘yxati --}}
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white fw-bold">
                Sharhlar ({{ $doctor->reviews->count() }})
            </div>
            <div class="card-body">
                @forelse ($doctor->reviews as $review)
                    <div class="mb-3 border-bottom pb-2">
                        <strong>{{ $review->patient->name }}</strong>
                        <span class="text-warning">
                        @for($i = 1; $i <= 5; $i++)
                                <i class="fa{{ $i <= $review->rating ? 's' : 'r' }} fa-star"></i>
                            @endfor
                    </span>
                        <p class="mb-0">{{ $review->comment }}</p>
                        <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                    </div>
                @empty
                    <p class="text-muted">Hozircha sharhlar yo‘q.</p>
                @endforelse
            </div>
        </div>

        {{-- Sharh yozish formasi --}}
        <div class="card shadow-sm border-0">
            <div class="card-header bg-light fw-bold">
                Sharh yozish
            </div>
            <div class="card-body">
                @auth
                    <form action="{{route('reviews.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">

                        <div class="mb-3">
                            <label for="rating" class="form-label">Baholash (1–5)</label>
                            <select name="rating" id="rating" class="form-select" required>
                                <option value="">Tanlang...</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Fikr yoki izoh</label>
                            <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Yuborish</button>
                    </form>
                @else
                    <p class="text-muted">Sharh yozish uchun <a href="{{ route('login') }}">tizimga kiring</a>.</p>
                @endauth
            </div>
        </div>
    </div>
</x-main>
