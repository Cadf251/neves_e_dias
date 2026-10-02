<?php

namespace App\core\Services;

use App\core\Models\Lead;
use Cadud\Helpers\Email\Mailer;
use Cadud\Helpers\Formatters\Formatter;

class LeadService
{
  public function resolvePost(array $post)
  {
    if (isset($post["name"])) {
      $post["name"] = Formatter::name($post["name"]);
    }

    if (isset($post["phone"])) {
      $post["phone"] = Formatter::phoneToInternational($post["phone"]);
    }

    $lead = new Lead();

    $lead->fill($post);
    
    $this->notify($lead);
  }

  public function notify(Lead $lead)
  {
    $config = $this->mailConfig($lead->source);

    // Format Subject
    $subject = "Novo Lead | ". $config["subject"];

    // Format Body
    $body = file_get_contents(APP_ROOT . "/app/core/Views/resources/lead-email.html");

    $bodyExtraInfo = "";

    $bodyParams = [
      "[LEAD_NAME]" => $lead->name,
      "[LEAD_EMAIL]" => $lead->email,
      "[LEAD_PHONE]" => Formatter::phoneToLocal($lead->phone),
      "[LEAD_PHONE_FORMATTED]" => $lead->phone
    ];

    if (!empty($lead->data)) {
      foreach ($lead->data as $key => $value) {
        // key_model to "[KEY_MODEL]"
        $bodyKey = "[" . strtoupper($key) . "]";

        // key_model to "Key Model"
        $keyToTitle = str_replace("_", " ", $key);
        $bodyTitle = ucfirst($keyToTitle) ;

        $bodyParams[$bodyKey] = $value;

        $bodyExtraInfo .= <<<HTML
        <tr>
          <td>$bodyTitle:</td>
          <td>$bodyKey</td>
        </tr>
        HTML;
      }
    }

    $body = str_replace("[EXTRA_INFO]", $bodyExtraInfo, $body);

    $mailer = new Mailer($subject, $body, "cadu.devmarketing@gmail.com", "", $bodyParams);
    
    echo $mailer->testBody();
    
    // $mailer->send();
  }

  private function mailConfig($source): array
  {
    return match ($source) {
      "office" => [
        "subject" => "Neves & Dias",
        "to"      => "",
        "toname"  => "",
      ],
      "victordias" => [
        "subject" => "Victor Dias | Neves & Dias",
        "to"      => "",
        "toname"  => "",
      ]
    };
  }
}
