@extends('user/home')
@section('container')

<div class="app-main__outer">
                    <div class="app-main__inner">
                                  <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Investissement</h5>
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom01">Pack</label>
                                            <select name="pack" id="pack" class="form-control">
                                                <option></option>
                                                <option value="silver">Silver success</option>
                                                <option value="golden">Golden success</option>
                                                <option value="diamond">Diamond success</option>
                                            </select>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom03">Durée</label>
                                            <select type="number" name="duree" id="daily" class="form-control">
                                                <option></option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                            
                                        </div>
                                        
                                       
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom03">Montant</label>
                                            <select id="montant" name="montant"      class="form-control">
                                                <option></option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                           
                                        </div>
                                        
                                       
                                    </div>
                                    <div class="form-group">
                                        
                                    </div>
                                    <button class="btn btn-primary col-md-12" type="submit">Investir</button>
                                </form>
            
                               
                            </div>
                        </div>


                        <script>

		let pack1=document.getElementById('pack');

		let montant=document.getElementById('montant');

		let  duree=document.getElementById('daily');





         

        pack1.addEventListener('change',function(){



              

			



			 if(pack1.value=='silver'){





                   montant.innerHTML="<select type='number' name='montant' id='montant' class='input-text' required><option value='100000'>100.000</option><option value='200000'>200.000</option><option value='300000'>300.000</option><option value='400000'>400.000</option><option value='500000'>500.000</option><option value='600000'>600.000</option><option value='700000'>700.000</option></select>";



                   duree.innerHTML="<select type='text' name='duree' id='daily' class='input-text' required><option value=\"6\"> 6 Heures </option><option value=\"12\"> 12 heures</option><option value=\"24\"> 24 heures</option></select>"

                    

			 }else{





                  if(pack1.value=='golden'){



					      



					montant.innerHTML="<select type='number' name='montant' id='montant' class='input-text' required><option value='200000'>200.000</option><option value='300000'>300.000</option><option value='500000'>500.000</option></select><option value='1000000'>1.000.000</option></select>";



					duree.innerHTML="<select type='text' name='duree' id='daily' class='input-text' required><option value=\"3\"> 4jr - 3 semaines</option><option value=\"4\"> 4 jours - 4 semaines</option><option value=\"5\"> 4 jours - 5 semaines</option></select>"

						   





				  }



				  if(pack1.value=="diamond"){





					montant.innerHTML="<select type='number' name='montant' id='montant' class='input-text' required><option value='100000'>100.000</option><option value='200000'>200.000</option><option value='300000'>300.000</option><option value='400000'>400.000</option><option value='600000'>600.000</option><option value='700000'>700.000</option><option value='800000'>800.000</option><option value='900000'>900.000</option><option value='1000000'>1.000.000</option></select>";



                    duree.innerHTML="<select type='text' name='duree' id='daily' class='input-text' required><option value=\"15\"> 15 jours </option></select>"

					



				  }



				  

				   

			 }





		});

		







	</script>
                        


@stop