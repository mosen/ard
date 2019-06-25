<?php 

$this->view('listings/default',
[
  "i18n_title" => 'ard.listing.title',
  "table" => [
    [
      "column" => "machine.computer_name",
      "i18n_header" => "listing.computername",
      "formatter" => "clientDetail",
    ],
    [
      "column" => "reportdata.serial_number",
      "i18n_header" => "serial",
    ],
    [
      "column" => "reportdata.long_username",
      "i18n_header" => "username",
    ],
    [
      "column" => "ard.text1",
      "i18n_header" => "ard.listing.text",
      "i18n-options" => '{"number":1}',
    ],
    [
      "column" => "ard.text2",
      "i18n_header" => "ard.listing.text",
      "i18n-options" => '{"number":2}',
    ],
    [
      "column" => "ard.text3",
      "i18n_header" => "ard.listing.text",
      "i18n-options" => '{"number":3}',
    ],
    [
      "column" => "ard.text4",
      "i18n_header" => "ard.listing.text",
      "i18n-options" => '{"number":4}',
    ],
  ]
]);
