@extends('layout')

@section('content')




<style>
        body {
            position: relative;

        }
        </style>
      </head>
      <body data-spy="scroll" data-target=".navbar" data-offset="50">

      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#EPL">EPL news</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#la-Liga">La-Liga news</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Serie-A">Serie A news</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Ligue-1">Ligue 1 news</a>
          </li>
        </ul>
      </nav>


      <div id="EPL" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
             <style>
                body {
                padding-top: 1em;
                }
                </style> <div class="container-fluid col-5">

            <div class="card card-inverse text-center ml-4" style="max-width: 500px;">

                <!-- Image -->
                <img class="card-img-top" src="{{asset('images/epl-potm.jpg')}}" alt="EPL POTM">

                 <!-- Card -->
                <div class="card-body bg-secondary">
                <h4 class="card-title">EPL Player of the Month October</h4>
            <h6 class="card-title text-warning">What Next?</h6>
        <p class="card-text text-warning">Is this the end or means more?....   Tune in next month to find out!</p>
        <marquee behavior="" direction="left" scrollamount="1"><h6 class="text-white text-center">Jamie Vardy has been named October’s EA SPORTS Player of Month.
                Vardy found the net against Burnley and scored a hat-trick in the record-breaking success at St Mary’s Stadium to lead the Golden Boot race with nine goals in the league campaign.</h6></marquee>
                </div>

                </div>
                </div>

                <!-- Frames START-->
        <div class="row">
        <div class="container ml-5  mt-3 col-5 mr-4">
                <marquee behavior="" direction="up" scrollamount="1">
                <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/arsenal-180231/iframe/?type=team-last-match&lang_id=2&country=67&template=10&team=180231&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=24&bg=707ccc&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=80&sh=1&hfb=1&hbc=50479e&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

                <div class="container  ml-5  mt-3 col-5 mr-4">
                        <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/chelsea-182666/iframe/?type=team-last-match&lang_id=2&country=67&template=10&team=182666&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=24&bg=707ccc&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=80&sh=1&hfb=1&hbc=50479e&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

        </div>

        <div class="row">

            <div class="container ml-5  mt-3 col-5 mr-4">
                    <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/liverpool-189071/iframe/?type=team-last-match&lang_id=2&country=67&template=10&team=189071&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=24&bg=707ccc&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=80&sh=1&hfb=1&hbc=50479e&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

            <div class="container ml-5  mt-3 col-5 mr-4">
                    <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/europeanchampionship//teams/tottenham-195775/iframe/?type=team-last-match&lang_id=2&country=12&template=10&team=195775&timezone=Africa/Lagos&time=24&width=500&height=200&font=Verdana&fs=12&lh=24&bg=707ccc&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=80&sh=1&hfb=1&hbc=50479e&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

        </div>

        <div class="row">
            <div class="container ml-5  mt-3 col-5 mr-4">
                    <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/manchester-united-189577/iframe/?type=team-last-match&lang_id=2&country=67&template=10&team=189577&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=24&bg=707ccc&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=80&sh=1&hfb=1&hbc=50479e&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

                    <div class="container ml-5  mt-3 col-5 mr-4">
                            <marquee behavior="" direction="up" scrollamount="1">
                            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/southampton-194444/iframe/?type=team-last-match&lang_id=2&country=67&template=10&stage=28580&team=194444&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

                            <!-- Frames End-->
    </div>



      </div>

      <div id="la-Liga" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <style>
                    body {
                    padding-top: 1em;
                    }
                    </style> <div class="container-fluid col-5">

            <div class="card card-inverse text-center  ml-4" style="max-width: 500px;">

                    <!-- Image -->
                    <img class="card-img-top" src="{{asset('images/potm-la-liga.jpg')}}" alt="EPL POTM">

                     <!-- Card -->
                    <div class="card-body bg-secondary">
                    <h4 class="card-title">Spanish La-Liga Player of the Month October</h4>
                <h6 class="card-title text-warning">What Next?</h6>
            <p class="card-text text-warning">Is this the end or means more?....   Tune in next month to find out!</p>
            <marquee behavior="" direction="left" scrollamount="1"><h6 class="text-white text-center">Lionel Andrés Messi Cuccittini is an Argentine professional footballer who plays as a forward and captains both Spanish club Barcelona and the Argentina national team. has been named October’s EA SPORTS Player of Month.</h6></marquee>
                    </div>

                    </div>
                    </div>

        <div class="row">

            <div class="container ml-5  mt-3 col-5 mr-4">
                    <marquee behavior="" direction="up" scrollamount="1">
                <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/atletico-madrid-180603/iframe/?type=team-last-match&lang_id=2&country=201&template=43&team=180603&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>


            <div class="container ml-5  mt-3 col-5 mr-4">
                    <marquee behavior="" direction="up" scrollamount="1">
                <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/barcelona-181013/iframe/?type=team-last-match&lang_id=2&country=201&template=43&team=181013&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

        </div>


        <div class="row">

            <div class="container ml-5  mt-3 col-5 mr-4">
            <marquee behavior="" direction="up" scrollamount="1">
                <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/real-madrid-192583/iframe/?type=team-last-match&lang_id=2&country=201&template=43&team=192583&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>


            <div class="container ml-5  mt-3 col-5 mr-4">
                    <marquee behavior="" direction="up" scrollamount="1">
                <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/sevilla-193786/iframe/?type=team-last-match&lang_id=2&country=201&template=43&team=193786&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></marquee></div>
            </div>

        </div>




      </div>

      <div id="Serie-A" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <style>
                    body {
                    padding-top: 1em;
                    }
                    </style> <div class="container-fluid col-5">

            <div class="card card-inverse text-center  ml-4" style="max-width: 500px;">

                    <!-- Image -->
                    <img class="card-img-top" src="{{asset('images/playerM3.jpg')}}" alt="EPL POTM">

                     <!-- Card -->
                    <div class="card-body bg-secondary">
                    <h4 class="card-title">Italian Seria A Player of the Month October</h4>
                <h6 class="card-title text-warning">What Next?</h6>
            <p class="card-text text-warning">Is this the end or means more?....   Tune in next month to find out!</p>
            <marquee behavior="" direction="left" scrollamount="1"><h6 class="text-white text-center">Cristiano Ronaldo dos Santos Aveiro GOIH ComM is a Portuguese professional footballer who plays as a forward for Serie A club Juventus and captains the Portugal national team has been named October’s EA SPORTS Player of Month.</h6></marquee>
                    </div>

                    </div>
                    </div>

        <div class="row">

            <div class="container ml-5  mt-3 col-5 mr-4">
            <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/juventus-187903/iframe/?type=team-last-match&lang_id=2&country=108&template=17&team=187903&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>


            <div class="container ml-5  mt-3 col-5 mr-4">
            <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/inter-187444/iframe/?type=team-last-match&lang_id=2&country=108&template=17&team=187444&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

        </div>


        <div class="row">

            <div class="container ml-5  mt-3 col-5 mr-4">
            <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/roma1-192877/iframe/?type=team-last-match&lang_id=2&country=108&template=17&team=192877&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>


            <div class="container ml-5  mt-3 col-5 mr-4">
            <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/ssc-napoli-194680/iframe/?type=team-last-match&lang_id=2&country=108&template=17&team=194680&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

    </div>

