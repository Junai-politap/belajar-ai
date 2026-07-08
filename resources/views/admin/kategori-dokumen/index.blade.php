<x-admin>
    <div class="page-wrapper">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/kategori-dokumen/create') }}" class="btn btn-primary float-right"><span
                    class="fa fa-plus"></span> Tambah Kategori</a>


                    <h5>Data Kategori Dokumen</h5>
                    
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No </th>
                                    <th>Aksi</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_kategori_dokumen as $kategori_dokumen)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ url('admin/kategori-dokumen/' . $kategori_dokumen->id . '/show') }}" class="btn btn-md btn-info">Lihat</a>
                                                <a href="{{ url('admin/kategori-dokumen/' . $kategori_dokumen->id . '/edit') }}" class="btn btn-md btn-warning">Edit</a>
                                                <form action="{{ url('admin/kategori-dokumen/' . $kategori_dokumen->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori_dokumen ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $kategori_dokumen->nama_kategori }}</td>
                                        <td>{{ $kategori_dokumen->deskripsi }}</td>
                                        
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

                                       
