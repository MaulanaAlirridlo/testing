<!DOCTYPE html>
<html lang="en">

<head>

 

        
            
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 flex-row align-items-center justify-content-between">
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control form-control-user" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Username Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control form-control-user" placeholder="Email Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="radio" name="jenis-kelamin" id="lk" value="Laki - Laki">
                      <label for="lk">Laki - Laki</label>
                      <input type="radio" name="jenis-kelamin" id="pr" value="Perempuan">
                      <label for="pr">Perempuan</label>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="agama" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="biografi" id="biografi" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Tambah</button>
                    <?php

                    $name     = @$_GET['name'];
                    $username  = @$_GET['username'];
                    $email    = @$_GET['email'];
                    $jk    = @$_GET['jenis-kelamin'];
                    $agama    = @$_GET['agama'];
                    $biografi    = @$_GET['biografi'];
                    if ($name) {
                      echo "<br><br><strong>Nama : </strong> {$name} <br>";
                    }
                    if ($username) {
                      echo "<strong>Username : </strong> {$username} <br>";
                    }
                    if ($email) {
                      echo "<strong>Email : </strong> {$email} <br>";
                    }
                    if ($jk) {
                      echo "<strong>Jenis Kelamin : </strong> {$jk} <br>";
                    }
                    if ($agama) {
                      echo "<strong>Agama : </strong> {$agama} <br>";
                    }
                    if ($biografi) {
                      echo "<strong>Biografi : </strong> {$biografi} <br>";
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Main Content -->

       
</body>

</html>