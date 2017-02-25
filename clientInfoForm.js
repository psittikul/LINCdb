/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function updateUnits() {
    console.log("Working!");
    var service = document.getElementById("service").value;
    console.log(service);
    switch (service) {
        case "DC":
            console.log("Dual Career!");
            document.getElementById("units").value = 100;
            break;
        case "CT":
            document.getElementById("units").value = 100;
            break;
        case "CT+":
            document.getElementById("units").value = 50;
            break;
        case "RA":
            document.getElementById("units").value = 50;
            break;
        case "PH1":
            document.getElementById("units").value = 8;
            break;
        case "PH2":
            document.getElementById("units").value = 15;
            break;
        case "PH3":
            document.getElementById("units").value = 30;
            break;
    }
};

function updateStatus() {
  console.log("Deferred conditional");
  console.log(document.getElementById("intakeDateLabel").innerHTML);
  var status = document.getElementById("status").value;
  switch (status) {
      case "Deferred":
        document.getElementById("intakeDateLabel").innerHTML = "Deferred Until";
        document.getElementById("closeDate").style.visibility = "hidden";
        document.getElementById("closeDateLabel").style.visibility = "hidden";
        break;
      case "Closed":
        console.log("Closed");
        document.getElementById("intakeDateLabel").innerHTML = "Intake Date";
        document.getElementById("closeDate").style.visibility = "visible";
        document.getElementById("closeDateLabel").style.visibility = "visible";
        break;
    default:
        document.getElementById("intakeDateLabel").innerHTML = "Intake Date";
        document.getElementById("closeDate").style.visibility = "hidden";
        document.getElementById("closeDateLabel").style.visibility = "hidden";
    }
};


