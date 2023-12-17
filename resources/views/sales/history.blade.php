<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity Sold</th>
            <th>Total Amount</th>
            <th>Sold At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $sale)
        <tr>
            <td>{{ $sale->product->name }}</td>
            <td>{{ $sale->quantity_sold }}</td>
            <td>{{ $sale->total_amount }}</td>
            <td>{{ $sale->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
