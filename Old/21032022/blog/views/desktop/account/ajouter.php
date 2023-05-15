<!-- start ribbon bar -->
<style >
    .ribbon { margin-top:0; }
    #tblRibbon { text-align:center; min-height:50px; border:none; border-radius:2px; }
    #tblRibbon td { width:auto; background-color:#f1f1f1;color:#4F8FFF; border:1px solid white;border-radius:2px; }
    #tblCRUD td, #tblDatabase td { padding:5px; text-align:center; height:100px; background-color:#f1f1f1;color:#4F8FFF; }
    #tblCRUD input, #tblCRUD p, #tblCRUD a, #tblDatabase input { text-decoration:none; color:#4F8FFF; }
    #page_title { padding:50% 5px; background-color:#f1f1f1;color:#4F8FFF; height:100px; border:1px solid white;border-radius:2px; }
</style>

<script>
function validateForm() {
  let txtPassword = document.forms["myForm"]["password"].value;
  let txtConfirmPassword = document.forms["myForm"]["confirmPassword"].value;
  if ( txtPassword != txtConfirmPassword ) {
    alert("Votre mot de passe et le confirmation de votre mot de passe ne sont pas pareil ...");
    return false;
  }
}
</script>

<form action="index.php?controller=account&action=register" method="POST" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" >
    
<div class="ribbon">
   <table id="tblRibbon" >
       <tr>
          <td >
               <p id="page_title" > DataEntry </p>   
          </td>
          <td >
              <table id="tblCRUD" >
                  <tr >
                    <td >
                        <!--input name="add_new" onclick="addNew();" type="submit" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Add.png') no-repeat 50% 20%; color:white;text-align:center;padding-top:80%;" alt="Add" value="Nouveau"/><br/-->
                       <!--a id="anchor_add_new" href="index.php?controller=rawMaterials&action=register" >
                             <img data-src="assets/images/png32/Save.png" />
                             <p> Sauvegarder </p>
                       </a-->
                       <input name="save" type="submit" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Save.png') no-repeat 50% 20%; text-align:center;padding-top:45%;" alt="Save" value="Sauvegarder"/><br/>

                    </td>
                    <td style="padding-top:0px">
                        <input onclick="javascript:window.location.href='index.php?controller=account';" name="ReturnToList" type="button" style="border:none;width:100%;height:40%;background:url('assets/images/png32/ReturntoList.png') no-repeat 20% 50%; text-align:right;padding-left:50px;" alt="ReturntoList" value="Retourner"/><br/>
                        <input name="delete" type="submit" style="border:none;width:100%;height:40%;background:url('assets/images/png/Delete.png') no-repeat 20% 50%; text-align:right;padding-left:50px;" alt="Delete" value="Supprimer"/><br/>
                    </td>
                  </tr>
               </table>
           </td>           
           <td >
               <table id="tblDatabase">
                  <tr >
                     <td >
                         <!--input id="fileInput" name="fileInput" type="button" style="display:none;" onclick="" onchange=" document.getElementById('file').click(); "/>
                         <input id="file" type="button" name="import" value="IMPORT" onfocus="document.getElementById('fileInput').type='file';" onclick="if( document.getElementById('fileInput').value == ''){ document.getElementById('fileInput').click(); } else { document.getElementById('file').type = 'submit'; document.getElementById('file').click(); }" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Import32x32.png') no-repeat 50% 20%; text-align:center;padding-top:60%;" alt="Add"/!-->
                        <input id="fileInputImport" name="fileInputImport" type="button" style="display:none;" onclick="" onchange=" document.getElementById('fileImport').click(); "/>
                        <input style="border:none;width:100%;height:100%;background:url('assets/images/png32/Import32x32.png') no-repeat 50% 20%; text-align:center;padding-top:60%;" class="btnAttachement" id="fileImport" type="button" name="submitImport" value="Import" onfocus="document.getElementById('fileInputImport').type='file';" onclick="if( document.getElementById('fileInputImport').value == ''){ document.getElementById('fileInputImport').click(); } else { document.getElementById('fileImport').type = 'submit'; document.getElementById('fileImport').click(); }" alt="Upload Image"/>

                     </td>
                     <td >
                         <input name="export" onclick="addNew();" type="submit" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Excel32x32.png') no-repeat 50% 20%; text-align:center;padding-top:45%;" alt="Export Database" value="EXPORTER"/><br/>
                     </td>
                     <td >
                         <input name="print" onclick="Print();" type="submit" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Print.png') no-repeat 50% 20%; text-align:center;padding-top:45%;" alt="Print Database" value="IMPRIMER"/><br/>
                     </td>
                  </tr>
               </table>
            </td>
        </tr>
    </table>           
