<?php


$array = array("myname" => "", "myemail" => "", "youremail" => "", "message" => "", "mynameError" => "", "myemailError" => "", "youremailError" => "", "messageError" => "", "isSuccess" => false);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $array["myname"] = $_POST["myname"];
    $array["myemail"] = $_POST["myemail"];
    $array["youremail"] = $_POST["youremail"];
    $array["message"] = $_POST["message"];
    $array["isSuccess"] = true;

    if(empty($array["myname"])) {
        $array["mynameError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }
    if(empty($array["myemail"])) {
        $array["myemailError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }
    if(empty($array["youremail"])) {
        $array["youremailError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }
    if(empty($array["message"])) {
        $array["messageError"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    }

    if ($array["isSuccess"]) {
        sendMail();
    }

    echo json_encode($array);

}

function sendMail() {
    $passage_ligne = "\n";
    
    $myname = $_POST["myname"];
    $myemail = $_POST["myemail"];
    $message = $_POST["message"];

    $message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
    body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
    table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
    img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
    p { display:block;margin:13px 0; }</style><!--[if mso]>
  <xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
  </xml>
  <![endif]--><!--[if lte mso 11]>
  <style type="text/css">
    .mj-outlook-group-fix { width:100% !important; }
  </style>
  <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);
@import url(https://fonts.googleapis.com/css?family=Caveat&display=swap);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
  .mj-column-per-100 { width:100% !important; max-width: 100%; }
}</style><style type="text/css">@media only screen and (max-width:480px) {
table.mj-full-width-mobile { width: 100% !important; }
td.mj-full-width-mobile { width: auto !important; }
}</style></head><body style="background-color:#F4F4F4;"><div style="background-color:#F4F4F4;"><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#C1272D;background-color:#C1272D;margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#C1272D;background-color:#C1272D;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:5px 0;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:250px;"><img height="auto" src="https://zupimages.net/up/19/51/izr3.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="250"></td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:20px 25px 20px 25px;word-break:break-word;"><div style="font-family:Caveat, sans-serif;font-size:48px;font-weight:bold;line-height:28px;text-align:center;text-transform:uppercase;color:#006837;">Joyeuses Fêtes !</div></td></tr><tr><td align="center" style="font-size:0px;padding:20px 25px 0px 25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:20px;line-height:28px;text-align:center;color:#55575d;">Vous avez reçu une carte de voeux de la part de ' . $myname . '</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border:1px solid #aaaaaa;vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:0px 25px 0px 25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:18px;line-height:28px;text-align:center;color:#55575d;">' . $message .'</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;"><tr><td align="center" bgcolor="#006837" role="presentation" style="border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#006837;" valign="middle"><p style="display:inline-block;background:#006837;color:#ffffff;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:18px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:3px;"><a href="http://carte.mycodeprojects.yj.fr/" style="color:#fff;text-decoration:none">Voir la carte</a></p></td></tr></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#C1272D;background-color:#C1272D;margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#C1272D;background-color:#C1272D;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;line-height:22px;text-align:center;color:#ffffff;">© Copyright 2019</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>';
    
    //=====Création de la boundary.
    $boundary = "-----=" . md5(rand());
    $boundary_alt = "-----=" . md5(rand());
    //=====Définition du sujet.
    $subjectto = "Vous avez reçu une carte de voeux";
    //=====Création du header de l'e-mail.
    $header = "From: " . $myemail . $passage_ligne;
    $header .= "Reply-to: " . $myemail . $passage_ligne;
    $header .= "MIME-Version: 1.0" . $passage_ligne;
    $header .= "Content-Type: multipart/mixed;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
    //=====Création du message.
    $messageto = $passage_ligne . "--" . $boundary . $passage_ligne;
    $messageto .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary_alt\"" . $passage_ligne;
    $messageto .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;
    //=====Ajout du message au format texte.
    $messageto .= "Content-Type: text/plain; charset=\"UTF-8\"" . $passage_ligne;
    $messageto .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $messageto .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;
    //=====Ajout du message au format HTML.
    $messageto .= "Content-Type: text/html; charset=\"UTF-8\"" . $passage_ligne;
    $messageto .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $messageto .= $passage_ligne . $message_html . $passage_ligne;
    //=====On ferme la boundary alternative.
    $messageto .= $passage_ligne . "--" . $boundary_alt . "--" . $passage_ligne;
    //==========
    $messageto .= $passage_ligne . "--" . $boundary . $passage_ligne;
    //=====Envoi de l'e-mail.
    $emailto = $_POST['youremail'];
    
    mail($emailto, $subjectto, $messageto, $header);

}
