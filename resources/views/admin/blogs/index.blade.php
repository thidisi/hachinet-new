@extends('admin.layout.app')
@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Danh sách bài viết</h4>
                            <a href="{{ route('admin.blogs.create') }}" class="btn-round ml-auto btn-hachinet">
                                <i class="fa fa-plus"></i>
                                Thêm
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;">#</th>
                                        <th>Tiêu đề</th>
                                        <th style="width: 70px !important;">Trạng thái</th>
                                        <th style="width: 80px !important;">Ngày đăng</th>
                                        <th style="width: 90px !important;">Người đăng</th>
                                        <th style="width: auto">Chức năng</th>
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
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var table = $('#add-row').DataTable({
                    "pageLength": 10,
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('api.blogs.list') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'image',
                            name: 'image'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'user',
                            name: 'user'
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
                // xóa danh mục
                $(document).on('click', '.delete-category', function() {
                    swal({
                        title: 'Bạn có chắc chắn xóa?',
                        text: "Không thể khôi phục khi đã xóa!",
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
