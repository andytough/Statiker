<?phpif(!empty($scriptProperties['id'])&&!empty($scriptProperties['resource'])) {    //     $corePath = $modx->getOption('statiker.core_path',null,$modx->getOption('core_path').'components/statiker/');    require_once($corePath.'lib/statiker.class.php');    $modx->statiker = new Statiker($modx);    require_once($corePath.'lib/statikerbuilder.class.php');    $builder = new StatikerBuilder($modx);    //     $builder->build($scriptProperties['resource']);    //     $pid = $scriptProperties['resource']->get('parent');    if($pid) {        $parent = $modx->getObject('modResource', $pid);        $builder->build($parent);    }}