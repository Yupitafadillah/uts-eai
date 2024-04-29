<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
<h1>Shopping Cart</h1>
    <!-- Tampilkan daftar item di sini -->
    <!-- Form untuk menambahkan item ke keranjang -->
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="1">
        <input type="submit" value="Add to Cart">
    </form>
    <!-- Form untuk menghapus item dari keranjang -->
    <form action="{{ route('cart.remove') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="1">
        <input type="submit" value="Remove from Cart">
    </form>
</body>
</html>
