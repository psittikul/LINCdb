/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Update number of units when user changes the value of the service type field */

// Variable to track how many services have been added so we can delete correct one if necessary

var serviceRowNum = 0;

// Variables to check if updateStatus() was called for "Deferred" or "Closed" so we don't add more fields
var deferredStatusCalled = 0;
var closedStatusCalled = 0;

function doNothing() {
    console.log("No need to change fields");
};

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
}
;

// Still need to fix this so fields don't keep adding if "Deferred" or "Closed" are selected repeatedly.
function updateStatus() {
    console.log("Update status called");
    var status = document.getElementById("status").value;
    console.log(status);
    var labelParent = document.getElementById("additionalLabelRow");
    var fieldParent = document.getElementById("additionalFieldRow");
    if ((deferredStatusCalled !== 0)  & status === "Deferred") {
        doNothing();
    }
    else if ((closedStatusCalled !== 0) & status === "Closed") {
        doNothing();
    }
    else {
    switch (status) {
        case "Deferred":
            console.log("Deferred Status has not been updated yet");
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
            var deferredLabel = document.createElement("label");
            var deleteCell = document.getElementById("deleteCell");
            deferredLabel.for = "deferred";
            deferredLabel.innerHTML = "Deferred Until";
            document.createTextNode(deferredLabel);
            labelParent.appendChild(deferredLabelCell);
            deferredLabelCell.appendChild(deferredLabel);
            fieldParent.insertBefore(deferredFieldCell, deleteCell);
            deferredFieldCell.appendChild(deferredField);
            deferredStatusCalled = 1;
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
            closedStatusCalled = 1;
            break;
        case "blank":
            break;
    }
}
};

/* Add the HTML elements for a new row of service information */
function addService() {
    var oldRowNum = serviceRowNum;
    serviceRowNum++;
    console.log(oldRowNum);
    console.log(serviceRowNum);
    var serviceTable = document.getElementById("hiddenServicesTable");
    var newServiceTable = serviceTable.cloneNode(true);
    newClass = "serviceRow" + serviceRowNum;
    newServiceTable.id = "servicesTable";
    newServiceTable.className = newClass;
    newServiceTable.getElementsByClassName("deleteService")[0].innerHTML = "X";
    newServiceTable.getElementsByClassName("deleteService")[0].id = serviceRowNum.toString();
    document.getElementById("servicesForm0").appendChild(newServiceTable);
    console.log("Cloned.");
};

/* Delete the HTML elements of a row of service information */
function deleteService(el) {
    var thisHTML = el.innerHTML;
    if (thisHTML === "Clear") {
        document.getElementById("servicesForm0").reset();
        /*
        if (document.getElementById("deferredLabelCell") !== null) {
            var removeLabel = document.getElementById("deferredLabelCell");
            removeLabel.parentNode.removeChild(removeLabel);
            var removeField = document.getElementById("deferredFieldCell");
            removeField.parentNode.removeChild(removeField);
            deferredStatusCalled = 0;
        }
        else if (document.getElementById("closeDateLabelCell") !== null) {
            var removeCloseLabel = document.getElementById("closeDateLabelCell");
            removeCloseLabel.parentNode.removeChild(removeCloseLabel);
            var removeCloseField = document.getElementById("closeDateFieldCell");
            removeCloseField.parentNode.removeChild(removeCloseField);
            closedStatusCalled = 0;
        } */
        if (document.getElementsByClassName("conditionalLabel").length !== 0) {
            for (i = document.getElementsByClassName("conditionalLabel").length - 1; i > -1; i--) {
                labelToDelete = document.getElementsByClassName("conditionalLabel")[i];
                labelToDelete.parentNode.removeChild(labelToDelete);
                fieldToDelete = document.getElementsByClassName("conditionalField")[i];
                fieldToDelete.parentNode.removeChild(fieldToDelete);
            }
            deferredStatusCalled = 0;
            closedStatusCalled = 0;
        }
    } else {
        console.log(el.className);
        console.log(el.innerHTML);
        var deleteNum = el.id;
        var classToDelete = "serviceRow" + deleteNum;
        console.log(classToDelete);
        var deleteThis = document.getElementsByClassName(classToDelete)[0];
        console.log(deleteThis);
        deleteThis.parentNode.removeChild(deleteThis);
        serviceRowNum--;
        for (i = 0; i < (serviceRowNum + 1); i++) {
            var updatedClassName = "serviceRow" + i;
            document.getElementsByTagName("table")[i+1].className = updatedClassName;
            document.getElementsByClassName("deleteService")[i+1].id = i;
        }
    }
};

function openTab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
};

var rad = document.employeeDemographicForm.childrenButton;
for (var i = 0; i < rad.length; i++) {
    rad[i].onclick = function() {
        if (this.value === "Children") {
            document.getElementById("dependentsForm").style.display = "block";
        }
        else {
            document.getElementById("dependentsForm").style.display = "none";
            console.log("Null");
        }
    };
}
