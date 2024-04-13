<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars List</title>
    <style>
        /* Add your custom PDF styles here */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
            color: #555;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Cars List</h1>
    <table>
        <!-- Table Header -->
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Type</th>
                <th scope="col">Car Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody>
            @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->type }}</td>
                <td>{{ $car->nameCar }}</td>
                <td>{{ $car->brand ? $car->brand->marque : '' }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->description}}</td>
                <td><img width="130px"  height="80" src={{"storage/$car->image"}} alt=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
