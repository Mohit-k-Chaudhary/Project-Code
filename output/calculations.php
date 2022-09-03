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

/* setlocale(LC_MONETARY, 'en_IN');
$valuation = moneyFormatIndia($valuation);

function moneyFormatIndia($num) {
    $explrestunits = "" ;
    if(strlen($num)>3) {
        $lastthree = substr($num, strlen($num)-3, strlen($num));
        $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
        $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
        $expunit = str_split($restunits, 2);
        for($i=0; $i<sizeof($expunit); $i++) {
            // creates each of the 2's group and adds a comma to the end
            if($i==0) {
                $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
            } else {
                $explrestunits .= $expunit[$i].",";
            }
        }
        $thecash = $explrestunits.$lastthree;
    } else {
        $thecash = $num;
    }
    return $thecash; // writes the final format where $currency is the currency symbol.
} */

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
            <h2><?php echo $_POST["Location_Prop"]?></h2>
            <img src="First-Img.png" alt="Valuation">
            <br>
            <h2><?php echo date('F Y') ?> </h2><br><br>
            <h2></h2>
            <br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br>
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
        <td style="width:5%"><p><b>I<b></p></td>
        <td colspan="3"><b> General<b> </td>
    </tr>
    <tr>
        <td style="width:5%"><p>1.</p></td>
        <td style="width:45%"> Name of the Valuer: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["name"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>2.</p></td>
        <td style="width:45%"> Date of Inspection: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["date"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>3</p></td>
        <td style="width:45%"> Name of the Owner: </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["own-name"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>4</p></td>
        <td style="width:45%"> If the property is under joint ownership/ co ownership, share of each owner. Is the share undivided. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"> <?php echo $_POST["ownership"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>5</p></td>
        <td style="width:45%"> Brief description of the property</td>
        <td style="width:5%"><p>:</p></td>
        <td style="width:45%"><?php echo $_POST["Brief_Prop"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>6</p></td>
        <td style="width:45%"> Location, Street, ward no. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Location_Prop"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>7</p></td>
        <td style="width:45%"> Survey /Plot no of the land. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Survey_Prop"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>8</p></td>
        <td style="width:45%"> Is the property situated in residential / commercial / Industrial/ shopping premise? </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Situated_prop"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>9</p></td>
        <td style="width:45%"> Classification of the locality-high class/ middle class/ poor class </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Locality_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>10</p></td>
        <td style="width:45%"> Proximity to civic amenities like schools, offices, hospital, market, cinema etc. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Proximity_Civil_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>11</p></td>
        <td style="width:45%"> Means and proximity to surface communication by which the locality is served. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Proximity_Communication_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p><b>II<b></p></td>
        <td colspan="3"><b> Land Details<b></td>
    </tr>
    <tr>
        <td style="width:5%"><p>12</p></td>
        <td style="width:45%"> Area of land supported by documentary proof shape dimensions and physical features. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Area_Property"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>13</p></td>
        <td style="width:45%"> Road or lanes on which land is abutting. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Road_Property"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>14</p></td>
        <td style="width:45%"> Is it free hold or lease land? </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Freehold_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>15</p></td>
        <td style="width:45%"> If lease hold the name of the lessors / lessees, nature of lease, date of commencement and termination of lease and terms of renewal of lease. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Lease_1"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> a) Initial premium. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Lease_2"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> b) Ground rent payable annum. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Lease_3"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> c) Unearned increase payable to the lessor in the event sale to transfer. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Lease_4"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>16</p></td>
        <td style="width:45%"> If there are any restrictive covenant in regard to use of the land. If so, attach the copy of the covenant </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Restrictive_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>17</p></td>
        <td style="width:45%"> Is there any agreement of easement? If so attach the copies. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Easement_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>18</p></td>
        <td style="width:45%"> Does the land fall in area included in town planning or any development of the Govt. or any statutory body if so give particulars. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Townplan_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>19</p></td>
        <td style="width:45%"> Has the whole/ part of the land been notified for acquisition by Govt. or Statutory body. Give date for notification. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Acquisition_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>20</p></td>
        <td style="width:45%"> Has any contribution been made towards development or is any contribution still outstanding. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Contribution_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>21</p></td>
        <td style="width:45%"> Attach a dimensional site plan : </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Dimensional_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p><b>III<b></p></td>
        <td colspan="3"><b> Improvement Details<b></td>
    </tr>
    <tr>
    <tr>
        <td style="width:5%"><p>22</p></td>
        <td style="width:45%"> Attach plans and elevations of all structures standing on the land or layout plan. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Elevation_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>23</p></td>
        <td style="width:45%"> Furnish technical details of the building on the separate sheets. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Annexure_1"]; ?></td>    
    </tr>
    <tr>
        <td style="width:5%"><p>24</p></td>
        <td style="width:45%"> a) Is the Premises owner occupied, tenant, or both </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Premises_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p></p></td>
        <td style="width:45%"> b)If partly occupied, specify portion and extent of area under Owner occupation. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Premises_Prop_1"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>25</p></td>
        <td style="width:45%"> What is F.S.I permissible & percentage actually utilized? </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["FSI_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p><b>IV<b></p></td>
        <td colspan="3"><b> Sales / Rates<b></td>
    </tr>
    <tr>
        <td style="width:5%"><p>26</p></td>
        <td style="width:45%"> Give instances of sale of immovable property in the locality on a separate sheet, incl. the name & address of the property, registration no, sale price & area land sold. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Sale_Price"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>27</p></td>
        <td style="width:45%"> Purchase Details </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Purchase_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>28</p></td>
        <td style="width:45%"> Composite Rate adopted in this valuation. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Composite_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>29</p></td>
        <td style="width:45%"> If sale instances are not available or relied upon, the basis of arriving at the Ready Construction rate. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Instances_Prop"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>30</p></td>
        <td style="width:45%"> Year of commencement of construction and year completion </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["COC_1"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>31</p></td>
        <td style="width:45%"> What was the method of construction by contract/by employing labour direct/by both. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["COC_2"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>32</p></td>
        <td style="width:45%"> For items of work done contract, produce copies of agreement. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["COC_3"]; ?></td>       
    </tr>
    <tr>
        <td style="width:5%"><p>33</p></td>
        <td style="width:45%"> For items of work done by engaging labor directly, give basic rates of materials & labor supported by documentary proof. </td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["COC_4"]; ?></td>       
    </tr>
    </table>
    <br><br><br>
    <table>
    <tr>
        <td colspan="4"> <h3>2. Valuation Details </h3></td>
    </tr>
    <tr>
        <td style="width:5%"><p>a)</p></td>
        <td style="width:45%">Ready-Reckoner Rate :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["Ready-Reckoner"]." &#x20b9"; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>b)</p></td>
        <td style="width:45%">Area :</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["area"]." sqft"; ?></td>        
    </tr>
    <tr>
</table>
<br><br><br>
<table>
<tr>
        <td colspan="4"> <h3>3. Valuation Table </h3></td>
    </tr>
    <tr>
        <td style="width:25%"><p>Asset Type</p></td>
        <td style="width:25%">Build-Up Area in sqft</td>
        <td style="width:25%"><p>Valuation Rate Rs. / sq. ft.</p></td>
        <td style="width:25%"><p>Fair Market Value, Rs.</p></td>        
    </tr>
    <tr>
        <td style="width:25%"><?php echo $_POST["Property-type"]; ?></td>
        <td style="width:25%"><?php echo $_POST["area"]." sqft"; ?></td>
        <td style="width:25%"><?php echo $_POST["Ready-Reckoner"]."&#x20b9"; ?></td>
        <td style="width:25%"><?php echo $valuation." &#x20b9"; ?></td>        
    </tr>
    <tr>
</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
    <tr>
    <td colspan="4"> <h3>Certificate of Valuation</h3></td>
    </tr>
    <tr>
        <td colspan="4">
            This is to certify that,<br><br><br><br><br>
            The Fair Market Value of the Immovable Asset of <?php echo $owner_name ?>, located at <?php echo $_POST["Location_Prop"]; ?>, is <?php echo $valuation." &#x20b9"; ?> as per our appraisal & Analysis.
        </td>
    </tr>
    <tr>
        <td colspan="4">
        This should be considered as true & Fair.
        </td>
    </tr>
</table>
<br><br><br>
<table>
    <tr>
    <td colspan="4"> <h2>Annexure I</h3></td>
    </tr>
    <tr>
    <td colspan="4"> <h3>Technical Details & Specifications of the property</h3></td>
    </tr>
    <tr>
        <td style="width:5%"><p>1</p></td>
        <td style="width:45%">No of floors and height of each floor</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-1"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>2</p></td>
        <td style="width:45%">Plinth area-floor-wise (As per Is:3861-1966)</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-2"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>3</p></td>
        <td style="width:45%">Year of construction</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-3"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>4</p></td>
        <td style="width:45%">Estimated future life</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-4"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>5</p></td>
        <td style="width:45%">Type of construction - Load bearing walls/R.C.C. frame/steel frame</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-5"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>6</p></td>
        <td style="width:45%">Type of Foundation</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-6"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>7</p></td>
        <td style="width:45%">WALLS a)External walls</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-7"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>8</p></td>
        <td style="width:45%">b) Partitions</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-8"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>9</p></td>
        <td style="width:45%">Door and windows (floor wise)</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-9"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>10</p></td>
        <td style="width:45%">Flooring (floor wise)</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-10"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>11</p></td>
        <td style="width:45%">Finishing (floor wise)</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-11"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>12</p></td>
        <td style="width:45%">Roofing and terracing</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-12"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>13</p></td>
        <td style="width:45%">a) Internal wiring – surface or condult</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-13"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>14</p></td>
        <td style="width:45%">b) Class of fitting superior / ordinary / poor</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-14"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>15</p></td>
        <td style="width:45%">c) Sanitary installations</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-15"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>16</p></td>
        <td style="width:45%">Compound installations</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-16"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>17</p></td>
        <td style="width:45%">No. of lifts and capacity</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-17"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>18</p></td>
        <td style="width:45%">Water facility</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-18"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>19</p></td>
        <td style="width:45%">Other amenities</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-19"]; ?></td>        
    </tr>
    <tr>
        <td style="width:5%"><p>20</p></td>
        <td style="width:45%">Roads & paving within the Compound</td>
        <td style="width:5%">:</td>
        <td style="width:45%"><?php echo $_POST["tech-20"]; ?></td>        
    </tr>
</table>
<br><br><br><br><br><br><br>
<a href="javascript:window.print();">Print Valuation</a>
</div>
