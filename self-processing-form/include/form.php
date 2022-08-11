<!-- FORM STart -->
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <!-- HEADING -->
                <h1 class="mb-3 text-center fw-bolder">Login</h1>
                <p class="text-center text-muted mb-5">Isi alamat email dan kata sandi anda</p>

                <!-- ALAMATEMAIL -->
                <div class="form-group mb-3">
                    <label for="alamat-email" class="form-label text-muted">Alamat Email</label>
                    <input type="email" id="alamat-email" name="email" placeholder="Alamat Email ..." class="form-control form-control-lg">
                </div>

                <!-- KATA SANDI -->
                <div class="form-group">
                    <label for="kata-sandi" class="form-label text-muted">Kata Sandi</label>
                    <input type="password" id="kata-sandi" name="password" placeholder="Kata Sandi ..." class="form-control form-control-lg">
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-lg btn-primary"> Login</button>
                </form>