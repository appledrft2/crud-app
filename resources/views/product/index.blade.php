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
                    <h1 class="my-3">Product List</h1>
                    <a href="/product/create" class="btn btn-success my-3">Add Product</a>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <form id="delete-form{{ $product->id }}" method="POST"
                                                action="{{ route('product.destroy', $product->id) }}"> @csrf
                                                @method('DELETE') <a href="{{ route('product.edit', $product->id) }}"
                                                    class="btn btn-block btn-info">Edit</a> <button type="submit"
                                                    onclick="confirmAction(event,'delete-form{{ $product->id }}')"
                                                    class="btn btn-block btn-danger">Delete</button> </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
