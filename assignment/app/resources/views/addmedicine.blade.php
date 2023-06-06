@include('header')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">

                            <div class="col-xxl">
                                <div class="card mb-4">
                                  <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Add Medicine</h5>
                                    <small class="text-muted float-end">Default label</small>
                                  </div>
                                  <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                      <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                                        <div class="col-sm-10">
                                          <input type="file" class="form-control" name="image" id="image"  />
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="title" name="title" placeholder="medicine title" />
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                                        <div class="col-sm-10">
                                          <textarea
                                            id="description"
                                            class="form-control"
                                            name="description"
                                            placeholder="Medicine Description goes here"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                          ></textarea>
                                        </div>
                                      </div>

                                      <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">quantity</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="quantity" name="quantity" placeholder="medicine quantity" />
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="price" name="price" placeholder="medicine price" />
                                        </div>
                                      </div>

                                      <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                          <button type="submit" name="btn-save" id="btn-save" class="btn btn-primary">Send</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
