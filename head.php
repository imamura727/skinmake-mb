<?php
  $year = date('Y');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    font-size: 2rem;
    aspect-ratio: 1 / 1; /* 縦横比を1:1に設定 */
    width: calc(100% / 4);
    /* 背景に線だけの丸 */
    border-radius: 50%;
    border: 2px solid #BFBFBF;
    margin: 2rem;
    position: relative;
    overflow: hidden;
    @media(max-width: 1999px){
      font-size: 1.5rem;
      line-height: 2rem;
      width: calc(100% / 4.4);
    }
    @media screen and (max-width: 767px) {
      font-size: 1rem;
      line-height: 1.5rem;
      width: calc(100% / 4.7);

    }
    @media (max-width: 576px) {
      font-size: 1.5rem;
      line-height: 2rem;
      width: calc(100% / 2.7);
    }
    @media(max-width: 493px){
      font-size: 1.2rem;
      line-height: 1.5rem;
      width: calc(100% / 2.8);
    }
    @media(max-width: 447px){
      font-size: 1.2rem;
      line-height: 1.5rem;
      width: calc(100% / 2.9);
    }
    @media(max-width: 412px){
      font-size: 1.2rem;
      line-height: 1.5rem;
      width: calc(100% / 3);
    }
    @media(max-width: 383px){
      font-size: 1.2rem;
      line-height: 1.5rem;
      width: calc(100% / 3.2);
    }
    @media(max-width: 341px){
      font-size: 1.2rem;
      line-height: 1.5rem;
      width: calc(100% / 3.4);
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
@keyframes blur {
  0% {
    opacity: 0;
    filter: blur(120px);
  }
  100% {
    opacity: 1;
    filter: blur(0);
  }
}
.blur {
  animation: blur .5s ease-in-out;
}

/* フェードアップ */
@keyframes fadeUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  90% {
    transform: translateY(1px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.fadeUp {
  opacity: 0;
  animation: fadeUp 0.5s ease-in-out;
  animation-fill-mode: forwards;  /* 繰り返さない */
}
.logo-nav {
  width: 200px;
}


.swiper-container {
    overflow: hidden; /* スライダー領域外の要素を非表示にする */
}
.swiper-slide img {
    width: 100%;
    height: auto;
    aspect-ratio: 1 / 1; /* 縦横比を1:1に設定 */
    object-fit: contain; /* スライダーの画像を領域内に収める */
}

.swiper-thumbnail .swiper-slide img {
    width: 100%;
    height: auto;
    aspect-ratio: 1 / 1; /* 縦横比を1:1に設定 */
    object-fit: cover; /* サムネイルの画像を領域に覆うように表示 */
}
</style>
