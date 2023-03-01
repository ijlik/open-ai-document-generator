<!DOCTYPE html>
<html>
<head>
    <title>Article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
    h2 {
        text-align: center;
        font-size: 22px;
        margin-bottom: 50px;
    }

    .section {
        background: #fff;
    }
</style>
<body>
<div class="container">

    <h2>{{ $title }}</h2>

    <div class="main-div">
        <p style="text-align: justify; font-family: 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! $article['opening'] !!}</p>
        <p style="text-align: justify; font-family: 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! $article['content'] !!}</p>
        <p style="text-align: justify; font-family: 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! $article['conclusion'] !!}</p>
        <p style="text-align: justify; font-family: 'Times New Roman'">Poin-poin penting dalam {{ $title }} antara lain :</p>
        <p style="text-align: justify; font-family: 'Times New Roman'">{!! $article['key_point'] !!}</p>
    </div>

</div>
</body>
</html>
