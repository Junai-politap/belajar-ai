<x-admin>
    <div class="page-wrapper">

        <div class="container-fluid">

            <!-- Judul -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <h3 class="fw-bold">
                        <i class="fas fa-brain text-primary"></i>
                        Training Model Naive Bayes
                    </h3>
                    <p class="text-muted">
                        Halaman untuk melakukan training model klasifikasi dokumen menggunakan algoritma Naive Bayes.
                    </p>
                </div>
            </div>

            <!-- Card Informasi -->
            <div class="row">

                <div class="col-md-3 mb-3">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-database fa-3x text-primary mb-3"></i>

                            <h2 class="fw-bold">
                                {{ $jumlahDataset }}
                            </h2>

                            <p class="text-muted mb-0">
                                Jumlah Dataset
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">

                            <i class="fas fa-chart-line fa-3x text-success mb-3"></i>

                            <h2 class="fw-bold text-success">
                                {{ $model->akurasi ?? 0 }} %
                            </h2>

                            <p class="text-muted mb-0">
                                Akurasi
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">

                            <i class="fas fa-check-circle fa-3x text-warning mb-3"></i>

                            <h2 class="fw-bold text-warning">
                                {{ $model->presisi ?? 0 }} %
                            </h2>

                            <p class="text-muted mb-0">
                                Presisi
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">

                            <i class="fas fa-sync-alt fa-3x text-danger mb-3"></i>

                            <h2 class="fw-bold text-danger">
                                {{ $model->recall ?? 0 }} %
                            </h2>

                            <p class="text-muted mb-0">
                                Recall
                            </p>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Informasi Model -->
            <div class="card shadow mt-3">

                <div class="card-header bg-primary text-white">

                    <h5 class="mb-0">
                        Informasi Model Naive Bayes
                    </h5>

                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>
                            <th width="30%">Nama Model</th>
                            <td>{{ $model->nama_model ?? '-' }}</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>

                                @if (isset($model))

                                    @if ($model->status == 'Aktif')
                                        <span class="badge bg-success">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="badge bg-danger">
                                            Tidak Aktif
                                        </span>
                                    @endif

                                @endif

                            </td>
                        </tr>

                        <tr>
                            <th>Lokasi Model</th>
                            <td>{{ $model->lokasi_model ?? '-' }}</td>
                        </tr>

                        <tr>
                            <th>Terakhir Training</th>
                            <td>{{ $model->updated_at ?? '-' }}</td>
                        </tr>

                    </table>

                </div>

            </div>

            <!-- Tombol -->
            <div class="mt-4 mb-4">
                <form action="{{ url('admin/model-neive-bayes/mulai') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary btn-lg">

                        <i class="fas fa-play"></i>

                        Mulai Training Model

                    </button>
                </form>

                {{-- <a href="#" class="btn btn-success btn-lg">

                    <i class="fas fa-download"></i>

                    Download Model

                </a> --}}

            </div>

            <!-- Riwayat -->
            <div class="card shadow">

                <div class="card-header">

                    <h5 class="mb-0">

                        Riwayat Training

                    </h5>

                </div>

                <div class="card-body">

                    <table class="table table-striped">

                        <thead>

                            <tr>

                                <th>No</th>

                                <th>Nama Model</th>

                                <th>Dataset</th>

                                <th>Akurasi</th>

                                <th>Presisi</th>

                                <th>Recall</th>

                                <th>Status</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($riwayat as $item)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $item->nama_model }}</td>

                                    <td>{{ $item->jumlah_dataset }}</td>

                                    <td>{{ $item->akurasi }} %</td>

                                    <td>{{ $item->presisi }} %</td>

                                    <td>{{ $item->recall }} %</td>

                                    <td>

                                        @if ($item->status == 'Aktif')
                                            <span class="badge bg-success">

                                                Aktif

                                            </span>
                                        @else
                                            <span class="badge bg-secondary">

                                                Tidak Aktif

                                            </span>
                                        @endif

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7" class="text-center">

                                        Belum ada data training.

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
</x-admin>
