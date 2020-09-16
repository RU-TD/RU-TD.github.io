from icalendar import Calendar, Event
import datetime


cal = Calendar()

tstop_old = datetime.datetime.strptime("01.01.2020 01:01 am", '%d.%m.%Y %I:%M %p')

for row in open("raw_programme.txt"):
    srow = row.strip()
    if srow == "":
        continue

    if ".10.2020" in srow:
        dow, day = srow.split()
        continue

    if srow.startswith("("):
        continue

    if " pm ":
        srow = srow.replace(" pm - ", " pm|")
        srow = srow.replace(" pm ", " pm|")
        srow = srow.replace(")", "|")
        srow = srow.replace("(", "|")

        print(srow)
        tstart, tstop, speaker, affiliation, title = [x.strip() for x in srow.split("|")]

        tstart = datetime.datetime.strptime(day + " " + tstart, '%d.%m.%Y %I:%M %p')
        tstop = datetime.datetime.strptime(day + " " + tstop, '%d.%m.%Y %I:%M %p')

        if 0 < (tstart - tstop_old).total_seconds() < 3600 * 5:
            event = Event()
            event.add('summary', "BREAK")
            event.add('dtstart', tstop_old)
            event.add('dtend', tstart)
            cal.add_component(event)


        event = Event()
        event.add('summary', speaker + " - " + title)
        event.add('dtstart', tstart)
        event.add('dtend', tstop)
        cal.add_component(event)

        tstop_old = tstop

        continue

f = open('calendar.ics', 'wb')
f.write(cal.to_ical())
f.close()



