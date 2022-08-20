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

<!-- Switch Cases -->

<?php 
$owner_name = $_POST["own-name"];
$locality_1 = $_POST["Locality"];
$locality;

switch ($locality_1) {
    case "Poor":
        $locality = 1;
      break;
    case "Below Average":
        $locality = 2;      
      break;
    case "Average":
        $locality = 3;
      break;
    case "Good":
        $locality = 4;
      break;
    case "Excellent":
        $locality = 5;
      break;
    default:
      echo "No Option is Selected";
  }
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
        <td colspan="4"> <h3>2. Property Ratings </h3>
        1 = Poor, 2 = Below Average, 3 = Average, 4 = Good, 5 = Excellent
        </td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%"> Locality : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Locality"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%"> Condition of approach road : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Road_Condition"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%"> Physical status of property : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Physical_status"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%"> View from property : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["View"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>3. Amenities Available </h3>
        </td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%"> Water Availability : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["water_availability"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%"> Electricity Breakdown : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["electricity_availability"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%"> Sewerage/sanitation : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Sewerage"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%"> Exterior : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Exterior"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%"> Interior : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Interior"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>f)</p></td>
        <td style="width:45%"> Plumbing : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Plumbing"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>g)</p></td>
        <td style="width:45%"> Maintenance level : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Maintenance"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>h)</p></td>
        <td style="width:45%"> Development of surrounding area : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Development"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>i)</p></td>
        <td style="width:45%"> Architectural and aesthetic quality : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Architectural"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>j)</p></td>
        <td style="width:45%"> Flooring : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Flooring"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Others : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Flooring-others"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>k)</p></td>
        <td style="width:45%"> Electrical fitting : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Electrical"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>l)</p></td>
        <td style="width:45%"> Kitchen Platform : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Kitchen"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>m)</p></td>
        <td style="width:45%"> Parking : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Parking"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>n)</p></td>
        <td style="width:45%"> Painting : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Painting"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>4. Amenities At Distance </h3>
        </td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%"> School/College : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["School"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%"> Hospital : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Hospital"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%"> Market : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Market"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%"> Bank : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Bank"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%"> Playground : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Playground"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>f)</p></td>
        <td style="width:45%">Cinema Theatre : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Theatre"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%">Sports complex : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["complex"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>g)</p></td>
        <td style="width:45%">Rikshaw stand : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Rikshaw"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>h)</p></td>
        <td style="width:45%">Parks/Gardens : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Gardens"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>5. Transpotation Facilities At Distance </h3>
        </td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%">Bus stand : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Bus"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%">Railway stand : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Railway"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%">Airport : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Airport"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%">Highway : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Highway"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%">Govt Offices : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Govt"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>6. Others </h3>
        </td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%">Width of approach road : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["road-width"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%"> Lift (If yes) : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Lift-Yes"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%"> Lift (If No) : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Lift-No"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%"> Industrial  connectivity : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Industrial"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%"> Classification of the area : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Classification"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>f)</p></td>
        <td style="width:45%"> Size and Shape of the Land : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Size-Shape"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>g)</p></td>
        <td style="width:45%"> Type of construction : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["construction"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>h)</p></td>
        <td style="width:45%"> Planning (Ease of movement) :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Planning"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>i)</p></td>
        <td style="width:45%"> ny negatives (Please Specify) :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Neg-1"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Please Specify</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["negatives"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>j)</p></td>
        <td style="width:45%"> Any favorable consideration (Please specify) :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["plus-1"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> Please Specify</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["positives"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>k)</p></td>
        <td style="width:45%"> Type of property  :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Property-type"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>l)</p></td>
        <td style="width:45%"> Ready-Reckoner Rate :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Ready-Reckoner"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>7. Facilities </h3>
        1 = Yes or No = 0
        </td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%"> Use of green technology :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Green-Tech"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%"> Use of solar system :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Solar-Tech"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%"> Gas pipeline :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Gas-Pipeline"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%"> Provision  for rainwater harvesting :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["rainwate"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%">Bore well with Water pump :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Bore-well"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>8. Other Facilities </h3>
        1 = Yes or No = 0
        </td>
    </tr>
    <tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%">Provision  for firefighting :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["firefighting"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%">Securty system :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Securty"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>c)</p></td>
        <td style="width:45%">Club house :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Club-house"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>d)</p></td>
        <td style="width:45%">Swimming pool :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["pool"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>e)</p></td>
        <td style="width:45%">Jogging track :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Jogging"]; ?></td>        
    </tr>
    <tr>
        <td colspan="4"> <h3>9. Valuation Details </h3></td>
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
