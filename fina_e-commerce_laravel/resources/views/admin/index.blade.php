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
                        <button class="nav-link font-light active" id="tab" data-bs-toggle="tab" data-bs-target="#dash"
                            type="button"><i class="fas fa-angle-right"></i>Consola de administrador</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order"
                            type="button"><i class="fas fa-angle-right"></i>Productos</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab" data-bs-target="#wishlist"
                            type="button"><i class="fas fa-angle-right"></i>Categorias</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save"
                            type="button"><i class="fas fa-angle-right"></i>
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
                                    <h6 class="font-light">Hello,@auth <span>{{ Auth::user()->name}}</span> @endauth</h
                                         6>
                                        <p class="font-light">Desde el Panel de control de esta cuenta, tiene la
                                            posibilidad de
                                            observar la actividad reciente de su cuenta y actualizar la
                                            información. Seleccione una opción a continuación para ver o editar
                                            información.</p>
                                </div>

                                <div class="container">
                                    <h1 class="my-4">Audit Log</h1>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Action</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Entity ID</th>
                                                    <th scope="col">Old Values</th>
                                                    <th scope="col">New Values</th>
                                                    <th scope="col">Timestamp</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($audits as $audit)
                                                    <tr>
                                                        <td>{{ $audit->id }}</td>
                                                        <td>{{ ucfirst($audit->action) }}</td>
                                                        <td>{{ class_basename($audit->auditable_type) }}</td>
                                                        <td>{{ $audit->auditable_id }}</td>
                                                        <td>
                                                            <pre>{{ json_encode(json_decode($audit->old_values), JSON_PRETTY_PRINT) }}</pre>
                                                        </td>
                                                        <td>
                                                            <pre>{{ json_encode(json_decode($audit->new_values), JSON_PRETTY_PRINT) }}</pre>
                                                        </td>
                                                        <td>{{ $audit->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="order">
                        <div class="box-head mb-3">
                            <h3>Products</h3>
                        </div>
                        <div class="table-responsive">
                            <a href="{{route('admin.products.create')}}" class="btn btn-success float-right ">
                                <i class="fas fa-plus "></i> <!-- Agrega el icono -->
                                Añadir Producto</a>
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Eslogan</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Descripción Corta</th>
                                        <th scope="col">Precio Descuento</th>
                                        <th scope="col">Precio Regular</th>
                                        <th scope="col">Estatus de Stock</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Marca</th>
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
                                            <td><img src="assets/images/fashion/product/front/{{$product->image}}" alt="a"
                                                    width="64"></td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->brand->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}"
                                                    class="btn btn-sm btn-primary action-btn">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.products.destroy', ['id' => $product->id]) }}"
                                                    method="POST" style="display:inline;">
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
                                Añadir Categoria</a>
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Eslogan</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->image }}</td>
                                            <td>
                                                <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}"
                                                    class="btn btn-sm btn-primary action-btn">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form
                                                    action="{{ route('admin.categories.destroy', ['id' => $category->id]) }}"
                                                    method="POST" style="display:inline;">
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
                            <a href="{{route('admin.users.create')}}" class="btn btn-success float-right ">
                                <i class="fas fa-plus "></i> Añadir
                                Usuario </a>
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Email verificado</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Creado el</th>
                                        <th scope="col">actualizado el</th>


                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->email_verified_at }}</td>
                                            <td>{{ $user->utype }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}"
                                                    class="btn btn-sm btn-primary action-btn">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.users.destroy', ['id' => $user->id]) }}"
                                                    method="POST" style="display:inline;">
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
@push('scripts')


@endpush