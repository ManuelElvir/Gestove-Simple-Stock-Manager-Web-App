<?php 

namespace App\Gestion;
use Illuminate\Support\Str;

class PhotoGestion  implements PhotoGestionInterface
{

    public function save($image)
	{
		if($image->isValid())
		{
			$chemin = 'uploads';
			$extension = $image->getClientOriginalExtension();

			do {
				$nom = Str::random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			return $image->move($chemin, $nom);
		}

		return false;
	}

}