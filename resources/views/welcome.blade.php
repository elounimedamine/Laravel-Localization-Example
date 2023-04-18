<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Localization </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lustria&family=PT+Sans+Narrow:wght@400;700&display=swap"
        rel="stylesheet">

<body>
    <div class="container-fluid">
        <div class="row border mt-2 ml-1 mr-1 d-flex align-items-center shadow">
            <div class="col-md-3 p-2 text-left">
                <img src="{{ asset('header-l8.png') }}" height="80px">
            </div>
            <div class="col-md-6 text-center">
                <h2 class=" first-title">Laravel Localization </h2>
            </div>
            <div class="col-md-3 p-2 text-right">
                <img src="{{ asset('header.png') }}" alt="" height="80px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <div class="btn-group mt-5 mb-2 " role="group" aria-label="Basic example">
                    <a href="{{ route('switch_language', 'en') }}" class="btn btn-primary ml-1 mr-1">En</a>
                    <a href="{{ route('switch_language', 'ar') }}" class="btn btn-primary ml-1 mr-1">عربي</a>
                    <a href="{{ route('switch_language', 'fr') }}" class="btn btn-primary ml-1 mr-1">Fr</a>
                </div>
                <div class="card shadow mt-3">
                    <h1>
                        {{ __('salutation') }}
                    </h1>
                    <h2>
                        {{ __('object') }}
                    </h2>
                    <h2>
                        {{ __('result') }}
                    </h2>
                </div>

            </div>
        </div>
    </div>
</body>
</head>

</html>
