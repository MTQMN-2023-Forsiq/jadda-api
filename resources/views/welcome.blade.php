<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JADDA-API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container">
        <span class="navbar-brand mb-0 h1"><i class="bi bi-book"></i> JADDA-API</span>
    </div>
</nav>

<div class="container mb-5">
    <div class="mt-4">
        <h5>Base URL</h5>
        <div class="row g-2">
            <div class="card col-md-12">
                <div class="card-body text-center">
                    <a href="#">{{ \Illuminate\Support\Facades\URL::to('/api/') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{--  Auth  --}}
    <div class="mt-4 mb-5">
        <h5>Authentication</h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login <span class="badge bg-primary">POST</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/login</div>
                        <img src="{{ asset('assets/api/login.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register <span class="badge bg-primary">POST</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/register</div>
                        <img src="{{ asset('assets/api/login.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Get user detail  --}}
    <div class="mt-4 mb-5">
        <h5>User <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get User Detail <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/user</div>
                        <img src="{{ asset('assets/api/user-detail.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Add Point User  --}}
    <div class="mt-4 mb-5">
        <h5>Point <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Add Point User <span class="badge bg-primary">POST</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/point</div>
                        <img src="{{ asset('assets/api/add-point.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get Leaderboard <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/leaderboard</div>
                        <img src="{{ asset('assets/api/leaderboard.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Tajweed  --}}
    <div class="mt-4">
        <h5>Tajweed</h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get All Tajweeds <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/tajweeds</div>
                        <a href="{{ route('get.all.tajweed') }}" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get Tajweed by ID <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/tajweed/{id}</div>
                        <a href="{{ route('get.tajweed.by.id', 1) }}" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Tafsir  --}}
    <div class="mt-4">
        <h5>Tafsir</h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get All Tafsir <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/tafsirs</div>
                        <a href="{{ route('get.all.tafsir') }}" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Al-Qur'an  --}}
    <hr>
    <div class="mt-4">
        <h5>Al-Qur'an</h5>
        <div class="row g-2">
            <div class="col-md-12">
                <h6>Base URL</h6>
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#">https://api.quran.gading.dev</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Get List Surah</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/surah</div>
                        <a href="https://api.quran.gading.dev/surah" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Get Surah by Id</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/surah/{surah_id}</div>
                        <a href="https://api.quran.gading.dev/surah/1" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Get Juz By Id</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/juz/{juz_id}</div>
                        <a href="https://api.quran.gading.dev/juz/1" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Hadist  --}}
    <div class="mt-4">
        <h5>Hadist</h5>
        <div class="row g-2">
            <div class="col-md-12">
                <h6>Base URL</h6>
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#">https://api.hadith.gading.dev</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get List Hadist Abu Daud (20) <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/books/abu-daud?range=1-20</div>
                        <a href="https://api.hadith.gading.dev/books/abu-daud?range=1-20" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Waktu Sholat  --}}
    <div class="mt-4">
        <h5>Jadwal Waktu Sholat</h5>
        <div class="row g-2">
            <div class="col-md-12">
                <h6>Base URL</h6>
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#">https://api.aladhan.com/v1/</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get Jadwal Sholat by Lokasi <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/timingsByCity/[DATE]?city=[CITY_NAME]&country=Indonesia&method=8</div>
                        <a href="https://api.aladhan.com/v1/timingsByCity/24-08-2023?city=Wonosobo&country=Indonesia&method=8" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-play-circle"></i> Run
                            Example</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
