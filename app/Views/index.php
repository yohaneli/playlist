<?php $phrase=''; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Playlist</title>
</head>

<body class="bg-dark">

	<div class="bg-dark text-secondary px-4 py-5 text-center">

		<div class="py-5">

			<h1 class="display-5 fw-bold text-white">Go remplir ma playlist</h1>

				<div class="col-lg-6 mx-auto">

					<p class="fs-5 mb-4">Wallah j'espère que ma playlist est complète</p>

						<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
						
							<a href="<?php echo base_url('home/getLetter') ; ?>"><button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Première lettre</button></a>
						
						</div>

				</div>

					<div class="py-5"><h1 class="display-5 fw-bold text-white">
					
					<?php 

					if (isset($premiereLettre)) {
					
						switch ($premiereLettre) {

							case 0 : echo "La première lettre est le A ";
							break;
							case 1 : echo "La première lettre est le B ";
							break;
							case 2 : echo "La première lettre est le C ";
							break;
							case 3 : echo "La première lettre est le D ";
							break;
							case 4 : echo "La première lettre est le E ";
							break;
							case 5 : echo "La première lettre est le F ";
							break;
							case 6 : echo "La première lettre est le G ";
							break;
							case 7 : echo "La première lettre est le H ";
							break;
							case 8 : echo "La première lettre est le I ";
							break;
							case 9 : echo "La première lettre est le J ";
							break;
							case 10 : echo "La première lettre est le K ";
							break;
							case 11 : echo "La première lettre est le L ";
							break;
							case 12 : echo "La première lettre est le M ";
							break;
							case 13 : echo "La première lettre est le N ";
							break;
							case 14 : echo "La première lettre est le O ";
							break;
							case 15 : echo "La première lettre est le P ";
							break;
							case 16 : echo "La première lettre est le Q ";
							break;
							case 17 : echo "La première lettre est le R ";
							break;
							case 18 : echo "La première lettre est le S ";
							break;
							case 19 : echo "La première lettre est le T ";
							break;
							case 20 : echo "La première lettre est le U ";
							break;
							case 21 : echo "La première lettre est le V ";
							break;
							case 22 : echo "La première lettre est le W ";
							break;
							case 23 : echo "La première lettre est le X ";
							break;
							case 24 : echo "La première lettre est le Y ";
							break;
							case 25 : echo "La première lettre est le Z ";
							break;

						}
					
					} else {

						echo "Que le Lord of Random soit avec moi !";

					}
					
					?>
					
					
					</h1></div>

					<a href="<?php echo base_url('titre/') ; ?>"><button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Ajouter un son</button></a>

					<table class="table table-dark table-hover">
						<thead>
							<tr>
							<th scope="col">Titre</th>
							<th scope="col">Artiste</th>
							<th scope="col">Album</th>
							<th scope="col">Genre</th>
							<th scope="col">Suggéré par</th>
							<th scope="col">Audio</th>
							<th scope="col">Lien</th>
							</tr>
						</thead>
						<tbody>
								<?php foreach ($tabTitres as $titre) { 
									
									$genre = $genresModel->where('GenreID',$titre['GenreID'])->first();

									$suggerer = $suggererModel->where('SuggererParID',$titre['SuggererParID'])->first();

																		
								?>
							<tr>
								<td><?php echo $titre['TitreNom'] ; ?></td>
								<td><?php echo $titre['TitreArtiste'] ; ?></td>
								<td><?php echo $titre['TitreAlbum'] ; ?></td>
								<td><?php echo $genre['GenreNom'] ; ?></td>
								<td><?php echo $suggerer['SuggererParNom'] ; ?></td>
								<td>
								<figure>
											<figcaption><?php echo "Go écouter ".$titre['TitreNom']." de ".$titre['TitreArtiste']  ; ?> </figcaption>
											<audio
												controls
												src="<?php echo base_url('music/Kendrick Lamar - The Recipe ft. Dr. Dre.mp3') ; ?>">
													Your browser does not support the
													<code>audio</code> element.
											</audio>
										</figure>
								</td>
								<td><a href="<?php echo base_url('music/Kendrick Lamar - The Recipe ft. Dr. Dre.mp3') ; ?>" download><button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Go dl le son</button></a></td>
							</tr>
								<?php } ?>
						</tbody>
					</table>
		</div>

	</div>

</body>

</html>