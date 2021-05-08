<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Youtube API Test</title>
</head>

<body class="mb-32">
    <div class="container">
        <div class="d-flex flex-column justify-content-center mt-5">
            <div class="d-flex flex-column align-items-center mb-3">
                <img src="{{ !$thumbnail ? 'https://icons-for-free.com/iconfiles/png/512/user+icon-1320184287928049364.png' : $thumbnail }}" style="width: 200px; height: 200px; border-radius: 50%;" />
                
                {{-- @if($code == null)
                <a href="{{ $authUrl }}" class="mt-3">
                    <button class="btn btn-success">Login</button>
                </a>
                @else
                <h3 class="mt-3">{{ $channelName }}</h3>
                @endif --}}
                <small class="mt-3">Youtube Channel</small>
                <h3>{{ $channelName }}</h3>
                <a href="https://www.youtube.com/channel/UCY47kwwJXNRYcen0zGORKsA" target="_blank">
                    <button class="btn btn-success">Buka Youtube Channel</button>
                </a>
            </div>
            <hr/>
            <h2 class="text-center mt-3">Statistik</h2>
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column align-items-center px-2">
                        <h6>Subscriber</h6>
                        <h3>{{ $subscribers }}</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center px-2">
                        <h6>Jumlah Video</h6>
                        <h3>{{ $totalVideos }}</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center px-2">
                        <h6>Jumlah View</h6>
                        <h3>{{ $totalViews }}</h3>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <h2 class="text-center">Video</h2>
                @forelse($videos as $video)
                    <div class="col">
                        <a href="{{ $video['videoUrl'] }}" target="_blank" style="text-decoration: none !important;">
                            <div class="card" style="height: 360px; width: 480px;">
                                <img src="{{ $video['thumbnail'] }}" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: black;">{!! $video['title'] !!}</h5>
                                    <a href="#" class="btn btn-sm btn-success">Lihat Video</a>
                                </div>
                                <div class="card-footer text-muted">
                                    {{ date('d-m-Y H:i:s', strtotime($video['publishedAt'])) }}
                                </div>
                            </div>
                        </a>
                        {{-- <img src="{{ $video['thumbnail'] }}" style="height: 360px; width: 480px;" /> --}}
                    </div>
                @empty
                    <p>Tidak Ada Video</p>
                @endforelse
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>
