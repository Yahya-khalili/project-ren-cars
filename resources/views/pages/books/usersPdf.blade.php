<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Car Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    .invoice {
      margin: auto;
      max-width: 800px;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
    .invoice-header {
      text-align: center;
      margin-bottom: 20px;
    }
    .invoice-header h1 {
      margin: 5px 0;
    }
    .invoice-info {
      margin-bottom: 20px;
    }
    .invoice-info table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 10px;
    }
    .invoice-info th, .invoice-info td {
      border: 1px solid #ccc;
      padding: 8px;
    }
    .invoice-total {
      margin-top: 20px;
      text-align: right;
    }
  </style>
</head>
<body>
  <div class="invoice">
    <div class="invoice-header">
      <h1>Rental Car Invoice</h1>
    </div>
    <div class="invoice-info">
      <table>
        <tr>
          <th>Name:</th>
          <td>{{ $booking->user->fullName }}</td>
        </tr>
        <tr>
          <th>Email:</th>
          <td>{{ $booking->user->email }}</td>
        </tr>
        <tr>
          <th>Phone:</th>
          <td>{{$booking->user->phone }}</td>
        </tr>
        <tr>
          <th>Car name:</th>
          <td>{{ $booking->car->nameCar }}</td>
        </tr>
        <tr>
          <th>Car type:</th>
          <td>{{ $booking->car->type }}</td>
        </tr>
        <tr>
          <th>Car price:</th>
          <td>{{ $booking->car->price }}</td>
        </tr>
        <tr>
          <th>Pick-up Date:</th>
          <td>{{ $booking->pick_up_date }}</td>
        </tr>
        <tr>
          <th>Return Date:</th>
          <td>{{ $booking->return_date }}</td>
        </tr>
        <tr>
          <th>Return Location:</th>
          <td>{{ $booking->pick_up_and_return_location }}</td>
        </tr>
        
      </table>
    </div>
    <div class="invoice-total">
      <strong>Total Amount:</strong> ${{ $booking->car->price }}
    </div>
  </div>
</body>
</html>
