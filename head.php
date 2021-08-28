<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디자이너 장희성 포트폴리오</title>

  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- 테일윈드 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">

  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- 풀페이지 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css">

  <!-- 사이트 공통 JS -->
  <script src="resource/common.js" defer></script>
  <!-- 사이트 공통 CSS -->
  <link rel="stylesheet" href="resource/common.css">
</head>

<body>
  <div class="site-wrap">
    <header class="top-bar container mx-auto px-3 fixed top-0 left-0 w-full z-50 bg-black">
      <a class="<?=$pageCode == "main" ? 'text-red-500' : ''?>" href="index.ssg.php">메인</a>
      <a class="<?=$pageCode == "aboutMe" ? 'text-red-500' : ''?>" href="aboutMe.ssg.php">자기소개</a>
    </header>
    <main>