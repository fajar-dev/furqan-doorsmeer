<div class="main-panel">
  <div class="content-wrapper">
    <div class="d-xl-flex justify-content-between align-items-start">
      <h2 class="text-dark font-weight-bold mb-2"> <?php echo $title ?> </h2>
    </div>

   
    <div class="row">
      <div class="col-md-12">
      <?php echo $this->session->flashdata('msg') ?>
        <div class="tab-content tab-transparent-content">
          <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar <?php echo $title ?></h4>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Waktu Cuci</th>
                          <th>Kode Antrian</th>
                          <th>Nama</th>
                          <th>No.HP</th>
                          <th>Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                            foreach($hasil as $data){
                            ?>
                        <tr>
                        <td><label class="badge badge-primary"><?php echo htmlentities($data->tgl, ENT_QUOTES, 'UTF-8');?></label></td>
                          <td><?php echo htmlentities($data->kode, ENT_QUOTES, 'UTF-8');?></td>
                          <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                          <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                          <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?></td>
                        </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">tambah Data Antrian</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form class="forms-sample">
                                    <div class="form-group">
                                      <label for="exampleInputUsername1">Kode Antrian</label>
                                      <input type="text" class="form-control" id="exampleInputUsername1" value="1">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nama</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">No.HP</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" name="hp"  placeholder="No. HP">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputConfirmPassword1">Alamat</label>
                                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="alamat" placeholder="Alamat">
                                    </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial -->
</div>