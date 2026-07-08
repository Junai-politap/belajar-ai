<x-admin>
    <div class="page-wrapper">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/dataset/create') }}" class="btn btn-primary float-right">
                        <span class="fa fa-plus"></span> Tambah Kategori</a>
                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <span class="fa fa-upload"></span> Import Excel
                    </button>

                    <h5>Data Set Training</h5>

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
                            <form action="{{ url('admin/dataset/import') }}" method="POST"
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
                                    <th>Nama Kategori</th>
                                    <th>Judul</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_dataset as $dataset)
                                    <tr class="text-center">
                                        <td>{{ $list_dataset->firstItem() + $loop->index }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ url('admin/kategori-dokumen/' . $dataset->id . '/show') }}"
                                                    class="btn btn-md btn-info">Lihat</a>
                                                <a href="{{ url('admin/kategori-dokumen/' . $dataset->id . '/edit') }}"
                                                    class="btn btn-md btn-warning">Edit</a>
                                                <form action="{{ url('admin/kategori-dokumen/' . $dataset->id) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-md btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus dataset ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $dataset->kategoridokumen->nama_kategori }}</td>
                                        <td>{{ $dataset->judul }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-3">
                            {{ $list_dataset->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
