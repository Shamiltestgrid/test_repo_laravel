<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All tickets</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Styles -->
    <style>

    </style>
</head>

<body>

    <div class="container text-center pt-5">
        <div class="row">
            <div class="col text-start mt-3">
                <p>Total tickets: {{ count($tickets) }} </p>
                <ul class="list-group">
                    @foreach ($tickets as $ticket)
                        <li class="list-group-item"> #{{ $ticket->id }} {{ $ticket->email }} -> {{ $ticket->text }}
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col text-start">
                <h3>Make a new ticket</h3>
                <form class="mt-3" action="/create" method="POST">
                    @csrf
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name="email">
                    <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3" name="message"
                        placeholder="Message"></textarea>

                    <button type="submit" class="btn btn-primary mt-2">Send</button>

                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
