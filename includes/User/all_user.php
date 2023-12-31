<div class="container-fluid content_part">
            <div class="row">
                <div class="col-md-2 sidebar_part">
                    <div class="user_part">
                        <img class="" src="images/avatar.png" alt="avatar"/>
                        <h5>Saidul Islam Uzzal</h5>
                        <p><i class="fas fa-circle"></i> Online</p>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
                            <li><a href="all_user.php"><i class="fas fa-user-circle"></i> Users</a></li>
                            <li><a href="#"><i class="fas fa-images"></i> Banner</a></li>
                            <li><a href="#"><i class="fas fa-comments"></i> Contact Message</a></li>
                            <li><a href="#"><i class="fas fa-globe"></i> Live Site</a></li>
                            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 content">
                    <div class="row">
                        <div class="col-md-12 breadcumb_part">
                            <div class="bread">
                                <ul>
                                    <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                                    <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>                             
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8 card_title_part">
                                        <i class="fab fa-gg-circle"></i>All User Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="add_user.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    
                                    <tr>
                                    <th>Id</th>
                                      <th>Name</th>
                                      <th>Phone</th>
                                      <th>Email</th>
                                      <th>Username</th>
                                      <th>Role</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                  <?php 
                                  $i=1;
                                  $sel="SELECT * FROM users ORDER BY user_id DESC";
                                  $Q=mysqli_query($con,$sel);
                                  while ($data=mysqli_fetch_assoc($Q)) {
                                    $id = $i <= 9 ? '0' . $i : $i;
                                   
                                  
                                  ?>
                                    <tr>
                                    <td><?= $id ?></td>
                                      <td><?php echo $data['user_name']; ?></td>
                                      <td><?php echo $data['user_phone']; ?></td>
                                      <td><?php echo $data['user_email'] ?></td>
                                      <td><?php echo $data['user_username'] ?></td>
                                      <td>---</td>
                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="view_user.php?v=<?=$data['user_id']; ?>">View</a></li>
                                              <li><a class="dropdown-item" href="edit_user.php">Edit</a></li>
                                              <li><a class="dropdown-item" href="delete_user.php?d=<?=$data['user_id']; ?>">Delete</a></li>
                                            </ul>
                                          </div>
                                      </td>
                                    </tr>
                                      <?php
                                        $i++;
                                    }?>
                                   
                                   
                                  
                                  </tbody>
                                </table>
                              </div>
                              <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Button group">
                                  <button type="button" class="btn btn-sm btn-dark">Print</button>
                                  <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                                  <button type="button" class="btn btn-sm btn-dark">Excel</button>
                                </div>
                              </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>