<?php
    require('common/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>General Settings | Admin | MTC Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- External Links -->
    <?php include "common/links.php" ?>
</head>
<body class="bg-white">

    <?php include "common/header.php"?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <h3 class="mb-4">WEBAPP SETTINGS</h3>

                <!-- App Management Settings -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#generalS">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Website Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                    <!-- App Management Settings Modal -->
                    <div class="modal fade" id="generalS" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                        
                        <div class="modal-dialog">

                            <form id="general_s_form">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">General Settings</h1>
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Website Title</label>
                                            <input name="site_title" id="site_title_input" type="text" class="form-control shadow-none" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">About</label>
                                            <textarea name="site_about" id="site_about_input" class="form-control shadow-none" rows="6" required></textarea>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>

                                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                    </div>

                                </div>

                            </form>

                        </div>
                        

                    </div>
                    <!-- End of App Management Settings Modal -->

                <!-- End of App Management Settings -->

                <!-- Shutdown Settings -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            NOTE: Customers won't be allowed to book any room during the shutdown period.
                        </p>
                        
                    </div>
                </div>
                <!-- End of Shutdown Settings -->

                <!-- Contact Us Details Settings -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Us Details Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contactS">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address/Locate Us</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="g_map"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-outbound-fill"></i>
                                        <span id="phone1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-whatsapp"></i>
                                        <span id="phone2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Email</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Media Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="ig"></span>
                                    </p>
                                    <p class="card-tex mb-1">
                                        <i class="bi bi-twitter-x me-1"></i>
                                        <span id="twx"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-linkedin me-1"></i>
                                        <span id="linkd"></span>
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                    <!-- Contact Details Settings Modal -->
                    <div class="modal fade" id="contactS" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        
                        <div class="modal-dialog modal-lg">

                            <form id="contact_s_form">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Contact Us Details</h1>
                                    </div>

                                    <div class="modal-body">

                                        <div class="container-fluid p-0">
                                            <div class="row">

                                                <div class="col-md-6">

                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Location/Address</label>
                                                        <input type="text" name="address" id="address_input" class="form-control shadow-none" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Google Map Link</label>
                                                        <input type="text" name="g_map" id="g_map_input" class="form-control shadow-none" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Phone Numbers (with country code)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-telephone-outbound-fill"></i></span>
                                                            <input type="text" name="phone1" id="phone1_input" class="form-control shadow-none" required>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
                                                            <input type="text" name="phone2" id="phone2_input" class="form-control shadow-none">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Email</label>
                                                        <input type="email" name="email" id="email_input" class="form-control shadow-none" required>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Social Links</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                            <input type="text" name="ig" id="ig_input" class="form-control shadow-none" required>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-twitter-x"></i></span>
                                                            <input type="text" name="twitter" id="twx_input" class="form-control shadow-none">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-linkedin"></i></span>
                                                            <input type="text" name="linkedin" id="linkd_input" class="form-control shadow-none">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">iFrame</label>
                                                        <textarea name="iframe" id="iframe_input" class="form-control shadow-none" rows="8" required></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" onclick="contacts_input(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>

                                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                    <!-- End of Contact Details Settings Modal -->

                <!-- End of Contact Us Details Settings -->

                <!-- Management Team Settings -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Management Team Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#teamS">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="row" id="team-data">
                        </div>

                    </div>
                </div>

                    <!-- Management Team Settings Modal -->
                    <div class="modal fade" id="teamS" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            
                        <div class="modal-dialog">

                            <form id="team_s_form">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Management Team</h1>
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                            <input name="member_name" id="member_name_input" type="text" class="form-control shadow-none" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Picture</label>
                                            <input name="member_picture" id="member_picture_input" type="file" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" onclick="member_name.value='', member_picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>

                                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                    </div>

                                </div>

                            </form>

                        </div>


                    </div>
                    <!-- End of Management Team Settings Modal -->

                <!-- End of Management Team Settings -->

            </div>
        </div>
    </div>

    <?php include "common/scripts.php" ?>
    
    <script>
        let general_data, contacts_data;

        let general_s_form = document.getElementById('general_s_form');
        let site_title_input = document.getElementById('site_title_input');
        let site_about_input = document.getElementById('site_about_input');

        let contact_s_form = document.getElementById('contact_s_form');

        let team_s_form = document.getElementById('team_s_form');
        let member_name_input = document.getElementById('member_name_input');
        let member_picture_input = document.getElementById('member_picture_input');

        // function to get general settings data
        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_input.value = general_data.site_title;
                site_about_input.value = general_data.site_about;

                if(general_data.shutdown == 0){
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } else{
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }

            xhr.send('get_general');
        }

        general_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_general(site_title_input.value,site_about_input.value);
        });

        // function to update website
        function upd_general(site_title_value,site_about_value) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function() {

                var myModalEl = document.getElementById('generalS');
                var modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
                modal.hide();
                
                if(this.responseText == 1){
                    alert('success','Site Title/About updated successfully!');
                    get_general();
                } else{
                    alert('error','No changes made to Site Title/About!');
                }
            }

            xhr.send('site_title='+site_title_value+'&site_about='+site_about_value+'&upd_general');
        }

        // function to shutdown website
        function upd_shutdown(val){
            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function() {
                if(this.responseText == 1 && general_data.shutdown == 0){
                    alert('success','Shutdown mode activated successfully!');
                } else{
                    alert('success','Shutdown mode deactivated successfully!');
                }
                get_general();
            }

            xhr.send('upd_shutdown='+val);
        }


        // function to get contact details data
        function get_contacts() {

            let contacts_p_id = ['address', 'g_map', 'phone1', 'phone2', 'email', 'ig', 'twx', 'linkd'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function() {
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for(i=0;i<contacts_p_id.length;i++) {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
                }
                iframe.src = contacts_data[9];
                contacts_input(contacts_data);
            }

            xhr.send('get_contacts');
        }

        function contacts_input(data){
            let contacts_input_id = ['address_input', 'g_map_input', 'phone1_input', 'phone2_input', 'email_input', 'ig_input', 'twx_input', 'linkd_input', 'iframe_input'];

            for(i=0;i<contacts_input_id.length;i++) {
                document.getElementById(contacts_input_id[i]).value = data[i+1];
            }
        }

        contact_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_contacts();
        });

        // function to update contact us details
        function upd_contacts(){
            let index = ['address', 'g_map', 'phone1', 'phone2', 'email', 'ig', 'twx', 'linkd', 'iframe'];
            let contacts_input_id = ['address_input', 'g_map_input', 'phone1_input', 'phone2_input', 'email_input', 'ig_input', 'twx_input', 'linkd_input', 'iframe_input'];

            let data_str="";

            for(i=0;i<index.length;i++){
                data_str += index[i] + "=" + document.getElementById(contacts_input_id[i]).value + '&';
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function(){
                var myModalEl = document.getElementById('contactS');
                var modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
                modal.hide();

                if(this.responseText == 1){
                    alert('success','Contacts updated successfully!');
                    get_contacts();
                } else{
                    alert('error','Nothing changed!');
                }
            };

            xhr.send(data_str);
        }
        // end of contact functionality

        // function to add new team member
        team_s_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_member();
        });

        function add_member(){
            let data = new FormData();
            data.append('name', member_name_input.value);
            data.append('picture', member_picture_input.files[0]);
            data.append('add_member', '');

            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);

            xhr.onload = function() {

                var myModalEl = document.getElementById('teamS');
                var modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
                modal.hide();
                
                if(this.responseText == 'inv_img'){
                    alert('error','Only JPG, JPEG, PNG and WEBP Images are allowed!');
                } else if(this.responseText == 'inv_size'){
                    alert('error','Image should not be above 2MB!');
                } else if(this.responseText == 'upd_failed'){
                    alert('error','Image Upload failed, try again later!');
                } else {
                    alert('success', 'New Member Added Successfully!');
                    member_name_input.value ='';
                    member_picture_input.value ='';
                    get_members();
                }
            }

            xhr.send(data);
        }
        // end of team members functionality

        // function to get team members
        function get_members(){

            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('team-data').innerHTML = this.responseText;
            }

            xhr.send('get_members');
        }

        // function to delete team member
        function del_member(val){
            let xhr = new XMLHttpRequest();
            xhr.open('POST',"ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function() {
                if(this.responseText==1){
                    alert('success','Member deleted successfully!');
                    get_members();
                } else {
                    alert('error','Failed to delete member!');
                }
            }

            xhr.send('del_member='+val);
        }

        window.onload = function() {
            get_general();
            get_contacts();
            get_members();
        }
    </script>

</body>
</html>