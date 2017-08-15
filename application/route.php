<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
     'plogin'=>'pc/Login/login',
     'welcome/:bh_id'=>'pc/Welcome/welcome',
     'current'=>'pc/Login/current',
     //芯片

     //测序
    'project'=>'pc/Project/project',

    'chart'=>'pc/Chart/chart',
    'format'=>'pc/Format/format',
     'evaluate'=>'pc/Evaluate/evaluate', //质量评估
     'pretreatment'=>'pc/Pretreatment/pretreatment',
      'mapping'=>'pc/Mapping/mapping',
    'qc'=>'pc/Qc/qc',
     'geneExpression'=>'pc/GeneExpression/geneExpression',
     'correlationAnalysis'=>'pc/CorrelationAnalysis/correlationAnalysis',
     'diffGene'=>'pc/DiffGene/diffGene',
     'go'=>'pc/Go/go',
     'kegg'=>'pc/Kegg/kegg',
     'novelGene'=>'pc/NovelGene/novelGene',
     'diffNovel'=>'pc/DiffNovel/diffNovel',
     'prediction'=>'pc/Prediction/prediction',
     'expression'=>'pc/Expression/expression',
     'diff'=>'pc/Diff/diff',
     'target'=>'pc/Target/target',
     'targetEnrichment'=>'pc/TargetEnrichment/targetEnrichment',
     'coExpression'=>'pc/CoExpression/coExpression',
      'all'=>'pc/All/all',
];