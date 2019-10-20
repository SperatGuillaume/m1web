<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Countries</h1>

<ul class="countries"></ul>




<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

<script type="text/javascript">

    $( document ).ready(function () {




        $.getJSON('http://localhost:8001/countries', function(data) {
            $.each(data, function(i, item) {
                console.log(data[i].countries);
                $.each(data[i].countries,function (i, item) {
                    $('.countries').append('<li>'+item.name+' : '+item.city.name+'</li>');
                })
            });
        });
    });
</script>

</body>
</html>
