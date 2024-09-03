@extends('admin.layouts.app')
@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ $pageTitle }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        {{ Breadcrumbs::render() }} </nav>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POSt')

                        <div class="row">


                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" name="title" class="form-control" value="{{ $data->title }}"
                                    placeholder="Title">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{ $data->email }}"
                                    placeholder="Email">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" name="phone" class="form-control" value="{{ $data->phone }}"
                                    placeholder="Phone">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="pixel_price" class="form-label">Pixel Price</label>
                                <div class="input-group mb-3"> <span class="input-group-text">AED</span>
                                    <input type="number" class="form-control" id="pixel_price" name="pixel_price"
                                        value="{{ $data->pixel_price }}" placeholder="0" required>
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="favicon" class="form-label">favicon:</label>
                                <input type="file" class="form-control @error('favicon') is-invalid @enderror"
                                    name="favicon">
                                @error('favicon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="logo" class="form-label">Logo:</label>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                    name="logo">
                                @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="stipe_key" class="form-label">Stipe Key:</label>
                                <input type="text" name="stipe_key" class="form-control" value="{{ $data->stipe_key }}"
                                    placeholder="stipe_key">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="secret_key" class="form-label">Stipe Secret :</label>
                                <input type="text" name="secret_key" class="form-control"
                                    value="{{ $data->secret_key }}" placeholder="Secret_key">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="header_scripts" class="form-label">Header Scripts:</label>
                                <textarea name="header_scripts" class="form-control" rows="3">{{ $data->header_scripts }}</textarea>
                            </div>


                            <div class="col-md-12 mb-3">
                                <label for="footer_scripts" class="form-label">Footer Scripts:</label>
                                <textarea name="footer_scripts" class="form-control" rows="3">{{ $data->footer_scripts }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="body_scripts" class="form-label">Body Scripts:</label>
                                <textarea name="body_scripts" class="form-control" rows="3">{{ $data->body_scripts }}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="copyright" class="form-label">Copyright:</label>
                                <textarea name="copyright" class="form-control" rows="3">{{ $data->copyright }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="footer_sentence" class="form-label">Footer Sentence:</label>
                                <textarea name="footer_sentence" class="form-control" rows="3">{{ $data->footer_sentence }}</textarea>
                            </div>

                            <div class="col-md-12 mb-3 text-end mt-3">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
@endsection
