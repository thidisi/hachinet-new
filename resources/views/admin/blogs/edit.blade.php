@extends('admin.layout.app')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style type="text/css">
        .bootstrap-tagsinput {
            width: 100%;
        }

        .label-info {
            background-color: #2a9cff;

        }

        .label {
            display: inline-block;
            padding: 4px;
            font-size: 14px;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out,
                border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        span::after {
            color: rgb(255, 59, 59);
        }
    </style>
@endpush
@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Sửa bài viết</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default name @error('title') border border-danger m-1 @enderror">
                                            <label>Tên bài viết</label>
                                            <input id="addTitle" type="text" name="title"
                                                value="{{ $blog ? $blog->title : old('title') }}" class="form-control"
                                                placeholder="Tên bài viết">

                                        </div>
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('description') border border-danger m-1 @enderror">
                                            <label>Mô tả</label>
                                            <textarea id="addDescription" value="{{ $blog ? $blog->description : old('description') }}" name="description"
                                                rows="5" class="form-control" placeholder="Mô tả">{{ $blog ? $blog->description : old('description') }}</textarea>
                                        </div>
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('content') border border-danger m-1 @enderror">
                                            <label>Nội dung</label>
                                            <textarea id="addContent" name="content" value="" rows="16" class="form-control" placeholder="Nội dung">{{ $blog ? $blog->content : old('content') }}</textarea>
                                        </div>
                                        @error('content')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('category_id') border border-danger m-1 @enderror">
                                            <label>Danh mục</label>
                                            <select id="formGroupDefaultSelect" name="category_id" class="form-control">
                                                <option selected disabled hidden>Chọn danh mục</option>
                                                @foreach ($data as $i => $el) 
                                                    <option value="{{ $el->id }}"
                                                        @if ($blog->category_id == $el->id) selected @endif>
                                                        {{ $el->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-check form-group-default @error('status') border border-danger m-1 @enderror">
                                            <label>Trạng thái</label>
                                            <div class="d-inline-flex">
                                                <label class="form-radio-label col-md-6 d-flex align-content-center">
                                                    <input class="form-radio-input m-0 mr-2"
                                                        @if ($blog->status == 'active') checked @endif type="radio"
                                                        name="status" value="active">
                                                    <span class="form-radio-sign">Công khai</span>
                                                </label>
                                                <label class="form-radio-label col-md-6 d-flex align-content-center">
                                                    <input class="form-radio-input m-0 mr-2"
                                                        @if ($blog->status == 'inactive') checked @endif type="radio"
                                                        name="status" value="inactive">
                                                    <span class="form-radio-sign">Ẩn</span>
                                                </label>
                                            </div>
                                        </div>
                                        @error('status')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div class="form-group form-group-default">
                                            <label>Tag</label>
                                            <input type="text" data-role="tagsinput"
                                                value="{{ $blog ? $blog->tag : old('tag') }}" name="tag"
                                                class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('thumbnail') border border-danger m-1 @enderror">
                                            <label>Ảnh bài viết</label>
                                            <input id="addThumbnail" value="{{ $blog->thumbnail }}" type="file"
                                                name="thumbnail" class="form-control" placeholder="Ảnh bài viết">
                                            <img src="{{ asset('storage/' . $blog->thumbnail) }}" id="preview-image"
                                                class="mt-2" width="120px" alt="">
                                        </div>
                                        @error('thumbnail')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8 modal-footer no-bd">
                                    <button type="submit" class="btn-hachinet">Sửa</button>
                                    <a href="{{ route('admin.blogs.index') }}" class="btn-close btn btn-danger">Hủy</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
            integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg=="
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <script>
            $('#addContent').summernote({
                placeholder: 'Nội dung',
                tabsize: 2,
                height: 300
            });
            $("#addThumbnail").change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $("#preview-image").attr("src", e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });
        </script>
    @endpush
@endsection
