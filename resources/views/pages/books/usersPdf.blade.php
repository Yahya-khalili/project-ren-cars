<div class="bg-white rounded-lg shadow-lg px-8 py-10 max-w-xl mx-auto">
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center">
            <div class="text-gray-700 font-semibold text-lg">Drive With Yahya</div>
        </div>
        <div class="text-gray-700">
            <div class="font-bold text-xl mb-2">INVOICE</div>
            <div class="text-sm">Date: <span class="font-semibold">{{$date}}</span></div>
            <div class="text-sm">Invoice #: <span class="font-semibold">{{$invoiceId}}</span></div>
        </div><br>
    </div>
    <div class="border-b border-gray-300 pb-8 mb-8">
        <h2 class="text-2xl font-bold mb-4">Bill To:</h2>
        <div class="text-gray-700 mb-2">{{$booking->user->fullName}}</div>
        <div class="text-gray-700 mb-2">{{$booking->user->phone}}</div>
        <div class="text-gray-700">{{$booking->user->email}}</div>
    </div><br>
    <div class="overflow-x-auto">
        <table class="w-full text-left mb-8">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold uppercase border">Car name:</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold uppercase border">Car type:</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold uppercase border">Car price:</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold uppercase border">Pick-up Date:</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold uppercase border">Return Date:</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold uppercase border">Return Location:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 border">{{$booking->car->nameCar}}</td>
                    <td class="px-4 py-2 border">{{$booking->car->type}}</td>
                    <td class="px-4 py-2 border">${{$booking->car->price}}</td>
                    <td class="px-4 py-2 border">{{$booking->pick_up_date}}</td>
                    <td class="px-4 py-2 border">{{$booking->return_date}}</td>
                    <td class="px-4 py-2 border">{{$booking->pick_up_and_return_location}}</td>
                </tr>
            </tbody>
        </table>
    </div><br>
    <div class="flex justify-end mb-8">
        <div class="text-gray-700 mr-2">Total:</div>
        <div class="text-gray-700 font-bold text-xl">${{$booking->car->price}}</div>
    </div><br>
    <div class="border-t border-gray-300 pt-8 mb-8">
        <div class="text-gray-700 mb-2">Payment is due within 30 days. Late payments are subject to fees.</div>
        <div class="text-gray-700 mb-2">Please make checks payable to Your Company Name and mail to:</div>
    </div><br>
</div>
