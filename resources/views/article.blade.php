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
    }

    .section {
        background: #fff;
    }
</style>
<body>
<div class="container">

    <h2>{{ $title }}</h2>

    <div class="main-div">
        <p style="text-align: justify; font-family: 'Times New Roman'">{!! nl2br($article['content']) !!}</p>
    </div>

</div>
</body>
</html>
