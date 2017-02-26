/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function updateUnits() {
    console.log("Working!");
    var service = document.getElementById("services").value;
    var units = document.getElementById("units");
    console.log(service);
    switch (service) {
        case "blank":
            console.log("Default value");
            units.value = units.defaultValue;
            break;
        case "Dual Career":
            console.log("Dual Career!");
            units.value = 100;
            break;
        case "Community Transition":
            units.value = 100;
            break;
        case "Community Transition Add-on":
            units.value = 50;
            break;
        case "Dual Career Add-on":
            units.value = 50;
            break;
        case "Relocation Assistance":
            units.value = 50;
            break;
        case "Pre-Hire Tier 1":
            units.value = 8;
            break;
        case "Pre-Hire Tier 2":
            units.value = 15;
            break;
        case "Pre-Hire Tier 3":
            units.value = 30;
            break;
    }
};

function updateStatus() {
    console.log("Deferred conditional");
    var status = document.getElementById("status").value;
    var labelParent = document.getElementById("additionalLabelRow");
    var fieldParent = document.getElementById("additionalFieldRow");    
  switch (status) {
      case "Deferred":
        var deferredLabelCell = document.createElement("td");
        deferredLabelCell.id = "deferedLabelCell";
        document.createTextNode("deferredLabelCell");
        var deferredFieldCell = document.createElement("td");
        deferredFieldCell.id = "deferredFieldCell";
        document.createTextNode(deferredFieldCell);
        var deferredField = document.createElement("input");
        deferredField.type = "text";
        deferredField.id = "deferred";
        document.createTextNode(deferredField);
        var deferredLabel=document.createElement("label");
        deferredLabel.for = "deferred";
        deferredLabel.innerHTML = "Deferred Until";
        document.createTextNode(deferredLabel);
        labelParent.appendChild(deferredLabelCell);
        deferredLabelCell.appendChild(deferredLabel);
        fieldParent.appendChild(deferredFieldCell);
        deferredFieldCell.appendChild(deferredField);
        break;
      case "Closed":
        console.log("Closed");
        var closeDateLabelCell = document.createElement("td");
        closeDateLabelCell.id = "closeDateLabelCell";
        document.createTextNode(closeDateLabelCell);
        var closeDateLabel = document.createElement("label");
        closeDateLabel.for = "closeDateField";
        closeDateLabel.innerHTML = "Close Date";
        document.createTextNode(closeDateLabel);
        var closeDateFieldCell = document.createElement("td");
        closeDateFieldCell.id = "closeDateFieldCell";
        document.createTextNode(closeDateFieldCell);
        var closeDateField = document.createElement("input");
        closeDateField.type = "date";
        closeDateField.id = "closeDateField";
        document.createTextNode(closeDateField);
        labelParent.appendChild(closeDateLabelCell);
        closeDateLabelCell.appendChild(closeDateLabel);
        fieldParent.appendChild(closeDateFieldCell);
        closeDateFieldCell.appendChild(closeDateField);
        break;
    default:
    }
};


