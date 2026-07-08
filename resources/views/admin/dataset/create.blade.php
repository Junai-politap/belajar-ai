<x-admin>

    <div class="page-wrapper">
        <div class="col-md-12">
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Data Kategori Dokumen</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ url('admin/kategori-dokumen') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Kategori Dokumen</label>
                                            <input type="text" name="nama_kategori" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" name="deskripsi" class="form-control">
                                        </div>

                                       
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-admin>
