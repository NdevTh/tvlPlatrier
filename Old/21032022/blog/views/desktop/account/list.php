<!-- start ribbon bar -->
<style >
    .ribbon { margin:0; }
    #tblRibbon { text-align:center; min-height:50px; border:none; border-radius:2px; }
    #tblRibbon td { max-height:100px; width:auto; background-color:#f1f1f1;color:#4F8FFF; border:1px solid white;border-radius:2px; }
    #tblCRUD td, #tblDatabase td { text-align:center; height:100px; background-color:#f1f1f1;color:#4F8FFF; }
    #tblCRUD input, #tblCRUD p, #tblCRUD a, #tblDatabase input { text-decoration:none; color:#4F8FFF; }
    #page_title { padding:30% 5px; background-color:#f1f1f1;color:#4F8FFF; max-height:100px; border:1px solid white;border-radius:2px; }
</style>

<div class="ribbon">
   <table id="tblRibbon" >
       <tr>
          <td >
               <p id="page_title" > Déstockage </p>   
          </td>
          <td >
              <table id="tblCRUD" >
                  <tr >
                    <td >
                        <!--input name="add_new" onclick="addNew();" type="submit" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Add.png') no-repeat 50% 20%; color:white;text-align:center;padding-top:80%;" alt="Add" value="Nouveau"/><br/-->
                        <a id="anchor_add_new" href="index.php?controller=account&action=DataEntry" >
                             <img style="width:32px;height:32px;" data-src="assets/images/png32/Add.png" />
                             <p>AJOUTER</p>
                        </a>
                    </td>
                    <!--td style="padding-top:0px">
                        <input onclick="javascript:editData();" name="edit" type="button" style="border:none;width:100%;height:40%;background:url('assets/images/png32/Edit.png') no-repeat 20% 50%; text-align:right;padding-left:50px;" alt="Edit" value="Modifier"/><br/>
                        <input name="delete" type="submit" style="border:none;width:100%;height:40%;background:url('assets/images/png/Delete.png') no-repeat 20% 50%; text-align:right;padding-left:50px;" alt="Delete" value="Supprimer"/><br/>
                    </td-->
                  </tr>
               </table>
           </td>           
           <td >
               <table id="tblDatabase">
                  <tr >
                     <td >
                       <form action="index.php?controller=stockages" method="POST" enctype="multipart/form-data">
                         <!--input id="fileInput" name="fileInput" type="button" style="display:none;" onclick="" onchange=" document.getElementById('file').click(); "/>
                         <input id="file" type="button" name="import" value="IMPORT" onfocus="document.getElementById('fileInput').type='file';" onclick="if( document.getElementById('fileInput').value == ''){ document.getElementById('fileInput').click(); } else { document.getElementById('file').type = 'submit'; document.getElementById('file').click(); }" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Import32x32.png') no-repeat 50% 20%; text-align:center;padding-top:60%;" alt="Add"/-->
                         <input id="fileInputImport" name="fileInputImport" type="button" style="display:none;" onclick="" onchange=" document.getElementById('fileImport').click(); "/>
                         <input style="border:none;width:100%;height:100%;background:url('assets/images/png32/Import32x32.png') no-repeat 60% 20%; text-align:center;padding-top:100%;" class="btnAttachement" id="fileImport" type="button" name="submitImport" value="Import" onfocus="document.getElementById('fileInputImport').type='file';" onclick="if( document.getElementById('fileInputImport').value == ''){ document.getElementById('fileInputImport').click(); } else { document.getElementById('fileImport').type = 'submit'; document.getElementById('fileImport').click(); }" alt="Upload Image"/>
                       </form>
                     </td>
                     <td >
                         <a id="anchor_add_new" href="index.php?controller=destockages&action=export" style="text-decoration:none;color:#4F8FFF;">
                             <img style="width:50px;height:50px;padding-bottom:5px;" data-src="assets/images/png32/Excel32x32.png" />
                             <br/>Export
                         </a>
                         <!--input name="export" onclick="addNew();" type="submit" style="border:none;width:100%;height:100%;background:url('assets/images/png32/Excel32x32.png') no-repeat 50% 20%; text-align:center;padding-top:45%;" alt="Export Database" value="EXPORTER"/><br/-->
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
<!-- end messages -->

<link rel="stylesheet" href="assets/css/table.css">                  
<input id="myInput" type="text" placeholder="Introduire des mots clés ... "/>
<!-- put script below txtSearch -->

<table id="myTable">
 <thead>
  <tr class="header">
    <th class="col0" ><INPUT id="chkAll" type="checkbox" onchange="checkAll()" name="chk[]"/></th>
    <th class="col1" >
         Date Créée <br/>
         <a class="sortAsc" href="javascript:sort(true, 'col1', 'myTable');">asc</a> 
         <a class="sortDesc" href="javascript:sort(false, 'col1', 'myTable');">des</a>       
    </th>
     <th class="col2" >
         Identifiant <br/>
         <a class="sortAsc" href="javascript:sort(true, 'col2', 'myTable');">asc</a> 
         <a class="sortDesc" href="javascript:sort(false, 'col2', 'myTable');">des</a>            
    </th>
    <th class="col3" >
         Mot de passe <br/>
         <a class="sortAsc" href="javascript:sort(true, 'col3', 'myTable');">asc</a> 
         <a class="sortDesc" href="javascript:sort(false, 'col3', 'myTable');">des</a>            
    </th> 
    <th class="col4" >
         Service <br/>
         <a class="sortAsc" href="javascript:sort(true, 'col4', 'myTable');">asc</a> 
         <a class="sortDesc" href="javascript:sort(false, 'col4', 'myTable');">des</a>            
    </th> 
    <th class="col5" >
         Active <br/>
         <a class="sortAsc" href="javascript:sort(true, 'col5', 'myTable');">asc</a> 
         <a class="sortDesc" href="javascript:sort(false, 'col5', 'myTable');">des</a>            
    </th> 
    
  </tr>
 </thead>
 <tbody>
    
    <?php foreach( $data as $item ): ?>
    <tr>
       <td class="col0"> <input value="<?php echo $item['Id'];?>" type="checkbox" name="chkbox[]" onchange="checkSelected()" /> </td>
       <td class="col1">  <?php echo date("d-m-Y", strtotime( $item['CreatedDate'] )); ?> </td>
       <td class="col2"> <?php echo $item['UserName'];?> </td>
       <td class="col3" style="text-align:center;"> <?php echo $item['Password'];?> </td>
       <td class="col4" style="text-align:center;"> <?php echo $item['IdService'];?> </td>
       <td class="col5" style="text-align:center;"> <?php echo $item['Active'];?> </td>
    
    </tr>
    <?php endforeach ?>
    
 </tbody>
</table>

<script type="text/javascript" src="assets/js/table.js"></script>
