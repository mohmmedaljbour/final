@extends('layouts.app')
@section('contants')
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Products - ERP System</a>
    </div>
  </nav>

  <main class="container p-4">
  <div class="row">
      <div class="col-md-4">
      <!-- MESSAGES -->

      
      <!-- ADD Product FORM -->
      <div class="card card-body">
          <form action="#" method="POST">
          <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Product Title" autofocus>
          </div>
          <div class="form-group">
              <textarea name="description" rows="2" class="form-control" placeholder="Product Description"></textarea>
          </div>
          <div class="form-group">
              <input type="number" name="price" class="form-control" placeholder="Product Price" min="0">
          </div>
          <input type="submit" name="save_product" class="btn btn-success btn-block" value="Save Product">
          </form>
      </div>
      </div>
      <div class="col-md-8">
      <table class="table table-bordered">
          <thead>
          <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th>Created At</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>

                      <tr>
              <td>Product 1</td>
              <td>Product description</td>
              <td>$ 100.99</td>
              <td>2020-06-03 11:05:34</td>
              <td>
              <a href="#" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
              </a>
              <a href="#" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
              </a>
              </td>
          </tr>
                  </tbody>
      </table>
      </div>
  </div>
  </main>
@endsection