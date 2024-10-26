<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Записи</title>
</head>

<body>
    <h1>Записи</h1>
    <div>
        <table>
            <tr>
                <td>id</td>
                <td>Запись</td>
                <td>Дата</td>
            </tr>
            @foreach($records as $records)
            <tr>
                <td>{{record}}</td>
                <td>{{useful}}</td>
            </tr>
            @endforeach

        </table>

    </div>
</body>

</html>