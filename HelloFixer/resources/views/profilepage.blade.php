

<!--Website: wwww.codingdung.com-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Account Information</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Addresses</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#">Posts</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#">Voucher</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#">Dashboard</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#">payment Methods</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a>
                        <a class="list-group-item list-group-item-action" href="{{ url('/allcategoriesnew') }}">Tasks</a>                            
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User Avatar">
                                    
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <!--<button type="button" class="btn btn-default md-btn-flat">Reset</button>-->
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" value="Salim01">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="Salim Rahaman Dipu">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="salim.dipu@northsouth.edu">
                                    <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Company(if any)</label>
                                    <input type="text" class="form-control" value="HelloFixer Ltd.">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control"
                                        rows="5">My name is Salim Rahaman Dipu, and I am currently studying at North South University. I am in the Department of Electrical and Computer Engineering (ECE), with a major in Computer Science and Engineering (CSE). I completed my Higher Secondary Certificate (HSC) at Dr. Mahbubur Rahman Mollah College.</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="text" class="form-control" value="April 14, 2000">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <select class="custom-select">
                                        <option>Dhaka</option>
                                        <option selected>Munshijanaj</option>
                                        <option>Cumilla</option>
                                        <option>Chittagong</option>
                                        <option>Feni</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+088">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" value>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" value="https://twitter.com/user">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" value="https://www.facebook.com/user">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Google+</label>
                                    <input type="text" class="form-control" value>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value="https://www.instagram.com/user">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <div class="card-body">
                                <button type="button" class="btn btn-twitter">Connect to
                                    <strong>Twitter</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <h5 class="mb-2">
                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                            class="ion ion-md-close"></i> Remove</a>
                                    <i class="ion ion-logo-google text-google"></i>
                                    You are connected to Google:
                                </h5>
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="f9979498818e9c9595b994989095d79a9694">[email&#160;protected]</a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-facebook">Connect to
                                    <strong>Facebook</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-instagram">Connect to
                                    <strong>Instagram</strong></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone...</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone...</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Application</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly service updates</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly progress</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
    <style>/* General body styling */
        body {
            background:  radial-gradient(#fff,#ffd6d6);
            margin-top: 20px;
            font-family: 'Arial', sans-serif;
            color: #343a40; /* Darker text for better readability */
        }
        
        /* Utility classes */
        .ui-w-80 {
            width: 80px !important;
            height: auto;
        }
        
        .text-light {
            color: #6c757d !important; /* Standardized light text color */
        }
        
        /* Button Styles */
        .btn {
            cursor: pointer;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth hover transitions */
        }
        
        .btn-default {
            border-color: rgba(24, 28, 33, 0.1);
            background-color: #fff; /* Neutral background */
            color: #4E5155;
        }
        
        .btn-default:hover {
            background-color: #f8f9fa; /* Light hover effect */
            color: #343a40;
        }
        
        .btn-outline-primary {
            border-color: #26B4FF;
            background-color: transparent;
            color: #26B4FF;
        }
        
        .btn-outline-primary:hover {
            background-color: #26B4FF;
            color: #fff;
        }
        
        /* Social media buttons */
        .btn-facebook {
            border: none;
            background-color: #3B5998;
            color: #fff;
        }
        
        .btn-facebook:hover {
            background-color: #2d4373;
        }
        
        .btn-instagram {
            border: none;
            background-color: #E4405F; /* Instagram brand color */
            color: #fff;
        }
        
        .btn-instagram:hover {
            background-color: #c13584;
        }
        
        /* Card styling */
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: box-shadow 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Subtle hover effect */
        }
        
        /* Row styling */
        .row-bordered {
            overflow: hidden;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid rgba(24, 28, 33, 0.05);
        }
        
        /* Account settings inputs */
        .account-settings-fileinput {
            position: absolute;
            visibility: hidden;
            width: 1px;
            height: 1px;
            opacity: 0;
        }
        
        /* Account settings links */
        .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border: 1px solid rgba(24, 28, 33, 0.05);
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .account-settings-links .list-group-item.active {
            font-weight: bold !important;
            background-color: #26B4FF !important;
            color: #fff !important;
        }
        
        /* Light and Dark styles */
        html:not(.dark-style) .account-settings-links .list-group-item.active {
            background-color: transparent !important;
        }
        
        .light-style .account-settings-links .list-group-item {
            border-color: rgba(24, 28, 33, 0.03) !important;
        }
        
        .light-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
            background-color: #e9ecef !important;
        }
        
        .dark-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(255, 255, 255, 0.1) !important;
            color: #fff;
        }
        
        .dark-style .account-settings-links .list-group-item.active {
            background-color: #343a40;
            color: #fff !important;
        }
        .card-body.media img {
    width: 150px; /* Increase image size */
    height: 150px; /* Set proportional height */
    border-radius: 50%; /* Circular image */
    object-fit: cover; /* Ensures the image covers the entire area without distortion */
    margin-bottom: 15px; /* Adds space between image and any following content */
}
        </style>
</body>

</html>