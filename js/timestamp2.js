                    var today = new Date();

                    var dd = String(today.getDate()).padStart(2, '0');

                    var mm = String(today.getMonth() + 1).padStart(2, '0'); //Jan is 0!

                    var yyyy = today.getFullYear();

                    var hour = today.getHours() +1;





                    var minuten = ((today.getMinutes() < 10 ? '0' : '') + today.getMinutes());





                    today = dd + '/' + mm + ' ' + hour + ':' + minuten;

                    document.write('<div class="h1" style="color: white">' + today + '</div>');