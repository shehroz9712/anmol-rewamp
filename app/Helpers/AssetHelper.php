<?php

use App\Models\Setting;

function cssFile($file = '')
{
    return url('assets/css/' . $file);
}



function pluginFile($file = '')
{
    return url('assets/plugins/' . $file);
}

function jsFile($file = '')
{
    return url('assets/js/' . $file);
}

function imageFile($file = '')
{
    return url('assets/img/' . $file);
}



function getTitle()
{
    return Setting::value('title');
}

function getEmail()
{
    return Setting::value('email');
}

function getPhone()
{
    return Setting::value('phone');
}

function getAddress()
{
    return Setting::value('address');
}

function getWebsite()
{
    return Setting::value('website');
}

function getLogo()
{
    return url('assets/uploads/logos/' . Setting::value('logo'));
}

function getDarkLogo()
{
    return url('assets/uploads/logos/' . Setting::value('dark_logo'));
}
function getFavicon()
{
    return url('assets/uploads/logos/' . Setting::value('favicon'));
}
function pixelRate()
{
    return Setting::value('pixel_price');
}
function currency()
{
    return Setting::value('currency');
}
function getFacebook()
{
    return Setting::value('facebook');
}

function getTwitter()
{
    return Setting::value('twitter');
}

function getInstagram()
{
    return Setting::value('instagram');
}

function getLinkedin()
{
    return Setting::value('linkedin');
}
function getAppStoreLink()
{
    return Setting::value('app-store-link');
}

function getPlayStoreLink()
{
    return Setting::value('play-store-link');
}


function getFooterScripts()
{
    return Setting::value('footer_scripts');
}
function getBodyScripts()
{
    return Setting::value('body_scripts');
}

function getHeaderScripts()
{
    return Setting::value('header_scripts');
}
function getStripeKey()
{
    return Setting::value('stipe_key');
}
function getSecretKey()
{
    return Setting::value('secret_key');
}
function getFooterSentence()
{
    return Setting::value('footer_sentence');
}

function getCopyright()
{
    return Setting::value('copyright');
}

function uploads($name)
{

    return url('assets/uploads/' . $name);
}

function uploadImage($image, $folder)
{
    if ($image  && $image != null) {
        $getClientMimeType = explode('/', $image->getClientMimeType());
        $extension = $image->getClientOriginalExtension();

        // Generate a unique image name using a random string and the current timestamp
        $image_name =  time() . '.' . $extension;

        // Move the image to the desired folder
        $image->move(public_path('assets/uploads/' . $folder), $image_name);
    } else {
        $image_name = 'no-image.png';
    }
    return $image_name;
}

function dateformat($date, $format)
{
    return $date ? $date->format($format) : '00:00';
}


function checkData($data, $route)
{
    if (empty($data)) {
        return redirect()->route($route)->with('error', 'No data found');
    }
}
