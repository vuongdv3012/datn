<?php
/**
* This is method save images from twitter use api
* 
* @param object $connect_twitter object connect library to app witter.
* @param string $screen_name name page twitter need to get images.
* @param stirng $count_timeline the number twitter's feed want to get.
*
* @return false when have error: connect, get data empty, count_time_line not exactly or not find image of feed soon.
* @return array url_image when save image success
*/
function getUrlImages($connect_twitter, $screen_name, $count_timeline)
{
    if ($count_timeline > 200 || $count_timeline < 0) {
        echo "Error: " . $count_timeline . " count have to begin from 1 to 200";
        return false;
    }
    
    try {
        $status = $connect_twitter->get('statuses/user_timeline', array('screen_name' => $screen_name, 'count'=> $count_timeline));
        if (!empty($status->errors)) {
            echo "Error: " . $status->errors[0]->message;
            return false;
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }

    $check_img_exist = '';
    $img_url_list = [];
    foreach ($status as $feed_timeline) {
        if (isset($feed_timeline->extended_entities)) {
            $check_img_exist = 'isset';
            $data_images = $feed_timeline->extended_entities->media;
            foreach ($data_images as $data_image) {
                $url_image = $data_image->media_url;
                array_push($img_url_list, $url_image);
            }
        }
    }

    if ($check_img_exist === '') {
        echo "Message: Not images of recent feed. ";
        return false;
    }

    return $img_url_list;
}
