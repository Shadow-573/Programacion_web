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
                        <button class="nav-link font-light active" id="tab" data-bs-toggle="tab" data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Dashboard</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order" type="button"><i class="fas fa-angle-right"></i>Products</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button"><i class="fas fa-angle-right"></i>Categories</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save" type="button"><i class="fas fa-angle-right"></i>
                            Users</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="4-tab" data-bs-toggle="tab" data-bs-target="#pay" type="button"><i class="fas fa-angle-right"></i>Payment</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"><i class="fas fa-angle-right"></i>Profile</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab" data-bs-target="#security" type="button"><i class="fas fa-angle-right"></i>Security</button>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="filter-button dash-filter dashboard">
                    <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="dash">
                        <div class="dashboard-right">
                            <div class="dashboard">
                                <div class="page-title title title1 title-effect">
                                    <h2>Admin Dashboard</h2>
                                </div>
                                <div class="welcome-msg">
                                    <h6 class="font-light">Hello,@auth <span>{{ Auth::user()->name}}</span> @endauth</h 6>
                                        <p class="font-light">From your My Account Dashboard you have the ability to
                                            view a snapshot of your recent account activity and update your account
                                            information. Select a link below to view or edit information.</p>
                                </div>

                                <div class="order-box-contain my-4">
                                    <div class="row g-4">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="order-box">
                                                <div class="order-box-image">
                                                    <img src="assets/images/svg/box.png" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                                <div class="order-box-contain">
                                                    <img src="assets/images/svg/box1.png" class="img-fluid blur-up lazyload" alt="">
                                                    <div>
                                                        <h5 class="font-light">total order</h5>
                                                        <h3>3648</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <div class="order-box">
                                                <div class="order-box-image">
                                                    <img src="assets/images/svg/sent.png" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                                <div class="order-box-contain">
                                                    <img src="assets/images/svg/sent1.png" class="img-fluid blur-up lazyload" alt="">
                                                    <div>
                                                        <h5 class="font-light">pending orders</h5>
                                                        <h3>215</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <div class="order-box">
                                                <div class="order-box-image">
                                                    <img src="assets/images/svg/wishlist.png" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                                <div class="order-box-contain">
                                                    <img src="assets/images/svg/wishlist1.png" class="img-fluid blur-up lazyload" alt="">
                                                    <div>
                                                        <h5 class="font-light">wishlist</h5>
                                                        <h3>63874</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-account box-info">
                                    <div class="box-head">
                                        <h3>Account Information</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <div class="box-title">
                                                    <h4>Contact Information</h4><a href="javascript:void(0)">Edit</a>
                                                </div>
                                                <div class="box-content">
                                                    <h6 class="font-light">MARK JECNO</h6>
                                                    <h6 class="font-light">MARk-JECNO@gmail.com</h6>
                                                    <a href="javascript:void(0)">Change Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <div class="box-title">
                                                    <h4>Newsletters</h4><a href="javascript:void(0)">Edit</a>
                                                </div>
                                                <div class="box-content">
                                                    <h6 class="font-light">You are currently not subscribed to any
                                                        newsletter.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="box address-box">
                                            <div class="box-title">
                                                <h4>Address Book</h4><a href="javascript:void(0)">Manage
                                                    Addresses</a>
                                            </div>
                                            <div class="box-content">
                                                <div class="row g-4">
                                                    <div class="col-sm-6">
                                                        <h6 class="font-light">Default Billing Address</h6>
                                                        <h6 class="font-light">You have not set a default
                                                            billing address.</h6>
                                                        <a href="javascript:void(0)">Edit Address</a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h6 class="font-light">Default Shipping Address</h6>
                                                        <h6 class="font-light">You have not set a default
                                                            shipping address.</h6>
                                                        <a href="javascript:void(0)">Edit Address</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                            <h3>Categories</h3>
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
                        <div class="box-head">
                            <h3>Save Address</h3>
                            <button class="btn btn-solid-default btn-sm fw-bold ms-auto" data-bs-toggle="modal" data-bs-target="#addAddress"><i class="fas fa-plus"></i>
                                Add New Address</button>
                        </div>
                        <div class="save-details-box">
                            <div class="row g-3">
                                <div class="col-xl-4 col-md-6">
                                    <div class="save-details">
                                        <div class="save-name">
                                            <h5>Mark Jugal</h5>
                                            <div class="save-position">
                                                <h6>Home</h6>
                                            </div>
                                        </div>

                                        <div class="save-address">
                                            <p class="font-light">549 Sulphur Springs Road</p>
                                            <p class="font-light">Downers Grove, IL</p>
                                            <p class="font-light">60515</p>
                                        </div>

                                        <div class="mobile">
                                            <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                        </div>

                                        <div class="button">
                                            <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                            <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="save-details">
                                        <div class="save-name">
                                            <h5>Method Zaki</h5>
                                            <div class="save-position">
                                                <h6>Office</h6>
                                            </div>
                                        </div>

                                        <div class="save-address">
                                            <p class="font-light">549 Sulphur Springs Road</p>
                                            <p class="font-light">Downers Grove, IL</p>
                                            <p class="font-light">60515</p>
                                        </div>

                                        <div class="mobile">
                                            <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                        </div>

                                        <div class="button">
                                            <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                            <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="save-details">
                                        <div class="save-name">
                                            <h5>Mark Jugal</h5>
                                            <div class="save-position">
                                                <h6>Home</h6>
                                            </div>
                                        </div>

                                        <div class="save-address">
                                            <p class="font-light">549 Sulphur Springs Road</p>
                                            <p class="font-light">Downers Grove, IL</p>
                                            <p class="font-light">60515</p>
                                        </div>

                                        <div class="mobile">
                                            <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                        </div>

                                        <div class="button">
                                            <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                            <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade dashboard" id="pay">
                        <div class="box-head">
                            <h3>Card & Payment</h3>
                            <button class="btn btn-solid-default btn-sm fw-bold ms-auto" data-bs-toggle="modal" data-bs-target="#addPayment"><i class="fas fa-plus"></i>
                                Add New Card</button>
                        </div>

                        <div class="card-details-section">
                            <div class="row g-4">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="payment-card-detail">
                                        <div class="card-details">
                                            <div class="card-number">
                                                <h4>XXXX - XXXX - XXXX - 2548</h4>
                                            </div>

                                            <div class="valid-detail">
                                                <div class="title">
                                                    <span>valid</span>
                                                    <span>thru</span>
                                                </div>
                                                <div class="date">
                                                    <h3>12/23</h3>
                                                </div>
                                                <div class="primary">
                                                    <span class="badge bg-pill badge-light">primary</span>
                                                </div>
                                            </div>

                                            <div class="name-detail">
                                                <div class="name">
                                                    <h5>mark jecno</h5>
                                                </div>
                                                <div class="card-img">
                                                    <img src="assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="edit-card">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>

                                    <div class="edit-card-mobile">
                                        <a data-bs-toggle="modal" data-bs-target="#addPayment" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                        <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                            delete</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="payment-card-detail">
                                        <div class="card-details card-visa">
                                            <div class="card-number">
                                                <h4>XXXX - XXXX - XXXX - 2548</h4>
                                            </div>

                                            <div class="valid-detail">
                                                <div class="title">
                                                    <span>valid</span>
                                                    <span>thru</span>
                                                </div>
                                                <div class="date">
                                                    <h3>12/23</h3>
                                                </div>
                                                <div class="primary">
                                                    <span class="badge bg-pill badge-light">primary</span>
                                                </div>
                                            </div>

                                            <div class="name-detail">
                                                <div class="name">
                                                    <h5>mark jecno</h5>
                                                </div>
                                                <div class="card-img">
                                                    <img src="assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="edit-card">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>

                                    <div class="edit-card-mobile">
                                        <a data-bs-toggle="modal" data-bs-target="#addPayment" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                        <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                            delete</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="payment-card-detail">
                                        <div class="card-details dabit-card">
                                            <div class="card-number">
                                                <h4>XXXX - XXXX - XXXX - 2548</h4>
                                            </div>

                                            <div class="valid-detail">
                                                <div class="title">
                                                    <span>valid</span>
                                                    <span>thru</span>
                                                </div>
                                                <div class="date">
                                                    <h3>12/23</h3>
                                                </div>
                                                <div class="primary">
                                                    <span class="badge bg-pill badge-light">primary</span>
                                                </div>
                                            </div>

                                            <div class="name-detail">
                                                <div class="name">
                                                    <h5>mark jecno</h5>
                                                </div>
                                                <div class="card-img">
                                                    <img src="assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="edit-card">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>

                                    <div class="edit-card-mobile">
                                        <a data-bs-toggle="modal" data-bs-target="#addPayment" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                        <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                            delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade dashboard-profile dashboard" id="profile">
                        <div class="box-head">
                            <h3>Profile</h3>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                        </div>
                        <ul class="dash-profile">
                            <li>
                                <div class="left">
                                    <h6 class="font-light">Company Name</h6>
                                </div>
                                <div class="right">
                                    <h6>Surfside Media Fashion</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Country / Region</h6>
                                </div>
                                <div class="right">
                                    <h6>Downers Grove, IL</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Year Established</h6>
                                </div>
                                <div class="right">
                                    <h6>2018</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Total Employees</h6>
                                </div>
                                <div class="right">
                                    <h6>101 - 200 People</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Category</h6>
                                </div>
                                <div class="right">
                                    <h6>Clothing</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Street Address</h6>
                                </div>
                                <div class="right">
                                    <h6>549 Sulphur Springs Road</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">City/State</h6>
                                </div>
                                <div class="right">
                                    <h6>Downers Grove, IL</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Zip</h6>
                                </div>
                                <div class="right">
                                    <h6>60515</h6>
                                </div>
                            </li>
                        </ul>

                        <div class="box-head mt-lg-5 mt-3">
                            <h3>Login Details</h3>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                        </div>

                        <ul class="dash-profile">
                            <li>
                                <div class="left">
                                    <h6 class="font-light">Email Address</h6>
                                </div>
                                <div class="right">
                                    <h6>mark.jugal@gmail.com</h6>
                                </div>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Phone No.</h6>
                                </div>
                                <div class="right">
                                    <h6>+1-202-555-0198</h6>
                                </div>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                            </li>

                            <li class="mb-0">
                                <div class="left">
                                    <h6 class="font-light">Password</h6>
                                </div>
                                <div class="right">
                                    <h6>●●●●●●</h6>
                                </div>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade dashboard-security dashboard" id="security">
                        <div class="box-head">
                            <h3>Delete Your Account</h3>
                        </div>
                        <div class="security-details">
                            <h5 class="font-light mt-3">Hi <span> Mark Enderess,</span>
                            </h5>
                            <p class="font-light mt-1">We Are Sorry To Here You Would Like To Delete Your Account.
                            </p>
                        </div>

                        <div class="security-details-1 mb-0">
                            <div class="page-title">
                                <h4 class="fw-bold">Note</h4>
                            </div>
                            <p class="font-light">Deleting your account will permanently remove your profile,
                                personal settings, and all other associated information. Once your account is
                                deleted, You will be logged out and will be unable to log back in.</p>

                            <p class="font-light mb-4">If you understand and agree to the above statement, and would
                                still like to delete your account, than click below</p>

                            <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Your
                                Account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- user dashboard section end -->




@endsection