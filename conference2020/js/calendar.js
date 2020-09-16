
var mykey = 'AIzaSyBwGpZVszHcBLfQJrOW6GNCbG2ugQ17bnY';
var calendarid = '17vsl634andsg6is5sdmjcrbjk@group.calendar.google.com';

function getHHMM(d){
    hrs = d.getHours();
    hrs = ("0" + hrs).slice(-2);
    mns = d.getMinutes();
    mns = ("0" + mns).slice(-2);
    return hrs + ":" + mns;
}


/* add an event to table with specific date range, text, and row position */
function newEventRow(tab, dstart, dend, text, irow=-1){

    // create row
    var row = tab.insertRow(irow);

    // create cell with time range, e.g. 10:00 - 11:00
    var cell = row.insertCell(0);
    cell.setAttribute("width", "120px");
    let newText = document.createTextNode("\u00A0" + getHHMM(dstart) + "-" + getHHMM(dend));
    cell.appendChild(newText);


    speaker_text = text.split(" - ", 2)[0];
    title_text = text.split(" - ", 2)[1];

    // create cell with speaker
    cell = row.insertCell(1);
    cell.setAttribute("width", "200px");
    newText = document.createTextNode(speaker_text);
    cell.appendChild(newText);

    // different format for BREAK
    if(text.includes("BREAK")){
        row.setAttribute("bgcolor", "#2e3436");
        row.setAttribute("style", "color: #ffffff;");
        title_text = "";
    }else{
        row.setAttribute("bgcolor", "#ff0000");
    }

    // create cell with title
    cell = row.insertCell(2);
    newText = document.createTextNode(title_text);
    cell.appendChild(newText);
}

//read from google calendar
$.ajax({
    type: 'GET',
    url: encodeURI('https://www.googleapis.com/calendar/v3/calendars/' + calendarid+ '/events?key=' + mykey),
    dataType: 'json',
    async: true,
    success: function (response) {


        var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];

        // this is a matrix [day of the week, unix time] to order events
        var dates = [[]];

        // loop to create empty tables with day header
        for(var i=1;i<6;i++){
            var tab = document.createElement('table');
            tab.setAttribute("id", "tab" + i);
            document.getElementById('tab_frame').appendChild(tab);

            var row = tab.insertRow(-1);
            row.setAttribute("bgcolor", "#2e3436");
            row.setAttribute("style", "font-weight:bold; color: #ffffff;");
            cell = row.insertCell(0);
            cell = row.insertCell(1);
            cell = row.insertCell(2);
            newText = document.createTextNode(days[i] + ", October " + (4+i));
            cell.appendChild(newText);

            // header is always first
            dates.push([0]);

        }


        // get all calendar items
        var items = response.items;
        console.log(items);

        // loop on calendar items
        for(var i=0;i<items.length;i++){

            // get info from event
            var txt = items[i].summary;
            date_start = new Date(items[i].start.dateTime);
            date_end = new Date(items[i].end.dateTime);
            var jday = date_start.getDay();

            // add unix date to matrix
            udate = date_start.getTime();
            dates[jday].push(udate);

            // sort specific day unix times
            dates[jday].sort();

            // add event in the time sorted position
            irow = dates[jday].indexOf(udate);

            // add row to the table in the correct position
            var tbl = document.getElementById("tab" + jday);
            newEventRow(tbl, date_start, date_end, txt, irow);
        }

        // loop to add a line at the bottom of each table
        // and set tr colors for even and odd rows
        for(var i=1;i<6;i++){
            var tbl = document.getElementById("tab" + i);

            // loop on rows to set tr bgcolors
            for (var j=0; j<tbl.rows.length;j++){
                // only changes rows with RED bgcolor
                if(tbl.rows[j].getAttribute("bgcolor") == "#ff0000"){
                    if(j%2==0){
                        clr = "#d3d7cf";
                    }else{
                        clr = "#eeeeec";
                    }
                    tbl.rows[j].setAttribute("bgcolor", clr);
                }
            }

            row = tbl.insertRow(-1);
            row.setAttribute("bgcolor", "#2e3436");
            row.setAttribute("height", "3px");
            row.insertCell(0);
            row.insertCell(1);
            row.insertCell(2);
        }


    },
    error: function (response) {

        console.log("********** BEGIN ERROR ***********");
        console.log(response);
        console.log("********** END ERROR ***********");
    }
});
