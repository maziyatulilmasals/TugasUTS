<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @extends('layout.app')
    @section('content')
        <br>
        <div class="container">
            <h1 class="text-center">My Profile</h1>
            <p class="text-center">Nama : Maziyatul Ilma Salsabila</p>
            <p class="text-center">NIM : 1204200122</p>
            <p class="text-center">Program Studi : Sistem Informasi</p>
            <br>
            <h1 class="text-center">Skills</h1>
            <label for="">Editing</label>
            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bg-success" style="width: 25%">25%</div>
            </div>
            <br>
            <label for="">Copy Written</label>
            <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bg-info text-dark" style="width: 50%">50%</div>
            </div>
            <br>
            <label for="">Accounting</label>
            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
            </div>
            <br>
            <label for="">Communicating</label>
            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bg-danger" style="width: 100%">100%</div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        </div>
        </div>
        </div>
    @endsection
    @vite('resources/js/app.js')
</body>

</html>
