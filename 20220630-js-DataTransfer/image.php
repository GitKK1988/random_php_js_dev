<?php

$imagefile = $_FILES['imagefile'];

$filename = $imagefile["name"];
$fileType = $imagefile["type"];
$fileTempName = $imagefile["tmp_name"];
$fileError = $imagefile["error"];
$fileSize = $imagefile["size"];


$exif = exif_read_data($fileTempName, 0, true);






$fileExt = explode(".", $filename);

$fileActualExtmixed = end($fileExt);
$fileActualExt = strtolower($fileActualExtmixed);

$firstpartoffilename = $fileExt[0];
echo $firstpartoffilename . '<br>';

//specify which filetypes will be allowed to upload
$allowed = array("jpg", "jpeg", "png");

// check if filetype correct
if (in_array($fileActualExt, $allowed)) {
// check if errors occur
     if ($fileError == 0)
     {
        $newFileName = time(). rand (1 , 200) . '_' . $firstpartoffilename;
        $imagefilename = $newFileName . "." . $fileActualExt;

        $fileDestination = "new/" .$imagefilename;

        move_uploaded_file($fileTempName, $fileDestination);

        if($fileActualExt == 'jpg' || $fileActualExt == 'jpeg')
        {
             // using the GD Library to resize the image
             $imageforscale = $fileDestination;
             $createnewimg = imagecreatefromjpeg($imageforscale);
        


            
             if($exif!==false) {
                $ort=1;
                if(isset($exif['Orientation'])) {
                    // orientation is usually here
                    $ort=$exif['Orientation'];
                } elseif(isset($exif['IFD0']) && isset($exif['IFD0']['Orientation'])) {
                    // but apparently it can be here sometimes?
                    $ort=$exif['IFD0']['Orientation'];
                }
                switch($ort) {
                    case 1: // nothing
                        break;
                    case 2: // horizontal flip
                        $createnewimg=custImageFlip($createnewimg,2);
                        break;
                    case 3: // 180 rotate left
                        $createnewimg=imagerotate($tmpcreatenewimgImage,180,0);
                        break;
                    case 4: // vertical flip
                        $createnewimg=custImageFlip($createnewimg,1);
                        break;
                    case 5: // vertical flip + 90 rotate right
                        $createnewimg=custImageFlip($createnewimg,1);
                        $createnewimg=imagerotate($createnewimg,-90,0);
                        break;
                    case 6: // 90 rotate right
                        $createnewimg=imagerotate($createnewimg,-90,0);
                        break;
                    case 7: // horizontal flip + 90 rotate right
                        $createnewimg=custImageFlip($createnewimg,2);
                        $createnewimg=imagerotate($createnewimg,-90,0);
                        break;
                    case 8: // 90 rotate left
                        $createnewimg=imagerotate($createnewimg,90,0);
                        break;
                }
            }

             $resizedimg = imagescale($createnewimg , 1000, -1);
             imagejpeg($resizedimg, $fileDestination);


        }
        if($fileActualExt == 'png')
        {
             // using the GD Library to resize the image
             $imageforscale = $fileDestination;
             $createnewimg = imagecreatefrompng($imageforscale);
             $resizedimg = imagescale($createnewimg , 1000, -1);
             imagejpeg($resizedimg, $fileDestination);
        }
     }
}
