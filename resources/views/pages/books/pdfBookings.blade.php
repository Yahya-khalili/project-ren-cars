<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Information</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            font-size: 12px;
            text-align: left;
        }
        td {
            font-size: 12px;
        }
        /* Specific Styles */
        .text-center {
            text-align: center;
        }
        .text-bold {
            font-weight: bold;
        }
        .bg-gray {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Booking Information</h1>
    <table>
        <thead>
            <tr>
                <th class="px-6 py-3">ID</th>
                <th class="px-6 py-3">User</th>
                <th class="px-6 py-3">Car</th>
                <th class="px-6 py-3">Pick-up Date</th>
                <th class="px-6 py-3">Return Date</th>
                <th class="px-6 py-3">Pick-up & Return Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->user->fullName }}</td>
                <td>{{ $book->car->nameCar ?? '--' }}</td>
                <td>{{ $book->pick_up_date }}</td>
                <td>{{ $book->return_date }}</td>
                <td>{{ $book->pick_up_and_return_location }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
