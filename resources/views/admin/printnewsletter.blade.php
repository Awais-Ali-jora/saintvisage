<!DOCTYPE html>
<html>
<head>
    <title>Newsletter</title>
    <style>
.Table-Normal {
    position: relative;
    //display: block;
    margin: 10px auto;
    padding: 0;
    width: 100%;
    height: auto;
    border-collapse: collapse;
    text-align: center;
}

.Table-Normal thead tr {
    background-color: black;
    font-weight: bold;
    color: white;
}

.Table-Normal tr {
    margin: 0;
    padding: 0;
    border: 0;
    border: 1px solid #999;
    width: 100%;
}

.Table-Normal tr td {
    margin: 0;
    padding: 4px 8px;
    border: 0;
    border: 1px solid #999;
}

.Table-Normal tbody tr:nth-child(2) {
    background-color: #EEE;
}
    </style>
</head>
<body>
<div>
    <table id="top-leader" class="Table-Normal">
        <thead class="flip-content">
            <tr>
                <th>Email</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsletters as $message)
            <tr>
                <td>{{ $message->email }}</td>
                <td>{{ $message->country }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>