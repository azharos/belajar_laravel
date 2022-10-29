<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <form action="{{ url('/') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />


            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Penulis</label>
                <input type="text" class="form-control" name="nama_penulis">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>