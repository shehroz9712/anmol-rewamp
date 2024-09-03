@extends('admin.layouts.app')
@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ $pageTitle }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        {{ Breadcrumbs::render('admin.pages.edit', $page) }} </nav>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Method field for PUT request -->

                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name', $page->name) }}" onkeyup="generateSlug()">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Slug Field -->
                            <div class="col-md-6 mb-3">
                                <label for="slug" class="form-label">Slug:</label>
                                <input type="text" id="slug"
                                    class="form-control @error('slug') is-invalid @enderror" name="slug"
                                    value="{{ old('slug', $page->slug) }}" readonly>
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Title Field -->
                            <div class="col-md-12 mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" id="title"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{ old('title', $page->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Content Field -->
                            <div class="col-md-12 mb-3">
                                <label for="content" class="form-label">Content:</label>
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5">{{ old('content', $page->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Field -->
                            <div class="col-md-12 mb-3">
                                <label for="image" class="form-label">Image:</label>
                                @if ($page->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('images/' . $page->image) }}" alt="Current Image"
                                            class="img-thumbnail" style="max-width: 200px;">
                                    </div>
                                @endif
                                <input type="file" id="image"
                                    class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Meta Title Field -->
                            <div class="col-md-12 mb-3">
                                <label for="meta_title" class="form-label">Meta Title:</label>
                                <input type="text" id="meta_title"
                                    class="form-control @error('meta_title') is-invalid @enderror" name="meta_title"
                                    value="{{ old('meta_title', $page->meta_title) }}">
                                @error('meta_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Meta Description Field -->
                            <div class="col-md-12 mb-3">
                                <label for="meta_description" class="form-label">Meta Description:</label>
                                <input type="text" id="meta_description"
                                    class="form-control @error('meta_description') is-invalid @enderror"
                                    name="meta_description" value="{{ old('meta_description', $page->meta_description) }}">
                                @error('meta_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Meta Keywords Field -->
                            <div class="col-md-12 mb-3">
                                <label for="meta_keywords" class="form-label">Meta Keywords:</label>
                                <input type="text" id="meta_keywords"
                                    class="form-control @error('meta_keywords') is-invalid @enderror" name="meta_keywords"
                                    value="{{ old('meta_keywords', $page->meta_keywords) }}">
                                @error('meta_keywords')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
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
    <script>
        // Initialize Summernote
        $(document).ready(function() {
            $('#content').summernote({
                height: 300, // Set the height of the editor
                placeholder: 'Enter content here...'
            });
        });

        // Generate slug from name field
        function generateSlug() {
            const name = document.getElementById('name').value;
            const slug = name
                .toLowerCase()
                .replace(/ /g, '-') // Replace spaces with hyphens
                .replace(/[^\w-]+/g, '') // Remove non-word characters
                .replace(/--+/g, '-') // Replace multiple hyphens with a single hyphen
                .replace(/^-+/, '') // Remove leading hyphens
                .replace(/-+$/, ''); // Remove trailing hyphens
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection
