@extends('admin.layout.app')
@push('css')
@endpush
@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Hồ sơ</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.updateProfile', $account->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-12 p-0">
                                        <div
                                            class="form-group form-group-default name @error('name') border border-danger m-1 @enderror">
                                            <label>Tên</label>
                                            <input type="text" name="name" value="{{ $account->name }}"
                                                class="form-control">
                                        </div>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div class="form-group form-group-default email">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{ $account->email }}"
                                                class="form-control @error('email') border border-danger m-1 @enderror"
                                                placeholder="Email" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div class="form-group form-group-default phone">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{ $account->phone }}"
                                                class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-0">
                                        <div class="form-group form-group-default email">
                                            <label>Avatar</label>
                                            <input type="file" name="avatar" id="addThumbnail"
                                                value="{{ $account->avatar }}"
                                                class="form-control @error('avatar') border border-danger m-1 @enderror"
                                                placeholder="Avatar">
                                        </div>
                                        <img id="preview-image" src="{{ asset($account->avatar) }}" width="200px">
                                        @error('avatar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 modal-footer no-bd">
                                    <button type="submit" class="btn-hachinet">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            var notify = '{!! Session::get('success') !!}';

            if (notify != null && notify != '') {
                swal({
                    title: 'Thông báo!',
                    text: notify,
                    type: 'success',
                    buttons: {
                        confirm: {
                            className: 'btn btn-success'
                        }
                    }
                });
            }
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
