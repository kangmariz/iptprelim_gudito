<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
</head>
<body>
    <center>
    <h1>Picture Page</h1>
    <a href="{{url('/')}}">Home</a> <a href="{{url('/itempage')}}">| Item Page</a> | Picture Page
    </center>
    <div class="image">
        <img src="{{ asset('image/366801539_603731075306291_46841324008653644_n.jpg') }}">
        <img src="{{ asset('image/sunset-silhouettes-trees-mountains-generative-ai.jpg') }}" >
        <img src="{{ asset('image/space-background-realistic-starry-night-cosmos-shining-stars-milky-way-stardust-color-galaxy.jpg') }}">
    </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<style>
.image img{
    width: 20%;
    display: flex;
    margin: 5%;
    margin-top: 8%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease-in-out, box-shadow 0.3s ease;
    align-items: center;
}
.image {
    display: flex;
    justify-content: center;
    padding: 10px;
}
.image img:hover{
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}
</style>
