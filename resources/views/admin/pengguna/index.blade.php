<x-admin>
    <div class="page-wrapper">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/pengguna/create') }}" class="btn btn-primary float-right"><span
                    class="fa fa-plus"></span> Tambah Pengguna</a>


                    <h2>Data Pengguna</h2>
                    
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
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('admin/pengguna/1/edit') }}" class="btn btn-md btn-info">Lihat</a>
                                            <a href="{{ url('admin/pengguna/1/edit') }}" class="btn btn-md btn-warning">Edit</a>
                                            <form action="{{ url('admin/pengguna/1') }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>
                                        <img src="{{ url('public/admin') }}/assets/images/user/avatar-1.jpg" alt="User Image" class="img-fluid" style="width: 30%;">
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
