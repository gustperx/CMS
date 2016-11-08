<?php
namespace App\Repository\Upload;

use App\Repository\BaseRepository;

use App\Models\File\File;

class UploadRepository extends BaseRepository
{
	private $file;

	function __construct()
	{
        parent::__construct();

		$this->file= new File();

	}

	public function fileCreate($original)
	{

		$fileQuery=$this->file->create([

			'file'		=>	$original,

			'user_id'	=>	2

		]);
		return  $fileQuery->id;
		
	}

        
}
