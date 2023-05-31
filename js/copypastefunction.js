var counter = 0;



function timesUsed(){

    // times clicked on button while checkbox goedgekeurd aangevinkt, dus wnnr myFunction loopt om tijd en wrapup te kopieeren naar plakbord

    

    counter = counter+1;

    savedTime = counter*15;

    

    switch (true) {



        case counter == 50:

            document.getElementById('counter').innerHTML = "Aantal keer gebruikt: " + counter + '<br>U bent een <b>GOUDEN</b> gebruiker! <br><br> <img class="roll-in-top heartbeat border p-5 rounded-circle border-3 border-white bg-secondary" src="img/flags/gold-medal2233.png"><br><br> Geschatte gewonnen tijd: ' + Math.round(savedTime/60) + " Minuten";

            

                

        break;



        case counter>50:

            document.getElementById('counter').innerHTML = "Aantal keer gebruikt: " + counter + '<br>U bent een <b>GOUDEN</b> gebruiker! <br><br> <img class="heartbeat border p-5 rounded-circle border-3 border-white bg-secondary" src="img/flags/gold-medal2233.png"><br><br> Geschatte gewonnen tijd: ' + Math.round(savedTime/60) + " Minuten";

            

                

        break;



        case counter == 25:

        document.getElementById('counter').innerHTML = "Aantal keer gebruikt: " + counter + '<br>U bent een <b>ZILVEREN</b> gebruiker! <br><br> <img class="roll-in-top heartbeat border p-5 rounded-circle border-3 border-white bg-secondary" src="img/flags/silver-medal122.png"><br><br> Geschatte gewonnen tijd: ' + Math.round(savedTime/60) + " Minuten";

        

                    

        break;



        

        case counter>25:

        document.getElementById('counter').innerHTML = "Aantal keer gebruikt: " + counter + '<br>U bent een <b>ZILVEREN</b> gebruiker! <br><br> <img class="heartbeat border p-5 rounded-circle border-3 border-white bg-secondary" src="img/flags/silver-medal122.png"><br><br> Geschatte gewonnen tijd: ' + Math.round(savedTime/60) + " Minuten";

        

                    

        break;



        case counter==10:

            document.getElementById('counter').innerHTML = "Aantal keer gebruikt: " + counter + '<br>U bent een <b>BRONZEN</b> gebruiker! <br><br> <img class="heartbeat roll-in-top border p-5 rounded-circle border-3 border-white bg-secondary" src="img/flags/bronze-medal133.png"><br><br> Geschatte gewonnen tijd: ' + Math.round(savedTime/60) + " Minuten";

            

            

        break;





        case counter>10:

            document.getElementById('counter').innerHTML = "Aantal keer gebruikt: " + counter + '<br>U bent een <b>BRONZEN</b> gebruiker! <br><br> <img class="heartbeat border p-5 rounded-circle border-3 border-white bg-secondary" src="img/flags/bronze-medal133.png"><br><br> Geschatte gewonnen tijd: ' + Math.round(savedTime/60) + " Minuten";

            

            

        break;



            



            

    

        default:

            document.getElementById('counter').innerHTML = "Aantal keer gebruikt: " + counter;

        

            break;

    }

   

    

}



function copyFunction(x) {



    if (document.getElementById('goedgekeurd').checked == true) {

        var copyText = document.getElementById(x);

        copyText.select();

        copyText.setSelectionRange(0, 99999);

        document.execCommand("copy");

        timesUsed();

        Toasts('gekopieerd');



    } else {

        //Toasts('nietgoedgekeurd');

        var element = document.getElementById("collapseTwo");

        element.classList.remove("collapse");

        jump();
        flash("border-3", 4, 500);
        







    }

}

function flash(cssClass, flashNum, delay, total) {
    if (typeof total === 'undefined') total = 1;
    if (typeof delay === 'undefined') delay = 500;
    var selector = document.getElementById("goedgekeurd");
    // document.body.classList.add(cssClass);
    selector.classList.add(cssClass);
    setTimeout(function() {
        // document.body.classList.remove(cssClass);
        selector.classList.remove(cssClass);
        if (total < flashNum) {
            setTimeout(function() {
                flash(cssClass, flashNum, delay, ++total);
            }, delay);
        }
    }, delay);
}



function jump(){

    var url = location.href;               //Save down the URL without hash.

    location.href = "#accordionExample";   //Go to the target element.

    history.replaceState(null,null,url);   //Don't like hashes. Changing it back.

}



function empty() {

    var emptyText = document.getElementById('empty');

    var emptyButton = document.getElementById('emptyButton');

    emptyText.select();

    emptyText.setSelectionRange(0, 99999);

    document.execCommand("copy");



}



function wait(ms) {

    var start = new Date().getTime();

    var end = start;

    while (end < start + ms) {

        end = new Date().getTime();

    }

}



function toggleClass(x, y) {



    var element = document.getElementById(x);

    element.classList.toggle(y);





}



var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))

var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {

    return new bootstrap.Tooltip(tooltipTriggerEl)

})



function toggleStats(){

    if (document.getElementById('togglestats').checked == true) {

        var stats = document.getElementById('stats')



        stats.classList.remove('d-none');

    }

    else{

        var stats = document.getElementById('stats')



        stats.classList.add('d-none');

    }

}



function toggleChecked() {

    if (document.getElementById('onlytime').checked == true) {

        

        var toggleknop = document.getElementById('toggleKnop');

        

        var element2 = document.body;



        toggleknop.classList.remove('bg-primary');

        

        toggleknop.classList.remove('progress-bar-animated');

        toggleknop.classList.remove('progress-bar');

        toggleknop.classList.remove('progress-bar-striped');

        toggleknop.classList.add('bg-transparent');

        

        

        element2.classList.remove('bg-primary');

        // console.log("testgelukt1");



        document.getElementById('onlytime').checked = false;

        

    }

    else {

        if(document.getElementById('onlytime').checked == false) {

            

            var toggleknop = document.getElementById('toggleKnop');

            

            var element2 = document.body;

            

            toggleknop.classList.add('bg-primary');

           

            toggleknop.classList.add('progress-bar-animated');

            toggleknop.classList.add('progress-bar');

            toggleknop.classList.add('progress-bar-striped');

            toggleknop.classList.remove('bg-transparent');

            

            element2.classList.add('bg-primary');

            // console.log("testgelukt2");



            document.getElementById('onlytime').checked = true;

            



         }   

    }

}