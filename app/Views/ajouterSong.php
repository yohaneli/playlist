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

		<div class="container">

			<div class="bg-dark text-secondary px-4 py-5 text-center">

				<div class="py-5">

					<h1 class="display-5 fw-bold text-white">Go ajouter un son</h1>						
						
				</div>

					<div class="row">

						<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
								
								<div class="px-2">
									<form method="post" action="/titre/addSong" class="justify-content-center" enctype="multipart/form-data">

										<div class="form-group">
											<label class="sr-only text-white">Titre</label>
											<input name="titre" type="text" class="form-control" placeholder="The Recipe ft Dr Dre" required>
										</div>

										<div class="form-group">
											<label class="sr-only text-white">Artiste</label>
											<input name="artiste" type="text" class="form-control" placeholder="Kendrick Lamar" required>
										</div>

										<div class="form-group text-white">
											<label class="sr-only">Album</label>
											<input name="album" type="text" class="form-control" placeholder="Good Kid, M.A.A.D City">
										</div>

										<div class="form-group">
											<label class="sr-only text-white">Genre</label>
												<select name="genre" class="form-select" aria-label="Default select example" required>
												<option value="">Choisir un genre</option>
																	
																	<?php if (isset($tabGenres)) {  ?>

																	<?php  foreach ($tabGenres as $genre) {  ?>

																<option  value="<?php echo $genre['GenreID'] ; ?>"><?php echo $genre['GenreNom'] ; ?></option>

																	<?php } } ?>
												</select>	
										</div>

										<div class="form-group">
											<label class="sr-only text-white">Suggéré par</label>
												<select name="suggerer" class="form-select" aria-label="Default select example" required>
												<option value="">Choisir quelqu'un</option>
																	
																	<?php if (isset($tabSuggerer)) {  ?>

																	<?php  foreach ($tabSuggerer as $suggest) {  ?>

																<option  value="<?php echo $suggest['SuggererParID'] ; ?>"><?php echo $suggest['SuggererParNom'] ; ?></option>

																	<?php } } ?>
												</select>	
										</div>

										<div class="mb-3">
											<label for="formFile" class="form-label text-white">Fichier mp3 du son</label>
											<input class="form-control" type="file" id="formFile" name="fichier">
										</div>

										<button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
									
									</form>
								
								</div>
						
						</div>
					
					</div>
			
			</div>

		</div>

</body>

</html>