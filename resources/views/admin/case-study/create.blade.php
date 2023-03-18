@extends('admin.layout.app')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
        crossorigin="anonymous" />
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
                            <h4 class="card-title">Thêm dự án</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.case-study.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-sm-12 p-0">
                                        {{-- <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"> --}}
                                        <div
                                            class="form-group form-group-default name @error('name') border border-danger m-1 @enderror">
                                            <label>Tên dự án</label>
                                            <input id="addTitle" type="text" name="name" value="{{ old('name') }}"
                                                class="form-control" placeholder="Tên dự án">
                                        </div>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div
                                                class="form-group form-group-default name @error('location') border border-danger m-1 @enderror">
                                                <label>Địa chỉ</label>
                                                <input id="addTitle" type="text" name="location"
                                                    value="{{ old('location') }}" class="form-control"
                                                    placeholder="Địa chỉ">
                                            </div>
                                            @error('location')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="form-group form-group-default name @error('size') border border-danger m-1 @enderror">
                                                <label>Project Size</label>
                                                <input id="addTitle" type="text" name="size"
                                                    value="{{ old('size') }}" class="form-control"
                                                    placeholder="Project Size">
                                            </div>
                                            @error('size')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="form-group form-group-default name @error('completed') border border-danger m-1 @enderror">
                                                <label>Thời gian hoàn thành</label>
                                                <input id="addTitle" type="datetime-local" name="completed"
                                                    value="{{ old('completed') }}" class="form-control"
                                                    placeholder="Thời gian hoàn thành">
                                            </div>
                                            @error('completed')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('shortdesc') border border-danger m-1 @enderror">
                                            <label>Mô tả ngắn</label>
                                            <textarea id="addDescription" name="shortdesc" rows="5" class="form-control" placeholder="Mô tả ngắn">{{ old('shortdesc') }}</textarea>
                                        </div>
                                        @error('shortdesc')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('feature') border border-danger m-1 @enderror">
                                            <label>Chức năng</label>
                                            <textarea id="" name="feature" rows="5" class="form-control" placeholder="chức năng">{{ old('feature') }}</textarea>
                                        </div>
                                        @error('feature')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('description') border border-danger m-1 @enderror">
                                            <label>Nội dung</label>
                                            <textarea id="addContent" name="description" value="" rows="16" class="form-control" placeholder="Nội dung">{{ old('description') }}</textarea>
                                        </div>
                                        @error('description')
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
                                                        @if (old('category_id') == $el->id) selected @endif>
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
                                            class="form-group form-group-default @error('contract_type') border border-danger m-1 @enderror">
                                            <label>Contract Type</label>
                                            <select id="formGroupDefaultSelect" name="contract_type" class="form-control">
                                                <option selected disabled hidden>Chọn contract type</option>
                                                @foreach ($type as $i => $el)
                                                    <option value="{{ $el }}"
                                                        @if (old('contract_type') == $el) selected @endif>
                                                        {{ $el }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('contract_type')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('responsibilities') border border-danger m-1 @enderror">
                                            <label>Responsibilities</label>
                                            @foreach ($responsibilities as $i => $el)
                                                <input value="{{ $el }}" id="id{{ $i }}"
                                                    type="checkbox" name="responsibilities[]"
                                                    @if (old('responsibilities') == $el) checked @endif>
                                                <label class="d-inline"
                                                    for="id{{ $i }}">{{ $el }}</label> <br>
                                            @endforeach
                                        </div>
                                        @error('responsibilities')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-check form-group-default @error('status') border border-danger m-1 @enderror">
                                            <label>Trạng thái</label>
                                            <div class="d-inline-flex">
                                                <label class="form-radio-label col-md-6 d-flex align-content-center">
                                                    <input class="form-radio-input m-0 mr-2" checked type="radio"
                                                        name="status" value="active">
                                                    <span class="form-radio-sign">Công khai</span>
                                                </label>
                                                <label class="form-radio-label col-md-6 d-flex align-content-center">
                                                    <input class="form-radio-input m-0 mr-2" type="radio"
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
                                        <div
                                            class="form-group form-group-default @error('client') border border-danger m-1 @enderror">
                                            <label>Khách hàng</label>
                                            <input type="text" value="{{ old('client') }}" name="client"
                                                class="form-control" placeholder="Khách hàng">
                                        </div>
                                        @error('client')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('team_size') border border-danger m-1 @enderror">
                                            <label>Team size</label>
                                            <input type="text" value="{{ old('team_size') }}" name="team_size"
                                                class="form-control" placeholder="Team size">
                                        </div>
                                        @error('team_size')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('skill') border border-danger m-1 @enderror">
                                            <label>Kĩ năng</label>
                                            <input type="text" value="{{ old('skill') }}" data-role="tagsinput"
                                                name="skill" class="form-control" placeholder="Kĩ năng">
                                        </div>
                                        @error('skill')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('tag') border border-danger m-1 @enderror">
                                            <label>Tags</label>
                                            <input type="text" value="{{ old('tag') }}" data-role="tagsinput"
                                                name="tag" class="form-control" placeholder="Tag">
                                        </div>
                                        @error('tag')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('url') border border-danger m-1 @enderror">
                                            <label>Url sản phẩm</label>
                                            <input type="text" value="{{ old('url') }}" name="url"
                                                class="form-control" placeholder="Url sản phẩm">
                                        </div>
                                        @error('url')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default @error('thumb') border border-danger m-1 @enderror">
                                            <label>Ảnh dự án</label>
                                            <input id="addThumbnail" type="file" multiple name="thumb[]"
                                                class="form-control" placeholder="Ảnh dự án">
                                            <div id="preview-image" class="mt-2 row"></div>
                                        </div>
                                        @error('thumb')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8 modal-footer no-bd">
                                    <button type="submit" class="btn-hachinet">Thêm</button>
                                    <a href="{{ route('admin.case-study') }}" class="btn-close btn btn-danger">Hủy</a>
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
        <script>
            $("#addThumbnail").change(function() {
                $("#preview-image").html('');
                for (let index = 0; index < this.files.length; index++) {
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        $("#preview-image").append(
                            `<img src="${e.target.result}" class="mt-2 col-md-3 image-show" width="100%">`);
                    };
                    reader.readAsDataURL(this.files[index]);
                }

            });
            $(document).on('click', ".image-show", function() {
                $(this).remove();
            })
        </script>
    @endpush
@endsection
