<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Tambah Siswa</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Siswa</a></li>
                            <li class="breadcrumb-item active">Tambah Siswa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Informasi Siswa <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>NIS <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan NIS">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nama Siswa <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Nama">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Jurusan <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Jurusan">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Jenis Kelamin <span class="login-danger">*</span></label>
                                        <select class="form-control select">
                                            <option>Pilih Jenis Kelamin</option>
                                            <option>Laki - Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tempat Lahir </label>
                                        <input class="form-control" type="text" placeholder="Isikan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>Tanggal Lahir <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Agama <span class="login-danger">*</span></label>
                                        <select class="form-control select">
                                            <option>Pilih Agama</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Konghucu</option>
                                            <option>Lainya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Kelas <span class="login-danger">*</span></label>
                                        <select class="form-control select">
                                            <option>Silahkan Pilih Kelas</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>No HP <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Nomor HP">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="form-group local-forms">
                                        <label>Alamat <span class="login-danger">*</span></label>
                                        <textarea name="alamat" cols="39" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>