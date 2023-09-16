<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JADDA-API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container">
        <span class="navbar-brand mb-0 h1"><i class="bi bi-book"></i> JADDA-API</span>
    </div>
</nav>

<div class="container">
    <div class="mt-4">
        <h5>Base URL</h5>
        <div class="row g-2">
            <div class="card col-md-12">
                <div class="card-body text-center">
                    <a href="#" class="fw-bold">{{ \Illuminate\Support\Facades\URL::to('/api/') }}</a>
                </div>
            </div>
        </div>
    </div>
    {{--  Auth  --}}
    <div class="mt-4">
        <h5>Authentication</h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login <span class="badge bg-primary">POST</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/login</div>
                        <pre class="card">
<code class="language-json">
{
    "email": EMAIL,
    "password": PASSWORD
}
</code>
                        </pre>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": {
        "user": {
            "name": "Test User 123",
            "email": "test123@gmail.com",
            "avatar": "http://localhost:8000/assets/avatar/5.png"
        },
        "token": "10|laravel_sanctum_jYnuff4ds5sSU3ED3rh0cYNjcz3WiwKX5mdgKZLqce9b1897"
    }
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register <span class="badge bg-primary">POST</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/register</div>
                        <pre class="card">
<code class="language-json">
{
    "name": NAME,
    "email": EMAIL,
    "password": PASSWORD
}
</code>
                        </pre>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": "Registrasi berhasil",
    "data": null
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Get user detail  --}}
    <div class="mt-4">
        <h5>User <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get User Detail <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/user</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": {
        "name": "Test User 123",
        "email": "test123@gmail.com",
        "avatar": "http://localhost:8000/assets/avatar/5.png",
        "ranking": 1,
        "point": 300,
        "task_complete": 3
    }
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Add Point User  --}}
    <div class="mt-4">
        <h5>Point <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Add Point User <span class="badge bg-primary">POST</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/point</div>
                        <pre class="card">
