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

<body>
    <div class="container">
        <div class="d-flex flex-column justify-content-center mt-5">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ !$thumbnail ? 'https://icons-for-free.com/iconfiles/png/512/user+icon-1320184287928049364.png' : $thumbnail }}" style="width: 200px; height: 200px; border-radius: 50%;" />
                
                {{-- @if($code == null)
                <a href="{{ $authUrl }}" class="mt-3">
                    <button class="btn btn-success">Login</button>
                </a>
                @else
                <h3 class="mt-3">{{ $channelName }}</h3>
                @endif --}}

                <h3 class="mt-3">{{ $channelName }}</h3>
            </div>
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column align-items-center px-2">
                        <h6>Subscribers</h6>
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
                {{-- <div class="d-flex flex-column align-items-center mr-15">
                    <h4>Subscribers</h4>
                    <h1>{{ $subscribers }}</h1>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h4>Subscribers</h4>
                    <h1>{{ $subscribers }}</h1>
                </div> --}}
                {{-- <div class="row">
                    <div class="col-4 text-center mr-15">
                        <h4>Subscribers</h4>
                        <h1>{{ $subscribers }}</h1>
                    </div>
                    <div class="col-4 text-center">
                        <h4>Subscribers</h4>
                        <h1>{{ $subscribers }}</h1>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>
