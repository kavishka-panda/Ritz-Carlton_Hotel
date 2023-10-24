<!DOCTYPE html>
<html>

<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" href="../hotel_project/images/logo2.png">
</head>

<body class="bookignbg">

  <div class="preloader" id="preloader">
    <div class="loader">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
    <p class="loading-text">Wait for loading...</p>
  </div>

  <div class="navbar2">
    <?php include "header.php"; ?>
  </div>



  <div class="container-fluid">


    <div class="col-12 row justify-content-center py-0"> <img src="../hotel_project/images/logo2.png" class="w-25 d-none d-sm-block" data-aos="flip-left" data-aos-duration="2000" alt="..."> </div>

    <!-- <div class="container-fluid vh-100 d-flex justify-content-center align-items-center"> -->

    <div class="row ">

      <!-- Content -->
      <div class="col-12  px-auto">

        <div class="row second p-4 align-items-center mx-md-2 mb-5 mt-2" data-aos="fade-up" data-aos-duration="1000">
          <div class="col-12 col-lg-7 col-md-7  div2" data-aos="fade-right" data-aos-duration="1000">
            <p class=" text-center fs-2 text1  py-0 my-0 fw-bold">Welcome to <span class="fw-bold name" style="color: #0e7490;">Ritz-Carlton Hotel.</span></p>
            <p class=" text-center p-0 text2 py-0 my-0 ">The Ritz-Carlton Hotel Company, LLC is an American multinational company that operates the luxury hotel chain known as The Ritz-Carlton. The company has 108 luxury hotels and resorts in 30 countries and territories with 29,158 rooms, in addition to 46 hotels with 8,755 rooms planned for the future.</p>
          </div>
          <!-- SignUp Box -->
          <div class="col-12 col-lg-5 col-md-5 d-none " data-aos="fade-left" data-aos-duration="1000" id="signUpBox">
            <div class="col-12 ">
              <p class="fs-5 text1 fw-bold">SignUp</p>
            </div>
            <div class="col-12 d-none" id="msgdiv">
              <div class="alert alert-danger" role="alert" id="msg"></div>
            </div>
            <div class="col-12 d-none">
              <div class="alert alert-danger"></div>
            </div>
            <div class="wave-group col-12 col-lg-12 col-md-12 pb-2 ">
              <input required="" type="text" class="input" id="name">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">N</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">m</span>
                <span class="label-char" style="--index: 3">e</span>
              </label>
            </div>
            <div class="wave-group col-12 col-lg-12 col-md-12 pb-2">
              <input required="" type="password" class="input" id="password">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">P</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">s</span>
                <span class="label-char" style="--index: 4">w</span>
                <span class="label-char" style="--index: 5">o</span>
                <span class="label-char" style="--index: 6">r</span>
                <span class="label-char" style="--index: 7">d</span>
              </label>
            </div>
            <div class="wave-group col-12 col-lg-12 col-md-12 pb-2">
              <input required="" type="text" class="input" id="mobile">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">M</span>
                <span class="label-char" style="--index: 1">o</span>
                <span class="label-char" style="--index: 2">b</span>
                <span class="label-char" style="--index: 3">i</span>
                <span class="label-char" style="--index: 4">l</span>
                <span class="label-char" style="--index: 5">e</span>
              </label>
            </div>
            <div class="wave-group col-12 col-lg-12 col-md-12 pb-2">
              <input required="" type="text" class="input" id="email">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">E</span>
                <span class="label-char" style="--index: 1">m</span>
                <span class="label-char" style="--index: 2">a</span>
                <span class="label-char" style="--index: 3">i</span>
                <span class="label-char" style="--index: 4">l</span>
              </label>
            </div>
            <button class="cta" onclick="signUp();">
              <span class="signuptext">Sign Up</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="cta" onclick="changeView();">
              <span class="signuptext">Go Sign In</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>

          </div>
          <!-- SignUp Box -->


          <!-- SignIn Box -->
          <div class="col-12 col-lg-5 col-md-5" data-aos="fade-l" data-aos-duration="1000" id="signInBox">
            <div class="col-12">
              <p class="fs-5 text1 fw-bold">SignIn</p>
            </div>
            <div class="col-12 d-none" id="msgdiv2">
              <div class="alert alert-danger" role="alert" id="msg2"></div>
            </div>
            <div class="col-12 d-none" id="donediv">
              <div class="alert alert-success" role="alert" id="done"></div>
            </div>
            <div class="wave-group col-12 col-lg-12 col-md-12 pb-2 ">
              <input required="" type="text" class="input" id="email2" placeholder="hello">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">E</span>
                <span class="label-char" style="--index: 1">m</span>
                <span class="label-char" style="--index: 2">a</span>
                <span class="label-char" style="--index: 3">i</span>
                <span class="label-char" style="--index: 4">l</span>
              </label>
            </div>
            <div class="wave-group col-12 col-lg-12 col-md-12 pb-2">
              <input required="" type="password" class="input" id="password2">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">P</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">s</span>
                <span class="label-char" style="--index: 4">w</span>
                <span class="label-char" style="--index: 5">o</span>
                <span class="label-char" style="--index: 6">r</span>
                <span class="label-char" style="--index: 7">d</span>
              </label>
            </div>
            <button class="cta my-3" onclick="signIn();">
              <span class="signuptext">Sign In</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="cta" onclick="changeView();">
              <span class="signuptext">Go Sign Up</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="btn" onclick="changeView2();">forgot password</button>

          </div>
          <!-- SignIn Box -->

          <!-- forgot pw -->
          <div class="col-12 col-lg-5 col-md-5 d-none " data-aos="fade-left" data-aos-duration="1000" id="forgotBox">
            <div class="col-12 ">
              <p class="fs-5 text1 fw-bold">Forgot Password</p>
            </div>
            <div class="col-12 d-none" id="msgdiv">
              <div class="alert alert-danger" role="alert" id="msg"></div>
            </div>
            <div class="col-12 d-none">
              <div class="alert alert-danger"></div>
            </div>
            <div class="wave-group col-12 col-lg-12 col-md-12 pb-2">
              <input required="" type="text" class="input" id="email3">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">E</span>
                <span class="label-char" style="--index: 1">m</span>
                <span class="label-char" style="--index: 2">a</span>
                <span class="label-char" style="--index: 3">i</span>
                <span class="label-char" style="--index: 4">l</span>
              </label>
            </div>
            <button class="cta" onclick="frogotPassword();">
              <span class="signuptext">Send Code</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
            <button class="cta" onclick="changeView2();">
              <span class="signuptext">Go Sign In</span>
              <svg viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>

          </div>
          <!-- forgot pw -->

          <!-- model -->
          <div class="modal" tabindex="-1" id="frogotPasswordModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Reset Password</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col-12 " >
                    <div class="alert alert-success text-success text-center fw-bold" role="alert" >verification code has sent to your email. please check your email</div>
                  </div>
                  <div class="row g-3">
                    <div class="col-6">
                      <label class="form-label">New Password</label>
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" id="inp" />
                        <button class="btn btn-outline-secondary" type="button" id="bnp" onclick="showPassword()"><i id="e1" class="bi bi-eye-slash-fill"></i></button>
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Re-type New Password</label>
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" id="rnp" />
                        <button class="btn btn-outline-secondary" type="button" id="rbnp" onclick="showPassword2();"><i id="e1" class="bi bi-eye-slash-fill"></i></button>
                      </div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Verificarion code</label>
                      <input type="text" class="form-control" id="vc" />
                    </div>
                  </div>



                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="resetpw();">Reset Password</button>
                </div>
              </div>
            </div>
          </div>
          <!-- model -->

          <!-- model2 -->
          <div class="modal" tabindex="-1" id="frogotPasswordModal2">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color: #22c55e;">Your Password is Change Now.</h5>
                  <button type="button" class="btn btn-primary" onclick="done();">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- model2 -->

        </div>
      </div>
      <!-- Content -->
    </div>
  </div>
  <!-- </div> -->
  <div class="">
    <?php include "footer.php"; ?>
  </div>
  <script src="script.js"></script>
  <script src="bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>