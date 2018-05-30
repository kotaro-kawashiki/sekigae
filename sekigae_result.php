
 
    <?php
        $names = [$_POST['ironman'],$_POST['captain'],$_POST['hulk'],$_POST['blackpanther'],$_POST['drstrange']];
        $seats = ["三人席のプロジェクター側","三人席の真ん中","三人席のテーブル側","二人席のメンターさん側","二人席のテーブル側"];
        $cnt = count($names);
        $uranai = "のあなたは運勢最強！今日一日世界の主役はあなたです。王様のように好き勝手に生き、思いつく限りのわがまま言いましょう";
        $uranai1 ="のあなたは運勢最弱。世の中のすべてに懺悔して生きてください"; 
        $uranai2 ="のあなたの運勢はふつう。可もなく不可もないです。特にコメントはありません。";
        $uranai3 ="のあなたの運勢はそこそこ良いです。ガリガリ君を3本も買えばあたりが出るであろう程度にはついてるので、前向きにいきましょう。";
        $uranai4 ="のあなたの運勢はちょっと悪いです。通勤電車で意地悪な人に肩でガツガツやられるかもしれません。ちょっと筋トレして気合を入れときましょう。";
        $uranai_all = [$uranai,$uranai1,$uranai2,$uranai3,$uranai4];
        $ar_num = range('0',$cnt-1);
        
        
        shuffle($ar_num);
 
    for ($i=0;$i<$cnt;$i++)  {
        $ar_num[$i];
    }
    ?>
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="sekigae_result.css" type="text/css" />
        </head>
        <body>
            <h1>席替え結果！</h1>
            <p><div id="result1"><b><?php echo $names[$ar_num[0]];?>さんは<?php echo $seats[$ar_num[0]];?></b></div><br>
                                   <?php echo $seats[$ar_num[0]];?><?php echo $uranai_all[$ar_num[0]];?></p>
            <p><div id="result2"><b><?php echo $names[$ar_num[1]];?>さんは<?php echo $seats[$ar_num[1]];?></b></div><br>
                                    <?php echo $seats[$ar_num[1]];?><?php echo $uranai_all[$ar_num[1]];?></p>
            <p><div id="result3"><b><?php echo $names[$ar_num[2]];?>さんは<?php echo $seats[$ar_num[2]];?></b></div><br>
                                    <?php echo $seats[$ar_num[2]];?><?php echo $uranai_all[$ar_num[2]];?></p>
            <p><div id="result4"><b><?php echo $names[$ar_num[3]];?>さんは<?php echo $seats[$ar_num[3]];?></b></div><br>
                                    <?php echo $seats[$ar_num[3]];?><?php echo $uranai_all[$ar_num[3]];?></p>
            <p><div id="result5"><b><?php echo $names[$ar_num[4]];?>さんは<?php echo $seats[$ar_num[4]];?></b></div><br>
                                    <?php echo $seats[$ar_num[4]];?><?php echo $uranai_all[$ar_num[4]];?></p>
        </body>
    </html>