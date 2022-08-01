<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Voter Dashboard</title>
  <link rel="stylesheet" href="{{url('frontend/styles/dashboard.css')}}" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
 
  @foreach( $voters as $voter)
  @if($voter->cnic == $Vcnic)
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <img src="{{url('frontend/assets/logo.png')}}" width="150" height="50" />
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end">
        <li></li>
      </ul>
    </div>
    <div class="AdminAvtar">
      <p class="log">
        <a href="{{'/'}}" class="text-white">
          logout
        </a>
      </p>
      <p>{{$voter->name}}</p>
    </div>
  </nav>

  <h1 class="mt-5 text-white px-5">Welcome 🎉🙌 Mr. {{$voter->name}}</h1>
  <h2 class="mt-5 text-white px-5">Please vote for the candidate of your choice! </h2>
  <p class="mt-5 text-white px-5">Make your decision now! </p>
  <div class="content">

    @endif
    @endforeach

    <div class="candidates" id = 'voters section'>
      @foreach( $candidates as $candidate)
      @if($candidate->isApproved == true)
      <div class="card" style="width: 19rem">
        <img src="{{asset('uploads/'.$candidate->symbol)}}" width="100" height="150" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">{{$candidate->name}}</h5>
          <p class="card-text"></p>

          <form id="formABC" method="GET" action="vote-candidate/{{$candidate->id}}">
            <button type="submit"  class="btn btn-primary my-2" class="btn-close">
              Vote this Candidate
            </button>
          </form>

        </div>
      </div>
      @endif
      @endforeach





    </div>



    <h2 class="text-white m-5">Entire election result: </h2>
    <div class="card result" style="width: 30% d-flex ">
      @foreach($candidates as $candidate)
      @if($candidate->isApproved==1)
      <div class="card-body justify-centerr m-3">
        <h5 class="card-title">Candidate Name: {{$candidate->name}}</h5>
        <p class="card-text"></p>
        <p class="my-3">
          {{$candidate->name}} vote count is:
          <span class="text-success font-weight-bold">{{$candidate->noOfVotes}} </span>
        </p>
        <div>
          <p>Candidate electoral symbol</p>
          <img src="{{asset('uploads/'.$candidate->symbol)}}" width="150" height="150" alt="..." />
        </div>

      </div>
      @endif
      @endforeach
    </div>

</body>

</html>