<script type="text/javascript" defer>
    /*utilisateur*/ 
$(document).ready(function(){
  //Menu Toggle Script
  $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
  });
  
  // For highlighting activated tabs
  $("#tab1").click(function () {
  $(".tabs").removeClass("active1");
  $(".tabs").addClass("bg-light");
  $("#tab1").addClass("active1");
  $("#tab1").removeClass("bg-light");
  });
  $("#tab2").click(function () {
  $(".tabs").removeClass("active1");
  $(".tabs").addClass("bg-light");
  $("#tab2").addClass("active1");
  $("#tab2").removeClass("bg-light");
  });
  $("#tab3").click(function () {
  $(".tabs").removeClass("active1");
  $(".tabs").addClass("bg-light");
  $("#tab3").addClass("active1");
  $("#tab3").removeClass("bg-light");
  });
  })
</script>
      <div class="container-fluid px-0" id="bg-div">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="card card0">
                    <div class="d-flex" id="wrapper">
                        <!-- Sidebar -->
                        <div class="bg-light border-right" id="sidebar-wrapper">

                            <div class="list-group list-group-flush"> <a data-toggle="tab" href="#menu1" id="tab1" class="tabs list-group-item bg-light">
                                    <div class="list-div my-2">
                                        <i class="fas fa-user"></i>Mon Profil 
                                    </div>
                                </a> <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item active1">
                                    <div class="list-div my-2">
                                        <i class="fas fa-car-alt"></i> Mes voitures
                                    </div>
                                </a> <a data-toggle="tab" href="#menu3" id="tab3" class="tabs list-group-item bg-light">
                                    <div class="list-div my-2">
                                        Mes r??servations 
                                    </div>
                                </a> </div>
                        </div> <!-- Page Content -->
                        <div id="page-content-wrapper">
                            <div class="row pt-3" id="border-btm">
                                <div class="col-4"> <button class="btn btn-success mt-4 ml-3 mb-3" id="menu-toggle">
                                        <div class="bar4"></div>
                                        <div class="bar4"></div>
                                        <div class="bar4"></div>
                                    </button> </div>
                                <div class="col-8">
                                    
                                </div>
                            </div>
                           
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane">
                                    <div class="row justify-content-center">
                                        <div class="col-11">
                                            <div class="form-card">
                                                <h3 class="mt-0 mb-4 text-center">Modifier mon profil</h3>
                                                <form name="form" method="POST" action="index.php?controller=utilisateur&action=updated">
                                                    <div class="row"><h4 id="i4">Mes coordonn??es</h4></div>
                                                    <div class="row">
                                                    
                                                        
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" id="nom_utilisateur" name="nom_utilisateur" > <label>Nom</label> </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="prenom_utilisateur" id="prenom" > <label>Pr??nom</label> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="tel"  > <label>Tel</label> </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="pays" id="pays"> <label>Pays</label></div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="number" name="code_postal" id="code_postal" > <label>Code Postal</label> </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="ville" id="ville" > <label>Ville</label> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="adresse" id="adresse" > <label>Adresse</label> </div>
                                                        </div>
                                                        
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="date" name="date_de_naissance" id="date de naissance" > <label>Date de naissance</label> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="lieu_de_naissance" > <label>Lieu de Naissance</label> </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row"><h4 id="i5">Param??tres du compte</h4></div>
                                                    <div class="row">
                                                    
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text"  name="email" > <label>E-mail</label> </div>
                                                        </div>
                                                        
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" id="mdp" name="mdp" > <label>Mot de passe</label> </div>
                                                        </div> 
                                                        
                                                    </div>
                                                   
                                                    <br/>
                                                    
                                                    <div class="row"><h4 id="i6">Permis de conduire
                                                    </h4></div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="num_permis" id="num_permis" > <label>Num??ro de permis</label> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="date" name="date_obtention" id="date_obtention" > <label>Date d'obtention</label> </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12"> <input type="submit" value="Enregistrer" class="btn btn-success placeicon"> </div>
                                                    </div>
                                                    
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane in active">
                                    <div class="row justify-content-center">
                                        <div class="col-11">
                                            <div class="form-card">
                                                <h3 class="mt-0 mb-4 text-center"></h3>
                                                <form onsubmit="event.preventDefault()">
                                                   
                                                    <div class="row">
                                    
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text"  name="immatriculation" > <label>Immatriculation</label> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text"name="marque" > <label>Marque</label> </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="modele" > <label>Mod??le</label> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="kilometrage" placeholder="Ex:15000" required/> <label>Kilom??trage</label> </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text" name="puissance_fiscale"> <label>Puissance Fiscale</label></div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="text"> <label>Carburant </label> </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="date" name="date_validation_tech"> <label>Date de validit?? du contr??le tech</label></div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div> 
                                                                <label for="boitevitesse" id="l">Boite de vitesse</label>
                                                                <select name="boitevitesse" id="boitevitesse">
                                                                <option value="m">Manuelle</option>
                                                                <option value="a">Automatique</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group"> <input type="number" name="annee" > <label>Ann??e</label> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group" id=im>  <input type="file" 
                                                                name="my_image"></label> </div>
                                                        </div>
                                                       
                                                        
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="demande" id="dem">D??crivez-nous votre demande :</label>
                                                         <br/>
                                                            <textarea name="demande" id="demande" rows="4" cols="80"></textarea>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="demande" id="pr">Prix:</label>
                                                            <div class=""> <input type="number" name="prix_loc" id="pb"> </div>
                                                            
                                                        </div>
                                                       
                                                        
                    
                                                    </div> 
                                                  
                                                   
                                                   
                                                
                                                 
                                                    <div class="row">
                                                        <div class="col-md-12"> <input type="submit" value="Enregistrer" class="btn btn-success placeicon"> </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="text-center mb-5" id="below-btn"><a href="index.php?controller=voiture&action=create">Ajouter une voiture</a></p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane">
                                    <div class="row justify-content-center">
                                        <div class="col-11">
                                            <h3 class="mt-0 mb-4 text-center"></h3>
                                            <div class="row justify-content-center">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    