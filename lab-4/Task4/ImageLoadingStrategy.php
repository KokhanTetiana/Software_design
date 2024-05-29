<?php
interface ImageLoadingStrategy
{
    public function getImageSrc($href);
}
class FileImageLoadingStrategy implements ImageLoadingStrategy
{
    public function getImageSrc($href)
    {
        return $href;
    }
}

class NetworkImageLoadingStrategy implements ImageLoadingStrategy
{
    public function getImageSrc($href)
    {
        return $href;
    }
}

