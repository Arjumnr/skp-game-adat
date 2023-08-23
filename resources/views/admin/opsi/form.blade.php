<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Input Pertanyaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="formID" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="data_id" id="data_id">

                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="pertanyaan_id" class="form-label">Pertanyaan</label>
                            <select class="form-select" id="pertanyaan_id" name="pertanyaan_id"
                                aria-label="Default select example">
                                <option selected disabled>---Pilih Pertanyaan---</option>
                                @foreach ($pertanyaan as $item)
                                    <option value="{{ $item->id }}">{{ $item->pertanyaan }}</option>
                                @endforeach
                            </select>
                            <div class="col mb-3 text-center">
                                <img src="" alt="" id="image" width="100px">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="opsi1" class="form-label">Opsi 1</label>
                            <input type="text" class="form-control" id="opsi1" name="opsi1" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="opsi2" class="form-label">Opsi 2</label>
                            <input type="text" class="form-control" id="opsi2" name="opsi2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="opsi3" class="form-label">Opsi 3</label>
                            <input type="text" class="form-control" id="opsi3" name="opsi3" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="opsi4" class="form-label">Opsi 4</label>
                            <input type="text" class="form-control" id="opsi4" name="opsi4" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="jawaban" class="form-label">Jawaban</label>
                            <select class="form-select" id="jawaban" name="jawaban"
                                aria-label="Default select example">
                                <option selected disabled>---Pilih Jawaban---</option>
                                <option value="opsi1">Opsi 1</option>
                                <option value="opsi2">Opsi 2</option>
                                <option value="opsi3">Opsi 3</option>
                                <option value="opsi4">Opsi 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" id="btnSave" name="btnSave">Save
                            Changes</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {

            //jika pertanyaaan dipilih maka gambar akan muncul
            $('#pertanyaan_id').change(function() {
                var id = $(this).val();
                console.log(id);
                $.ajax({
                    url: "{{ route('opsi') }}" + '/' + id,
                    type: "GET",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('#image').attr('src', "{{ URL::to('/') }}/img/" + data.path_image);
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                })
            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('opsi') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'get_pertanyaan.pertanyaan',
                        name: 'get_pertanyaan.pertanyaan'
                    },
                    {
                        data: 'get_pertanyaan.level',
                        name: 'get_pertanyaan.level'
                    },
                    {
                        data: 'get_pertanyaan.path_image',
                        name: 'get_pertanyaan.path_image',
                        render: function(data, type, full, meta) {
                            return "<img src={{ URL::to('/') }}/img/" + data +
                                " width='70' class='img-thumbnail' />";
                        },
                    },
                    {
                        data: 'opsi1',
                        name: 'opsi1'
                    },
                    {
                        data: 'opsi2',
                        name: 'opsi2'
                    },
                    {
                        data: 'opsi3',
                        name: 'opsi3'
                    },
                    {
                        data: 'opsi4',
                        name: 'opsi4'
                    },
                    {
                        data: 'jawaban',
                        name: 'jawaban'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            if ($.fn.dataTable.isDataTable('#example')) {
                table = $('#example').DataTable();
            } else {
                table = $('#example').DataTable({
                    "ajax": "{{ route('opsi') }}",
                    "columns": [{
                            "data": "DT_RowIndex"
                        },
                        {
                            "data": "get_pertanyaan.pertanyaan"
                        },
                        {
                            "data": "opsi1"
                        },
                        {
                            "data": "opsi2"
                        },
                        {
                            "data": "opsi3"
                        },
                        {
                            "data": "opsi4"
                        },
                        {
                            "data": "jawaban"
                        },
                        {
                            "data": "action"
                        },
                    ]
                });
            }

            $('#btnADD').click(function() {
                $('#btnSave').html('Simpan');
                $('#data_id').val('');
                $('#formID').trigger("reset");
                //image reset 
                $('#image').attr('src', "{{ URL::to('/') }}/img/" + '');
                $('#modalHeading').html("Tambah Data ");
            });


            $('body').on('click', '.edit', function() {
                //reset
                $('#formID').trigger("reset");

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#btnSave').html('Update Data')

                var data_id = $(this).data('id');
                $.get("{{ route('opsi') }}" + '/' + data_id + '/edit', function(data) {
                    console.log("data id = " + data.id);
                    $('#modalHeading').html("Edit User");
                    $('#btnSave').val("edit-data");
                    $('#basicModal').modal('show');
                    $('#data_id').val(data_id);
                    $('#pertanyaan_id').val(data.pertanyaan_id).trigger('change');
                    $('#opsi1').val(data.opsi1);
                    $('#opsi2').val(data.opsi2);
                    $('#opsi3').val(data.opsi3);
                    $('#opsi4').val(data.opsi4);
                    $('#jawaban').val(data.jawaban).trigger('change');

                })

            });

            $('#btnSave').click(function(e) {
                e.preventDefault();
                var formData = $('#formID').serialize();

                $.ajax({
                    data: formData,
                    url: "{{ route('opsi.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);

                        $('#formID').trigger("reset");
                        $('#basicModal').modal('hide');
                        $('.modal-backdrop').remove();

                        if (data.status == 'success') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Berhasil',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                table.draw();
                            })
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Gagal',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                table.draw();

                            })
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                })
            });



            $('body').on('click', '.delete', function() {

                var id = $(this).data("id");
                console.log(id);
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang d dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus data!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log(id);
                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('opsi.store') }}" + '/' + id,
                            dataType: 'json',

                            success: function(data) {
                                console.log(data);
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Data berhasil dihapus',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    table.draw();
                                })
                            },
                            error: function(data) {
                                console.log('Error:', data);
                                Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: 'Data gagal dihapus',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })

                    }
                })
            });






        });
    </script>
@endpush
