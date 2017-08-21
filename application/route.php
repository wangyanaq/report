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
    '/'=>'index/Index/index',
     'plogin'=>['pc/Login/login',['method' => 'post']],
     'welcome/:bh_id'=>'pc/Welcome/welcome',
     'current'=>['pc/Login/current',['method' => 'post']],
     //芯片
     'article/:bh_id'=>'pc/Article/article_list',//项目概况
     'chipDiff/:bh_id'=>'pc/Diff/diff_gene',//差异筛选结果
      'pathway/:bh_id'=>'pc/Pathway/pathway', //富集分析
      'data/:bh_id'=>'pc/ArticleData/qc',//文章常用数据
      'validchip/:bh_id'=>'pc/Validchip/validchip', //表达谱芯片验证
      'source/:bh_id'=>'pc/Source/source', //SAS使用指南
      'rawData/:bh_id'=>'pc/Rowdata/rawData', //GEO上传指南
     //测序  rnaseq模块
    'project'=>'rnaseq/Project/project',

    'chart'=>'rnaseq/Chart/chart',
    'format'=>'rnaseq/Format/format',
     'evaluate'=>'rnaseq/Evaluate/evaluate', //质量评估
     'pretreatment'=>'rnaseq/Pretreatment/pretreatment',
      'mapping'=>'rnaseq/Mapping/mapping',
     'qc'=>'rnaseq/Qc/qc',
     'geneExpression'=>'rnaseq/GeneExpression/geneExpression',
     'correlationAnalysis'=>'rnaseq/CorrelationAnalysis/correlationAnalysis',
     'diffGene'=>'rnaseq/DiffGene/diffGene',
     'go'=>'rnaseq/Go/go',
     'kegg'=>'rnaseq/Kegg/kegg',
     'novelGene'=>'rnaseq/NovelGene/novelGene',
     'diffNovel'=>'rnaseq/DiffNovel/diffNovel',
     'prediction'=>'rnaseq/Prediction/prediction',
     'expression'=>'rnaseq/Expression/expression',
     'diff'=>'rnaseq/Diff/diff',
     'target'=>'rnaseq/Target/target',
     'targetEnrichment'=>'rnaseq/TargetEnrichment/targetEnrichment',
     'coExpression'=>'rnaseq/CoExpression/coExpression',
      'all'=>'rnaseq/All/all',
];