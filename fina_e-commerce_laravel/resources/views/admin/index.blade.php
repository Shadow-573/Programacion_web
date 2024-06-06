@extends('layouts.base')
@section('content')
@push('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .description {
        max-width: 200px;
        /* Ajusta el ancho máximo según sea necesario */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        /* Ajusta según sea necesario */
        height: 30px;
        /* Ajusta según sea necesario */
        font-size: 16px;
        margin: 0 2px;
        /* Espaciado entre botones */
    }

    .action-btn i {
        margin: 0;
        padding: 0;
    }
</style>

@endpush
<!-- user dashboard section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                    <li class="nav-item mb-2">
                        <button class="nav-link font-light active" id="tab" data-bs-toggle="tab" data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Consola de administrador</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order" type="button"><i class="fas fa-angle-right"></i>Productos</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button"><i class="fas fa-angle-right"></i>Categorias</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save" type="button"><i class="fas fa-angle-right"></i>
                            Usuarios</button>
                    </li>

                </ul>
            </div>

            <div class="col-lg-9">
                <div class="filter-button dash-filter dashboard">
                    <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Mostrar Menu</button>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="dash">
                        <div class="dashboard-right">
                            <div class="dashboard">
                                <div class="page-title title title1 title-effect">
                                    <h2>Consola de administrador</h2>
                                </div>
                                <div class="welcome-msg">
                                    <h6 class="font-light">Hello,@auth <span>{{ Auth::user()->name}}</span> @endauth</h 6>
                                        <p class="font-light">Desde el Panel de control de esta cuenta, tiene la posibilidad de
                                            observar la actividad reciente de su cuenta y actualizar la
                                            información. Seleccione una opción a continuación para ver o editar información.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="order">
                        <div class="box-head mb-3">
                            <h3>Products</h3>
                        </div>
                        <div class="table-responsive">
                                <a href="{{route('admin.products.create')}}" class="btn btn-success float-right "> Add
                        <i class="fas fa-plus "></i> <!-- Agrega el icono -->
                        Product</a>
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Short Description</th>
                                        <th scope="col">Sale Price</th>
                                        <th scope="col">Regular Price</th>
                                        <th scope="col">Stock Status</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Brand</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->slug }}</td>
                                        <td class="description">{{ $product->description }}</td>
                                        <td class="description">{{ $product->short_description }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->image}}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->brand->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="btn btn-sm btn-primary action-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.products.destroy', ['id' => $product->id]) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger action-btn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="wishlist">
                        <div class="box-head mb-3">
                            <h3>Categorias</h3>
                        </div>
                        <div class="table-responsive">
                        <a href="{{route('admin.categories.create')}}" class="btn btn-success float-right ">
                        <i class="fas fa-plus "></i> <!-- Agrega el icono -->
                        Add Category</a>
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td >{{ $category->slug }}</td>
                                        <td >{{ $category->image }}</td>
                                        <td>
                                            <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-primary action-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.categories.destroy', ['id' => $category->id]) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger action-btn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade dashboard" id="save">

                        <div class="box-head mb-3">
                            <h3>Usuarios</h3>
                        </div>
                        <div class="table-responsive">
                                <a href="{{route('admin.products.create')}}" class="btn btn-success float-right "> Añadir
                        Usuario </a>
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Email verificado</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Creado el</th>
                                        <th scope="col">actualizado el</th>


                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->slug }}</td>
                                        <td class="description">{{ $product->description }}</td>
                                        <td class="description">{{ $product->short_description }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>
                                            <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="btn btn-sm btn-primary action-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.products.destroy', ['id' => $product->id]) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger action-btn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
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
    </div>
</section>
<!-- user dashboard section end -->




@endsection
