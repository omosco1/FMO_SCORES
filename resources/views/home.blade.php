@extends('layout')

@section('content')


<div class="container">
<h1 class="text-white text-center">Today's Fixture List</h1>
<h4 class="text-primary text-center">Real-time Updates of Live Football Matches...</h4>
</div>

        <div id="FMO-SCORES_1573642165554" class="m-auto"></div>

        <script>
        (function(b, s, p, o, r, t) {
            b["broadage"] = b["broadage"] || [];
            if (!b["broadage"].length) {
            r = document.createElement(s);
            t = document.getElementsByTagName(s)[0];
            r.async = true;
            r.src = p;
            t.parentNode.insertBefore(r, t);
            }
            b["broadage"].push({ "bundleId": o.bundleId, "widgets": o.widgets, "accountId": o.accountId });
        })(window, "script", "//cdn-saas.broadage.com/widgets/loader/loader.js", {
            "bundleId": ["all-lsd"],
            "accountId": "306bd2fd-8473-4247-a946-1454b50b3687",
            "widgets": {
            "liveScoreDetailed": [{
                "element": "FMO-SCORES_1573642165554",
                "coverageId": "6bf0cf44-e13a-44e1-8008-ff17ba6c2128",
                "options": {
                "theme": "darknessBlue",
                "highlightTimeOutSecond": 20,
                "matchTimeFormat": "HH:MM tt",
                "goalSound": true,
                "webNotification": true,
                "showWinning": true,
                "detailedScoreVerticalSlide": true,
                "searchFilter": true,
                "searchFilterMinCharactersLength": 5,
                "stickyMode": true,
                "scoreBackground": "fill"
                }
            }]
            }
        });
        </script>



<div class=" col-12">
    <div style="color:white;font-size:18px; text-align:right; width:85%;">powered by <a href="#" rel="noopener" target="_blank" style="color:red;">Fofx Academy </a>&nbsp;
        <a class="text-info" ><marquee width="80%" height="22px" direction="left" scrollamount="2"> Designed by FMO SCORES:<strong><i>Your Number One Online and Real-time Footbal Scores, Updates and News Centre...</i>
        </marquee></strong></a>
    </div></div>








@endsection
