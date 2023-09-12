<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QIVE-API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container">
        <span class="navbar-brand mb-0 h1">QIVE-API</span>
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
    {{--  Tajweed  --}}
    <div class="mt-4">
        <h5>Tajweed</h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get All Tajweeds</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/tajweeds</div>
                        <a href="{{ route('get.all.tajweed') }}" target="_blank" class="btn btn-primary btn-sm">Run
                            Example</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get Tajweed by ID</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/tajweed/{id}</div>
                        <a href="{{ route('get.tajweed.by.id', 1) }}" target="_blank" class="btn btn-primary btn-sm">Run
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
                    <div class="card-header">Get All Tafsir</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/tafsirs</div>
                        <a href="{{ route('get.all.tafsir') }}" target="_blank" class="btn btn-primary btn-sm">Run
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
                        <a href="https://api.quran.gading.dev/surah" target="_blank" class="btn btn-primary btn-sm">Run
                            Example</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Get Surah by Id</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/surah/{surah_id}</div>
                        <a href="https://api.quran.gading.dev/surah/1" target="_blank" class="btn btn-primary btn-sm">Run
                            Example</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Get Juz By Id</div>
                    <div class="card-body">
                        <div class="border rounded p-1 mb-3">/juz/{juz_id}</div>
                        <a href="https://api.quran.gading.dev/juz/1" target="_blank" class="btn btn-primary btn-sm">Run
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
