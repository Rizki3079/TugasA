<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/auth/loginAdmin.css">
  <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    {{-- <section class="background-login">
                    
        
    </section> --}}
    {{-- <div class="container mt-5" style="display: flex; justify-content:center; "> --}}
    <div class="background-login">
        <div class="row align-items-center">
            <div class="col">
                <img src="admin/dist/img/logoBali2.png" alt="" style="width: 100%">


            </div>
            <div class="col-lg-6">
                <div class="form-box " 
                {{-- style="margin-top: 10%;margin-left:15%;margin-right:15%" --}}>
                    <div class="form-value">
                        <form action="">
                            
                            <h2>Daftar</h2>
                            <div class="inputbox">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="email" required>
                                <label for="">Email</label>
                            </div>
                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="password" required>
                                <label for="">Password</label>
                            </div>
                            <div class="forget">
                                <label for=""><input type="checkbox">Ingat Saya | <a href="#">Lupa Password</a></label>
                              
                            </div>
                            <button>Masuk</button>
                            {{-- <div class="register">
                                <p>Belum Mempunyai Akun? <a href="#">Daftar</a></p>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>