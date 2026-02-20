<!DOCTYPE html>
<html>
<head>
    <title>Gadget Products</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .container { width: 60%; margin: auto; }
        .card {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gadget List</h1>

        @foreach($products as $product)
            <div class="card">
                <h2>{{ $product['name'] }}</h2>
                <p>Brand: {{ $product['brand'] }}</p>
                <p>Price: {{ $product['price'] }}</p>
            </div>
        @endforeach

    </div>
</body>
</html>



