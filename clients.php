<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="clientStyle.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <title>LINC Database</title>
        <link rel="icon" type="image/png" sizes="16x16" href="/LINC Database/favicon.ico">
        <link rel="manifest" href="/manifest.json">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div id="sidebar">
            <?php
            include 'sidebar.php';
            ?>
        </div>
        <!-- Client tabs -->
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'formSection')">Client Information</button>
            <button class="tablinks" onclick="openTab(event, 'demographics')">Demographics</button>
            <button class="tablinks" onclick="openTab(event, 'dual-career')">Dual Career</button>
            <button class="tablinks" onclick="openTab(event, 'clientLog')">Client Log</button>
        </div>

        <div id="demographics" class="tabcontent">
            <p>Paris is the capital of France.</p> 
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
        <!-- End client tabs -->
        
        <div id="formSection" class="tabcontent active">
            <h4 style="padding-left: 2%;">Bolded fields are required in order to make changes.</h4>
            <div id="employeeForm">
                <form action="save.php" method="post">
                    <h3>Employee</h3>
                    <label for="empFirstName" class="required">First Name</label>
                    <input type="text" name="empFirstName" id="empFirstName"/><br/>
                    <label for="empLastName" class="required">Last Name</label>
                    <input type="text" name="empLastName" id="empLastName"/></br>
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
            </div>
            <div id="servicesSec">
                <h3 class="required">Services</h3>
                <button type="button" id="addServiceButton" onclick="addService()">Add New Service</button><br/><br/>
                <form method="post" action="clients.php" id="servicesForm0" enctype="multipart/form-data" name = "serviceInfoForm">
                    <table id = "hiddenServicesTable">
                        <tbody>
                            <tr id = "hiddenLabelRow">
                                <td><label for="services">Service Type</label></td>
                                <td><label for="referralDateField">Referral Date</label></td>
                                <td><label for="status">Status</label></td>
                                <td><label for="units">Units</label></td>
                                <td><label for="coordinator">Coordinator</label></td>
                            </tr>
                            <tr id="hiddenFieldRow">
                                <td>
                                    <select id="hiddenServices" onchange = "updateUnits()" name="servicesDropdown">
                                        <option value="blank"> -- Select a service -- </option>
                                        <option value="Dual Career">Dual Career</option>
                                        <option value="Community Transition">Community Transition</option>
                                        <option value="Community Transition Add-on">Community Transition Add-on</option>
                                        <option value="Dual Career Add-on">Dual Career Add-on</option>
                                        <option value="Relocation Assistance">Relocation Assistance</option>
                                        <option value="Pre-Hire Tier 1">Tier 1</option>
                                        <option value="Pre-Hire Tier 2">Tier 2</option>
                                        <option value="Pre-Hire Tier 3">Tier 3</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="date" name="referralDate" id="hiddenReferralDate"/>
                                </td>
                                <td>
                                    <!--Need to add code to update fields based on client status-->
                                    <select id="hiddenStatus" onchange="updateStatus()">
                                        <option value="blank"> -- Select a status -- </option>
                                        <option value="Open">Open</option>
                                        <option value="Closed">Closed</option>
                                        <option value="Deferred">Deferred</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="units" id="hiddenUnits"/>
                                </td>                                
                                <td>
                                    <select name="coordinator" id="hiddenCoordinator">
                                        <option value="blank">
                                            -- select an option --
                                        </option>
                                        <option value="MB">MAB</option>
                                        <option value="SM">SM</option>
                                        <option value="DC">DC</option>
                                    </select>
                                </td>
                            </tr>
                            <tr id="hiddenAdditionalLabelRow">
                                <td><label for="invoiceDateField">Invoice Date</label></td>
                                <td><label for="invoiceNumber">Invoice Number</label></td>
                                <td><label for="intakeDate">Intake Date</label></td>
                            </tr>
                            <tr id="hiddenAdditionalFieldRow">
                                <td>
                                    <input type="date" name="invoiceDate" id="hiddenInvoiceDateField"/>
                                </td>
                                <td>
                                    <input type="number" name="invoiceNumber" id="hiddenInvoiceNumberField"/>
                                </td>
                                <td>
                                    <input type="date" name="intakeDate" id="hiddenIntakeDateField"/>
                                </td>
                                <td id="hiddenDeleteCell">
                                    <h3 class="deleteService" id="0" onclick="deleteService(this)">Clear</h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table id = "servicesTable" class="serviceRow0">
                        <tbody>
                            <tr id = "labelRow">
                                <td><label for="services">Service Type</label></td>
                                <td><label for="referralDateField">Referral Date</label></td>
                                <td><label for="status">Status</label></td>
                                <td><label for="units">Units</label></td>
                                <td><label for="coordinator">Coordinator</label></td>
                            </tr>
                            <tr id="fieldRow">
                                <td>
                                    <select id="services" onchange="updateUnits()" name="servicesDropdown">
                                        <option value="blank"> -- Select a service -- </option>
                                        <option value="Dual Career">Dual Career</option>
                                        <option value="Community Transition">Community Transition</option>
                                        <option value="Community Transition Add-on">Community Transition Add-on</option>
                                        <option value="Dual Career Add-on">Dual Career Add-on</option>
                                        <option value="Relocation Assistance">Relocation Assistance</option>
                                        <option value="Pre-Hire Tier 1">Tier 1</option>
                                        <option value="Pre-Hire Tier 2">Tier 2</option>
                                        <option value="Pre-Hire Tier 3">Tier 3</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="date" name="referralDate" id="referralDate"/>
                                </td>
                                <td>
                                    <!--Need to add code to update fields based on client status-->
                                    <select id="status" onchange="updateStatus()">
                                        <option value="blank"> -- Select a status -- </option>
                                        <option value="Open">Open</option>
                                        <option value="Closed">Closed</option>
                                        <option value="Deferred">Deferred</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="units" id="units"/>
                                </td>                                
                                <td>
                                    <select name="coordinator" id="coordinator">
                                        <option disabled selected value>
                                            -- select an option --
                                        </option>
                                        <option value="MB">MAB</option>
                                        <option value="SM">SM</option>
                                        <option value="DC">DC</option>
                                    </select>
                                </td>
                            </tr>
                            <tr id="additionalLabelRow">
                                <td><label for="invoiceDateField">Invoice Date</label></td>
                                <td><label for="invoiceNumber">Invoice Number</label></td>
                                <td><label for="intakeDate">Intake Date</label></td>
                            </tr>
                            <tr id="additionalFieldRow">
                                <td>
                                    <input type="date" name="invoiceDate" id="invoiceDateField"/>
                                </td>
                                <td>
                                    <input type="number" name="invoiceNumber" id="invoiceNumberField"/>
                                </td>
                                <td>
                                    <input type="date" name="intakeDate" id="intakeDateField"/>
                                </td>
                                <td id="deleteCell">
                                    <h3 class="deleteService" class = "deleteService" id="0" onclick="deleteService(this)">Clear</h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="clientInfoForm.js"></script>
    </body>
</html>