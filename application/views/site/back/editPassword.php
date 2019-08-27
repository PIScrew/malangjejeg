<div class="container-fluid" data-codepage="<?= $codepage?>">

    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body text-center">
                    <div class="profile-pic m-b-20 m-t-20">
                        <img src="<?= img_url($useradmin['img_path'])?>" width="150" class="rounded-circle" alt="user">
                        <h4 class="m-t-20 m-b-0"><?= $useradmin['fullname']?></h4>
                        <a href="mailto:<?= $useradmin['email']?>"><?= $useradmin['email']?></a>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-rounded"><i class="fa fa-uncheck"  ><?php if ($useradmin['is_ban'] == 1) echo"Terverifikasi"; else echo"Dinonaktifkan"; ?></i></button>
                </div>
                <div class="p-25 border-top m-t-15">
                    <div class="row text-center">
                    <?php if($useradmin['is_ban']== 0 ){?>
                        <div class="col-6 border-right">
                             <a class="link d-flex align-items-center justify-content-center font-medium" href="<?php echo base_url('admin/User/aktifAdmin/'.$useradmin['id_useradmin'])?>"><i
                                    class="mdi mdi-developer-board font-20 m-r-5"></i> Aktifkan</a> 
                        </div> 
                    <?php } ?>   
                    <?php if($useradmin['is_ban']== 1 ){?>
                        <div class="col-6 ">
                             <a  class="link d-flex align-items-center justify-content-center font-medium" href="<?php echo base_url('admin/User/banAdmin/'.$useradmin['id_useradmin'])?>" ><i
                                    class="mdi mdi-developer-board font-20 m-r-5"></i>Non Aktifkan</a>
                        </div>
                        <?php } ?>  
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tabs -->
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link  active show" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Profile</a>
                    </li>
                    <?php if ($useradmin['id_useradmin'] == $_SESSION['id']):?>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month"
                            role="tab" aria-controls="pills-setting" aria-selected="true">Change Password</a>
                    </li>
                    <?php endif;?>
                </ul>
                <!-- Tabs -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="pname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled value="<?= $useradmin['username']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ename" class="col-sm-3 text-right control-label col-form-label">Fullname</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled placeholder="Nama Lengkap" id="fullname" name="fullname" value="<?= $useradmin['fullname']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rate" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled placeholder="Email" value="<?= $useradmin['email']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stime" class="col-sm-3 text-right control-label col-form-label">Telegram</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled placeholder="Telegram" value="<?= $useradmin['telegram']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="etime" class="col-sm-3 text-right control-label col-form-label">Whatsapp</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled placeholder="Whatsapp" value="<?= $useradmin['whatsapp']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="etime" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled placeholder="No Handphone" value="<?= $useradmin['phone']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="etime" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                        
                                            <input type="text" class="form-control" disabled placeholder="Gender" value=" <?php if ($useradmin['gender'] == 1) echo"Laki-Laki"; else echo"Perempuan"; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="note1" class="col-sm-3 text-right control-label col-form-label">Terdaftar</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" disabled placeholder="Nama Lengkap" value="<?= tgl_indo($useradmin['created_at'])?>">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                    <div class="tab-pane fade " id="previous-month" role="tabpanel"
                        aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form class="form-horizontal form-material"  id="editPassword" method="post" action="<?php echo base_url('admin/user/editPasswordAct/'.$useradmin['id_useradmin'])?>">
                        
                             
                                <div class="form-group">
                                    <label class="col-md-12"> New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="newPassword"  class="form-control form-control-line">
                                        <?php echo form_error('newPassword'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12"> Try New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="tryNewPassword"  class="form-control form-control-line">
                                        <?php echo form_error('tryNewPassword'); ?>
                                    </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submit"  class="btn btn-success" >Update Password</button>
                                    </div>
                                </div>
                                </form>  
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</div>