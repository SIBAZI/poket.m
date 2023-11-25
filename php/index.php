
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pocket.M</title>
  <link rel="shortcut icon" href="img/micon.png">
  <link rel="apple-touch-icon" href="img/micon.png">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <link rel="stylesheet" type="text/css" href="./../css/question.css">
  <!-- ios アドレスバー非表示 -->
  <meta name="mobile-web-app-capable" content="yes">
  <!-- andoroid アドレスバー非表示 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- jquery対応 -->
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <!-- jquery UI対応 -->
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <!-- タッチ対応 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
</head>


<body>
<?php 
echo 'hello world';

?>
  <div class="main">
    <div class="navigation">


      <span class="kinou1" style="--i:0;--x:-1;--y:0;"></span>

      <span class="kinou2" style="--i:1;--x:1;--y:0;"></span>

      <span class="kinou3" style="--i:2;--x:0;--y:-1;"></span>

      <span class="kinou4" style="--i:3;--x:0;--y:1;"></span>

      <!-- ?アイコン -->
      <span class="hatena" style="--i:4;--x:-1;--y:1;"><ion-icon name="help-outline"></ion-icon></span>







      <!-- 普通車アイコン -->
      <span class="catalogue" style="--i:5;--x:-1;--y:-1;"><ion-icon name="car-sport-outline"></ion-icon>


        <!-- CX-3 -->
        <li class="around1" style="--i:0;">
          <p class="car-name-CX-3">CX-3</p>
          <img src="../img/CX-3.png" alt="CX-3">
          <p class="car-size-CX-3">4,275×1,765×1,550</p>
        </li>

        <!-- CX-30 -->
        <li class="around2" style="--i:1;">
          <p class="car-name-CX-30">CX-30</p>
          <img src="../img/CX-30.png" alt="CX-30">
          <p class="car-size-CX-30">4,395×1,795×1,540</p>
        </li>

        <!-- MX-30 -->
        <li class="around3" style="--i:2;">
          <img src="../img/MX-30.png" alt="MX-30">
          <p class="car-name-MX-30">MX-30</p>
          <p class="car-size-MX-30">4,395×1,795×1,550</p>
        </li>

        <!-- CX-5 -->
        <li class="around4" style="--i:3;">
          <img src="../img/CX-5.png" alt="CX-5">
          <p class="car-name-CX-5">CX-5</p>
          <p class="car-size-CX-5">4,575×1845×1,690</p>
        </li>

        <!-- CX-60 -->
        <li class="around5" style="--i:4;">
          <img src="../img/CX-60.png" alt="CX-60">
          <p class="car-name-CX-60">CX-60</p>
          <p class="car-size-CX-60">4,740×1,890×1,685</p>
        </li>

        <!-- CX-8 -->
        <li class="around6" style="--i:5;">
          <img src="../img/CX-8.png" alt="CX-8">
          <p class="car-name-CX-8">CX-8</p>
          <p class="car-size-CX-8">4,925×1,845×1,730</p>
        </li>

        <!-- MAZDA6 -->
        <li class="around7" style="--i:6;">
          <img src="../img/MAZDA6.png" alt="MAZDA6">
          <p class="car-name-MAZDA6">MAZDA6</p>
          <p class="car-size-MAZDA6">(s)4,865×1,840×1,450<br>(W)4,805×1,840×1,480</br></p>
        </li>

        <!-- MAZDA3 -->
        <li class="around8" style="--i:7;">
          <img src="../img/MAZDA3.png" alt="MAZDA3">
          <p class="car-name-MAZDA3">MAZDA3</p>
          <p class="car-size-MAZDA3">(f)4,460×1,795×1,440<br>(s)4,460×1,795×1,445</p>
        </li>

        <!-- MAZDA2 -->
        <li class="around9" style="--i:8;">
          <img src="../img/MAZDA2.png" alt="MAZDA2">
          <p class="car-name-MAZDA2">MAZDA2</p>
          <p class="car-size-MAZDA2">4,080×1,695×1,500</p>
        </li>

        <!-- ROADSTER -->
        <li class="around10" style="--i:9;">
          <img src="../img/ROADSTER.png" alt="ROADSTER">
          <p class="car-name-ROADSTER"><b>ROADSTER</b></p>
          <p class="car-size-ROADSTER"><b>3,915×1,735×1,235</b></p>
        </li>
      </span>

      <!-- 軽自動車アイコン -->
      <span class="catalogue3" style="--i:6;--x:1;--y:-1;"><ion-icon name="car-outline"></ion-icon>

        <!-- キャロル -->
        <li class="around11" style="--i:0;">
          <img src="../img/carol.png" alt="carol">
          <p class="car-name-carol">CAROL</p>
          <p class="car-size-carol">3,395×1,475×1,525</p>
        </li>

        <!-- フレア -->
        <li class="around12" style="--i:1;">
          <img src="../img/flair.png" alt="flair">
          <p class="car-name-flair">FLAIR</p>
          <p class="car-size-flair">3,395×1,475×1,650</p>
        </li>

        <!-- フレアワゴン -->
        <li class="around13" style="--i:2;">
          <img src="../img/flair-wagon.png" alt="flair-wagon">
          <p class="car-name-flair-wagon" style="text-align: center;">FLAIR<br>WAGON</br></p>
          <p class="car-size-flair-wagon">3,395×1,475×1,785</p>
        </li>

        <!-- フレアクロスオーバー -->
        <li class="around14" style="--i:3;">
          <img src="../img/flair-crossover.png" alt="flair-crossover">
          <p class="car-name-flair-crossover" style="text-align: center;">FLAIR<br>CROSSOVER</br></p>
          <p class="car-size-flair-crossover">3,395×1,475×1,680</p>
        </li>

        <!-- スクラムワゴン -->
        <li class="around15" style="--i:4;">
          <img src="../img/scrum-wagon.png" alt="scrum-wagon">
          <p class="car-name-scrum-wagon" style="text-align: center;">SCRUM<br>WAGON</br></p>
          <p class="car-size-scrum-wagon">3,395×1,475×1,910</p>
        </li>

      </span>

      <span class="kinou8" style="--i:7;--x:1;--y:1;"></span>
    </div>

    <!-- 閉じるアイコン -->
    <div class="close"><!-- <ion-icon name="close-outline"></ion-icon> --></div>






  </div>

  <div class="question">

    <!-- 雑務 -->
    <div class="questions" style="--i:0;--x:0;--y:0;">
      <p><b>a</b></p>
    </div>
    <!-- 保険手続き -->
    <div class="questions" style="--i:1;--x:0;--y:1;">
      <p><b>u</b></p>
    </div>
    <!-- 一般代行手続き -->
    <div class="questions" style="--i:2;--x:-1;--y:0;"><a href="daikoutetuduki.html" target="_blank">
        <p><b>代行手続き</b></p>
      </a></div>
    <div class="questions" style="--i:3;--x:1;--y:1;">
      <p><b>i</b></p>
    </div>
    <div class="questions" style="--i:4;--x:-1;--y:1;">
      <p><b>e</b></p>
    </div>
    <div class="questions" style="--i:5;--x:1;--y:0;">
      <p><b>o</b></p>
    </div>


  </div>


  <!-- question 閉じるアイコン -->
  <div class="close2"><ion-icon name="close-outline"></ion-icon></div>







  <!-- 普通車アイコンnavi -->
  <nav class="navi1">

    <!-- CX-3 navi -->
    <h2>CX-3</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu1">カタログ</div>
      </li>
      <div class="detail1">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/cx-3/common/pdf/cx-3_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/CX-3/CX-3_grade_price.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/CX-3/CX-3_grade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/CX-3/CX-3_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/CX-3/CX-3_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-3/CX-3_mazda_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/CX-3/cx-3_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu1-2">主要緒元・装備</div>
      </li>
      <div class="detail1-2">
        <dl>
          <dt><a href="../PDF/CX-3/cx-3_specification_syuyousyogen.pdf" target="_blank">主要諸元</a></dt>
          <dt><a href="../PDF/CX-3/cx-3_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-3/cx-3_specification_color.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt><a href="../PDF/CX-3/cx-3_specification_puraice&op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/CX-3/cx-3_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt class="dt-bottom"><a href="../PDF/CX-3/cx-3_specification_es.pdf" target="_blank">環境仕様</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- CX-30 navi -->
  <nav class="navi2">
    <h2>CX-30</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu2">カタログ</div>
      </li>
      <div class="detail2">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/cx-30/common/pdf/cx-30_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/CX-30/CX-30_gurade_praice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/CX-30/CX-30_grade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/CX-30/CX-30_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/CX-30/CX-30_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-30/CX-30_mazda_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/CX-30/cx-30_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu2-2">主要緒元・装備</div>
      </li>
      <div class="detail2-2">
        <dl>
          <dt><a href="../PDF/CX-30/cx-30_specification_syuyousyogen.pdf" target="_blank">主要緒元</a></dt>
          <dt><a href="../PDF/CX-30/cx-30_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-30/cx-30_specification_praice&op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/CX-30/cx-30_specification_connected.pdf" target="_blank">コネクテッドサービス</a></dt>
          <dt><a href="../PDF/CX-30/cx-30_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/CX-30/cx-30_specification_color.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/CX-30/cx-30_specification_es.pdf" target="_blank">環境仕様</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- MX-30 navi -->
  <nav class="navi3">
    <h2>MX-30</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu3">カタログ</div>
      </li>
      <div class="detail3">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/mx-30/common/pdf/mx-30_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/MX-30/MX-30_grade_praice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/MX-30/MX-30_grade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/MX-30/MX-30_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/MX-30/MX-30_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/MX-30/MX-30_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
          <dt class="ev-dt-top"><a
              href="https://www.mazda.co.jp/globalassets/assets/cars/mx-30evmodel/common/pdf/mx-30evmodel_catalog.pdf"
              target="_blank">始めから<br>(EV)</br></a></dt>
          <dt><a href="../PDF/MX-30/MX-30evmodel_grade_praice.pdf" target="_blank">グレード<br>(EV)</br></a></dt>
          <dt><a href="../PDF/MX-30/MX-30evmodel_grade_chart.pdf" target="_blank">グレード別装備<br>(EV)</br></a></dt>
          <dt><a href="../PDF/MX-30/MX-30evmodel_color.pdf" target="_blank">ボディ・シート色<br>(EV)</br></a></dt>
        </dl>
      </div>
      <li><a href="../PDF/MX-30/mx-30_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu3-2">主要緒元・装備</div>
      </li>
      <div class="detail3-2">
        <dl>
          <dt><a href="../PDF/MX-30/mx-30_specification_syuyousyogen.pdf" target="_blank">主要緒元</a></dt>
          <dt><a href="../PDF/MX-30/mx-30_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/MX-30/mx-30_specification_puraice&op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/MX-30/mx-30_specification_color.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt><a href="../PDF/MX-30/mx-30_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/MX-30/mx-30_specification_connected.pdf" target="_blank">コネクテッドサービス</a></dt>
          <dt class="dt-bottom"><a href="../PDF/MX-30/mx-30_specification_es.pdf" target="_blank">環境仕様</a></dt>
          <dt><a href="../PDF/MX-30/mx-30evmodel_specification_zyuuden.pdf" target="_blank">給電・充電<br>(EV)</br></a></dt>
          <dt><a href="../PDF/MX-30/mx-30evmodel_specification_connected.pdf" target="_blank">コネクテッドサービス<br>(EV)</br></a>
          </dt>
          <dt><a href="../PDF/MX-30/mx-30evmodel_specification_safety.pdf" target="_blank">安全装備<br>(EV)</br></a></dt>
          <dt><a href="../PDF/MX-30/mx-30evmodel_specification_syuyousoubi.pdf" target="_blank">主要装備<br>(EV)</br></a></dt>
          <dt><a href="../PDF/MX-30/mx-30evmodel_specification_color.pdf" target="_blank">カラーコンビネーション<br>(EV)</br></a></dt>
          <dt><a href="../PDF/MX-30/mx-30evmodel_specification_es.pdf" target="_blank">環境仕様<br>(EV)</br></a></dt>
          <dt class="dt-bottom"><a href="../PDF/MX-30/mx-30evmodel_specification_syuyousyogen.pdf"
              target="_blank">主要緒元<br>(EV)</br></a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- CX-5 navi -->
  <nav class="navi4">
    <h2>CX-5</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu4">カタログ</div>
      </li>
      <div class="detail4">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/cx-5/common/pdf/cx-5_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/CX-5/CX-5_grade_praice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/CX-5/CX-5_grade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/CX-5/CX-5_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/CX-5/CX-5_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-5/CX-5_mazda_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/CX-5/cx-5_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu4-2">主要緒元・装備</div>
      </li>
      <div class="detail4-2">
        <dl>
          <dt><a href="../PDF/CX-5/cx-5_specification_syuyousyogen.pdf" target="_blank">主要緒元</a></dt>
          <dt><a href="../PDF/CX-5/cx-5_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-5/cx-5_specification_puraice_op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/CX-5/cx-5_specification_connected.pdf" target="_blank">コネクテッドサービス</a></dt>
          <dt><a href="../PDF/CX-5/cx-5_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/CX-5/cx-5_specification_color.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/CX-5/cx-5_specification_es.pdf" target="_blank">環境仕様</a></dt>
        </dl>
      </div>
    </ul>
  </nav>


  <!-- CX-60 navi -->
  <nav class="navi5">
    <h2>CX-60</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu5">カタログ</div>
      </li>
      <div class="detail5">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/cx-60/common/pdf/cx-60_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/CX-60/CX-60_grade_praice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/CX-60/CX-60_grade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/CX-60/CX-60_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/CX-60/CX-60_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-60/CX-60_mazda_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/CX-60/cx-60_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu5-2">主要緒元・装備</div>
      </li>
      <div class="detail5-2">
        <dl>
          <dt><a href="../PDF/CX-60/cx-60_specification_syuyousyogen.pdf" target="_blank">主要諸元</a></dt>
          <dt><a href="../PDF/CX-60/cx-60_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-60/cx-60_specification_color.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt><a href="../PDF/CX-60/cx-60_specification_puraice_op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/CX-60/cx-60_specification_connected.pdf" target="_blank">コネクテッドサービス</a></dt>
          <dt><a href="../PDF/CX-60/cx-60_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt class="dt-bottom"><a href="../PDF/CX-60/cx-60_specification_es.pdf" target="_blank">環境仕様</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- CX-8 navi -->
  <nav class="navi6">
    <h2>CX-8</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu6">カタログ</div>
      </li>
      <div class="detail6">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/cx-8/common/pdf/cx-8_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/CX-8/CX-8_grade_praice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/CX-8/CX-8_grade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/CX-8/CX-8_colors.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/CX-8/CX-8_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-8/CX-8_mazda_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/CX-8/cx-8_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu6-2">主要緒元・装備</div>
      </li>
      <div class="detail6-2">
        <dl>
          <dt><a href="../PDF/CX-8/cx-8_specification_syuyousyogen.pdf" target="_blank">主要緒元</a></dt>
          <dt><a href="../PDF/CX-8/cx-8_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CX-8/cx-8_specification_color.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt><a href="../PDF/CX-8/cx-8_specification_puraice_op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/CX-8/cx-8_specification_connected.pdf" target="_blank">コネクテッドサービス</a></dt>
          <dt><a href="../PDF/CX-8/cx-8_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt class="dt-bottom"><a href="../PDF/CX-8/cx-8_specification_es.pdf" target="_blank">環境仕様</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- MAZDA6 navi -->
  <nav class="navi7">
    <h2>MAZDA6</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu7">カタログ</div>
      </li>
      <div class="detail7">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/mazda6/common/pdf/mazda6_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/MAZDA6/mazda6_grade_puraice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/MAZDA6/mazda6_garade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/MAZDA6/mazda6_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/MAZDA6/mazda6_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/MAZDA6/mazda6_mazda_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/MAZDA6/mazda6_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu7-2">主要緒元・装備</div>
      </li>
      <div class="detail7-2">
        <dl>
          <dt><a href="../PDF/MAZDA6/mazda6_specification_syuyousyogen_sedan.pdf" target="_blank">主要緒元<br>(セダン)</br></a>
          </dt>
          <dt><a href="../PDF/MAZDA6/mazda6_specification_syuyousoubi_sedan.pdf" target="_blank">主要装備<br>(セダン)</br></a>
          </dt>
          <dt><a href="../PDF/MAZDA6/mazda6_specification_color_sedan.pdf" target="_blank">カラーコンビネーション<br>(セダン)</br></a>
          </dt>
          <dt class="dt-bottom"><a href="../PDF/MAZDA6/mazda6_specification_es_sedan.pdf"
              target="_blank">環境仕様<br>(セダン)</br></a></dt>
          <dt><a href="../PDF/MAZDA6/mazda6_specification_syuyousyogen_wagon.pdf" target="_blank">主要緒元<br>(ワゴン)</br></a>
          </dt>
          <dt><a href="../PDF/MAZDA6/mazda6_specification_syuyousoubi_wagon.pdf" target="_blank">主要装備<br>(ワゴン)</br></a>
          </dt>
          <dt><a href="../PDF/MAZDA6/mazda6_specification_color_wagon.pdf" target="_blank">カラーコンビネーション<br>(ワゴン)</br></a>
          </dt>
          <dt class="dt-bottom"><a href="../PDF/MAZDA6/mazda6_specification_es_wagon.pdf"
              target="_blank">環境仕様<br>(ワゴン)</br></a></dt>
          <dt><a href="../PDF/MAZDA6/mazda6_specification_puraice_op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/MAZDA6/mazda6_specification_safety.pdf" target="_blank">安全装備</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- MAZDA3 navi -->
  <nav class="navi8">
    <h2>MAZDA3</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu8">カタログ</div>
      </li>
      <div class="detail8">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/mazda3/common/pdf/mazda3_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_grade_praice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_grade_chart.pdf" target="_blank">グレード別装備</a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_equipment.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_connect.pdf" target="_blank">マツダコネクト・最後</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/MAZDA3/mazda3_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu8-2">主要緒元・装備</div>
      </li>
      <div class="detail8-2">
        <dl>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_syuyousyogen_fastback.pdf"
              target="_blank">主要緒元<br>(ファストバック)</br></a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_syuyousoubi_fastback.pdf"
              target="_blank">主要装備<br>(ファストバック)</br></a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_es_fastback.pdf" target="_blank">環境仕様<br>(ファストバック)</br></a></dt>
          <dt class="dt-bottom"><a href="../PDF/MAZDA3/mazda3_specification_color_fastback.pdf"
              target="_blank">カラーコンビネーション<br>(ファストバック)</br></a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_syuyousyogen_sedan.pdf" target="_blank">主要緒元<br>(セダン)</br></a>
          </dt>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_syuyousoubi_sedan.pdf" target="_blank">主要装備<br>(セダン)</br></a>
          </dt>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_es_sedan.pdf" target="_blank">環境仕様<br>(セダン)</br></a></dt>
          <dt class="dt-bottom"><a href="../PDF/MAZDA3/mazda3_specification_color_sedan.pdf"
              target="_blank">カラーコンビネーション<br>(セダン)</br></a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_connected.pdf" target="_blank">コネクテッドサービス</a></dt>
          <dt><a href="../PDF/MAZDA3/mazda3_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt class="dt-bottom"><a href="../PDF/MAZDA3/mazda3_specification_puraice_op.pdf" target="_blank">価格＆セットオプション</a>
          </dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- MAZDA2 navi -->
  <nav class="navi9">
    <h2>MAZDA2</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu9">カタログ</div>
      </li>
      <div class="detail9">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/mazda2/common/pdf/mazda2_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_model_BD.pdf" target="_blank">モデル<br>(BD)</br></a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_model_sport.pdf" target="_blank">モデル<br>(SPORT)</br></a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_model_sunlit.pdf" target="_blank">モデル<br>(Sunlit Citrus)</br></a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_model_standard.pdf" target="_blank">モデル<br>(15C/XD・15MB)</br></a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_equipment.pdf" target="_blank">主要装備</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/MAZDA2/mazda2_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu9-2">主要緒元・装備</div>
      </li>
      <div class="detail9-2">
        <dl>
          <dt><a href="../PDF/MAZDA2/mazda2_specification_syuyousyogen.pdf" target="_blank">主要緒元</a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_specification_puraice_op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_specification_es.pdf" target="_blank">環境仕様</a></dt>
          <dt><a href="../PDF/MAZDA2/mazda2_specification_color.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/MAZDA2/mazda2_specification_kumiawase.pdf" target="_blank">組み合わせ</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- ROADSTER navi -->
  <nav class="navi10">
    <h2>ROADSTER</h2>
    <ul class="navi-menu">

      <li>
        <div class="cataloguemenu10">カタログ</div>
      </li>
      <div class="detail10">
        <dl>
          <dt><a href="https://www.mazda.co.jp/globalassets/assets/cars/roadster/common/pdf/roadster_catalog.pdf"
              target="_blank">始めから</a></dt>
          <dt><a href="../PDF/ROADSTER/roadster_gurade_praice.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/ROADSTER/roadster_color.pdf" target="_blank">ボディ・シート色</a></dt>
          <dt><a href="../PDF/ROADSTER/roadster_equipment.pdf" target="_blank">主要装備・最後</a></dt>
          <dt class="RF-dt-top"><a
              href="https://www.mazda.co.jp/globalassets/assets/cars/roadsterrf/common/pdf/roadster-rf_catalog.pdf"
              target="_blank">始めから<br>(RF)</br></a></dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_gurade_praice.pdf" target="_blank">グレード<br>(RF)</br></a></dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_color.pdf" target="_blank">ボディ・シート色<br>(RF)</br></a></dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_equipment.pdf" target="_blank">主要装備・最後<br>(RF)</br></a></dt>
        </dl>
      </div>
      <li><a href="../PDF/ROADSTER/roadster_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu10-2">主要緒元・装備</div>
      </li>
      <div class="detail10-2">
        <dl>
          <dt><a href="../PDF/ROADSTER/roadster_specification_syuyousyogen.pdf" target="_blank">主要緒元</a></dt>
          <dt><a href="../PDF/ROADSTER/roadster_specification_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/ROADSTER/roadster_specification_puraice_op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/ROADSTER/roadster_specification_es.pdf" target="_blank">環境仕様</a></dt>
          <dt class="dt-bottom"><a href="../PDF/ROADSTER/roadster_specification_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_specification_syuyousyogen.pdf" target="_blank">主要緒元<br>(RF)</br></a>
          </dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_specification_syuyousoubi.pdf" target="_blank">主要装備<br>(RF)</br></a>
          </dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_specification_puraice_op.pdf"
              target="_blank">価格＆セットオプション<br>(RF)</br></a></dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_specification_color.pdf" target="_blank">カラーコンビネーション<br>(RF)</br></a>
          </dt>
          <dt><a href="../PDF/ROADSTER/roadster-rf_specification_es.pdf" target="_blank">環境仕様<br>(RF)</br></a></dt>
          <dt class="dt-bottom"><a href="../PDF/ROADSTER/roadster-rf_specification_safety.pdf"
              target="_blank">安全装備<br>(RF)</br></a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- 軽自動車アイコンnavi -->
  <!-- キャロル navi -->
  <nav class="navi11">
    <h2>CAROL</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu11">カタログ</div>
      </li>
      <div class="detail11">
        <dl>
          <dt><a href="../PDF/CAROL/carol_start.pdf" target="_blank">始めから</a></dt>
          <dt><a href="../PDF/CAROL/carol_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/CAROL/carol_equipment.pdf" target="_blank">装備</a></dt>
          <dt><a href="../PDF/CAROL/carol_grade.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/CAROL/carol_color.pdf" target="_blank">ボディ・シート色</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/CAROL/carol_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu11-2">主要緒元・装備</div>
      </li>
      <div class="detail11-2">
        <dl>
          <dt><a href="../PDF/CAROL/carol_syuyousyogen.pdf" target="_blank">主要諸元</a></dt>
          <dt><a href="../PDF/CAROL/carol_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/CAROL/carol_price-op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/CAROL/carol_color2.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/CAROL/carol_es.pdf" target="_blank">環境仕様・最後</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- フレア navi -->
  <nav class="navi12">
    <h2>FLAIR</h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu12">カタログ</div>
      </li>
      <div class="detail12">
        <dl>
          <dt><a href="../PDF/FLAIR/flair_start.pdf" target="_blank">始めから</a></dt>
          <dt><a href="../PDF/FLAIR/flair_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/FLAIR/flair_equipment.pdf" target="_blank">装備</a></dt>
          <dt><a href="../PDF/FLAIR/flair_grade.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/FLAIR/flair_color.pdf" target="_blank">ボディ・シート色</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/FLAIR/flair_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu12-2">主要緒元・装備</div>
      </li>
      <div class="detail12-2">
        <dl>
          <dt><a href="../PDF/FLAIR/flair_syuyousyogen.pdf" target="_blank">主要諸元</a></dt>
          <dt><a href="../PDF/FLAIR/flair_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/FLAIR/flair_price-op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/FLAIR/flair_color2.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/FLAIR/flair_es.pdf" target="_blank">環境仕様・最後</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- フレアワゴン navi -->
  <nav class="navi13">
    <h2>FLAIR<br>WAGON</br></h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu13">カタログ</div>
      </li>
      <div class="detail13">
        <dl>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_start.pdf" target="_blank">始めから</a></dt>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_equipment.pdf" target="_blank">装備</a></dt>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_grade.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_color.pdf" target="_blank">ボディ・シート色</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/FLAIR-WAGON/flair-wagon_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu13-2">主要緒元・装備</div>
      </li>
      <div class="detail13-2">
        <dl>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_syuyousyogen.pdf" target="_blank">主要諸元</a></dt>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_price-op.pdf" target="_blank">価格＆セットオプション</a></dt>
          <dt><a href="../PDF/FLAIR-WAGON/flair wagon_color2.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/FLAIR-WAGON/flair wagon_es.pdf" target="_blank">環境仕様・最後</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- フレアクロスオーバー navi -->
  <nav class="navi14">
    <h2>FLAIR<br>CROSSOVER</br></h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu14">カタログ</div>
      </li>
      <div class="detail14">
        <dl>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_start.pdf" target="_blank">始めから</a></dt>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_rquipment.pdf" target="_blank">装備</a></dt>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_grade.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_color.pdf" target="_blank">ボディ・シート色</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/FLAIR-CROSSOVER/flaircrossover_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu14-2">主要緒元・装備</div>
      </li>
      <div class="detail14-2">
        <dl>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_syuyousyogen.pdf" target="_blank">主要諸元</a></dt>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_syuyousoubi.pdf" target="_blank">主要装備</a></dt>
          <dt><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_color2.pdf" target="_blank">カラーコンビネーション</a></dt>
          <dt class="dt-bottom"><a href="../PDF/FLAIR-CROSSOVER/flair-crossover_es.pdf" target="_blank">環境仕様・最後</a></dt>
        </dl>
      </div>
    </ul>
  </nav>

  <!-- スクラムワゴン navi -->
  <nav class="navi15">
    <h2>SCRUM<br>WAGON</br></h2>
    <ul class="navi-menu">
      <li>
        <div class="cataloguemenu15">カタログ</div>
      </li>
      <div class="detail15">
        <dl>
          <dt><a href="../PDF/SCRUM-WAGON/220404_scrum_wagon_start.pdf" target="_blank">始めから</a></dt>
          <dt><a href="../PDF/SCRUM-WAGON/220404_scrum_wagon_safety.pdf" target="_blank">安全装備</a></dt>
          <dt><a href="../PDF/SCRUM-WAGON/220404_scrum_wagon_equipment.pdf" target="_blank">装備</a></dt>
          <dt><a href="../PDF/SCRUM-WAGON/220404_scrum_grade.pdf" target="_blank">グレード</a></dt>
          <dt><a href="../PDF/SCRUM-WAGON/220404_scrum_wagon_color.pdf" target="_blank">ボディ・シート色</a></dt>
        </dl>
      </div>
      <li><a href="../PDF/SCRUM-WAGON/scrum-wagon_accessory.pdf" target="_blank">アクセサリー</a></li>
      <li>
        <div class="cataloguemenu15-2">主要緒元・装備</div>
      </li>
      <div class="detail15-2">
        <dl>
          <dt><a href="../PDF/SCRUM-WAGON/220404_scrum_wagon_syuyousyogen.pdf" target="_blank">主要諸元</a></dt>
          <dt><a href="../PDF/SCRUM-WAGON/220404_scrum_wagon_es.pdf" target="_blank">環境仕様</a></dt>
          <dt class="dt-bottom"><a href="../PDF/SCRUM-WAGON/220404_scrum_wagon_syuyousoubi.pdf" target="_blank">主要装備・最後</a>
          </dt>
        </dl>
      </div>
    </ul>
  </nav>



  <!-- 使用アイコン -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <script src="../JS/main.js"></script>
  <script src="../JS/question.js"></script>

</body>
<!-- こんにちは -->

</html>