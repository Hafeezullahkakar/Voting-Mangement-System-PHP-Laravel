@extends('frontend.layouts.home')
@section('main-container')

<div class="HomePageHeader"></div>

<!-- carousel -->
<img src="{{url('frontend/assets/onlineVote.png')}}" class="headerImg" />

<div class="carousel">
  <div id="carouselExampleIndicators" class="carousel slide auto" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <div class="container"> -->
        <img class="d-block w-100" src="{{url('frontend/assets/Online Vote/2.png')}}" alt="First slide" />
        <!-- </div> -->
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{url('frontend/assets/Online Vote/3.png')}}" alt="Second slide" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{url('frontend/assets/Online Vote/4.png')}}" alt="Third slide" />
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- List of Candidates -->

<div class="listofCandidates my-5">
  <h1>Esteemed Members of Election Commission of Pakistan</h1>

  <div class="cardx">
    <div class="candCard">
      <img src="https://pbs.twimg.com/profile_images/1011744949157662720/PioEL9aT_400x400.jpg" class="candImg" />
      <h4>Chairman</h4>
      <span>
        <i>Shahid Khaqan Abassi </i>
      </span>

      <p>Serving as chairman ECP since 2015</p>
    </div>

    <div class="candCard">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSetqWnMZqIg_R2-9CtO0iP2TnJjeHN41rPiToX-ZiSJHNJMFplnhfZCmaVlaPHhjqA0lU&usqp=CAU" class="candImg" />
      <h4>Vice Chairman</h4>

      <span><i>Malala Yousufzai </i> </span>

      <p>Serving at ECP since 2018</p>
    </div>

    <div class="candCard">
      <img src="data:image/jpeg;base64,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" class="candImg" />
      <h4>Spokes Person</h4>
      <span><i> Mustafa Nawaz Khokhar </i> </span>
      <p>Serving at ECP since 2009</p>
    </div>

    <div class="candCard">
      <img src="https://pbs.twimg.com/media/E4JsbXbXEAMjMFY.jpg" class="candImg" />

      <h4>Advisor</h4>
      <span>
        <i>Usman Kakar </i>
      </span>
      <p>Serving at ECP since 2000</p>
    </div>
  </div>
</div>

<div class="Messages">
  <div class="img1">
    <img src="{{url('frontend/assets/Profile.jpg')}}" height="550px" />
  </div>
  <div class="desc">
    <h4>Message from the Chairman:</h4>
    <p class="text-white">
      We want free and fair election for all Pakistanis. We want them to
      elect their candidates and trust that the due process has taken place.
      It is the first precedent in this country that we're enabling our
      countrymen to VOTE from the comfort of their mobile.
      We want free and fair election for all Pakistanis. We want them to
      elect their candidates and trust that the due process has taken place.
      It is the first precedent in this country that we're enabling our
      countrymen to VOTE from the comfort of their mobile. We want free and fair election for all Pakistanis. We want them to
      elect their candidates and trust that the due process has taken place.
      It is the first precedent in this country that we're enabling our
      countrymen to VOTE from the comfort of their mobile.
    </p>
  </div>
</div>



<section class="we-offer-area text-center bg-gray mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="site-heading text-center">
          <h2>What we <span>Intend</span></h2>
          <h4>Our Motto: Free and fair election</h4>
        </div>
      </div>
    </div>
    <div class="row our-offer-items less-carousel">
      <!-- Single Item -->
      <div class="col-md-4 col-sm-6 equal-height">
        <div class="item">
          <i class="fas fa-pen-fancy"></i>
          <h4>Educating People</h4>
          <p>
            For free and fair election, it is imperitive to educate people.
          </p>
        </div>
      </div>
      <!-- End Single Item -->

      <!-- Single Item -->
      <div class="col-md-4 col-sm-6 equal-height">
        <div class="item">
          <i class="fas fa-dharmachakra"></i>
          <h4>Unity is strength</h4>
          <p>
            Arranging symposiums about electing the right people and get unite.
          </p>

        </div>
      </div>
      <!-- End Single Item -->

      <!-- Single Item -->
      <div class="col-md-4 col-sm-6 equal-height">
        <div class="item">
          <i class="fas fa-tasks"></i>
          <h4>Development</h4>
          <p>
            Making people responsible about their duties.
          </p>


        </div>
      </div>
      <!-- End Single Item -->


    </div>
  </div>
</section>






@endsection