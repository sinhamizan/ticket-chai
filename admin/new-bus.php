<?php include_once 'partials/header.php' ?>


    <!-- login area start -->
    <section class="login-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="login-title">
              <h3>If you have bus or you have a bus agency, Please login here</h3>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="login">
              <form action="">
                <div class="row">
                  <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="Bus Name" name="bus_name">
                  </div>

                  <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="Bus Register Number" name="register_num">
                  </div>

                  <div class="col-12 mb-3">
                    <textarea name="bus_detail" class="form-control" rows="3" placeholder="Bus Information"></textarea>
                  </div>

                  <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="Bus Owner / Company Name" name="bus_owner">
                  </div>

                  <div class="col-6 mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                  </div>

                  <div class="col-6 mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="passw">
                  </div>

                  <div class="col-6 mb-3">
                    <select name="ac_nonac" class="form-control">
                      <option value="0">AC</option>
                      <option value="1">Non AC</option>
                    </select>
                  </div>

                  <div class="col-6 mb-3 mt-3 offset-3 btn btn-info">
                    <input type="submit" class="form-control" value="Register" name="register_btn">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- login area end -->


<?php include_once 'partials/footer.php' ?>