@include('header')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                            <div>
                                <p><strong>Medicines</strong></p>
                        </div>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">description</th>
                                        <th scope="col">quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                      <tbody>
                                          @foreach ($medicines as $medicine )
                                          <tr>
                                            <th scope="row">{{$medicine->id}}</th>
                                            <td><img src="{{ url('uploads/'.$medicine->image) }}" alt="{{$medicine->name}}" width="40px" height="40px" ></td>
                                            <td>{{$medicine->title}}</td>
                                            <td>{{$medicine->description}}</td>
                                            <td>{{$medicine->quantity}}</td>
                                            <td>{{$medicine->price}}</td>
                                            <td><a href="editmed/{{$medicine->id}}" class="btn btn-primary">edit</a>
                                                <a href="deletemed/{{$medicine->id}}" class="btn btn-primary">delete</a>
                                                </td>

                                            {{-- <td>{{$medicine->ti    tle}}</td> --}}

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </thead>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('footer')
