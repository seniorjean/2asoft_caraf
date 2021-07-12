<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
		
	class Upload_image 
	{
		
		public function load_image($config = array())
		{
			
			$image = $config['image_file'];
			$image_name = $config['image_name'];
			$path = $config['image_path'];
			$ExtensionValid = $config['extension'];
			$extension = $config['file_extension'];
				if(!empty($image) and !empty($image_name) and !empty($path))
				{
					if($image['error']!=0)
					{
						return   "couldn't load the file, please try another image!";
					}
					else if($image['error'] == 0)//Good image
					{
						if($image['size'] > 2000000)
						{
							return "image must be less than 2MB";
						}
						else if($image['size'] <=2000000)
						{
							$fileName = pathinfo($image['name']);
							$fileExtension = $fileName['extension'];

							if(in_array($fileExtension , $ExtensionValid))
							{							
								move_uploaded_file($image['tmp_name'], $path.''.$image_name.".".$extension);

								$item_name = $image_name.".".$extension;

								return	$item_name;						

							}
							else
							{
								return "invalid extension .".$fileExtension;
							}
						}
					}
		}
			
	}
//===================================================================\\
		
}
?>
