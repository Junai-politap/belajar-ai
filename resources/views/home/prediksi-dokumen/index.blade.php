<x-admin>
    <div class="page-wrapper">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                     <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <span class="fa fa-upload"></span> Import Excel
                    </button>


                    <h2>Data Prediksi Dokumen</h2>
                    
                </div>

                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import DataSet</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ url('pengguna/prediksi-dokumen/import') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="file" name="file" accept=".xlsx,.xls" class="form-control"
                                        required>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>


                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No </th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Poto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_pengguna as $pengguna)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ url('admin/pengguna/' . $pengguna->id . '/show') }}" class="btn btn-md btn-info">Lihat</a>
                                                <a href="{{ url('admin/pengguna/' . $pengguna->id . '/edit') }}" class="btn btn-md btn-warning">Edit</a>
                                                <form action="{{ url('admin/pengguna/' . $pengguna->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $pengguna->nama }}</td>
                                        <td>{{ $pengguna->email }}</td>
                                        <td>
                                            <img src="{{ url("public/$pengguna->poto") }}" alt="User Image" class="img-fluid" style="width: 30%;">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>

                                       
