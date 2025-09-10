
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="/assets/theme/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-10">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#"> <h4>Silahkan Login</h4></a>
    <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('enter.store') }}">
    @csrf
      <div class="form-group mb-4">
        <label for="name" class="mb-2">Name</label>
        <input type="name" id="name" class="form-control" placeholder="Name" name="name" required>
        @error('name')
                <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label for="email" class="mb-2">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email" name="email" required>
        @error('email')
                <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label for="password" class="mb-2">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
         @error('password')
                <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label for="role" class="mb-2">Role</label>
        <select class="form-control" id="role" name="role" required>
            <option value="kepala_dinas">Kepala Dinas</option>
            <option value="kepala_bidang">Kepala Bidang</option>
            <option value="staff">Staff</option>
        </select>
    </div>
    <button type="submit" class="btn login-form__btn submit w-100">Enter</button>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/assets/theme/plugins/common/common.min.js"></script>
    <script src="/assets/theme/js/custom.min.js"></script>
    <script src="/assets/theme/js/settings.js"></script>
    <script src="/assets/theme/js/gleek.js"></script>
    <script src="/assets/theme/js/styleSwitcher.js"></script>
</body>
</html>






