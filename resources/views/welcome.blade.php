<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        body {
            background-color: #eee
        }

        .card {
            border: none;
            border-radius: 10px
        }

        .c-details span {
            font-weight: 300;
            font-size: 13px
        }

        .text2 {
            color: #a5aec0
        }

        .form-control::placeholder {
            font-size: 0.95rem;
            color: #aaa;
            font-style: italic;
        }

        .form-control:focus {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-3">



        <div class="row mb-5">
            <div class="col-lg-12 mx-auto">
                <form action="">
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm">
                        <input type="search" placeholder="Search here..." id="search"
                            aria-describedby="button-addon1" class="form-control border-0 bg-light">
                    </div>
                </form>
            </div>
        </div>

        <div class="row" id="data-row">
            @foreach (@$data as $d)
                <div class="col-md-4 data-col my-2">
                    <div class="card p-3 mb-2 ">
                        <h3 class="heading c-details">{{ $d->name }}</h3>
                        <div class="ms-2 mt-2">
                            <h6>{{ $d->designation }}</h6>
                            <div class="mt-2 text2">{{ $d->department }} Department</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>




    </div>
</body>

<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#data-row .data-col").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</html>
