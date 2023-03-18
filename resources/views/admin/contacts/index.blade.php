@extends('admin.layout.app')
@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Danh sách liên hệ</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên người dùng</th>
                                        <th>Email</th>
                                        <th>Tiêu đề</th>
                                        <th>Số điện thoại</th>
                                        <th>Ngày liên hệ</th>
                                        <th style="width: 80px">Chức năng</th>
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
        <div class="position-fixed col-md-4 border-1 d-none modal-show-contact"
            style="top: 32%; left: 40%; transition: translate(-50%, -50%); ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card position-relative">
                        <div class="position-absolute px-3 py-2 bg-danger text-white btn-close-contact"
                            style="top: 0; right: 0; cursor: pointer;">&times</div>
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Chi tiết liên hệ</h4>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="px-1">Email: <a class="email-contact"></a></h6> 
                            <h6 class="px-1">Nội dung:</h6>
                            <span class="text-contact-show p-4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @push('js')
        <!-- Datatables -->
        <script>
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
                    ajax: "{{ route('api.contacts.list') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'subject',
                            name: 'subject'
                        },
                        {
                            data: 'phone',
                            name: 'phone',
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                        },
                        {
                            data: 'action',
                            name: 'action',
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
            });

            $(document).on('click', '.show-modal-contact', function() {
                $.ajax({
                    type: "GET",
                    url: $(this).data('route'),
                    dataType: "JSON",
                    success: function(response) {
                        $('.modal-show-contact').removeClass('d-none');
                        $('.text-contact-show').text(response.message)
                        $('.email-contact').text(response.email)
                        $('.email-contact').attr('href', 'mailto:'+response.email)
                    }
                });
            })
            $(document).on('click', '.btn-close-contact', function() {
                $('.modal-show-contact').addClass('d-none');
            })
        </script>
    @endpush
@endsection
