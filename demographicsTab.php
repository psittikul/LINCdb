<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="formSection">
            <div id="employeeForm">
                <form action="save.php" method="post" enctype="multipart/form-data" name="employeeDemographicForm">
                    <h3>Employee</h3>
                    <label for="empOrigin">Place of Origin</label>
                    <input type="text" name="empOrigin" id="empOriginField"/><br/>
                    <label for="empEthnicity">Ethnicity</label>
                    <input type="text" name="empEthnicity" id="empEthnicityField"/></br>
                    Age Group (if you know their exact age you can type it in)<br/>
                    <input list="ageGroups">
                    <datalist id="ageGroups">
                        <option value="20 - 24">
                        <option value="25 - 29">
                        <option value="30 - 34"> 
                        <option value="35 - 39">
                        <option value="40 - 44">
                        <option value="45 - 49">
                        <option value="50 - 54">
                        <option value="55+">
                    </datalist><br/>
                    Does the client have children?<br/>
                    <label for="children">Yes</label>
                    <input type="radio" name="childrenButton" id="children" value="Children"/>
                    <label for="noChildren">No</label> 
                    <input type="radio" name="childrenButton" id="noChildren" value="No children"/><br/>
                    <fieldset id="dependentsForm" style="display: none;">
                        <label for="numChildren">Number of Children</label>
                        <input type="number" name ="numberOfChildren" id="numChildren" style="width: 10%;"/><br/>
                        <label for="childName">Dependent Name</label>
                        <input type="text" name="childName1" id="childName" style="margin-right: 3%;"/>
                        <label for="dependentAge">Dependent Age</label>
                        <input type="number" name="childAge1" id="dependentAge" style="width: 10%;"/>
                    </fieldset><br/>
                    <label for="notes">Notes</label>
                    <textarea rows="4" cols="55"></textarea><br/><br/>
                    <label for="income" style="margin-right: 1%;">Income</label>
                    $
                    <input type="number" name="incomeField" id="income"/>
                        <br/>
                        <br/>
                        <input type="submit" value="Save" name="save" id="saveButton"></input>
                </form>
            </div>
            <div id="partnerForm">
                <form method="post" action="clients.php" enctype="multipart/form-data" >
                    <h3>Spouse/Partner</h3>
                    <label for="spOrigin">Place of Origin</label>
                    <input type="text" name="spOriginField" id="spOrigin"/></br>
                    <label for="spEthnicity">Ethnicity</label>
                    <input type="text" name="spEthnicityField" id="spEthnicity"/></br>
                    Age Group (if you know their exact age you can type it in)<br/>
                    <input list="spAgeGroups">
                    <datalist id="spAgeGroups">
                        <option value="20 - 24">
                        <option value="25 - 29">
                        <option value="30 - 34"> 
                        <option value="35 - 39">
                        <option value="40 - 44">
                        <option value="45 - 49">
                        <option value="50 - 54">
                        <option value="55+">
                    </datalist><br/>
                    <label for="notes">Notes</label>
                    <textarea rows="4" cols="55"></textarea><br/><br/>
                    <label for="income" style="margin-right: 1%;">Income</label>
                    $
                    <input type="number" name="incomeField" id="income"/>
                </form>
            </div>
        </div>
    </body>
</html>
