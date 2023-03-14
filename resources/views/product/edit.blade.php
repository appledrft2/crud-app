<html>

<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="row mt-5">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h1>Edit Product</h1>
                    <form method="POST" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ $product->name }}" name="name" id="name"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" value="{{ $product->description }}" name="description"
                                id="description" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" value="{{ $product->price }}" name="price" id="price"
                                class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
