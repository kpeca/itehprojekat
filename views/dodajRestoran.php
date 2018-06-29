<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <meta charset="utf-8">
    	<style>
    	.container {
    margin: auto;
    width: 50%;
     display: flex;
    align-items: center;
    padding: 30px;
    margin-top: 100px;
}

  	label{

  		color: blue;
  		font-weight: 300%;
  		padding: 20px;
  	}

  	.col-form-label {
  		padding-top:10px;
  		padding-right: 50px;

  	}
  	.radni{
  		
  		margin-top: 30px;
  	}
  	.poruka{
  		color:green;
  		text-align: center;
  		font-size: 26px;
    	margin-top: 40px;
    	font-weight: bold;
  	}
  </style>

  </head>

  <body>
  	<div class="container forma">

  <?php
  
  $korisnik_id = '1';
   $rejting = $kategorija = $cenovna_kategorija  = $radnidan =  $radnovreme ='';
  $naziv = $telefon = $adresa= $email = $radnidanod = $radnidando = $radnovrod = $radnovrdo = $opstina ='';
  $errNaziv = $errTelefon = $errAdresa = $errEmail = $errOpstina = '';
  $valid=true;
  $success ='';
  if(isset($_POST['submit'])) {
    $naziv = $_POST['naziv'];
    $telefon = $_POST['telefon'];
    $adresa = $_POST['adresa'];
    $email = $_POST['email'];
    $radnidanod = $_POST['radnidanod'];
    $radnidando = $_POST['radnidando'];
    $radnovrod = $_POST['radnovrod'];
    $radnovrdo = $_POST['radnovrdo'];
    $radnidan = $radnidanod . ' - ' . $radnidando;
    $radnovreme = $radnovrod . ' - ' . $radnovrdo;
    $opstina = $_POST['opstina'];
    
    
  }    
  // Provera za naziv
  if(empty($_POST['naziv'])){
    $errNaziv= 'Niste upisali naziv restorana';
    $valid=false;
  }
 // Provera za telefon
 if(empty($_POST['telefon'])){
    $errTelefon = 'Niste upisali broj telefona';
    $valid=false;
 }
 // Provera za adresu
 if(empty($_POST['adresa'])){
    $errAdresa = 'Niste uneli adresu';
    $valid=false;
 }
 // Provera za Email
 if(empty($_POST['email'])){
    $errEmail = 'Niste uneli Email';
    $valid=false;
 }
  // Provera za Opstinu
 if(empty($_POST['email'])){
    $errOpstina = 'Niste uneli opstinu';
    $valid=false;
 }
if($valid){
  $success = 'Restoran je unet u bazu';
}
// create a database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'restoran';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
/*
if($valid){
  $sql = "INSERT INTO  restoran (id ,naziv, rejting, kategorija, telefon, email, adresa, cenovna_kategorija, radni_dani, radno_vreme, opstina, korisnik_id) VALUES ('1', '$naziv','4', '$kategorija', '$telefon', '$email', '$adresa','5', '$radnidan' , '$radnovreme' , '$opstina' , '$korisnik_id')";
if (mysqli_query($conn, $sql)) {
  echo 'New record created successfully';
  
} else {
  echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}
}
*/
?>
  <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <div class="form-group row">
    <label for="naziv" class="col-sm-1 col-form-label">Naziv</label>
    <div class="col-md-4">
      <input type="textbox" class="form-control" id="naziv" name="naziv" placeholder="Unesite naziv restorana">
    </div>
     <label for="telefon" class="col-sm-1 col-form-label">Telefon</label>
    <div class="col-md-4">
      <input type="textbox" class="form-control" id="brtel" name="telefon" placeholder="Unesite broj telefona">
    </div>
  </div>
  
   <div class="form-group row">
    <label for="adresa" class="col-sm-1 col-form-label">Adresa</label>
    <div class="col-md-4">
      <input type="textbox" class="form-control" id="adr" name="adresa" placeholder="Unesite adresu restorana">
    </div>
    <label for="email" class="col-sm-1 col-form-label">Email</label>
    <div class="col-md-4">
      <input type="Email" class="form-control" id="email" name="email" placeholder="Unesite Email adresu">
    </div>
  </div>
   
    
  

<div class="form-group row">
    <label for="radnovreme" id="radnidani" class="col-sm-1 col-form-label radni">Radni Dani</label>
    <div class="col-md-4">
    	Od :
    	<select class="form-control form-control-sm" name="radnidanod">
  <option>Ponedeljak</option>
  <option>Utorak</option>
  <option>Sreda</option>
  <option>Četvrtak</option>
  <option>Petak</option>
  <option>Subota</option>
  <option>Nedelja</option>
</select>
		Do:
  	<select class="form-control form-control-sm" name="radnidando">
    <option>Ponedeljak</option>
  <option>Utorak</option>
  <option>Sreda</option>
  <option>Četvrtak</option>
  <option>Petak</option>
  <option>Subota</option>
  <option>Nedelja</option>
</select>
</div>
  <label for="radnovreme" id="radnovr" class="col-sm-1 col-form-label radni">Radno Vreme</label>
    <div class="col-md-4">
    	Od :
    	<select class="form-control form-control-sm" name = "radnovrod">
  <option>00</option>
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
</select>
		Do:
  	<select class="form-control form-control-sm" name="radnovrdo">
    <option>00</option>
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
</select>
</div>
 </div>

  <div class="form-group row">
    <label for="opstina" class="col-sm-1 col-form-label">Opština</label>
    <div class="col-md-4">
      <input type="textbox" class="form-control" id="оpstina" name="opstina" placeholder="Unesite opštinu">
    </div>
  </div>
 
  
    <div class="col-xs-12">
      <input type="submit"style="position:relative; top:25px; left: 39%;" class="btn btn-primary text-center" value="Ubaci u Bazu" name="submit"></input>
    </div>
  
</form>
</div>

    <?php
if($valid){
  $sql = "INSERT INTO  restoran ( naziv, rejting, kategorija, telefon, email, adresa, cenovna_kategorija, radni_dani, radno_vreme, opstina, korisnik_id) VALUES ('$naziv','4', '$kategorija', '$telefon', '$email', '$adresa','5', '$radnidan' , '$radnovreme' , '$opstina' , '$korisnik_id')";
if (mysqli_query($conn, $sql)) {
	echo '<div class="poruka">';	
  echo 'Restoran je uspešno dodat u bazu';
  echo '</div>';
} else {

  echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}
}

?>
<script type="text/javascript">
	$(document).ready(function(){
$( ".btn" ).click(function() {
  $( ".poruka" ).fadeOut( "slow", function() {
    // Animation complete.
  });
});
});
</script>

<script src="views/js/bootstrap/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>