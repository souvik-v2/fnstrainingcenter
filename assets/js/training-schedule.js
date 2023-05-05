const filterTable = (timezone) => {
  alert(timezone);
  console.log("Timezone = ", timezone);
  getTimezone(timezone);
};

const getTimezone = (tzone = "America/Los_Angeles") => {
  jQuery("#country").css("visibility", "visible");
  var myHeaders = new Headers(); // Currently empty
  myHeaders.append("Access-Control-Allow-Origin", "*");
  let options = {
      timeZone: tzone,
      year: "numeric",
      month: "numeric",
      day: "numeric",
      hour: "numeric",
      minute: "numeric",
      //second: 'numeric',
    },
    formatter = new Intl.DateTimeFormat([], options);
  var date = new Date();
  // <!----For virtual classes----->
  //  For PDT
  /*var times = ["14:00:00-15:00:00", "14:00:00-15:00:00", "14:00:00-15:00:00","14:00:00-15:00:00","14:00:00-15:00:00",
  "16:00:00-17:00:00","23:00:00-00:00:00","23:00:00-00:00:00","23:00:00-00:00:00","23:00:00-00:00:00","23:00:00-00:00:00","NA"];*/
  var times = [
    "13:00:00-14:00:00",
    "13:00:00-14:00:00",
    "13:00:00-14:00:00",
    "13:00:00-14:00:00",
    "13:00:00-14:00:00",
    "22:00:00-23:00:00",
    "22:00:00-23:00:00",
    "22:00:00-23:00:00",
    "22:00:00-23:00:00",
    "22:00:00-23:00:00",
    "22:00:00-23:00:00",
    "NA",
  ];
  // var firsttable = '<table class="table-striped ">';
  // firsttable +=
  //   "<center><h2>FNS AT HOME VIRTUAL LIVE CLASS SCHEDULE</h2><center>";
  firsttable =
  '<table><tr><th>MONDAY</th><th>TUESDAY<th>WEDNESDAY</th><th>THURSDAY</th><th>FRIDAY</th></tr>';
  // firsttable +=
  //   '<tr><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th></tr></table>';
  // firsttable += '<table class="table-striped ">';
  var k = 0;
  //for (var i = 1; i <= 3; i++) {
  for (var i = 1; i <= 2; i++) {
    firsttable += "<tr>";
    for (var j = 1; j <= 5; j++) {
      if (times[k] != "NA") {
        var myArr = times[k].split("-");
        var m1 = date.toDateString() + "," + myArr[0] + " GMT";
        var m2 = date.toDateString() + " " + myArr[1] + " GMT";
        var dt1 = convertTZ(m1, tzone);
        var dt2 = convertTZ(m2, tzone);
        var m1v = dt1.toLocaleString("en-US", {
          hour: "numeric",
          minute: "numeric",
        }); //, hour12: true
        var m2v = dt2.toLocaleString("en-US", {
          hour: "numeric",
          minute: "numeric",
          hour12: true,
        });
        firsttable += "<td>" + m1v.slice(0, -3) + "-" + m2v + "</td>";
      } else {
        firsttable += "<td>" + " " + "</td>";
      }
      k++;
    }
    firsttable += "</tr>";
  }
  firsttable += "</table>";

  //console.log(firsttable);
  // exit;
  var virtual = firsttable;
  var gym;
  // gym =
  //   '<h5 class="gymtitle">In-house gym timings (PST)</h5><center><h2>FNS GYM FACILITY TEAM TRAINING CLASS SCHEDULE</h2><center>';
  gym =
    '<table><tr><th>MONDAY</th><th>TUESDAY<th>WEDNESDAY</th><th>THURSDAY</th><th>FRIDAY</th><th>SATURDAY</span></tr>';
  // gym +=
  //   '<tr><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th><th><span class="d-v">TIME</span><i></i></th></tr></table>';
  // gym += '<table class="table-striped ">';

  var timesgym = [
    "12:00:00-13:00:00",
    "12:00:00-13:00:00",
    "12:00:00-13:00:00",
    "12:00:00-13:00:00",
    "12:00:00-13:00:00",
    "14:00:00-15:00:00",
    "13:15:00-14:15:00",
    "13:15:00-14:15:00",
    "13:15:00-14:15:00",
    "13:15:00-14:15:00",
    "13:15:00-14:15:00",
    "15:30:00-16:30:00",
    "14:30:00-15:30:00",
    "14:30:00-15:30:00",
    "14:30:00-15:30:00",
    "14:30:00-15:30:00",
    "14:30:00-15:30:00",
    "17:00:00-18:00:00",
    "17:00:00-18:00:00",
    "17:00:00-18:00:00",
    "17:00:00-18:00:00",
    "17:00:00-18:00:00",
    "17:00:00-18:00:00",
    "NA",
    "19:00:00-20:00:00",
    "19:00:00-20:00:00",
    "19:00:00-20:00:00",
    "19:00:00-20:00:00",
    "19:00:00-20:00:00",
    "NA",
    "22:30:00-23:30:00",
    "22:30:00-23:30:00",
    "22:30:00-23:30:00",
    "22:30:00-23:30:00",
    "22:30:00-23:30:00",
    "NA",
    "00:00:00-01:00:00",
    "00:00:00-01:00:00",
    "00:00:00-01:00:00",
    "00:00:00-01:00:00",
    "00:00:00-01:00:00",
    "NA",
    "01:30:00-02:30:00",
    "01:30:00-02:30:00",
    "01:30:00-02:30:00",
    "01:30:00-02:30:00",
    "NA",
    "NA",
  ];

  /*var timesgym = [ "13:00:00-14:00:00", "13:00:00-14:00:00", "13:00:00-14:00:00","13:00:00-14:00:00","13:00:00-14:00:00","15:00:00-16:00:00",
"14:15:00-15:15:00","14:15:00-15:15:00","14:15:00-15:15:00","14:15:00-15:15:00","14:15:00-15:15:00","16:30:00-17:30:00",
 "15:30:00-16:30:00","15:30:00-16:30:00","15:30:00-16:30:00","15:30:00-16:30:00","15:30:00-16:30:00","18:00:00-19:00:00",
 "18:00:00-19:00:00","18:00:00-19:00:00","18:00:00-19:00:00","18:00:00-19:00:00","18:00:00-19:00:00","NA",
 "20:00:00-21:00:00","20:00:00-21:00:00","20:00:00-21:00:00","20:00:00-21:00:00","20:00:00-21:00:00","NA",
 "23:30:00-00:30:00","23:30:00-00:30:00","23:30:00-00:30:00","23:30:00-00:30:00","23:30:00-00:30:00","NA",
 "01:00:00-02:00:00","01:00:00-02:00:00","01:00:00-02:00:00","01:00:00-02:00:00","01:00:00-02:00:00","NA",
 "02:30:00-03:30:00","02:30:00-03:30:00","02:30:00-03:30:00","02:30:00-03:30:00","NA","NA"];*/

  var h = 0;
  for (var g = 1; g <= 8; g++) {
    gym += "<tr>";
    for (var y = 1; y <= 6; y++) {
      if (timesgym[h] != "NA") {
        var myArr2 = timesgym[h].split("-");
        var m3 = date.toDateString() + "," + myArr2[0] + " GMT";
        var m4 = date.toDateString() + " " + myArr2[1] + " GMT";
        var dt1 = convertTZ(m3, "America/Los_Angeles");
        var dt2 = convertTZ(m4, "America/Los_Angeles");
        var m1g = dt1.toLocaleString("en-US", {
          hour: "numeric",
          minute: "numeric",
        }); //, hour12: true
        var m2g = dt2.toLocaleString("en-US", {
          hour: "numeric",
          minute: "numeric",
          hour12: true,
        });
        //console.log(m1g);
        // console.log(m2g);
        gym += "<td>" + m1g.slice(0, -3) + "-" + m2g + "</td>";
      } else gym += "<td>" + " " + "</td>";
      h++;
    }
    gym += "</tr>";
  }
  gym += "</table>";

  firsttable = firsttable + "" + gym;
  //document.getElementById('time').innerHTML=firsttable;
  jQuery("#tableschedule").html(firsttable);
  jQuery("#tableschedulevirtual").html(virtual);
  jQuery("#tableschedulegym").html(gym);
};

const convertTZ = (date, tzString) => {
  return new Date(
    (typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {
      timeZone: tzString,
      hour12: true,
    })
  );
};

getTimezone("America/Los_Angeles");
