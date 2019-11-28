<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Laravel</title>

    </head>
    <body>
    <div class="flag-pattern"></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand mx-auto" href="{{ url('/') }}">
                    <img src="{{ asset('img/brand2.png') }}" width=800">
                </a>

                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Glossary<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>-->
            </div>
        </nav>

    <div class="flag-pattern"></div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-osce pb-2">
            <div class="container">
                <div class="text-center mx-auto" style="font-size: 48px; font-weight: bold; color: #ffffff; line-height: 1">Consensus glossary of ICT terms</div>
            </div>
        </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-osce pt-0">
        <div class="container">

           <div class="mx-auto" id="about">
               <div class="navbar-nav">
                    <a class="nav-item nav-link" id="aboutLink" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="false" aria-controls="collapseAbout" href="#" style="font-size: 14pt; text-align: center; margin: auto">
                        About
                    </a>
               </div>

                <div id="collapseAbout" class="collapse pt-2 pb-4" aria-labelledby="aboutLink" data-parent="#about" style="color: #ffffff; text-align: justify">
                    The OSCE participating States in Permanent Council Decision No.
                    1039 (26 April 2012) decided to step up individual and collective efforts to address security
                    of and in the use of information and communication technologies (ICTs) in a comprehensive and
                    cross-dimensional manner in accordance with OSCE commitments and in co-operation with relevant
                    international organizations, hereinafter referred to as “security of and in the use of ICTs.”
                    They further decided to elaborate a set of draft confidence-building measures (CBMs) to enhance
                    interstate co-operation, transparency, predictability, and stability, and to reduce the risks of
                    misperception, escalation, and conflict that may stem from the use of ICTs. <br>
                    <br>
                    The OSCE participating States, recalling the OSCE role as a regional arrangement under Chapter VIII of the UN Charter,
                    confirm that the CBMs being elaborated in the OSCE complement UN efforts to promote CBMs in the field of security of and in the use of ICTs.
                    The efforts of the OSCE participating States in implementation of the OSCE confidence-building measures in the field of security of and in the use
                    of ICTs will be consistent with: international law, including, inter alia, the UN Charter and the International Covenant on Civil and Political Rights;
                    as well as the Helsinki Final Act; and their responsibilities to respect human rights and fundamental freedoms. <br>
                    <br>
                    The Republic of Serbia, as an OSCE participating State participating in the implementation of OSCE confidence-building measures in the field of ICT security and use,
                    has made every effort to fulfill the requirements defined in point 9:<br>
                    <br>
                    "In order to reduce the risk of misunderstandings in the absence of agreed terminology
                    and to further a continuing dialogue, participating States will, as a first step, voluntarily
                    provide a list of national terminology related to security of and in the use of ICTs
                    accompanied by an explanation or definition of each term. Each participating State will
                    voluntarily select those terms it deems most relevant for sharing. In the longer term,
                    participating States will endeavour to produce a consensus glossary."
                </div>
            </div>
        </div>
    </nav>






        <div id="app">

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
