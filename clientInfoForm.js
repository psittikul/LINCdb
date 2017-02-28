/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Update number of units when user changes the value of the service type field */
var serviceRowNum = 0;
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

/* Update fields as necessary when user changes the value of the status field */
function updateStatus() {
    console.log("Deferred conditional");
    var status = document.getElementById("status").value;
    var labelParent = document.getElementById("additionalLabelRow");
    var fieldParent = document.getElementById("additionalFieldRow");    
  switch (status) {
      case "Deferred":
        var deferredLabelCell = document.createElement("td");
        deferredLabelCell.id = "deferedLabelCell";
        deferredLabelCell.className = "conditionalLabel";
        document.createTextNode("deferredLabelCell");
        var deferredFieldCell = document.createElement("td");
        deferredFieldCell.id = "deferredFieldCell";
        deferredFieldCell.className = "conditionalField";
        document.createTextNode(deferredFieldCell);
        var deferredField = document.createElement("input");
        deferredField.type = "text";
        deferredField.id = "deferred";
        document.createTextNode(deferredField);
        var deferredLabel=document.createElement("label");
        var deleteCell = document.getElementById("deleteCell");
        deferredLabel.for = "deferred";
        deferredLabel.innerHTML = "Deferred Until";
        document.createTextNode(deferredLabel);
        labelParent.appendChild(deferredLabelCell);
        deferredLabelCell.appendChild(deferredLabel);
        fieldParent.insertBefore(deferredFieldCell, deleteCell);
        deferredFieldCell.appendChild(deferredField);
        break;
      case "Closed":
        console.log("Closed");
        var closeDateLabelCell = document.createElement("td");
        closeDateLabelCell.id = "closeDateLabelCell";
        closeDateLabelCell.className = "conditionalLabel";
        document.createTextNode(closeDateLabelCell);
        var closeDateLabel = document.createElement("label");
        closeDateLabel.for = "closeDateField";
        closeDateLabel.innerHTML = "Close Date";
        document.createTextNode(closeDateLabel);
        var closeDateFieldCell = document.createElement("td");
        closeDateFieldCell.id = "closeDateFieldCell";
        closeDateFieldCell.className = "conditionalField";
        document.createTextNode(closeDateFieldCell);
        var closeDateField = document.createElement("input");
        closeDateField.type = "date";
        closeDateField.id = "closeDateField";
        var deleteCell = document.getElementById("deleteCell");
        document.createTextNode(closeDateField);
        labelParent.appendChild(closeDateLabelCell);
        closeDateLabelCell.appendChild(closeDateLabel);
        fieldParent.insertBefore(closeDateFieldCell, deleteCell);
        closeDateFieldCell.appendChild(closeDateField);
        break;
    case "blank":
        removeFields();
        break;
  }
};

function removeFields() {
    console.log("Resetting");
    var conditionalLabelArray = document.getElementsByClassName("conditionalLabel");
    var conditionalFieldArray = document.getElementsByClassName("conditionalField");
    console.log(conditionalFieldArray.length);
    if (conditionalLabelArray.length !== 0) {
        for (i = 0; i < conditionalLabelArray.length; i++) {
            conditionalLabelArray[i].parentNode.removeChild(conditionalLabelArray[i]);
        }
    }
    if (conditionalFieldArray.length !== 0) {
        for (i = 0; i < conditionalFieldArray.length; i++) {
            conditionalFieldArray[i].parentNode.removeChild(conditionalFieldArray[i]);
        }
    }
};    

/* Add the HTML elements for a new row of service information */
function addService() {
    var oldRowNum = serviceRowNum;
    serviceRowNum++;
    console.log(oldRowNum);
    console.log(serviceRowNum);
    var serviceTable = document.getElementById("servicesForm0");
    var newServiceTable = serviceTable.cloneNode(true);
    newId = "servicesForm"+serviceRowNum;
    newClass = "serviceRow"+serviceRowNum;
    newServiceTable.id = newId;
    newServiceTable.getElementsByClassName("serviceRow0")[0].className = "serviceRow"+serviceRowNum;
    newServiceTable.getElementsByClassName("deleteService")[0].innerHTML = "X";
    newServiceTable.getElementsByClassName("deleteService")[0].id = serviceRowNum.toString();
    document.getElementById("servicesSec").appendChild(newServiceTable);
    document.getElementById(newId).reset();
    removeFields();
    console.log("Cloned.");
};
/* Delete the HTML elements of a row of service information */
function deleteService(el) {
    var thisHTML = el.innerHTML;
    if (thisHTML === "Clear") {
        document.getElementById("servicesForm0").reset();
    }
    else {
        console.log(el.className);
        console.log(el.innerHTML);
        var deleteNum = el.id;
        var classToDelete = "serviceRow"+deleteNum;
        console.log(classToDelete);
        var deleteThis = document.getElementsByClassName(classToDelete)[0];
        console.log(deleteThis);
        deleteThis.parentNode.removeChild(deleteThis);
        serviceRowNum--;
        for (i = 0; i < (serviceRowNum+1); i++) { 
            var updatedClassName = "serviceRow"+i;
            var updatedFormName = "servicesForm"+i;
            var currentForm = document.getElementsByTagName("form")[2+i];
            currentForm.id = updatedFormName;
            console.log(updatedFormName);
            document.getElementsByTagName("table")[i].className = updatedClassName;
            document.getElementsByClassName("deleteService")[i].id = i;
        }       
    }

};
