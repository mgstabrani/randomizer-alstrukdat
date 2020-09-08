<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Randomizer NIM Alstrukdat K-02</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(216, 197, 22);
                color: #636b6f;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="fixed-top mb-5">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: grey">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item col">
                        <a style="color: white">Teknik Informatika ITB</a>
                    </li>
                </ul>
            </nav>
        </div>
        <br><br>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="card text-center">
                    <div class="card-header">
                        Algoritma dan Struktur Data
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{$mhs[1]}}</h5>
                    <p class="card-text">{{$mhs[2]}}</p>
                    <a href="/" class="btn btn-primary">Randomkeun</a>
                    </div>
                    <div class="card-footer text-muted">
                        IF2110 K-02
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
