<x-admin>

    <div class="page-wrapper">
        <div class="col-md-12">
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Data Pengguna</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ url('admin/pengguna/' . $pengguna->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control"
                                                placeholder="Masukan nama" value="{{ $pengguna->nama }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter email" value="{{ $pengguna->email }}">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="text" name="no_hp" class="form-control"
                                                placeholder="Enter nomor telepon" value="{{ $pengguna->no_hp }}">

                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                placeholder="Enter alamat" value="{{ $pengguna->alamat }}">

                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <img src="{{ url("public/$pengguna->poto") }}" alt="User Image"
                                                        class="img-fluid" style="width: 30%;">
                                                </div>
                                                <div class="col-md-6">

                                                    <input type="file" name="poto" class="form-control"
                                                        accept=".jpg, .png, .jpeg" value="{{ $pengguna->poto }}">
                                                </div>
                                            </div>

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
