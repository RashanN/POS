<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Additional custom styles */
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>All Products</h2>
        @if(count($products) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Show Price</th>
                        <th>Unit Price</th>
                        <th>Stock Level</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Supplier</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->showprice }}</td>
                            <td>{{ $product->unitprice }}</td>
                            <td>{{ $product->stock_level }}</td>
                            <td>{{ $product->description }}</td>
                               <td>{{ $product->category_name}}</td>
                            <td>{{ $product->supplier_name }}</td>
                            <td>
                                <!-- Edit button with iframe -->
                                <button>
                                    <a href="{{ route('product.edit', $product->id) }}">Edit</a>

                                </button>
                                {{-- <iframe width="50" height="50" src="{{ route('product.edit', $product->id) }}" srcdoc="<html><body style='margin:0;padding:0;text-align:center;'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path fill='none' d='M0 0h24v24H0V0z'/><path d='M21 3c.55 0 1 .45 1 1v16c0 .55-.45 1-1 1H3c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h6c.55 0 1-.45 1-1s-.45-1-1-1H3c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-4.41 14.59L12 11.17l-4.59 4.58L6 16l6-6 6 6-1.41 1.41zM4 6h16v2H4z'/></svg></body></html>"></iframe> --}}
                                <!-- Delete button with iframe -->
                                <iframe width="50" height="50" src="{{ route('product.destroy', $product->id) }}" srcdoc="<html><body style='margin:0;padding:0;text-align:center;'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path fill='none' d='M0 0h24v24H0V0z'/><path d='M20 4H16.83l-1.25-1.25c-.38-.38-1.02-.38-1.41 0L11.34 4H4c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1h14c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zm-2 14v-8H6v8h12zm-9-6h2v4H9v-4z'/></svg></body></html>" frameborder="0"></iframe>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No products found.</p>
        @endif
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
