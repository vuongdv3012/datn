<?php
    include_once('UrlImage.php');
    require_once('twitteroauth.php');
    //Config connet api twitter and parameters for methor getUrlImages.
    $consumer_key = 'dJawGy2EhXXZ3UJqcFgspkWhH';
    $consumer_secret = 'QIV362DcxnghkwuqoegK2pwhXwLfaotyc2C16QYdOyCIxSqp7v';
    $access_token = '955286554640973824-4U22cpZgtyUUotiA5gQd8dKu9FdknLR';
    $access_token_secret = 'aj9vCsztJOVDSrpLZrJR6eYcjDJ9h82iiRSkPrIJNdxVz';

    $connectTwitter = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

    $twitters = $connectTwitter->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=abc&count=2');

    foreach ($twitters as $twitter) {
        $image = new ImageTwitter();
        $image->setUrl($url);
        $image->saveImage($path);
    }

