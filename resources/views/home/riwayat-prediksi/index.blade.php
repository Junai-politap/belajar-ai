<x-home>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row mb-4">

            <div class="col-md-12">

                <h3 class="fw-bold">
                    <i class="fas fa-file-upload text-primary"></i>
                    Prediksi Dokumen
                </h3>

                <p class="text-muted">
                    Upload dokumen untuk dilakukan klasifikasi menggunakan algoritma Naive Bayes.
                </p>

            </div>

        </div>

        <div class="row">

            <!-- Upload -->
            <div class="col-lg-7">

                <div class="card shadow border-0">

                    <div class="card-header bg-primary text-white">

                        <h5 class="mb-0">
                            Upload Dokumen
                        </h5>

                    </div>

                    <div class="card-body">

                        <form action="{{ url('pengguna/riwayat-prediksi') }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="mb-3">

                                <label class="form-label">
                                    Pilih Dokumen
                                </label>

                                <input
                                    type="file"
                                    class="form-control"
                                    name="nama_file"
                                    accept=".pdf,.doc,.docx"
                                    required>

                            </div>

                            <div class="alert alert-light border">

                                <h6>Keterangan</h6>

                                <ul class="mb-0">

                                    <li>Format : PDF / DOC / DOCX</li>

                                    <li>Maksimal ukuran file 10 MB</li>

                                    <li>Dokumen akan diproses menggunakan algoritma Naive Bayes.</li>

                                </ul>

                            </div>

                            <button
                                class="btn btn-primary">

                                <i class="fas fa-search"></i>

                                Prediksi Sekarang

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Informasi -->
            <div class="col-lg-5">

                <div class="card shadow border-0">

                    <div class="card-header bg-success text-white">

                        <h5 class="mb-0">
                            Informasi
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <strong>Algoritma</strong>

                            <p class="text-muted">
                                Naive Bayes
                            </p>

                        </div>

                        <div class="mb-3">

                            <strong>Dataset Training</strong>

                            <p class="text-primary fw-bold">
                                {{ $jumlahDataset }} Dokumen
                            </p>

                        </div>

                        <div class="mb-3">

                            <strong>Kategori Dokumen</strong>

                            <p class="text-success fw-bold">
                                {{ $jumlahKategori }}
                            </p>

                        </div>

                        <div>

                            <strong>Status Model</strong>

                            <br>

                            @if($model)

                                <span class="badge bg-success">
                                    Aktif
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Belum Training
                                </span>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @isset($hasil)

        <div class="row mt-4">

            <div class="col-md-12">

                <div class="card shadow border-0">

                    <div class="card-header bg-info text-white">

                        <h5 class="mb-0">
                            Hasil Prediksi
                        </h5>

                    </div>

                    <div class="card-body">

                        <table class="table table-bordered">

                            <tr>

                                <th width="25%">
                                    Nama File
                                </th>

                                <td>
                                    {{ $hasil['nama_file'] }}
                                </td>

                            </tr>

                            <tr>

                                <th>
                                    Hasil Prediksi
                                </th>

                                <td>

                                    <span class="badge bg-primary fs-6">

                                        {{ $hasil['kategori'] }}

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <th>
                                    Confidence
                                </th>

                                <td>

                                    {{ $hasil['confidence'] }} %

                                </td>

                            </tr>

                            <tr>

                                <th>
                                    Tanggal
                                </th>

                                <td>

                                    {{ now()->format('d F Y H:i') }}

                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>

        </div>

        @endisset

    </div>

</div>

</x-home>