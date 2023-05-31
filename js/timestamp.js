function getTimeAndDate() {

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //Jan is 0!
    var yyyy = today.getFullYear();

    var hour = today.getHours();
    var minuten = ((today.getMinutes() < 10 ? '0' : '') + today.getMinutes());
    today = dd + '/' + mm + ' ' + hour + ':' + minuten;
    onlytime =  hour + ':' + minuten;

    if (document.getElementById('onlytime').checked != true) {


    document.getElementById("timeDisplay").innerHTML = today;
    document.getElementById("closedwithdata").value = today + " Dossier overlopen, dossier ok, afgerond";
    
    document.getElementById("closedwithdatamoeder").value = today + " Dossier overlopen met moeder, dossier ok, afgerond";
    document.getElementById("closedwithdatavader").value = today + " Dossier overlopen met vader, dossier ok, afgerond";
    document.getElementById("closedwithdatapartner").value = today + " Dossier overlopen met partner, dossier ok, afgerond";

    document.getElementById("closedwithdatainbound").value = today + " Inbound: Dossier overlopen, dossier ok, afgerond";
    document.getElementById("closedwithdatainboundmoeder").value = today + " Inbound: Dossier overlopen met moeder, dossier ok, afgerond";
    document.getElementById("closedwithdatainboundvader").value = today + " Inbound: Dossier overlopen met vader, dossier ok, afgerond";
    document.getElementById("closedwithdatainboundpartner").value = today + " Inbound: Dossier overlopen met partner, dossier ok, afgerond";
    
    
    
    
    
    document.getElementById("voicemail").value = today + " Antwoordapparaat";
    document.getElementById("noanswer").value = today + " Geen antwoord";
    document.getElementById("busy").value = today + " Bezettoon";
    document.getElementById("badnumber").value = today + " Slecht nummer";
    document.getElementById("transfer").value = today + " Doorgestuurd";

    document.getElementById("transferFR").value = today + " Doorgestuurd Frans";
    document.getElementById("transferDE").value = today + " Doorgestuurd Duits";
    document.getElementById("transferEN").value = today + " Doorgestuurd Engels";
    document.getElementById("transferAR").value = today + " Doorgestuurd Arabisch";
    document.getElementById("transferTR").value = today + " Doorgestuurd Turks";


    document.getElementById("email").value = "noreply@tracing-coronavirus.be";
    }else
      {
          today = ' // ' + hour + ':' + minuten;


        
        document.getElementById("closedwithdata").value = today + " Dossier overlopen, dossier ok, afgerond";
        
        document.getElementById("closedwithdatamoeder").value = today + " Dossier overlopen met moeder, dossier ok, afgerond";
        document.getElementById("closedwithdatavader").value = today + " Dossier overlopen met vader, dossier ok, afgerond";
        document.getElementById("closedwithdatapartner").value = today + " Dossier overlopen met partner, dossier ok, afgerond";
    
        document.getElementById("closedwithdatainbound").value = today + " Inbound: Dossier overlopen, dossier ok, afgerond";

        document.getElementById("closedwithdatainboundmoeder").value = today + " Inbound: Dossier overlopen met moeder, dossier ok, afgerond";
        document.getElementById("closedwithdatainboundvader").value = today + " Inbound: Dossier overlopen met vader, dossier ok, afgerond";
        document.getElementById("closedwithdatainboundpartner").value = today + " Inbound: Dossier overlopen met partner, dossier ok, afgerond";
        
        
        
        
        
        document.getElementById("voicemail").value = today + " Antwoordapparaat";
        document.getElementById("noanswer").value = today + " Geen antwoord";
        document.getElementById("busy").value = today + " Bezettoon";
        document.getElementById("badnumber").value = today + " Slecht nummer";
        document.getElementById("transfer").value = today + " Doorgestuurd";
    
        document.getElementById("transferFR").value = today + " Doorgestuurd Frans";
        document.getElementById("transferDE").value = today + " Doorgestuurd Duits";
        document.getElementById("transferEN").value = today + " Doorgestuurd Engels";
        document.getElementById("transferAR").value = today + " Doorgestuurd Arabisch";
        document.getElementById("transferTR").value = today + " Doorgestuurd Turks";
    
    
        document.getElementById("email").value = "noreply@tracing-coronavirus.be";
        }

    setTimeout("getTimeAndDate()", 500);

    if (hour < 12) {
        document.getElementById("greeting").innerHTML = "Goedemorgen!";
    }
    if (hour >= 12) {
        document.getElementById("greeting").innerHTML = "Goedemiddag!";
    }
    if (hour >= 17) {
        document.getElementById("greeting").innerHTML = "Goedenavond!";
    }
}