<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="{{url('frontend/styles/Login.css')}}" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-2">
                  <div class="text-center">
                    <img src="data:image/png;base64,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" style="width: 185px" alt="logo" />
                    <h4 class="mt-1 mb-2 pb-1">
                      Register as a Voter with us!
                    </h4>
                  </div>

                  <p></p>
                  <form method="POST" action="/VoterReg">
                    @csrf

                    <div class="form-outlined mb-4">
                      <!-- <label class="form-label" for="form2Example11">Username</label> -->
                      <input type="text" name="name" value="" id="form2Example11" class="form-control" placeholder="Full Name (same as in documents)" />
                      <span style="color:red">@error('name'){{$message}} @enderror</span>

                    </div>
                    <div class="form-outlined mb-4">
                      <!-- <label class="form-label" for="form2Example11">Username</label> -->
                      <input type="text" id="form2Example11" class="form-control" name="cnic" placeholder="CNIC number (without spaces)" />
                      <span style="color:red">@error('cnic'){{$message}} @enderror</span>

                    </div>
                    <div class="form-outlined mb-4">
                      <!-- <label class="form-label" for="form2Example11">Username</label> -->
                      <input type="email" id="form2Example11" class="form-control" placeholder="email" name="email" />
                      <span style="color:red">@error('email'){{$message}} @enderror</span>

                    </div>
                    <div class="form-outlined mb-4">
                      <!-- <label class="form-label" for="form2Example11">Username</label> -->
                      <input type="number" id="form2Example11" class="form-control" placeholder="mobile number" name="phone" />
                      <span style="color:red">@error('phone'){{$message}} @enderror</span>


                    </div>

                    <div class="form-outlined mb-4">
                      <!-- <label class="form-label" for="form2Example22">Password</label> -->
                      <input type="password" placeholder="password" id="form2Example22" class="form-control" name="password" />
                      <span style="color:red">@error('password'){{$message}} @enderror</span>

                    </div>

                    <div class="text-center pt-1 mb-2 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">
                        Register
                      </button>
                      <a class="text-muted" href="{{'/'}}">Goto Homepage</a>

                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Already registed?</p>
                      <button type="button" class="btn btn-outline-danger">
                        <a href="{{'/VoterLogin'}}" class="text-danger">Login now! </a>
                      </button>
                    </div>
                  </form>


                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-start gradient-custom-2">
                <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                  <img src="{{url('frontend/assets/voterReg.jpeg')}}" class="imageVot" alt="logo" width="350px" height="450px" />
                  <h4 class="mt-4">
                    To Vote is your Right!
                  </h4>
                  <p class="small mb-0">
                    Every single vote counts. So do get yourself registered and vote to make the difference.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>