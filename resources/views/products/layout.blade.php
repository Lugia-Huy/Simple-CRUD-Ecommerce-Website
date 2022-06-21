<!DOCTYPE html>
<html>

<head>
    <title>Management Clothes System</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="page-header" style="background: url('/images/background.png'); background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Management Clothes System</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>