@extends('admin.layout.app')
@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Danh mục bài viết</h4>
                            <button class="btn-round ml-auto add-category btn-hachinet" data-toggle="modal"
                                data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Thêm
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal add category-->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-bd">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">
                                                Thêm danh mục bài viết</span>
                                        </h5>
                                        <button type="button" class="close btn-close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formData" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default name">
                                                        <label>Tên danh mục</label>
                                                        <input id="addName" type="text" name="name"
                                                            class="form-control" placeholder="Tên danh mục">
                                                        <input id="id_cate" type="hidden" name="id_cate"
                                                            class="form-control" placeholder="id_cate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Mô tả</label>
                                                        <textarea id="addDescription" name="description" rows="5" class="form-control" placeholder="Mô tả"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-check form-group-default">
                                                        <label>Trạng thái</label>
                                                        <div class="d-inline-flex">
                                                            <label
                                                                class="form-radio-label col-md-6 d-flex align-content-center">
                                                                <input class="form-radio-input m-0 mr-2" type="radio"
                                                                    name="status" checked value="active">
                                                                <span class="form-radio-sign">Công khai</span>
                                                            </label>
                                                            <label
                                                                class="form-radio-label col-md-6 d-flex align-content-center ml-2">
                                                                <input class="form-radio-input m-0 mr-2" type="radio"
                                                                    name="status" value="inactive">
                                                                <span class="form-radio-sign">Ẩn</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-check form-group-default type-category">
                                                        <label>Loại</label>
                                                        <div class="d-inline-flex">
                                                            @foreach ($type as $e)
                                                                <label
                                                                    class="form-radio-label col-md-6 d-flex align-content-center">
                                                                    <input class="form-radio-input m-0 mr-2" type="radio"
                                                                        name="type" value="{{ $e }}">
                                                                    <span class="form-radio-sign">{{ $e }}</span>
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default avatar-file">
                                                        <label>Ảnh</label>
                                                        <div class="d-flex">
                                                            <input type="file" name="image" multiple id="avatar"
                                                                class="form-control col-md-8" placeholder="Ảnh">
                                                            <div class="col-md-4">
                                                                <img src="" id="preview-image" width="100px"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer no-bd">
                                        <button type="button" id="addRowButton" class="btn-hachinet">Thêm</button>
                                        <button type="button" class="btn-close btn btn-danger"
                                            data-dismiss="modal">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Loại</th>
                                        <th style="width: 10%">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <!-- Datatables -->
        <script>
            $("#avatar").change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $("#preview-image").attr("src", e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });
            $("#preview-image").click(function() {
                $("#preview-image").removeAttr("src");
            })
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var type = '';
                // Add Row
                var table = $('#add-row').DataTable({
                    "pageLength": 5,
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('api.categories.list') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'type',
                            name: 'type'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ],
                    language: {
                        "sProcessing": "Loading....",
                        "sLengthMenu": "Hiển thị _MENU_ bản ghi",
                        "sZeroRecords": "Không có dữ liệu trong bảng",
                        "sInfo": "",
                        "sInfoEmpty": "Hiển thị 0 đến 0 trong số 0 bản ghi",
                        "sInfoFiltered": "(Đã lọc từ _MAX_ bản ghi)",
                        "sSearch": "",
                        "oPaginate": {
                            "sFirst": "Đầu trang",
                            "sLast": "Cuối trang",
                            "sNext": "»",
                            "sPrevious": "«"
                        },
                        searchPlaceholder: "Tìm kiếm",
                    }
                });
                $(document).on("click", ".add-category", function(e) {
                    e.preventDefault();
                    type = 'POST'
                    $("input[name=id_cate]").val('')
                    $(".fw-mediumbold").text('Thêm danh mục bài viết')
                    $("#addRowButton").text("Thêm")
                });
                $(document).on("click", ".edit-category", function() {
                    var id = $(this).data('id');
                    type = 'PUT'
                    $("#addRowButton").text("Sửa")
                    $(".fw-mediumbold").text('Sửa danh mục bài viết')
                    $.ajax({
                        type: "GET",
                        url: "{{ route('api.categories.edit', '') }}/" + id,
                        dataType: "JSON",
                        success: function(response) {
                            console.log(response);
                            $("#addName").val(response.name)
                            $("input[name=id_cate]").val(response.id)
                            $("#addDescription").val(response.description)
                            $("#preview-image").attr("src", response.image)
                        }
                    });
                });
                $(".btn-close").click(function(e) {
                    e.preventDefault();
                    $("#formData")[0].reset()
                    $("#addRowButton").removeAttr('data-id')
                })
                // thêm và sửa danh mục
                $(document).on('click', '#addRowButton', function() {
                    var form = new FormData(document.getElementById('formData'));
                    var url = '';
                    if (type == 'POST') {
                        url = '{!! route('categories.store') !!}';
                    }
                    if (type == 'PUT') {
                        url = '{!! route('categories.update', '') !!}/' + $("input[name=id_cate]").val()
                        form.append("_method", "put");
                    }
                    $.ajax({
                        type: 'POST',
                        url: url,
                        async: false,
                        processData: false,
                        contentType: false,
                        data: form,
                        dataType: "JSON",
                        success: function(response) {
                            swal("Thành công!", response.mess, {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                },
                            });
                            type = ''
                            $("#addRowButton").removeAttr('data-route')
                            $('#addRowModal').modal('hide');
                            $("#formData")[0].reset()
                            table.draw();
                        },
                        error: function(response) {
                            var content = {};
                            content.title = 'Thông báo';
                            content.icon = 'fa fa-bell';
                            if (response.responseJSON.mess) {
                                content.message = response.responseJSON.mess;
                                $.notify(content, {
                                    type: 'danger',
                                    placement: {
                                        from: 'top',
                                        align: 'right'
                                    },
                                    time: 1000,
                                    delay: 3000,
                                });
                            }
                            if (response.responseJSON.errors.name) {
                                $(".name").addClass("border border-danger");
                                setTimeout(() => {
                                    $(".name").removeClass("border border-danger");
                                }, 4000);
                                content.message = response.responseJSON.errors.name[0];
                                $.notify(content, {
                                    type: 'danger',
                                    placement: {
                                        from: 'top',
                                        align: 'right'
                                    },
                                    time: 1000,
                                    delay: 3000,
                                });
                            }
                            
                            if (response.responseJSON.errors.type) {
                                $(".type-category").addClass("border border-danger");
                                setTimeout(() => {
                                    $(".type-category").removeClass("border border-danger");
                                }, 4000);
                                content.message = response.responseJSON.errors.type[0];
                                $.notify(content, {
                                    type: 'danger',
                                    placement: {
                                        from: 'top',
                                        align: 'right'
                                    },
                                    time: 1000,
                                    delay: 3000,
                                });
                            }
                        }
                    });
                });
                // xóa danh mục
                $(document).on('click', '.delete-category', function() {
                    swal({
                        title: 'Bạn có chắc chắn xóa?',
                        text: "Các bài viết liên quan sẽ bị xóa và không thể khôi phục!",
                        type: 'warning',
                        buttons: {
                            confirm: {
                                text: 'Xóa',
                                className: 'btn btn-success'
                            },
                            cancel: {
                                text: 'Hủy',
                                visible: true,
                                className: 'btn btn-danger'
                            }
                        }
                    }).then((Delete) => {
                        if (Delete) {
                            $.ajax({
                                type: "DELETE",
                                url: $(this).data("route"),
                                dataType: "JSON",
                                success: function(response) {
                                    swal({
                                        title: 'Thông báo!',
                                        text: response.mess,
                                        type: 'success',
                                        buttons: {
                                            confirm: {
                                                className: 'btn btn-success'
                                            }
                                        }
                                    });
                                    table.draw();
                                }
                            });
                        } else {
                            swal.close();
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