</div>


<div id="Ligue-1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">

        <style>
                body {
                padding-top: 1em;
                }
                </style> <div class="container-fluid col-5">

        <div class="card card-inverse text-center  ml-4" style="max-width: 500px;">

                <!-- Image -->
                <img class="card-img-top" src="{{asset('images/potm-ligue1.jpg')}}" alt="EPL POTM">

                 <!-- Card -->
                <div class="card-body bg-secondary">
                <h4 class="card-title">France Ligue 1 Player of the Month October</h4>
            <h6 class="card-title text-warning">What Next?</h6>
        <p class="card-text text-warning">Is this the end or means more?....   Tune in next month to find out!</p>
        <marquee behavior="" direction="left" scrollamount="1"><h6 class="text-white text-center">Our Ligue 1 player of the month for October with a rating of 8.32, Angel Di Maria's best display came in PSG's 4-1 win at Nice, where he netted twice in a perfect 10 performance. The Argentine had a direct hand in four league goals last month to help make the October best XI in France. has been named October’s EA SPORTS Player of Month.</h6></marquee>
                </div>

                </div>
                </div>

    <div class="row">

        <div class="container ml-5  mt-3 col-5 mr-4">
        <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/paris-saint-germain-191585/iframe/?type=team-last-match&lang_id=2&country=77&template=15&team=191585&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>


        <div class="container ml-5  mt-3 col-5 mr-4">
        <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/lyon-189368/iframe/?type=team-last-match&lang_id=2&country=77&template=15&team=189368&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>

    </div>


    <div class="row">

        <div class="container ml-5  mt-3 col-5 mr-4">
        <marquee behavior="" direction="up" scrollamount="1">
        <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/lille-188984/iframe/?type=team-last-match&lang_id=2&country=77&template=15&team=188984&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></div></marquee></div>


        <div class="container m-auto col-5 ">
        <marquee behavior="" direction="up" scrollamount="1">
            <iframe frameborder="0"  scrolling="no" width="465" height="200" src="https://www.fctables.com/teams/monaco-190135/iframe/?type=team-last-match&lang_id=2&country=77&template=15&team=190135&timezone=Africa/Lagos&time=24&width=465&height=200&font=Verdana&fs=12&lh=22&bg=6f7ade&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=100&sh=1&hfb=1&hbc=5229d9&hfc=FFFFFF"></iframe><div style="text-align:center;"></marquee></div>

  </div>

</div>

</div>



@endsection

