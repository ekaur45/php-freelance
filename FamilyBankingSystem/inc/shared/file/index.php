<?php
class FileUploader
{
    private $target_dir = "../../public/uploads/";
    public function __construct()
    {
        if(!file_exists($this->target_dir)) mkdir($this->target_dir);
    }
    public function Upload($file,$fileName)
    {
        $fileName = $this->target_dir.$fileName;
        if (move_uploaded_file($file,$fileName)) {
            return $fileName;
        }
        $fileName;
    }
}
$uploader = new FileUploader();
