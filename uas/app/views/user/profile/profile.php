<div class="profile-container">
    <div class="head-title">
        <h1>Profile</h1>
    </div>    
    <div class="top">
        <div class="photo">
            <?php
                $defaultPath = "public/img/profile/profile.jpg";
    
                $profileImagePath = (isset($_SESSION['user_id']) && !empty($data['user']['foto']))
                    ? $data['user']['foto']
                    : $defaultPath;

            ?>
            <img src="<?php echo $profileImagePath; ?>" id="profileImage" class="rounded-circle" alt="Profile Picture">
            <button type="button" class="btn btn-change btn-light" data-bs-toggle="modal" data-bs-target="#EditPhotoProfile">
                Edit Photo Profile
            </button>
            <div class="modal fade" id="EditPhotoProfile" tabindex="-1" aria-labelledby="EditPhoto" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="EditPhoto">Edit Photo Profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo BASEURL; ?>/?controller=Profile&method=upload" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <input class="form-control" type="file" name="profile_image" id="profile_image" accept="image/*" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="deleteProfileImage()" data-bs-dismiss="modal">Delete</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="content-profile shadow-lg">
        <div class="inside-profile">
            <div class="head">
                <h3>Personal Information</h3>
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Edit">
                    Edit data profile
                </button>
            </div>
            <div class="table-info">
                <div class="left-info">
                    <div class="username">
                        <label for="staticEmail"><h5>Username</h5></label>
                        <p><?php echo strip_tags($data['user']['username']); ?></p>
                    </div>
                    <div class="nama">
                        <label for="staticEmail"><h5>Nama</h5></label>
                        <p><?php echo strip_tags($data['user']['nama']); ?></p>
                    </div>
                    <div class="nim">
                        <label for="staticEmail"><h5>Nim</h5></label>
                        <p><?php echo strip_tags($data['user']['nim']); ?></p>
                    </div>
                </div>
                <div class="right-info">
                    <div class="email">
                        <label for="staticEmail"><h5>Email</h5></label>
                        <p><?php echo strip_tags($data['user']['email']); ?></p>
                    </div>
                    <div class="prodi">
                        <label for="staticEmail"><h5>Prodi</h5></label>
                        <p><?php echo strip_tags($data['user']['prodi']); ?></p>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="Edit" tabindex="1" aria-labelledby="EditData" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="EditData">Edit data profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo BASEURL; ?>/?controller=Profile&method=updateProfile" method="post">
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['user']['username']; ?>" name="username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['user']['nama']; ?>" name="nama">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nim</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['user']['nim']; ?>" name="nim">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['user']['email']; ?>" name="email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data['user']['password']; ?>" name="password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back-style">
        
    </div>
</div>