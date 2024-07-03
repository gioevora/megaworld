<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width:450px;">
            <div class="card-heder" style="background-color:#1674C1; padding:30px;">
                <img src="/img/logo-bottom_9b52579ef0df2bf9f180fd94502b91b2.png" alt="" width="100%">
            </div>
            <div class="card-body">
                <div class="content">
                    <h5><strong> Subject: </strong>Inquiry Regarding Properties</h5>
                    <h5><strong>Name:</strong>{{$data['name']}}</h5>
                    <h5><strong>Email:</strong>{{$data['email']}}</h5>
                    <h6 class="pt-2">Dear: Management</h6>
                    <p>{{$data['message']}}</p>
                    <hr>
                    <h6> <strong>Properties:</strong>{{$data['properties']}}</h6>
                    <h6> <strong>Location:</strong>  {{$data['location']}}</h6>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>