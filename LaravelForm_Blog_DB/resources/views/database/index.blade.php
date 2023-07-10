<!DOCTYPE html>
<html>
<head>
    <title>All Data</title>
</head>
<body>
    @foreach($allData as $tableName => $tableData)
        <h1>{{ $tableName }}</h1>

        @foreach($tableData as $data)
            <div>
                @foreach($data as $key => $value)
                    <p>{{ $key }}: {{ $value }}</p>
                @endforeach
            </div>
        @endforeach
    @endforeach
</body>
</html>
