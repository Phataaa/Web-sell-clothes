@extends('layout.admin-layout');
@section('content')

    <!-- End Navbar -->
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Seller</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">>Name</th>
                      {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">>Image</th> --}}
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quanity</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seller</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  @foreach($Product as $product)
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$product->id}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset('product/image/'.$product->image[1]->path)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$product->name}}</h6>
                          </div>
                        </div>
                      </td>
                      {{-- <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$image->path}}</span>
                      </td> --}}
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold" >{{$product->quanity}}</span>
                      </td>
                     <td>
                      {{$product->brand}}
                     </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$product->color}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$product->gender}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$product->category->name}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$product->description}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$product->user->user_name}}</span>
                      </td>
                      < <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"> <a href="{{route('edit.product', $product->id)}}"> Edit</a></span>
                        <span class="badge badge-sm bg-gradient-success"> <a href=""> Delete</a></span>
                        <span class="badge badge-sm bg-gradient-success"> <a href="{{route('create.product')}}">Create</a></span>
                        <span class="badge badge-sm bg-gradient-success"> <a href=""> View</a></span>
                      </td>
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection