<?php
    class youtubeDownloader
    {
        private $video_id;
        private $video_title;
        private $video_url;
        private $link_pattern;
        public function __construct(){
            $this->link_pattern = "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed)\/))([^\?&\"'>]+)";
        }
        public function setUrl($url){
            $this->video_url = $url;
        }
    }
?>