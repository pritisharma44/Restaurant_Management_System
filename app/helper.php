<?php 
function UplaodImages($file, $folder_name, $type = null)
{
    if ($file) {
        $path = public_path('upload/' . $folder_name);
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        $data['document'] = substr(uniqid(1), -4) . time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $data['document']);
        if ($type) {
            return array('name' => $data['document'], 'type' => $file->getClientOriginalExtension());
        }
        return $data['document'];
    }
}

?>