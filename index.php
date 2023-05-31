<!doctype html>
<html lang="nl">

<head>
    <script>
        if (location.protocol !== 'https:') {
            location.replace(`https:${location.href.substring(location.protocol.length)}`);
        }
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'
        integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="css/styles_new.css?v20">
    <title>Call Center App</title>
</head>

<body onload="getTimeAndDate()">





    <div class="container text-white mb-4">

        <div class="row">
            <div class="col">







                <div class="bg-dark rounded rounded-bottom mt-3 gradient2 card scale-up-center">

                    <div class="card-body">
                        <div class="text-center">
                            <img class="scale-up-center" id="logo" src="img/apple-touch-icon.png" width="45"
                                title="Bert Verbanck Productions" />
                        </div>
                        <div class="timestamp text-center mt-2">
                            <div class="card h1 mb-3 text-white bg-transparent rounded-pill rounded border border-white p-2 px-3 d-inline-block"
                                id="timeDisplay"></div>
                            <br>
                            <div class="card h1 mb-3 text-white bg-transparent rounded-pill rounded border border-white p-2 px-3 d-inline-block"
                                id="greeting"></div>
                            <br>



                        </div>
                    </div>
                </div>




            </div>











        </div>







        <div class="accordion mt-3 mb-3 blink-1" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header text-white" id="headingTwo">
                    <button class="accordion-button collapsed bg-dark gradient2 text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                        Hoe te gebruiken? + Gebruikersvoorwaarden
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div style="color:black" class="accordion-body">
                        Als u op een optie drukt, zal de datum en tijd samen met de juiste wrapup code gekopieerd worden
                        in uw plakbord, u kan dit dan in het script plakken. <kbd>CTRL</kbd> + <kbd>V</kbd>
                        <br><br>
                        <strong class="text-danger">Indien op deze site iets niet werkt, gelieve <kbd>CTRL</kbd><span
                                class="text-black"> + </span><kbd>F5</kbd> te drukken!</strong>
                        <br><br>
                        <strong>Dit is geen officiële COVID tracing tool, dit is een project van <img class="" id="logo"
                                src="img/apple-touch-icon.png" width="30" title="Bert Verbanck Productions" /> Bert
                            Verbanck</strong><br> Gebruik op eigen risico, controleer altijd voor u uw script indient!
                        <br><br>
                        <input class="form-check-input border-dark" type="checkbox" id="goedgekeurd"
                            onclick="toggleClass('collapseTwo', 'collapse')"> <span id="goedgekeurd">Gelezen en
                            goedgekeurd</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row slide-in-left">
            <div class="col-xl-6 ">




                <div class="card bg-dark">
                    <div class="card-header bg-dark gradient1">
                        VEEL GEBRUIKT



                        <button type="button" class="btn-dark rounded dropstart border float-end"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-tools"></i></button>

                        <button id="emptyButton" type="button" onclick="empty()"
                            class="btn-dark rounded border float-end me-1" data-bs-toggle="tooltip" data-bs-placement=""
                            title="Leeg plakbord"><i class="fas fa-trash-alt"></i></button>


                        <ul class="dropdown-menu bg-dark text-white fw-light p-2 border">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="check1"
                                    onclick="checkBox('check1', 'checked1')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Afgerond</label>
                            </div>


                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="check2"
                                    onclick="checkBox('check2', 'checked2')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Antwoordapparaat / Slecht
                                    nummer</label>
                            </div>



                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="check3"
                                    onclick="checkBox('check3', 'checked3')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Bezettoon / Geen
                                    antwoord</label>
                            </div>




                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="check4"
                                    onclick="checkBox('check4', 'checked4')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Doorgestuurd</label>
                            </div>




                        </ul>


                    </div>


                    <div id="checked1" class="card-body">

                        <div class="form-check form-switch mb-3 w-100 d-none">
                            <input class="form-check-input" type="checkbox" id="onlytime" onclick="toggleChecked()">
                            Enkel tijd, geen datum!

                        </div>






                        <div class="btn-group w-100 dropend">

                            <button type="button" class="btn btn-success w-75"
                                onclick="copyFunction('closedwithdata')">Afgerond</button>
                            <button type="button"
                                class="btn btn-success border-3 border border-dark border-top-0 border-end-0 border-bottom-0 dropdown-toggle dropdown-toggle-split w-25"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu w-50 p-0 m-0">
                                <li class="dropdown-item fw-bold py-3" onclick="copyFunction('closedwithdatamoeder')">
                                    Met moeder</li>
                                <li class="dropdown-item fw-bold py-3" onclick="copyFunction('closedwithdatavader')">Met
                                    vader</li>
                                <li class="dropdown-item fw-bold py-3" onclick="copyFunction('closedwithdatapartner')">
                                    Met partner</li>


                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item fw-bold py-3"
                                        onclick="copyFunction('closedwithdatainbound')">INBOUND</a>
                                </li>


                                <li><a class="dropdown-item fw-bold py-3"
                                        onclick="copyFunction('closedwithdatainboundmoeder')">INBOUND met moeder</a>
                                </li>
                                <li><a class="dropdown-item fw-bold py-3"
                                        onclick="copyFunction('closedwithdatainboundvader')">INBOUND met vader</a>
                                </li>
                                <li><a class="dropdown-item fw-bold py-3"
                                        onclick="copyFunction('closedwithdatainboundpartner')">INBOUND met partner</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div id="checked2">

                        <div class="card-body">
                            <div class="btn-group w-100" role="group" aria-label="">


                                <button type="button" class="btn btn-warning w-100 me-1"
                                    onclick="copyFunction('voicemail')">Antwoordapparaat</button>
                                <button type="button" class="btn btn-danger w-100 " onclick="copyFunction('badnumber')">
                                    Slecht nummer</button>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mx-5">
                        <button type="button" id="toggleKnop"
                            class="text-center btn btn2 btn-light bg-transparent w-100 text-white"
                            onclick="toggleChecked()">Enkel tijd, geen datum!</button>

                    </div>


                    <div id="checked3" class="bg-dark">



                        <div class="card-body">


                            <div class="btn-group w-100" role="group" aria-label="">


                                <button type="button" class="btn btn-light w-100 me-1"
                                    onclick="copyFunction('busy')">Bezettoon</button>
                                <button type="button" class="btn btn-secondary w-100 "
                                    onclick="copyFunction('noanswer')"> Geen antwoord</button>
                            </div>


                        </div>
                    </div>

                    <div id="checked4" class="bg-dark">

                        <div class="card-body">

                            <div class="btn-group w-100 dropend">
                                <button type="button" class="btn btn-info w-75"
                                    onclick="copyFunction('transfer')">Doorgestuurd</button>
                                <button type="button"
                                    class="btn btn-info border-3 border border-dark border-top-0 border-end-0 border-bottom-0 dropdown-toggle dropdown-toggle-split w-25"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu w-50 p-0 m-0">
                                    <li class="dropdown-item fw-bold py-3" onclick="copyFunction('transferFR')">Frans
                                    </li>
                                    <li class="dropdown-item fw-bold py-3" onclick="copyFunction('transferDE')">Duits
                                    </li>
                                    <li class="dropdown-item fw-bold py-3" onclick="copyFunction('transferEN')">Engels
                                    </li>
                                    <li class="dropdown-item fw-bold py-3" onclick="copyFunction('transferAR')">Arabisch
                                    </li>

                                </ul>
                            </div>






                        </div>


                    </div>
                </div>


                <div class="card bg-dark mt-3">
                    <div class="card-header bg-dark text-white gradient1">
                        EXTRAS
                        <button type="button" class="btn-dark
                         rounded dropstart border float-end" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fas fa-tools"></i></button>
                        <button id="emptyButton" type="button" onclick="empty()"
                            class="btn-dark rounded border float-end me-1" data-bs-toggle="tooltip" data-bs-placement=""
                            title="Leeg plakbord"><i class="fas fa-trash-alt"></i></button>


                        <ul class="dropdown-menu bg-dark text-white fw-light p-2 border">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="mail"
                                    onclick="checkBox('mail', 'mailchecked')" checked>
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">noreply@tracing-coronavirus.be</label>
                            </div>
                            <hr class="dropdown-divider">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="mijngezondheid"
                                    onclick="checkBox('mijngezondheid', 'mijngezondheidchecked')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">mijngezondheid.be</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="info-coronavirus"
                                    onclick="checkBox('info-coronavirus', 'info-coronaviruschecked')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">info-coronavirus.be</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="reopen"
                                    onclick="checkBox('reopen', 'reopenchecked')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">reopen.europa.eu/nl</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="opgroeien"
                                    onclick="checkBox('opgroeien', 'opgroeienchecked')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">opgroeien.be FAQ
                                    corona</label>
                            </div>



                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="KBO"
                                    onclick="checkBox('KBO', 'KBOchecked')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">KBO - Zoek bedrijf</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="uitzonderingen"
                                    onclick="checkBox('uitzonderingen', 'uitzonderingenchecked')" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Uitzonderingen
                                    Quarantaine-testen</label>
                            </div>
















                        </ul>


                    </div>
                    <div id="mailchecked" class=" bg-transparent">

                        <div class="card-body">
                            <button type="button" class="btn btn-primary w-100" onclick="copyFunction('email')">
                                noreply@tracing-coronavirus.be</button>
                        </div>
                    </div>
                    <div id="mijngezondheidchecked" class="bg-transparent">

                        <div class="card-body">
                            <button type="button" class="btn btn-secondary w-100"
                                onclick="window.open('http://www.mijngezondheid.be', '_blank').focus();">
                                mijngezondheid.be</button>
                        </div>
                    </div>
                    <div id="info-coronaviruschecked" class="bg-transparent">

                        <div class="card-body">
                            <button type="button" class="btn btn-secondary w-100"
                                onclick="window.open('http://www.info-coronavirus.be/nl/', '_blank').focus();">
                                info-coronavirus.be</button>
                        </div>
                    </div>

                    <div id="reopenchecked" class="bg-transparent">

                        <div class="card-body">
                            <button type="button" class="btn btn-secondary w-100"
                                onclick="window.open('https://reopen.europa.eu/nl/', '_blank').focus();">
                                reopen.europa.eu/nl</button>
                        </div>
                    </div>

                    <div id="opgroeienchecked" class="bg-transparent">

                        <div class="card-body">
                            <button type="button" class="btn btn-secondary w-100"
                                onclick="window.open('https://www.opgroeien.be/veelgestelde-vragen-coronavirus#Corona_Kind_jongere_ouder/', '_blank').focus();">
                                opgroeien.be FAQ corona</button>
                        </div>
                    </div>

                    <div id="KBOchecked" class="bg-transparent">

                        <div class="card-body">
                            <button type="button" class="btn btn-secondary w-100"
                                onclick="window.open('https://kbopub.economie.fgov.be/kbopub/zoeknaamfonetischform.html', '_blank').focus();">
                                KBO - Zoek bedrijf</button>
                        </div>
                    </div>

                    <div id="uitzonderingenchecked" class="bg-transparent">

                        <div class="card-body">
                            <button type="button" class="btn btn-secondary w-100"
                                onclick="window.open('https://www.info-coronavirus.be/nl/uitzonderingen/#volledig', '_blank').focus();">
                                Uitzondering Quarantaine-testen</button>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-xl-6">

                <div class="card bg-dark mt-3 mt-xl-0">
                    <div class="card-header bg-dark gradient1 text-white">
                        <i class="fas fa-poll bg-black p-1 rounded rounded-circle"></i>
                        <i class="fas "></i> UW STATS
                        <span class="form-check form-switch float-end">
                            <input class="form-check-input border-2 border-white" type="checkbox" id="togglestats"
                                onclick="toggleStats()" checked>


                        </span>




                    </div>
                    <div class="bg-transparent" id="stats">

                        <div class="card-body">


                            <div class="text-center h4" id="counter">Aantal keer gebruikt: 0</div>
                            <div class="d-none">
                                <?php include "counter.php"; ?>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="card bg-dark mt-3 d-none">
                    <div class="card-header bg-secondary text-white gradient1">
                        <i class="fas fa-coffee bg-black p-1 rounded rounded-circle"></i> UW PAUZETIJDEN
                    </div>
                    <div class="bg-transparent">

                        <div class="card-body">
                            <select id="tijdstippen" class="form-control bg-dark" style="color: grey;">
                                <option class="" value="0" disabled selected>Gelieve uw shift te kiezen</option>
                                <option class="bg-dark text-white" value="1">Vroege dienst</option>
                                <option class="bg-dark text-white" value="2">Late dienst</option>
                                <option class="bg-dark text-white" value="3">Vroege dienst+ (weekend)</option>
                            </select>
                            <div class="pauzeTijdenMessage">
                                <script src="js/pauzetijden.js?v7"></script>
                                <div class="mt-2 h4" id="pick"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card bg-dark mt-3">
                    <div class="card-header bg-dark text-white gradient1">
                        WACHTRIJEN
                    </div>
                    <div class="bg-transparent">

                        <div class="card-body">

                            <input class="form-control mb-3 bg-dark text-white" list="datalistOptions" id="wachtRijen"
                                placeholder="Klik om te zoeken">
                            <datalist id="datalistOptions">
                                <option value="VLG_LANG-AR">
                                <option value="VLG_LANG-BG">
                                <option value="VLG_LANG-DE">
                                <option value="VLG_LANG-EN">
                                <option value="VLG_LANG-ES">
                                <option value="VLG_LANG-FR">
                                <option value="VLG_LANG-IT">
                                <option value="VLG_LANG-NL">
                                <option value="VLG_LANG-PL">
                                <option value="VLG_LANG-PT">
                                <option value="VLG_LANG-TR">


                            </datalist>

                            <span type="button" onclick="copyFunction('wachtRijen')"
                                class="btn btn-sm btn-outline-secondary w-50 p-3 rounded-1 text-center">Kopieer</span>

                            <span type="button" onclick="document.getElementById('wachtRijen').value=''"
                                class="btn btn-sm btn-outline-secondary w-25 p-3 rounded-1 text-center">Delete</span>


                        </div>
                    </div>
                </div>

                <div class="card bg-dark mt-3">
                    <div class="card-header bg-dark text-white gradient1">
                        VACCINATIE BRUSSEL
                    </div>
                    <div class="bg-transparent">

                        <div class="card-body">

                            <input class="form-control mb-3 bg-dark text-white" list="datalistOptions2"
                                id="wachtRijenBrussel" placeholder="Klik om te zoeken">
                            <datalist id="datalistOptions2">
                                <option value="BRU_Inbound_VaccinationInfo_NL">
                                <option value="BRU_Inbound_VaccinationReservation_NL">
                                <option value="BRU_Inbound_VaccinationInfo_FR">
                                <option value="BRU_Inbound_VaccinationReservation_FR">
                                <option value="BRU_Inbound_VaccinationInfo_DE">
                                <option value="BRU_Inbound_VaccinationReservation_DE">
                                <option value="BRU_Inbound_VaccinationInfo_EN">
                                <option value="BRU_Inbound_VaccinationReservation_EN">
                            </datalist>

                            <span type="button" onclick="copyFunction('wachtRijenBrussel')"
                                class="btn btn-sm btn-outline-secondary w-50 p-3 rounded-1 text-center">Kopieer</span>

                            <span type="button" onclick="document.getElementById('wachtRijenBrussel').value=''"
                                class="btn btn-sm btn-outline-secondary w-25 p-3 rounded-1 text-center">Delete</span>


                        </div>
                    </div>
                </div>








                <div class="accordion mt-3 card" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button id="eigenvelden" class="accordion-button collapsed bg-dark text-white gradient1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse3"
                                aria-expanded="false" aria-controls="collapseTwo">
                                EIGEN VELDEN
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse bg-black" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">


                                <div class="mb-3">

                                    <input type="text" class="form-control bg-dark text-white" id="eigenTekst1"
                                        placeholder="Uw eigen tekst #1">
                                </div>



                                <div type="button" onclick="copyFunction('eigenTekst1')"
                                    class="btn btn-outline-secondary btn-sm w-50 p-3 rounded-1 text-center">Kopieer
                                </div>



                                <div class="mt-3 mb-3">

                                    <input type="text" class="form-control bg-dark text-white" id="eigenTekst2"
                                        placeholder="Uw eigen tekst #2">
                                </div>



                                <div type="button" onclick="copyFunction('eigenTekst2')"
                                    class="btn btn-outline-secondary btn-sm w-50 p-3 rounded-1 text-center">Kopieer
                                </div>




                                <div class="mt-3 mb-3">

                                    <textarea class="form-control bg-dark text-white" rows="5" id="eigenTekst3"
                                        placeholder="Uw eigen tekst #3"></textarea>
                                </div>



                                <div type="button" onclick="copyFunction('eigenTekst3')"
                                    class="btn btn-outline-secondary btn-sm w-50 p-3 rounded-1 text-center">Kopieer
                                </div>





                            </div>
                        </div>
                    </div>

                </div>







            </div>
        </div>

    </div>


    <!-- TOASTS -->
    <div aria-live="polite" aria-atomic="true" class="justify-content-center align-items-center fixed-top mt-3 d-none"
        id="toastdiv">

        <div class="toast text-center bg-secondary border mx-auto" id="gekopieerd" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-body h3 text-white">
                <strong>Gekopieerd!</strong>



            </div>
        </div>



    </div>



    <!-- JAVASCRIPT -->
    <div class="hide-scripts">
        <script src="js/timestamp.js?v20216"></script>

        <script src="js/copypastefunction.js?v15"></script>

        <input type="text" id="closedwithdata">

        <input type="text" id="closedwithdatamoeder">
        <input type="text" id="closedwithdatavader">
        <input type="text" id="closedwithdatapartner">

        <input type="text" id="closedwithdatainbound">
        <input type="text" id="closedwithdatainboundmoeder">
        <input type="text" id="closedwithdatainboundvader">
        <input type="text" id="closedwithdatainboundpartner">

        <input type="text" id="voicemail">
        <input type="text" id="noanswer">
        <input type="text" id="busy">
        <input type="text" id="badnumber">
        <input type="text" id="transfer">
        <input type="text" id="email">
        <input type="text" id="empty" value=" ">

        <input type="text" id="transferFR">
        <input type="text" id="transferDE">
        <input type="text" id="transferEN">
        <input type="text" id="transferAR">
        <input type="text" id="transferTR">

        <script src="js/checkbox.js?v7"></script>


        <script src="js/toasts.js?v11"></script>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>




</body>

</html>