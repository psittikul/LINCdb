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
        <div id="demographicsForm">
                <form action="save.php" method="post">
                    <h3>Employee</h3>
                    <label for="empOrigin">Place of Origin</label>
                    <input type="text" name="empOrigin" id="empOriginField"/><br/>
                    <label for="empEthnicity">Ethnicity</label>
                    <input type="text" name="empEthnicity" id="empEthnicityField"/></br>
                    <label for="empEmail" class="required">Primary Email</label>
                    <input type="email" name="empEmail" id="empEmail"/><br/>
                    <label for="empEmail2">Secondary Email</label>
                    <input type="email" name="empEmail2" id="empEmail2"/><br/>
                    <label for = "empPhone">Phone</label>
                    <input type="tel" name="empPhone" id="empPhone"/><br/>
                    <label for="empPhone2">Secondary Phone</label>
                    <input type="empPhone2" id="empPhone2"/><br/>
                    Preferred Contact Method<br/>
                    <input type="radio" name="contactMethod" id="phonePreferred" style="margin-top: 2%;" value="Phone"/>
                    <label for="phonePreferred">Phone</label>
                    <input type="radio" name="contactMethod" id="emailPreferred" class="radio" value="Email"/>
                    <label for="emailPreferred">Email</label>
                    <input type="radio" name="contactMethod" id="none" value="None"/>
                    <label for="none">None</label><br/>                    
                    <label for="empAddress">Address</label>
                    <input type="text" name="empAddress" id="empAddress"/></br>
                    <label for="empCity">City</label> 
                    <input type="text" name="empCity" id="empCity"/></br>
                    <label for="empState">State</label>
                    <input type="text" name="empState" id="empState"/></br>
                    <label for="referralDate" class="required">Referral Date</label>
                    <input type="date" name="referralDate" id="referralDate"/></br>
                    <input type="radio" id="giftedServices" class="radio" name="giftedServices"/>
                    <label for="giftedServices">This is a gifted service<br/>
                        <label for="companies" class = "required">Employer</label>
                        <input list="companies">
                        <datalist id="companies">
                            <option value="Air Products, Inc.">
                            <option value="Boston Beer Company">
                            <option value="B. Braun, Inc.">
                            <option value="Crayola">
                            <option value="DeSales University">
                            <option value="Just Born, Inc.">
                            <option value="Lafayette College">
                            <option value="Lehigh University">
                            <option value="Lehigh Valley Health Network">
                            <option value="Lutron">
                            <option value="Moravian College">
                            <option value="Muhlenberg College">
                            <option value="Northampton Community College">
                            <option value="Olympus">
                            <option value="OraSure">
                            <option value="PPL">
                            <option value="St. Luke's">
                            <option value="Victaulic">        
                        </datalist> 
                        </br>
                        <label for="empPosition">Position</label>
                        <input type="text" name="empPosition"/><br/>
                        <label for="empDepartment">Department</label>
                        <input type="text" name="empDepartment"/><br/>
                        <label for="empTitle">Professional Title</label>
                        <input type="text" name="empTitle" id="empTitle"/>
                        <br/>
                        <br/>
                        <input type="submit" value="Save" name="save" id="saveButton"></input>
                </form>
            </div>
            <div id="partnerForm">
                <form method="post" action="clients.php" enctype="multipart/form-data" >
                    <h3>Spouse/Partner</h3>
                    <label for="spFirstName">First Name</label>
                    <input type="text" name="spFirstName" id="spFirstName"/></br>
                    <label for="spLastName">Last Name</label>
                    <input type="text" name="spLastName" id="spLastName"/></br>
                    <label for="spEmail">Primary Email</label>
                    <input type="email" name="spEmail" id="spEmail"/></br>
                    <label for="spEmail2">Secondary Email</label>
                    <input type="email" name="spEmail2" id="spEmail2"/></br>
                    <label for="spPhone">Primary Phone</label>
                    <input type="tel" name="spPhone" id="spPhone"/></br>
                    <label for="spPhone2">Secondary Phone</label>
                    <input type="tel" name="spPhone2" id="spPhone2"/></br>
                    <label for="spTitle">Professional Title</label>
                    <input type="text" name="spTitle" id="spTitle"/></br>
                </form>
    </body>
</html>
