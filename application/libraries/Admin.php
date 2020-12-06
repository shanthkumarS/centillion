<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class admin {

    var $CI;

    function __construct() {
        date_default_timezone_set('Asia/Calcutta');
        if (!class_exists("phpmailer")) {
//            include('lib/class.phpmailer.php');
            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
        }
        $this->CI = & get_instance();
    }

    function trim_text($input, $length, $ellipses = true, $strip_tag = true, $strip_style = true) {
        //strip tags, if desired
        if ($strip_tag) {
            $input = strip_tags($input);
        }

        //strip tags, if desired
        if ($strip_style) {
            $input = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $input);
        }

        if ($length == 'full') {

            $trimmed_text = $input;
        } else {
            //no need to trim, already shorter than trim length
            if (strlen($input) <= $length) {
                return $input;
            }

            //find last space within length
            $last_space = strrpos(substr($input, 0, $length), ' ');
            $trimmed_text = substr($input, 0, $last_space);

            //add ellipses (...)
            if ($ellipses) {
                $trimmed_text .= '...';
            }
        }

        return $trimmed_text;
    }

    function send_mail($from, $from_txt, $to, $cc, $sub, $txt) {

        $mail = new PHPMailer();
//		
        $mail->IsSMTP(); // set mailer to use SMTP

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->SMTPSecure = "tls";
//		
       $mail->Host = 'smtp.gmail.com'; //$sett->row()->host; // specify main and backup server

        $mail->Port = '587'; //$sett->row()->port;
//		
        $mail->SMTPAuth = true; // turn on SMTP authentication
//		
        $mail->Username = 'web@honeycombindia.net'; //$sett->row()->hostUsername; // SMTP username
//		
        $mail->Password = 'web($Honey#@18'; //$sett->row()->hostPassword; // SMTP password
//		
        $mail->From = $from;
//		
        $mail->FromName = $from_txt;
//		
        $address = explode(",", $to);
//		
        foreach ($address as $t) {
            $mail->AddAddress($t); // Email on which you want to send mail
        }

        if ($cc != "") {
            $addresscc = explode(",", $cc);
            //		
            foreach ($addresscc as $tcc) {
                $mail->AddCC($tcc);
            }
        }//		
        //$mail->AddReplyTo('info@photostop.in', 'Info-PhotoSTOP'); //optional
//		
        $mail->IsHTML(true);
//		
        $mail->Subject = $sub;
//		
        $mail->Body = $txt;
//		
        return $mail->Send();
    }

    function send_mail_attachment($from, $from_txt, $to, $cc, $sub, $txt, $attachment) {


        $mail = new PHPMailer();
//		
        $mail->IsSMTP(); // set mailer to use SMTP

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->SMTPSecure = "tls";
//		
       $mail->Host = 'smtp.gmail.com'; //$sett->row()->host; // specify main and backup server

        $mail->Port = '587'; //$sett->row()->port;
//		
        $mail->SMTPAuth = true; // turn on SMTP authentication
//		
        $mail->Username = 'web@honeycombindia.net'; //$sett->row()->hostUsername; // SMTP username
//		
        $mail->Password = 'web($Honey#@18'; //$sett->row()->hostPassword; // SMTP password

        $mail->From = $from;
//		
        $mail->FromName = $from_txt;
//		
        $address = explode(",", $to);
//		
        foreach ($address as $t) {
            $mail->AddAddress($t); // Email on which you want to send mail
        }

        if ($cc != "") {
            $addresscc = explode(",", $cc);
//		
            foreach ($addresscc as $tcc) {
                $mail->AddCC($tcc);
            }
        }

        if ($attachment != "") {

            $mail->AddAttachment($attachment);
        }
//		
//		
//        $mail->AddReplyTo($sett->row()->from, 'Info'); //optional
//		
        $mail->IsHTML(true);
//		
        $mail->Subject = $sub;
//		
        $mail->Body = $txt;
//		
        return $mail->Send();
    }

    function generate_ics($data) {

        include 'lib/ICS.php';

        $ics = new ICS($data);

        return $ics->to_string();
    }

    function unixToiCal($uStamp = 0, $tzone = 0.0) {

        $uStampUTC = $uStamp + ($tzone * 3600);
        $stamp = date("Ymd\THis\Z", $uStampUTC);

        return $stamp;
    }

    function get_custom_date($dateFormat, $date) {

        if (is_nan($date)) {
            //date_default_timezone_set('UTC');
            return mdate($dateFormat, strtotime(trim($date)));
        } else {

            return mdate($dateFormat, trim($date));
        }
    }

    function clean($string) {

        $string = str_replace(' ', '-', strtolower($string)); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    function ship_rocket_login() {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://apiv2.shiprocket.in/v1/external/auth/login");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "email=nalinihoneycomb@gmail.com&password=Elite Medical@123");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        $server_output1 = json_decode($server_output, true);
        curl_close($ch);
        return $server_output1["token"];
    }

    function ship_rocket_api($url) {
        $token = $this->CI->user_model->get_temp_token();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json',
            'Authorization: Bearer ' . $token]);
        $result = curl_exec($curl);
        $result1 = json_decode($result, true);
        if (isset($result1["status_code"]) && ($result1["status_code"] == '401' || $result1["status_code"] == '403')) {
            $data = array("token" => $this->ship_rocket_login(), "updated_on" => $this->get_custom_date("%Y-%m-%d %hh:%i:%s", NOW()));
            $this->CI->user_model->save_temp_token($data);
            $this->ship_rocket_api($url);
        }
        curl_close($curl);
        //print_r($result1);
        return $result1;
    }

    function ship_rocket_post_api($url, $data) {
        $token = $this->CI->user_model->get_temp_token();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer " . $token
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response, true);
        }
    }

}
