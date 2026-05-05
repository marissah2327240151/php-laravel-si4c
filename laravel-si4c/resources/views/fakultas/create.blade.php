<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6F" crossorigin="anonymous">
</head>

<body>
    <form action="/fakultas" method="post">
        @csrf
        <div class="m-3">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
            <input type="text" name="nama_fakultas" id="nama_fakultas" required>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>