@extends('Admin.AdminLayout')
@section('title', 'Client')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <!-- Modal -->
            <div class="modal fade" id="client_modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Client</h3>
                        </div>
                        <div class="modal-body">
                            <form id="client_form">
                                <input type="hidden" class="form-control" value="" name="client_id" id="client_id">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Client Image</label>
                                    <input type="file" accept="image/*" class="form-control" name="logo"
                                        id="logo_input">
                                    <div class="mt-3" id="image_preview"
                                        style="width: 100%; height: 300px; background: rgb(151, 151, 151) center / contain no-repeat;">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="submitbtn" class="btn btn-lg btn-primary" onclick="SaveClient()"
                                style="width: 100%">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h3 class="mt-2">Client</h3>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary mt-2" style="float: right"
                                onclick="$('#client_modal').modal('show')">New</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="client_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


    <script>
          var dataTable = "";
        $(document).ready(function() {
            GetData();
        });


        function GetData() {
            $('#client_table').DataTable().destroy()
            $('#client_table').DataTable({
                ajax: {
                    url: "{{ route('ClientFetch') }}",
                    dataSrc: ""
                },
                columns: [
                    {
                        data: 'client_id',
                        "searchable": true,
                        "orderable": true,
                    },
                    {
                        data: 'logo',
                        render: (data)=>{
                            return `<img src="{{url('public/client')}}/${data}" height="50" />`
                        }
                    },
                    {
                        data: 'name',
                        "searchable": true,
                        "orderable": true,
                    },
                    {
                        data: 'client_id',
                        render: function(data) {
                            return `
                                    <button class="btn btn-info" onclick="EditClient(${data})">Edit</button>
                                    <button class="btn btn-danger" onclick="DeleteClient(${data})">Delete</button>`;
                        }
                    }

                ],
                responsive: true,
            });
        }


        $('#logo_input').on('change', (e) => {
            $('#image_preview').css({
                'background-image': ``
            });
            const reader = new FileReader();
            const file = e.target.files[0];
            if (!file.type.match('image.*')) {
                swal("Warning", "Please select an image file.", "warning");
                return $('#logo_input').val('');
            }
            reader.onload = function(e) {
                // $('#image_preview').css({'background-image': ``});

                $('#image_preview').css('background-image', `url(${e.target.result})`);
            };
            reader.readAsDataURL(file);
        });

        function SaveClient() {
            $("#submitbtn").prop('disabled', true)
            var formData = new FormData($('#client_form')[0]);
            $.ajax({
                url: "{{ 'ClientInsert' }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: (res) => {
                    $('#client_form')[0].reset();
                    $('#image_preview').css('background-image', `url('')`);
                    $("#submitbtn").prop('disabled', false)
                    if (res.success) {
                        swal("Success!", res.message, "success");
                        GetData();
                    } else {
                        swal("Error!", res.message, "error");
                    }
                }
            }).done(() => {
                $('#client_modal').modal('close')
            });

        }

        function DeleteClient(id) {
            $.get("{{ 'ClientDelete' }}", {
                    id: id
                },
                function(data) {
                    GetData()
                }
            );
        }

        function EditClient(id) {
            $.get("{{ 'ClientFetch' }}", {
                    id: id
                },
                function(data) {
                    Object.keys(data[0]).map((e) => {
                        $(`#${e}`).val(data[0][e])
                    })
                    $('#image_preview').css('background-image',`url({{ url('public/client/') }}/${data[0]['logo']})`);
                    $('#client_modal').modal('show')
                }
            );
        }
    </script>
@endsection
