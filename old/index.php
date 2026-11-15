    $image_count = 5; // lets say you have six images from 0-5
    $number = rand( 0 , $image_count );

    // fetch random image from directory
    $dir = dirname(__FILE__);
    $file = $dir.'/autoreply/image-'.$number.'.jpg';

    // write out
    $type = 'image/jpg';
    header('Content-Type:'.$type);
    header('Content-Length: ' . filesize($file));
    readfile($file);