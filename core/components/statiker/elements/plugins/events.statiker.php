<?php
/**
 * @package statiker
 * @subpackage build
 */
$events = array();

$evs = array(
    //'OnRichTextBrowserInit',
    'OnDocFormSave'
);

foreach($evs as $ev) {
    $events[(string)$ev] = $modx->newObject('modPluginEvent');
    $events[(string)$ev]->fromArray(array(
        'event' => (string)$ev,
        'priority' => 0,
        'propertyset' => 0,
    ),'',true,true);
}

return $events;
