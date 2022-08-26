<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>question</td>
            <td>answer</td>
            <td>value</td>
            <td>category</td>
        </tr
        @foreach ($collections as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->question}}</td>
            <td>{{$item->answer}}</td>
            <td>10</td>
            <td>{{$item->category->title}}</td>
        </tr>
        @endforeach>
    </table>
</body>
</html>
