<?php
    require('../common/config.php');
    require('../common/essentials.php');
    adminLogin();

    // get settings from database
    if(isset($_POST['get_general'])){
        $q = "SELECT * FROM settings WHERE id=?";
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    // update settings to database
    if(isset($_POST['upd_general'])){
        $frm_data = filteration($_POST);

        $q = "UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `id`=?";
        $values = [$frm_data['site_title'],$frm_data['site_about'],1];
        $res = update($q,$values,"ssi");
        echo $res;
    }

    // update shutdown status to database
    if(isset($_POST['upd_shutdown'])){
        $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0;

        $q = "UPDATE `settings` SET `shutdown`=? WHERE `id`=?";
        $values = [$frm_data,1];
        $res = update($q,$values,"ii");
        echo $res;
    }

    // Get contact details from database
    if(isset($_POST['get_contacts'])){
        $q = "SELECT * FROM contact_details WHERE id=?";
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    // update contact details to database
    if(isset($_POST['upd_contacts'])){
        $frm_data = filteration($_POST);

        $q = "UPDATE `contact_details` SET `address`=?,`g_map`=?,`phone1`=?,`phone2`=?,`email`=?,`ig`=?,`twx`=?,`linkd`=?,`iframe`=? WHERE `id`=?";
        $values = [$frm_data['address'],$frm_data['g_map'],$frm_data['phone1'],$frm_data['phone2'],$frm_data['email'],$frm_data['ig'],$frm_data['twx'],$frm_data['linkd'],$frm_data['iframe'],1];
        $res = update($q,$values,"sssssssssi");
        echo $res;
    }

    // update team members list
    if(isset($_POST['add_member'])){
        $frm_data = filteration($_POST);

        $img_r = uploadImage($_FILES['picture'], ABOUT_FOLDER);

        if($img_r == 'inv_img'){
            echo $img_r;
        } else if($img_r == 'inv_size'){
            echo $img_r;
        } else if($img_r == 'upd_failed') {
            echo $img_r;
        } else {
            $q = "INSERT INTO `team_members`(`name`, `image`) VALUES(?,?)";
            $values = [$frm_data['name'],$img_r];
            $res = insert($q,$values,"ss");
            echo $res;
        }
    }

    // get team members
    if(isset($_POST['get_members'])){
        $res = selectAll('team_members');

        while($row = mysqli_fetch_assoc($res)){
            $path = ABOUT_IMG_PATH;
            echo <<<data
                <div class="col-md-2 mb-3">
                    <div class="card text-white bg-dark">

                        <img src="$path$row[image]" class="card-img" alt="...">

                        <div class="card-img-overlay text-end">
                            <button type="button" onclick="del_member($row[id])" class="btn btn-danger btn-sm shadow-none">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </div>

                        <p class="card-text text-center px-3 py-2">$row[name]</p>

                    </div>
                </div>
            data;
        }
    }

    // delete team member
    if(isset($_POST['del_member'])){
        $frm_data = filteration($_POST);
        $values = [$frm_data['del_member']];

        $pre_q = "SELECT * FROM `team_members` WHERE `id`=?";
        $res = select($pre_q,$values,'i');
        $img = mysqli_fetch_assoc($res);

        if (deleteImage($img['image'], ABOUT_FOLDER)) {
            $q = "DELETE FROM `team_members` WHERE `id`=?";
            $res = delete($q, $values, 'i');
            echo $res;
        } else {
            echo "Failed to delete image";
        }        
    }