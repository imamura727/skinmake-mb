<?php
  $year = date('Y');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MULTI BALM - スキンメイク マルチバーム</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">




<!-- wow.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- style -->
<style>
  body {
    color: #2B2B2B;
    letter-spacing: 0.12em;
    /* 行間 */
    line-height: 2;
    text-align: justify;
  }

  .bg-beige{
    background-color: #efeaea;
  }
  .fv {
    padding-top: clamp(1rem, -2.273rem + 16.36vw, 10rem);
    display: flex;
    align-items: center; /* 垂直方向の中央揃え */
    justify-content: center; /* 水平方向の中央揃え */
    height: 100vh; /* ビューポートの高さを基準に */
    background-image: linear-gradient(0deg, rgba(255, 255, 255, 1) 10%,rgba(239, 234, 234, 1) 10%);
    @media (max-width: 576px) {
      background-image: linear-gradient(0deg, rgba(255, 255, 255, 1) 20%,rgba(239, 234, 234, 1) 20%);
      height: 80vh;
    }
  }
  .fv-logo {
    width: 100%;
    height: auto;
    max-width: 320px;
    @media (max-width: 576px) {
      width: 170px !important;
    }
  }
  .fv-logo-wrapper{
    display: flex;
    align-items: center; /* 垂直方向の中央揃え */
    justify-content: center; /* 水平方向の中央揃え */
    font-size: 3.5rem;
    line-height: 4rem;
  }
  .fv-img {
    width: 100%;
    height: auto;
    max-width: 400px;
    /* メディアスクリーン */
    @media (max-width: 576px) {
      width: 300px !important;
    }
  }
  .fv-img-wrapper{
    display: flex;
    align-items: center; /* 垂直方向の中央揃え */
    justify-content: center; /* 水平方向の中央揃え */
    overflow: hidden;
  }
  .img-vitamin{
    width: 100%;
    height: auto;
    max-width: 500px;
  }

  .additive-free{
    font-size: 1.5rem;
    aspect-ratio: 1 / 1; /* 縦横比を1:1に設定 */
    width: calc(100% / 4);
    /* 背景に線だけの丸 */
    border-radius: 50%;
    border: 2px solid #BFBFBF;
    margin: 2rem;
    position: relative;
    overflow: hidden;
    @media (max-width: 576px) {
      width: calc(100% / 2.8);
    }

    /* 斜め線を1本引く */
    ::before {
      z-index: 0;
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(-45deg, transparent 49%, #BFBFBF 50%, transparent 50%);
    }
  }
  .additive-num{
    font-size: 5.5rem;
    line-height: 1.2;
  }
  .how-to-title {
    position: relative;
  }
  .how-to-title:after {
      content: "";
      display: block;
      position: absolute;
      width: 60px;
      height: 2px;
      background-color: #555555FF;
      top: 100%; /* 親要素の下に配置 */
      left: 50%; /* 親要素の中央に配置 */
      transform: translateX(-50%); /* 中央揃え */
      margin-top: 1.5rem; /* 上下の間隔を調整 */
    }
  .footer-logo {
    width: 100%;
    height: auto;
    max-width: 250px;
  }
  .footer-link{
    color: #888888FF;
    text-decoration: none;
    transition: .2s;
    /* ホバー効果 */
    &:hover {
      color: #BFBFBF;
    }
  }

  /* アニメーション */
  /* ブラー＆フェードアップ */
@keyframes blurFadeUp {
  0% {
    opacity: 0;
    filter: blur(50px);
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    filter: blur(0);
    transform: translateY(0);
  }
}
.blurFadeUp {
  animation: blurFadeUp 0.5s ease-out;
}

/* フェードアップ */
@keyframes fadeUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.fadeUp {
  animation: fadeUp 0.5s ease-out;
}

</style>
</head>
<body>
  <div class="fv">
    <div class="container px-lg-5">
      <div class="row row-cols-2">
        <div class="col p-lg-5 text-center d-flex align-items-center">
          <div class="fv-logo-wrapper">
            <div>
              <img src="./images/skinmake_logo.svg" alt="" class="fv-logo mb-5">
              <div class="fw-semibold pb-5">
                MULTI BALM
              </div>
            </div>
          </div>
        </div>
        <div class="col p-lg-5 p-0 d-flex align-items-md-end align-items-center justify-content-start justify-content-md-end fv-img-wrapper">

            <img src="./images/multi_balm_fv.webp" alt="" class="fv-img wow blurFadeUp" width="400" height="768">

        </div>
      </div>
    </div>
  </div>

  <section>
    <div class="container py-md-5 pt-0 pb-5 px-4 mb-5 text-center">
      <div class="mb-3 fw-semibold fs-2 pt-md-5">
        スキンメイクマルチバーム
      </div>
      <div class="mb-5 fw-semibold fs-1">
        上質な潤いを纏い、<br class="d-block d-md-none">美しさの持続を高める
      </div>
      <div>
        お肌に潤いを満たす6種類の植物由来エモリエント成分とターンオーバーのリズムを整えるビタミンA（パルミチン酸レチノール）<br>
        肌細胞の酸化を防ぎ、皮脂の黒化と肌荒れを抑制するビタミンE（トフェコロール）、これらを一つのフォーミュラに融合。<br>
        至極の保湿により、さらなる美しさを追及。
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid">
      <div class="row row-cols-md-2 row-cols-1 text-center pb-5">

        <div class="col px-5 order-0 pb-5">
          <div class="p-md-5 px-5 m-xl-5 text-end">
            <img src="./images/argane.webp" alt="" class="img-fluid img-vitamin wow blurFadeUp" width="500" height="509">
          </div>
        </div>
        <div class="col px-5 d-flex align-items-center justify-content-start order-1">
          <div class="pb-5">
            <h3 class="fs-2 fw-semibold mb-md-5 mb-3">
              アルガンオイル<br>（アルガニアスピノサ核油）
            </h3>
            <div class="text-start text-md-center pb-5">
              古くから女性たちが美の秘薬として守り継いできた”黄金のオイル”。肌の若々しさを保つビタミンEと必須脂肪酸が贅沢に配合されています。乾燥や季節の変わり目による肌ストレスから守り、潤いをキープ。ハリと弾力に満ちた艶めく素肌へ導きます。
            </div>
          </div>
        </div>

        <div class="col order-3 order-md-2 px-5 d-flex align-items-center justify-content-end">
          <div class="pb-5">
            <h3 class="fs-2 fw-semibold mb-md-5 mb-3">
              ビタミンE<br>（トフェコロール）
            </h3>
            <div class="text-start text-md-center pb-5">
              パソコンやスマートフォンのブルーライト、紫外線、大気汚染など、現代女性の肌を脅かす環境ダメージをしっかりとブロック。くすみの原因に深くアプローチし、透明感のある艶肌へ。まるで光を纏ったような、内側から輝く素肌美を叶えます。<br class="d-none d-xl-block">
            </div>
          </div>
        </div>
        <div class="col order-2 order-md-3 px-0 pb-5">
          <div class="text-end">
            <img src="./images/vitamin_e.webp" alt="" class="img-fluid" width="1260" height="949">
          </div>
        </div>

        <div class="col order-4 px-5 mb-5 pb-5">
          <div class="p-md-5 px-5 m-xl-5 text-end">
            <img src="./images/vitamin_a.webp" alt="" class="img-fluid img-vitamin" width="500" height="502">
          </div>
        </div>
        <div class="col order-5 px-5 d-flex align-items-center justify-content-start">
          <div class="pb-5">
            <h3 class="fs-2 fw-semibold mb-md-5 mb-3">
              ビタミンA<br>（パルミチン酸レチノール）
            </h3>
            <div class="text-start text-md-center pb-5">
              肌のターンオーバーを促進し、キメの整ったなめらかな肌に導きます。ハリと弾力のある肌づくりをサポートし、シワやたるみにアプローチ。肌に若々しい印象を与えます。
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="bg-beige">
    <div class="container py-5 text-center fw-bold">
      <div class="d-lg-flex py-5 my-lg-5">
        <div class="flex-grow-1">
          <div class="row row-cols-3">
            <div class="col additive-free d-flex align-items-center justify-content-center">
              <div class="">
                パラベン
              </div>
            </div>
            <div class="col additive-free d-flex align-items-center justify-content-center">
              <div class="">
                石油系<br>界面活性剤
              </div>
            </div>
            <div class="col additive-free d-flex align-items-center justify-content-center">
              <div class="">
                着色料
              </div>
            </div>
              <div class="col additive-free d-flex align-items-center justify-content-center">
              <div class="">
                合成香料
              </div>
            </div>
            <div class="col additive-free d-flex align-items-center justify-content-center">
              <div class="">
                エタノール
              </div>
            </div>
            <div class="col additive-free d-flex align-items-center justify-content-center">
              <div class="">
                シリコーン
              </div>
            </div>

          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <div class="px-lg-5 px-3">
            <h3 class="fs-2 text-nowrap fw-semibold">
              <span class="additive-num fw-medium">6</span>つの<br class="d-none d-lg-block">
              <span class="fs-2">
                添加物フリー
              </span>
            </h3>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container text-center py-5">
      <div class="row row-cols-md-2 row-cols-1 py-md-5 py-3 my-lg-5">
        <div class="col order-1 order-md-0 d-flex align-items-center justify-content-center">
          <div>
            <h3 class="fw-bold fs-1 mb-5">心地よいテクスチャ</h3>
            <h4 class="fw-bold mb-3">伸び◯</h4>
            <h4 class="fw-bold mb-3">肌馴染◯</h4>
            <h4 class="fw-bold mb-3">ベタつきなし◯</h4>
          </div>
        </div>
        <div class="col order-0 order-md-1 px-lg-5 mb-5">
          <img src="./images/texture.webp" alt="" class="img-fluid" width="600" height="330">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-beige">
    <div class="container py-5 text-center">
      <h3 class="fs-1 pt-lg-5 mb-5 how-to-title">How to use</h3>
      <div class="mb-5 px-3">
        適量を乾燥が気になる箇所に塗布し、馴染ませてください。<br>
        施術直後からご使用いただけます。
      </div>
      <div class="row row-cols-md-3 row-cols-1 mb-5">
        <div class="col">
          <div class="px-2 mb-4">
            <div class="px-5">
              <img src="./images/how_to_use_01.webp" alt="" class="img-fluid" width="400" height="320">
            </div>
            <div class="fw-bold">CASE 1</div>
            <h4 class="fw-bold">施術後の保湿に</h4>
            <div class="px-2">
              眉の施術後1週間継続してご使用ください。乾燥を避け、１日２回を目安に塗布します。
            </div>
          </div>
        </div>
        <div class="col">
          <div class="px-2 mb-4">
            <div class="px-5">
              <img src="./images/how_to_use_02.webp" alt="" class="img-fluid" width="400" height="320">
            </div>
            <div class="fw-bold">CASE 2</div>
            <h4 class="fw-bold">施術前後の保湿に</h4>
            <div class="px-2">
              リップ施術の１週間前からご使用になることをおすすめします。保湿により色素の定着を促進します。
            </div>
          </div>
        </div>
        <div class="col">
          <div class="px-2 mb-4 text-center">
            <div class="px-5">
              <img src="./images/how_to_use_03.webp" alt="" class="img-fluid" width="400" height="320">
            </div>
            <div class="fw-bold">CASE 3</div>
            <h4 class="fw-bold">目元の乾燥にも</h4>
            <div class="px-2">
              乾燥が気になる時に適量を塗布します。メイクの上からでもOK
              <br>※アイライン施術後の塗布はおやめください
            </div>
          </div>
        </div>
      </div>
      <div class="my-5 text-center">
        <h4 class="py-5 fw-semibold fs-1" style="line-height:4rem;">
          スキンメイク施術前後の<br>パーツケアとして<br class="d-block d-md-none">お使いください。
        </h4>
      </div>
    </div>
  </section>

  <section class="bg-beige">
    <div class="container py-5">
      <div class="row row-cols-md-2 row-cols-1 mb-5">
        <div class="col mb-4 px-lg-5 px-3">
          <img src=" ./images/lid.webp" alt="" class="img-fluid" width="400" height="330">
        </div>
        <div class="col px-4">
          <div>
            目元、口元の気になる乾燥しやすい部分や唇の皮むけ改善、荒れ・乾燥予防などマルチにご使用頂けるマルチバームです。
3種類のビタミン「ビタミンC（テトラヘキシルデカン酸アスコルビル）」「ビタミンA（パルミチン酸レチノール）」「ビタミンE（トコフェロール）」により潤いのある肌へと導きます。
6種類の植物由来のエモリエント成分「ホホバ種子油」「オリーブ果実油」「アルガニアスピノサ核油」「シア脂」「ゴヨウマツ種子油」「スクワラン」メラニン生成抑制作用のある「リノール酸エチル」を配合。
保湿によりスキンメイクの定着を促進します。
          </div>
          <hr class="my-5">
          <div>
            <h5 class="mb-3">
              【ご使用上の注意】
            </h5>
お肌に異常が生じていないかよく注意して使用してください。
化粧品がお肌に合わないとき即ち次のような場合には、使用を中止してください。そのまま化粧品類の使用を続けますと、症状を悪化させることがありますので、皮膚科専門医等にご相談されることをおすすめします。
・使用中、赤味、はれ、かゆみ、刺激、色抜け（白斑等）や黒ずみ等の異常があらわれた場合
・使用したお肌に、直射日光があたって上記のような異常があらわれた場合
傷やはれもの、しっしん等、異常のある部位にはお使いにならないでください。
          </div>
          <hr class="my-5">
          <div>
            <h5 class="mb-3">
              【全成分】
            </h5>
ミネラルオイル 、マイクロクリスタリンワックス 、ワセリン 、テトラヘキシルデカン酸アスコルビル 、パルミチン酸レチノール 、トコフェロール、ホホバ種子油 、オリーブ果実油 、アルガニアスピノサ核油 、シア脂 、リノール酸エチル 、ゴヨウマツ種子油 、スクワラン
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-5 text-center">
      <div class="row row-cols-md-2 row-cols-1 mb-5 pt-5">
        <div class="col mb-5">
          <img src="./images/skinmake_mb.webp" alt="" class="img-fluid" width="500" height="500">
        </div>
        <div class="col d-flex align-items-center justify-content-center">
          <div>
            <h3 class="fw-bold mb-3">
              スキンメイク<br>マルチバーム 8g
            </h3>
            <div class="mb-5">
              定価 3,000円（税込）
            </div>
            <h4 class="fw-bold">
              SKINMAKE提携<br>サロン・クリニックにて<br>販売中
            </h4>
          </div>
        </div>
      </div>
      <div class="pb-5">
        <div class="mb-3">
          SKINMAKEマルチバームの取り扱いをご検討の<br>
          サロン・クリニックの方はこちらよりご連絡ください
        </div>
        <div>
          <a href="" class="btn btn-outline-secondary px-md-5 py-2 fw-medium fs-3" target="_blank" rel=”noopener noreferrer”><span class="px-5">glasse Ltd. 公式LINE</span></a>
        </div>
      </div>
    </div>
  </section>

  <footer class="pt-5 pb-3 text-center bg-beige text-center">
    <div class="py-5 mb-5">
      <a href="./">
        <img src="./images/skinmake_logo.svg" alt="" class="footer-logo">
      </a>
    </div>
    <div class="d-flex justify-content-center">
      <div class="mx-3">
        <a href="" class="footer-link">会社概要</a>
      </div>
      <div class="mx-3">
        <a href="" class="footer-link">プライバシーポリシー</a>
      </div>
    </div>
    <div>&copy; <?= $year ?> MULTI BALM</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>
