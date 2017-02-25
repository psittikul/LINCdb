<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <script type="text/javascript" src="clientInfoForm.js"></script>
        <title>LINC Database</title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <div id ="sidebar">
            <ul>
                <li>Dashboard</li>
                <li><a href="clients.php">Clients</a></li>
                <li>Customers</li>
                <li>Ambassadors</li>
                <li>Interviewers & Contacts</li>
                <li>Archive</li>
            </ul>
        </div>
        <div id="formSection">
            <div id="employeeForm">
                <form action="save.php" method="post">
                    <h3>Employee</h3>
                    First Name  <input type="text" name="empFirstName" id="empFirstName"/></br>
                    Last Name <input type="text" name="empLastName" id="empLastName"/></br>
                    Email <input type="email" name="empEmail" id="empEmail"/></br>
                    Secondary Email <input type="email" name="empEmail2" id="empEmail2"/><br/>
                    Phone <input type="tel" name="empPhone" id="empPhone"/></br>
                    Secondary Phone <input type="empPhone2" id="empPhone2"/><br/>
                    Preferred Contact Method <input type=""
                    Address <input type="text" name="empAddress" id="empAddress"/></br>
                    City <input type="text" name="empCity" id="empCity"/></br>
                    State <input type="text" name="empState" id="empState"/></br>
                    Referral Date <input type="date" name="referralDate" id="referralDate"/></br>
                    Referring Company 
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
                    <!--
                    <select name="company">
                        <option disabled selected value>
                            -- select an option -- 
                        </option>
                        <option value="Air Products, Inc.">Air Products, Inc.</option>
                        <option value="Boston Beer Company">Boston Beer Company</option>
                        <option value="B. Braun, Inc.">B. Braun, Inc.</option>
                        <option value="Crayola">Crayola</option>
                        <option value="DeSales University">DeSales University</option>
                        <option value="Just Born, Inc.">Just Born</option>
                        <option value="Lafayette College">Lafayette College</option>
                        <option value="Lehigh University">Lehigh University</option>
                        <option value="Lehigh Valley Health Network">Lehigh Valley Health Network</option>
                        <option value="Lutron">Lutron</option>
                        <option value="Moravian College">Moravian College</option>
                        <option value="Muhlenberg College">Muhlenberg College</option>
                        <option value="Northampton Community College">Northampton Community College</option>
                        <option value="Olympus">Olympus</option>
                        <option value="OraSure">OraSure</option>
                        <option value="PPL">PPL</option>
                        <option value="St. Luke's">St. Luke's</option>
                        <option value="Victaulic">Victaulic</option>
                    </select> --></br>
                    Position<input type="text" name="empPosition"/><br/>
                    Department<input type="text" name="empDepartment"/><br/>
                    <br/>
                    <input type="submit" value="Save"></input>
                </form>
            </div>
            <div id="partnerForm">
                <form method="post" action="clients.php" enctype="multipart/form-data" >
                    <h3>Spouse/Partner</h3>
                    First Name <input type="text" name="spFirstName" id="spFirstName"/></br>
                    Last Name <input type="text" name="spLastName" id="spLastName"/></br>
                    Primary Email <input type="email" name="spPrimaryEmail" id="spPrimaryEmail"/></br>
                    Secondary Email <input type="email" name="spSecondaryEmail" id="spSecondaryEmail"/></br>
                    Primary Phone <input type="tel" name="spHomePhone" id="spHomePhone"/></br>
                    Secondary Phone <input type="tel" name="spCellPhone" id="spCellPhone"/></br>
                    Professional Title <input type="text" name="spTitle" id="spTitle"/></br>
                </form>
            </div>
            <div id="servicesSec">
                <form method="post" action="clients.php" enctype="multipart/form-data" >
                    <h3>Services</h3>
                    <table>
                        <tbody>
                            <tr>
                                <td>Service Type</td>
                                <td>Invoice Date</td>
                                <td>Referral Date</td>
                                <td id="intakeDateLabel">Intake Date</td>
                                <td>Status</td>
                                <td id="closeDateLabel">Close Date</td>
                                <td>Coordinator</td>
                                <td>Units</td>
                                <td>Invoice Number</td>
                            </tr>
                            <tr>
                                <td>
                                    <input list="services">
                                        <datalist id="services">
                                            <option value="Dual Career"/>
                                            <option value="Community Transition"/>
                                            <option value="Dual Career with Community Transition"/>
                                            <option value="Relocation Assistance"/>
                                            <option value="Pre-Hire Tier 1"/>
                                            <option value="Pre-Hire Tier 2"/>
                                            <option value="Pre-Hire Tier 3"/>
                                            </datalist>
                                    <!--<select id="service" onchange="updateUnits()">
                                        <option disabled selected value>
                                            -- select an option -- 
                                        </option>
                                        <option value="DC">Dual Career</option>
                                        <option value="CT">Community Transition</option>
                                        <option value="CT+">Community Transition Addition</option>
                                        <option value="RA">Relocation Assistance</option>
                                        <option value="PH1">Pre-Hire Tier 1</option>
                                        <option value="PH2">Pre-Hire Tier 2</option>
                                        <option value="PH3">Pre-Hire Tier 3</option>
                                    </select> -->
                                </td>
                                <td>
                                    <input type="date" name="invoiceDate" id="invoiceDate"/>
                                </td>
                                <td>
                                    <input type="date" name="referralDate" id="referralDate"/>
                                </td>
                                <td>
                                    <input type="date" name="intakeDate" id="intakeDate"/>
                                </td>
                                <td>
                                    <select name="status" id = "status" onchange="updateStatus()">
                                        <option disabled selected value>
                                            -- select an option --
                                        </option>
                                        <option value="Open">Open</option>
                                        <option value="Closed">Closed</option>
                                        <option value="Deferred">Deferred</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="date" name="closeDate" id="closeDate"/>
                                </td>
                                <td>
                                    <select name="coordinator">
                                        <option disabled selected value>
                                            -- select an option --
                                        </option>
                                        <option value="MB">MB</option>
                                        <option value="SM">SM</option>
                                        <option value="DC">DC</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="units" id="units"/>
                                </td>
                                <td>
                                    <input type="number" name="invoiceNumber" id="invoiceNumber"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <?php
            include 'save.php';
        ?>
    </body>
</html>
