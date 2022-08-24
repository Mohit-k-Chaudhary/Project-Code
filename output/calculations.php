<!-- Formating in CSS -->


<html>
    <body>
        

<head>
<script type="text/javascript" src="jspdf.debug.js"></script>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 25px;
  margin: auto;
  width: 50%;
  border: 1px solid black;
  padding: 10px;
}
table {
    width: 80%;
}

a {
    text-decoration:None;
    color:black;
    border:1px solid black;
    padding: 10px;
    background: #ffffff;
    text-align:center;
    vertical-align: middle;
}
.Fornt-Page {
    text-align:center;

}
.first-page{
    text-align:center;
}

img{
    margin: 0;
    width: 30%;
    height: 30%;
}
</style>
</body>
</html>

<!-- Calculations Cases -->

<?php 
$owner_name = $_POST["own-name"];

$Property_Rating = $_POST["Locality"] + $_POST["Road_Condition"] + $_POST["Physical_status"] + $_POST["View"];
$Amenities_Rating = $_POST["water_availability"] + $_POST["electricity_availability"] + $_POST["Sewerage"] + $_POST["Exterior"] + $_POST["Interior"] + $_POST["Plumbing"] + $_POST["Maintenance"] + $_POST["Development"] + $_POST["Architectural"] + $_POST["Flooring"] + $_POST["Electrical"] + $_POST["Kitchen"] + $_POST["Parking"] + $_POST["Painting"];
$Amenities_Distance_Rating = $_POST["School"] + $_POST["Hospital"] + $_POST["Market"] + $_POST["Bank"] + $_POST["Playground"] + $_POST["Theatre"] + $_POST["complex"] + $_POST["Rikshaw"] + $_POST["Gardens"];
$Transpotation_Distance_Rating = $_POST["Bus"] + $_POST["Railway"] + $_POST["Airport"] + $_POST["Highway"] + $_POST["Govt"];
$Others_Ratings = $_POST["road-width"] + $_POST["Lift-Yes"] + $_POST["Lift-No"] + $_POST["Industrial"] + $_POST["Classification"] + $_POST["Size-Shape"] + $_POST["construction"] + $_POST["Planning"] + $_POST["Neg-1"] + $_POST["plus-1"]; 
$Facilities_1 = $_POST["Green-Tech"] + $_POST["Solar-Tech"] + $_POST["Gas-Pipeline"] + $_POST["rainwate"] + $_POST["Bore-well"];
$Facilities_2 = $_POST["firefighting"] + $_POST["Securty"] + $_POST["Club-house"] + $_POST["pool"] + $_POST["Jogging"];

$Sum = $Property_Rating + $Amenities_Rating + $Amenities_Distance_Rating+$Transpotation_Distance_Rating+$Others_Ratings+$Facilities_1+$Facilities_2;
$Total_ratings = 44;

$Average = $Sum/$Total_ratings;
$Mul_Factor;

if ($Average <= 0.5) {
    $Mul_Factor = 1;
  } elseif($Average <= 1) {
    $Mul_Factor = 1.05;
  } elseif($Average <= 1.5) {
    $Mul_Factor = 1.1;
  } elseif($Average <= 2) {
    $Mul_Factor = 1.15;
  } elseif($Average <= 2.5) {
    $Mul_Factor = 1.2;
  } elseif($Average <= 3) {
    $Mul_Factor = 1.25;
  } elseif($Average <= 3.5) {
    $Mul_Factor = 1.3;
  } elseif($Average <= 4) {
    $Mul_Factor = 1.35;
  } elseif($Average <= 4.5) {
    $Mul_Factor = 1.4;
  } elseif($Average <= 5) {
    $Mul_Factor = 1.45;
  } else {
    echo "Error in Calculations";
  }
$age_factor = $_POST["age_of_Building"];
$ready_recknor_rate = (int)$_POST["Ready-Reckoner"];
$area = (int)$_POST["area"];

$valuation = (($ready_recknor_rate * $area) * $Mul_Factor) * $age_factor;

echo $valuation."&#x20b9";


?>

<!-- Starting Page -->
<div class="Fornt-Page">
    <table classs="first-page">
        <tr>
            <th colspan="4"><h1>VALUATION REPORT</h1>
            <h2>Immovable Assets</h2>
            <h4>of</h4>
            <br><h3><?php echo $owner_name ?></h3>
            <br><h4>Located at</h4>
            <h2><?php echo $_POST["Address"]?></h2>
            <img src="First-Img.png" alt="Valuation">
            <br>
            <h2><?php echo date('F Y') ?> </h2><br><br>
            <h2></h2>
            <br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br>
            </th>
        </tr>    
    </table>
</div>

