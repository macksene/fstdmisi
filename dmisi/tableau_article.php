<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
					
                                    <div class="panel-body">
                    <a href="ajouter_article.php" class="btn btn-sm btn-info btn-flat pull-left">AJOUTER</a></br>
						<table data-toggle="table"   data-search="true"  data-pagination="true"  >
                      <thead>
						
			<h3 align="left">Les publications</h3>			    
                          <tr>
						        
						        <th>Type</th>
						        <th>Titre</th>
                                <th>Description</th>
						        <th>Date</th>
                                <th>Auteur</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>

							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from articles where type_a='publication' order by id_a DESC";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['type_a']; ?>
							</td>
							<td> 
							<?php echo $c['titre_a'] ; ?>
							</td>
							<td> 
							<?php echo $c['description_a']; ?>
							</td>
							<td> 
							<?php echo $c['date_a'] ; ?>
							</td>
                            <td> 
							<?php echo $c['auteur_a'] ; ?>
							</td>
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_article.php?id=".$c['id_a']."\" class=\"label label-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_article.php?id=".$c['id_a']."\" class=\"label label-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>
                    
                    <h3 align="left">Les communiques</h3>
                    <table data-toggle="table"   data-search="true"  data-pagination="true"  >
                      <thead>
						
						    <tr>
						        <th>Type</th>
						        <th>Titre</th>
                                <th>Description</th>
						        <th>Date</th>
                                <th>Auteur</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>

							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from articles where type_a='communique' order by id_a DESC";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['type_a']; ?>
							</td>
							<td> 
							<?php echo $c['titre_a'] ; ?>
							</td>
							<td> 
							<?php echo $c['description_a']; ?>
							</td>
							<td> 
							<?php echo $c['date_a'] ; ?>
							</td>
                            <td> 
							<?php echo $c['auteur_a'] ; ?>
							</td>
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_article.php?id=".$c['id_a']."\" class=\"label label-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_article.php?id=".$c['id_a']."\" class=\"label label-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>
                   <h3 align="left">Les reseaux et telecoms</h3>
                    <table data-toggle="table"   data-search="true"  data-pagination="true"  >
                      <thead>
						
						    <tr>
						        <th>Type</th>
						        <th>Titre</th>
                                <th>Description</th>
						        <th>Date</th>
                                <th>Auteur</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>

							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from articles where type_a='reseau' order by id_a DESC";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['type_a']; ?>
							</td>
							<td> 
							<?php echo $c['titre_a'] ; ?>
							</td>
							<td> 
							<?php echo $c['description_a']; ?>
							</td>
							<td> 
							<?php echo $c['date_a'] ; ?>
							</td>
                            <td> 
							<?php echo $c['auteur_a'] ; ?>
							</td>
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_article.php?id=".$c['id_a']."\" class=\"label label-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_article.php?id=".$c['id_a']."\" class=\"label label-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>
                   <h3 align="left">L'informatique</h3>
                    <table data-toggle="table"   data-search="true"  data-pagination="true"  >
                      <thead>
						
						    <tr>
						        <th>Type</th>
						        <th>Titre</th>
                                <th>Description</th>
						        <th>Date</th>
                                <th>Auteur</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>

							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from articles where type_a='informatique' order by id_a DESC";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['type_a']; ?>
							</td>
							<td> 
							<?php echo $c['titre_a'] ; ?>
							</td>
							<td> 
							<?php echo $c['description_a']; ?>
							</td>
							<td> 
							<?php echo $c['date_a'] ; ?>
							</td>
                            <td> 
							<?php echo $c['auteur_a'] ; ?>
							</td>
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_article.php?id=".$c['id_a']."\" class=\"label label-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_article.php?id=".$c['id_a']."\" class=\"label label-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>
                   <h3 align="left">Les projets realises</h3>
                    <table data-toggle="table"   data-search="true"  data-pagination="true"  >
                      <thead>
						
						    <tr>
						        <th>Type</th>
						        <th>Titre</th>
                                <th>Description</th>
						        <th>Date</th>
                                <th>Auteur</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>

							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from articles where type_a='projet' order by id_a DESC";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['type_a']; ?>
							</td>
							<td> 
							<?php echo $c['titre_a'] ; ?>
							</td>
							<td> 
							<?php echo $c['description_a']; ?>
							</td>
							<td> 
							<?php echo $c['date_a'] ; ?>
							</td>
                            <td> 
							<?php echo $c['auteur_a'] ; ?>
							</td>
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_article.php?id=".$c['id_a']."\" class=\"label label-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_article.php?id=".$c['id_a']."\" class=\"label label-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>
                    <h3 align="left">Les temoignages</h3>
                    <table data-toggle="table"   data-search="true"  data-pagination="true"  >
                      <thead>
						
						    <tr>
						        <th>Type</th>
						        <th>Titre</th>
                                <th>Description</th>
						        <th>Date</th>
                                <th>Auteur</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>

							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from articles where type_a='temoignage' order by id_a DESC";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['type_a']; ?>
							</td>
							<td> 
							<?php echo $c['titre_a'] ; ?>
							</td>
							<td> 
							<?php echo $c['description_a']; ?>
							</td>
							<td> 
							<?php echo $c['date_a'] ; ?>
							</td>
                            <td> 
							<?php echo $c['auteur_a'] ; ?>
							</td>
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_article.php?id=".$c['id_a']."\" class=\"label label-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_article.php?id=".$c['id_a']."\" class=\"label label-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>		
		
