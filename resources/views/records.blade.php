<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Room</title>
   
</head>
<body>
    <div class="container">
        <h1>📋 Records</h1>
        <p>This is the Records Room</p>
        
        <div>
            <h2>List of Records:</h2>
            <ul>
                @foreach($listofRecords as $record)
                    <li>
                        <strong>{{ $record['name'] }}</strong> - ID: {{ $record['id'] }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>