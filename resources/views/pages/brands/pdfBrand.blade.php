<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-transform: uppercase;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Brand List</h1>
    <table>
        <!-- Table Header -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody>
            @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->marque }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // You can add JavaScript here if needed
    </script>
</body>
</html>
