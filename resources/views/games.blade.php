@extends('layout')

@section('content')
<div class="container m-auto text-info">
  <h1 class="text-center">Catch up on the All Football Games and Highlights...</h1>
</div>

<div class="card bg-dark text-light col-lg-12 col-md-12 col-sm-12 mb-5">
    <div class="card-body col-lg-12 col-md-12 col-sm-12">

<div class="row bg-info">
    <div class="container col-lg-12 col-md-12 col-sm-12">
        <div class="container col-lg-12 col-md-12 col-sm-12 mb-1">
            <iframe src="https://www.scorebat.com/embed/" frameborder="0" width="700" height="400" allowfullscreen  allow="autoplay; fullscreen" style="width:700px;height:400px;" class="_scorebatEmbeddedPlayer_"></iframe><script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://www.scorebat.com/embed/embed.js?v=mto';
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'scorebat-jssdk'));</script>
        </div>
    </div>

  <div class=" col-12">
        <div style="color:white;font-size:15px; text-align:right; width:40%;">powered by <a href="#" rel="noopener" target="_blank" style="color:red;">Fofx Academy </a>&nbsp;
            <a class="text-white" ><marquee width="60%" height="20px" direction="left" scrollamount="2"><strong><i> Designed by FMO SCORES: Your Number One Online and Real-time Footbal Scores, Updates and News Centre...</i>
            </marquee></strong></a>
        </div></div>
</div>
</div>
</div>

@endsection
