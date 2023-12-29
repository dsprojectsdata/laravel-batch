@extends('admin.layout.index')

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Add Blogs</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add Blogs</h5>

                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        @if (session('error'))
                                            <div class="alert alert-danger background-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success background-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <form method="post" action="{{ route('admin.blogupdate', [$blogData->id]) }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Category</label>
                                                <div class="col-sm-12">
                                                    <select name="category" id="" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach ($cateData as $category)
                                                            <option value="{{ $category->id }}"
                                                                @if ($category->id == $blogData->cate_id) selected @endif>
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category')
                                                        <p class="form-error">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $blogData->title }}">
                                                    @error('name')
                                                        <p class="form-error">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Description</label>
                                                <div class="col-sm-12">
                                                    <textarea name="description" class="form-control">{{ $blogData->description }}</textarea>
                                                    @error('description')
                                                        <p class="form-error">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Image</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="img" class="form-control">
                                                    @error('img')
                                                        <p class="form-error">{{ $message }}</p>
                                                    @enderror
                                                    <img class="img-icon mt-3" src="{{ asset($blogData->img) }}"
                                                        alt="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
