<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>

<?php
require_once 'header.php';
require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name']) ){
$continent = ($_GET['name']);
$desPays = getCountriesByContinent($continent);
}
else{
$continent = "monde";
$desPays = getAllCountries();
}
?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    
    <div>
     <table class="table">
         <tr>
         <?php echo"<h1>$continent</h1>"?>
           <th>Nom</th>
           <th>Population</th>
           <th>Surface</th>
           <th>Chef etat</th>
           <th>Capitale</th>
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
       ?>
          <tr>
            <td> <?php echo $continent  ?></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->SurfaceArea?></td>
            <td> <?php echo $pays->HeadOfState?></td>
            <td> <?php echo getCapital($continent->Name)?></td>
          </tr>
          <?php  ?>
     </table>
    </div>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>