<!-- Calulations in PHP-->
<div id ="customers">
<br><br><br><br><br><br>
<table id ="tab_customers" class ="fixed">
    <tr>
        <th colspan="4"><h2>VALUATION REPORT </h2></th>
    </tr>
    <tr>
        <td colspan="4"> PURPOSE OF VALUATION : <?php echo $_POST["purpose"]; ?><br>
        AREA OFFICE : <?php echo $_POST["area-office"]; ?> </td>
    </tr>
    <tr>
        <td style="width:5%"><p>&nbsp;</p></td>
        <td style="width:45%"> Name of the Valuer: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["name"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>&nbsp;</p></td>
        <td style="width:45%"> Date of Inspection: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["date"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> VALUATION FOR COMPLETED BUILDING SCHEME : <?php echo $_POST["Drop-1"]; ?>
    </tr>
    <tr>
        <td colspan="4"> <h3>1. Property Details </h3>
        Property Details such as Name of owner Location etc.
        </td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%"> Name of the Applicant/Intended Buyer: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["pr-name"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Name of the Owner: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["own-name"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%"> Document perused: </td>
        <td style="width:5%"></td>
        <td style="width:45%"></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> i) Index-II No : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["In-No"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> ii) Plan/ Commencement Certificate No.: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Com-Cer-no"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> iii) Completion Certificate : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Com-Cer"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> iv) Agreement : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["aggrement"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%"> Location of the Property </td>
        <td style="width:5%"></td>
        <td style="width:45%"></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Address of the Property : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Address"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Plot No. /S.F. No./T.S.No. /R.S.No. : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["plot-no"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Village/Block No./Taluk/Ward No. : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Taluka"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> District/Corporation/Municipality : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["District"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%"> Boundaries and Dimensions </td>
        <td style="width:5%"></td>
        <td style="width:45%"></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> North/Front : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["North/Front"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> South/Rear : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["South/Rear"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> East/Left (side 1) : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["side-1"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> West/Right (side2) : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["side-2"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Extent : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["extent"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%"> Type of the property </td>
        <td style="width:5%"></td>
        <td style="width:45%"></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Flat/Bungalow/Row House/Duplex : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["type-property"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>f)</p></td>
        <td style="width:45%"> Occupant </td>
        <td style="width:5%"></td>
        <td style="width:45%"></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>g)</p></td>
        <td style="width:45%"> Usage of the Building </td>
        <td style="width:5%"></td>
        <td style="width:45%"></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Residential / partly commercial / fully commercial (Explain ratio of each type) : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Usage_Build"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>h)</p></td>
        <td style="width:45%"> Details of the Nearby Landmark : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["landmark"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>i)</p></td>
        <td style="width:45%"> Development of surrounding area with Lower class/ Middle/ Upper Middle/Posh : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["area-with"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>2. Valuation Details </h3></td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%">Ready-Reckoner Rate :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Ready-Reckoner"]."&#x20b9"; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%">Area :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["area"]." sqft"; ?></td>        
    </tr>
    <tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%">Area :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["area"]." sqft"; ?></td>        
    </tr>
    <tr>

        <td colspan="4"> <h3>10. CERTIFICATE </h3></td>
    </tr>
    <tr>
        <td colspan="4"><p>Note 1:- The extraordinary situation is created in the world due to pandemic of Covid-19 Virus. The
whole world is locked down since Mar.2020. Due to this situation the world economy is heavily
affected. The Impact of 2nd wave of Covid-19 worldwide again disturbed the world economy as well as
Indian Economy. Due to change in the priorities & uncertainty of the situation the real estate market is
also heavily affected. Considering the current situation, we are adopting the reasonable & fair market
rates after analyzing the various factors.</p></td>
    </tr>
    <tr>
        <td colspan="4"><p>Note 2 :- Normally the Ready Reckoner value is adopted for the Stamp Duty Purpose. This value is not
calculated by taking in to consideration the Market value and other technical and locational aspects.
Also Ready reckoner rates are not location based .The rates are based on S.No.s which may be same for
the main road or internal road. The market value is based on the Location of the property ,Demand
supply ratio, specifications of the property ,Market economy & such other factors. Hence in my opinion
the rate considered for this property is fair & reasonable..</p></td>
    </tr>
    <tr>
        <td colspan="4">I declare that I am not associated with the builder or with any of his associate companies or with the
borrower directly or indirectly in the past or in the present and this report has been prepared by me
with highest professional integrity.
I further declare that my assistant personally inspected the site and building onI further declare that all
the above particulars and information given in this report are true to the best of my knowledge and
belief.</td>
    </tr>

</table>
<a href="javascript:window.print();">Print Valuation</a>
</div>
<!-- <button onclick="javascript:demoFromHTML()">Print to PDF</button> -->


<!-- Valuation Calculations -->