</div>
<!-- end ribbon bar -->

<!-- start messages -->
<?php if ( isset($data["message"]) && $data["message"] != "" ) { ?>
<link rel="stylesheet" href="assets/css/alert.css">

<div class="<?php echo $data['message-class']; ?>">
   <span class="closebtn" >&times;</span>
   <?php echo $data["message"]; ?>
</div>
<script type="text/javascript" src="assets/js/alert.js"></script>
<?php } ?>

<!-- start form -->
<link rel="stylesheet" href="assets/css/ResponsiveForm.css">
<style >
input[type=text], input[type=password],  input[type=date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color:#fff;
}
</style>
<div class="container">
   <div class="row">
      
   </div>
   <div class="row">
      <div class="col-25">
         <div class="col-75">
            <label for="Id"> No du record </label>
         </div>
         <div class="col-25">
            <input value="<?php if ( isset( $data['Id'] ) ) { echo $data['Id'] ; }?>" type="text" style="text-align:center;" id="Id" name="Id" placeholder="0">
         </div>
      </div>
      <div class="col-75">
         <div class="col-25">
            <input type="submit" name="first" style="width:95%;" value="Début">
         </div>
         <div class="col-25">
            <input type="submit" name="back" style="width:95%;" value="Précédent">
         </div>
         <div class="col-25">
            <input type="submit" name="next" style="width:95%;" value="Suivant">
         </div>
         <div class="col-25">
            <input type="submit" name="last" style="width:95%;" value="Fin">
         </div>
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="UserName"> Identifiant </label>
      </div>
      <div class="col-75">
        <input value="<?php if ( isset( $data['UserName'] ) ) { echo $data['UserName'] ; }?>" type="text" id="UserName" name="UserName" placeholder="Introduisez votre identifiant préféré ..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="password"> Mot de passe </label>
      </div>
      <div class="col-75">
        <input value="<?php if ( isset( $data['Password'] ) ) { echo $data['Password'] ; }?>" type="password" id="password" name="password" placeholder="Introduisez votre mot de passe préféré ..">
      </div>
    </div> 
   
    <div class="row">
      <div class="col-25">
        <label for="confirmPassword"> Confirmation du mot de passe </label>
      </div>
      <div class="col-75">
        <input value="<?php if ( isset( $data['Password'] ) ) { echo $data['Password'] ; }?>" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmez votre mot de passe ..">
      </div>
    </div>
     
    <div class="row">
      <div class="col-25">
        <label for="IdService"> Service </label>
      </div>
      <div class="col-75">
        <select id="IdService" name="IdService">
           <?php if ( isset( $_SESSION["Services"] ) ) { $Services= $_SESSION["Services"] ; ?>
           <?php    foreach( $Services as $items ) { ?>
           <option <?php if ( isset( $data['IdService'] ) && $data['IdService'] == $items["Id"]) { echo 'selected' ; } ?> value="<?php echo $items['Id']; ?>"> <?php echo $items['Title']; ?> </option>
           <?php    } ?>
           <?php } ?>
           
          <!--option <?php if ( isset( $data['IdCategorie'] ) && $data['IdCategorie'] == '1' ) { echo 'selected' ; } ?> value="1"> Solvants </option>
          <option <?php if ( isset( $data['IdCategorie'] ) && $data['IdCategorie'] == '2' ) { echo 'selected' ; } ?> value="2"> Appareil </option>
          <option <?php if ( isset( $data['IdCategorie'] ) && $data['IdCategorie'] == '3' ) { echo 'selected' ; } ?> value="3"> Pièces d'un appareil </option-->
        </select>
      </div>
    </div>
     
    
    <div class="row">
      <div class="col-25">
        <label for="Active"> Active </label>
      </div>
      <div class="col-75">
        <select id="Active" name="Active">
          <option <?php if ( isset( $data['Active'] ) && $data['Active'] == '0' ) { echo 'selected' ; } ?> value="0"> Déactive </option>
          <option <?php if ( isset( $data['Active'] ) && $data['Active'] == '1' ) { echo 'selected' ; } ?> value="1"> Active </option-->
        </select>
      </div>
    </div>
   
    <!-- div class="row">
      <input type="submit" value="Submit">
    </div -->
  </form>
</div>
<!-- End form -->