<code class="language-json">
{
    "value": false,
}
</code>
                        </pre>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": "Point berhasil ditambahkan",
    "data": null
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get Leaderboard <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/leaderboard</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": [
        {
            "rangking": 1,
            "user_id": 4,
            "name": "Test User 123",
            "point": "500"
        }
    ]
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Tajweed  --}}
    <div class="mt-4">
        <h5>Tajweed <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get All Tajweeds <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/tajweeds</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": [
        {
            "id": 3,
            "title": "Test 1",
            "icon": "http://localhost:8000/storage/images/mQlZXxJlo4OmptQj9VBv1dMyIKuZZmqoU1MSUkxA.png",
            "contents": [
                {
                    "id": 2,
                    "name": "Test 2",
                    "description": "Lorem ipsum dolor",
                    "example_url": "http://localhost:8000/storage/images/NT8tbDMadBYFweMHye6CMGq0oFnSTfs4A6Yz6Wf3.png",
                    "tajweed_letter_url": "http://localhost:8000/storage/images/ypUPDv99eN114mEK7gRGSDlChdGhhRIrYiesYhLe.png",
                    "audio_url": "http://localhost:8000/storage/audios/T9YZCOOHxRfmlgFqvAGW20eiB71HvwR9xIRbI6bW.mp3"
                }
            ]
        }
    ]
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get Tajweed by ID <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/tajweed/{id}</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": {
        "id": 2,
        "name": "Test 2",
        "description": "Lorem ipsum dolor",
        "example_url": "http://localhost:8000/storage/images/NT8tbDMadBYFweMHye6CMGq0oFnSTfs4A6Yz6Wf3.png",
        "tajweed_letter_url": "http://localhost:8000/storage/images/ypUPDv99eN114mEK7gRGSDlChdGhhRIrYiesYhLe.png",
        "audio_url": "http://localhost:8000/storage/audios/T9YZCOOHxRfmlgFqvAGW20eiB71HvwR9xIRbI6bW.mp3"
    }
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Tafsir  --}}
    <div class="mt-4">
        <h5>Tafsir <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get All Tafsir <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/tafsirs</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": [
        {
            "id": 1,
            "image": "http://localhost:8000/storage/images/971Yz11FMDl3blDooQi3F6kAHJdcukgsztMGCqMj.png"
        }
    ]
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Al-Qur'an  --}}
    <div class="mt-4">
        <h5>Al-Qur'an <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get List Surah <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/surah</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": [
         {
            "id": 1,
            "short_name": "الفاتحة",
            "name": "Al-Fatihah",
            "revelation": "Makkiyyah",
            "ayat": 7,
            "translation": "Pembukaan"
        },
    ]
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Get Surah by Id <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/surah/{surah_id}</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": {
        "id": 1,
        "ayat": 7,
        "short_name": "الفاتحة",
        "name": "Al-Fatihah",
        "revelation": "Makkiyyah",
        "verses": [
            {
                "number": 1,
                "text_arab": "﻿بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ",
                "translation": "Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.",
                "audio": "https://cdn.islamic.network/quran/audio/128/ar.alafasy/1.mp3"
            }
        ]
    }
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Hadist  --}}
    <div class="mt-4">
        <h5>Hadist <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get List Hadist Abu Daud (20) <span class="badge bg-primary">GET</span>
                    </div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/hadist</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": {
        "name": "HR. Abu Daud",
        "id": "abu-daud",
        "available": 4419,
        "requested": 20,
        "hadiths": [
            {
                "number": 1,
                "arab": "حَدَّثَنَا عَبْدُ اللَّهِ بْنُ مَسْلَمَةَ بْنِ قَعْنَبٍ الْقَعْنَبِيُّ حَدَّثَنَا عَبْدُ الْعَزِيزِ يَعْنِي ابْنَ مُحَمَّدٍ عَنْ مُحَمَّدٍ يَعْنِي ابْنَ عَمْرٍو عَنْ أَبِي سَلَمَةَ عَنْ الْمُغِيرَةِ بْنِ شُعْبَةَأَنَّ النَّبِيَّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ كَانَ إِذَا ذَهَبَ الْمَذْهَبَ أَبْعَدَ",
                "id": "Telah menceritakan kepada kami [Abdullah bin Maslamah bin Qa'nab al Qa'nabi] telah menceritakan kepada kami [Abdul Aziz yakni bin Muhammad] dari [Muhammad yakni bin Amru] dari [Abu Salamah] dari [Al Mughirah bin Syu'bah] bahwasanya Nabi shallallahu 'alaihi wasallam apabila hendak pergi untuk buang hajat, maka beliau menjauh."
            }
        ]
    }
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Waktu Sholat  --}}
    <div class="mt-4">
        <h5>Jadwal Waktu Sholat <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get Jadwal Sholat by Lokasi <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/jadwal-sholat/{city}</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": {
        "national_date": "Jumat, 15 September 2023",
        "hijriah_date": "14 Ṣafar 1436H",
        "times": {
            "Fajr": "04:17",
            "Sunrise": "05:32",
            "Dhuhr": "11:34",
            "Asr": "14:48",
            "Sunset": "17:36",
            "Maghrib": "17:36",
            "Isha": "19:06",
            "Imsak": "04:07",
            "Midnight": "23:34",
            "Firstthird": "21:34",
            "Lastthird": "01:33"
        }
    }
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--   Sholat  --}}
    <div class="mt-4">
        <h5>Sholat <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get List Gerakan Sholat <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/sholat</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": [
        {
            "id": 1,
            "title": "Takbiratul Ikram",
            "image_url": "http://localhost:8000/storage/images/nxUxD2ifyBfv3XRtqB0O0hazhXQ8m4OyaJ1tO0Y9.png",
            "description": "Lorem ipsum dolor",
            "movement_angle": {
                "left_wrist": 45,
                "left_elbow": 0,
                "left_shoulder": 45,
                "left_hip": 0,
                "left_knee": 45,
                "left_ankle": 0,
                "right_wrist": 0,
                "right_elbow": 0,
                "right_shoulder": 0,
                "right_hip": 0,
                "right_knee": 0,
                "right_ankle": 0
            }
        }
    ]
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--   Video  --}}
    <div class="mt-4">
        <h5>Video <span class="badge bg-danger">WITH TOKEN</span></h5>
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Get List Video Short <span class="badge bg-primary">GET</span></div>
                    <div class="card-body">
                        <p>Request:</p>
                        <div class="border rounded p-1 mb-3 border-warning fw-bold">/videos</div>
                        <p>Response:</p>
                        <pre class="card">
<code class="language-json">
{
    "error": false,
    "message": null,
    "data": [
        {
            "id": 4,
            "title": "TEST 1",
            "info": "Youtube",
            "video_url": "http://localhost:8000/storage/videos/ExtcLN5CSaMsqxu335Gr5wKhYQJ6FPxH9mvWj7bD.mp4"
        }
    ]
}
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-json.min.js"></script>
<script>
    Prism.highlightAll();
</script>
</body>
</html>
