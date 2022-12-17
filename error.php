<?php
  $page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
  $server_url = "http://" . $_SERVER["SERVER_NAME"];
  $redirect_url = $_SERVER["REDIRECT_URL"];
  $redirect_url_array = parse_url($redirect_url);
  $end_of_path = strrchr($redirect_url_array["path"], "/");

  switch(getenv("REDIRECT_STATUS")){
    # "400 - Bad Request"
    case 400:
    $error_code = "400";
    break;

    # "401 - Unauthorized"
    case 401:
    $error_code = "401";
    break;

    # "403 - Forbidden"
    case 403:
    $error_code = "403";
    break;

    # "404 - Not Found"
    case 404:
    $error_code = "404";
    break;
  }
?>

<!DOCTYPE html>
  <head>
    <meta name="robots" content="noindex">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Page Not Found</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Rubik:wght@300&display=swap" rel="stylesheet">

    <!-- custom css stylesheets -->
    <!-- shared -->
    <link rel="stylesheet" href="https://terrabyte.eco/css/layout-styles.css">
    <link rel="stylesheet" href="https://terrabyte.eco/css/site-styles.css">
    <link rel="stylesheet" href="https://terrabyte.eco/css/header-styles.css">
    <link rel="stylesheet" href="https://terrabyte.eco/css/footer-styles.css">

    <!-- page styles -->
    <style>

    </style>

    <!-- script files -->
    <script src="https://terrabyte.eco/js/shared-scripts.js"></script>
    <script src="https://terrabyte.eco/js/header-scripts.js"></script>

    <!-- tracking -->
    <script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js" id="ZwSg9rf6GA" async defer></script>

  </head>

  <body class="flex-container flex-vertical">
  <svg class="hide" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <defs>
      <g id="logo">
        <path class="a" d="M401.37,63.23l-7.55,15.92a2.72,2.72,0,0,0-.22,1,1.65,1.65,0,0,0,.67,1.3,2.41,2.41,0,0,0,1.58.55h2.26a2.65,2.65,0,0,0,1.74-.51,2.14,2.14,0,0,0,.74-.88l8.24-17.4Z"/><path class="a" d="M461.24,79.15,432.72,19a3.28,3.28,0,0,0-1.19-1.39,3.86,3.86,0,0,0-2.08-.47h-3.83a3.9,3.9,0,0,0-2.09.47A3.27,3.27,0,0,0,422.35,19l-15.61,32.9h7.48l13.31-28.18,27,56.9a4.14,4.14,0,0,0,.79.88A2.44,2.44,0,0,0,457,82h2.26a2.43,2.43,0,0,0,1.58-.55,1.68,1.68,0,0,0,.67-1.3A2.75,2.75,0,0,0,461.24,79.15Z"/><path class="a" d="M647.16,17.71a2.4,2.4,0,0,0-1.58-.56h-2.25a2.94,2.94,0,0,0-1.41.33,3.59,3.59,0,0,0-1.18,1.06L616.27,45.88,591.81,18.54a2.72,2.72,0,0,0-1.13-1.06,3.3,3.3,0,0,0-1.47-.33H587a2.4,2.4,0,0,0-1.58.56,1.65,1.65,0,0,0-.68,1.3,1.29,1.29,0,0,0,.17.65,3.17,3.17,0,0,1,.28.55l27.51,31.7h7.22l27.51-31.7a2.57,2.57,0,0,0,.34-.55,1.88,1.88,0,0,0,.11-.65A1.65,1.65,0,0,0,647.16,17.71Z"/><path class="a" d="M612.66,63.23V80a1.84,1.84,0,0,0,.68,1.49,2.74,2.74,0,0,0,1.8.55h2.15a2.94,2.94,0,0,0,1.91-.55,1.84,1.84,0,0,0,.68-1.49V63.23Z"/><path class="a" d="M166.75,51.91a3,3,0,0,0,1.92-.56,1.81,1.81,0,0,0,.67-1.48V48.48a1.93,1.93,0,0,0-.67-1.58,3,3,0,0,0-1.92-.55h-44v5.56Z"/><path class="a" d="M129.88,76.46V63.23h-7.1V80a1.83,1.83,0,0,0,.67,1.49,2.77,2.77,0,0,0,1.81.55h44a3,3,0,0,0,1.92-.55,1.83,1.83,0,0,0,.67-1.49V76.46Z"/><path class="a" d="M171.82,22.71V19.29a1.92,1.92,0,0,0-.67-1.58,3,3,0,0,0-1.92-.56h-44a2.78,2.78,0,0,0-1.81.56,1.92,1.92,0,0,0-.67,1.58v3.42Z"/><path class="a" d="M814.36,51.91a3,3,0,0,0,1.92-.56,1.82,1.82,0,0,0,.68-1.48V48.48a1.94,1.94,0,0,0-.68-1.58,3,3,0,0,0-1.92-.55h-44v5.56Z"/><path class="a" d="M777.5,76.46V63.23h-7.11V80a1.84,1.84,0,0,0,.68,1.49,2.74,2.74,0,0,0,1.8.55h44a2.94,2.94,0,0,0,1.91-.55,1.84,1.84,0,0,0,.68-1.49V76.46Z"/><path class="a" d="M819.44,22.71V19.29a1.92,1.92,0,0,0-.68-1.58,2.94,2.94,0,0,0-1.91-.56h-44a2.75,2.75,0,0,0-1.8.56,1.92,1.92,0,0,0-.68,1.58v3.42Z"/><path class="a" d="M306.78,63.23V80a1.84,1.84,0,0,0,.68,1.49,2.74,2.74,0,0,0,1.8.55h2a3,3,0,0,0,1.92-.55,1.83,1.83,0,0,0,.67-1.49V63.23Z"/><path class="a" d="M362.59,79.15,343,51.78c9.73-1,17.36-8.37,17.36-17.25,0-9.56-8.82-17.38-19.6-17.38H309.26a2.75,2.75,0,0,0-1.8.56,1.92,1.92,0,0,0-.68,1.58v3.42h34c7.38,0,13.38,5.28,13.38,11.82s-6,11.82-13.38,11.82h-34v5.56h28.41L355,79.52a10.57,10.57,0,0,0,1.57,1.72,4.08,4.08,0,0,0,2.71.78h1.35a2.41,2.41,0,0,0,1.58-.55,1.66,1.66,0,0,0,.68-1.3A2,2,0,0,0,362.59,79.15Z"/><path class="a" d="M212.07,63.23V80a1.84,1.84,0,0,0,.68,1.49,2.74,2.74,0,0,0,1.8.55h2a3,3,0,0,0,1.92-.55,1.84,1.84,0,0,0,.68-1.49V63.23Z"/><path class="a" d="M267.88,79.15,248.32,51.78c9.73-1,17.35-8.37,17.35-17.25,0-9.56-8.82-17.38-19.59-17.38H214.55a2.75,2.75,0,0,0-1.8.56,1.92,1.92,0,0,0-.68,1.58v3.42h34c7.37,0,13.37,5.28,13.37,11.82s-6,11.82-13.37,11.82h-34v5.56h28.41l19.85,27.61a10.21,10.21,0,0,0,1.58,1.72,4,4,0,0,0,2.7.78H266a2.39,2.39,0,0,0,1.57-.55,1.63,1.63,0,0,0,.68-1.3A2,2,0,0,0,267.88,79.15Z"/><path class="a" d="M542.91,48.5a16.83,16.83,0,0,0,8-14c0-9.56-8.82-17.38-19.59-17.38H499.8a2.75,2.75,0,0,0-1.8.56,1.92,1.92,0,0,0-.68,1.58v3.42h34c7.37,0,13.37,5.28,13.37,11.82,0,6.39-5.74,11.58-12.88,11.82h-34.5v5.56h36c7.66,0,14,5.48,14,12.27S541,76.46,533.35,76.46H504.43V63.23h-7.11V80a1.84,1.84,0,0,0,.68,1.49,2.74,2.74,0,0,0,1.8.55h33.55c11.07,0,20.12-8,20.12-17.84C553.47,57.43,549.18,51.53,542.91,48.5Z"/><path class="a" d="M731.61,22.71a3,3,0,0,0,1.92-.55,1.83,1.83,0,0,0,.67-1.49V19.29a1.92,1.92,0,0,0-.67-1.58,3,3,0,0,0-1.92-.56H680a2.75,2.75,0,0,0-1.8.56,1.92,1.92,0,0,0-.68,1.58v1.38a1.84,1.84,0,0,0,.68,1.49,2.74,2.74,0,0,0,1.8.55Z"/><path class="a" d="M702.3,46.35V80a1.83,1.83,0,0,0,.67,1.49,2.75,2.75,0,0,0,1.81.55h2a3,3,0,0,0,1.92-.55A1.84,1.84,0,0,0,709.4,80V46.35Z"/><path class="a" d="M84,22.71a3,3,0,0,0,1.92-.55,1.84,1.84,0,0,0,.68-1.49V19.29a1.92,1.92,0,0,0-.68-1.58A3,3,0,0,0,84,17.15H32.36a2.76,2.76,0,0,0-1.81.56,1.92,1.92,0,0,0-.67,1.58v1.38a1.83,1.83,0,0,0,.67,1.49,2.75,2.75,0,0,0,1.81.55Z"/><path class="a" d="M54.68,46.35V80a1.84,1.84,0,0,0,.68,1.49,2.74,2.74,0,0,0,1.8.55h2a2.94,2.94,0,0,0,1.91-.55A1.81,1.81,0,0,0,61.78,80V46.35Z"/><path class="a" d="M833.61,82a.24.24,0,0,1-.15,0,.17.17,0,0,1-.05-.13V76.94h-1.86a.25.25,0,0,1-.15,0,.14.14,0,0,1-.06-.12v-.12a.17.17,0,0,1,.06-.14.25.25,0,0,1,.15-.05h4.29a.23.23,0,0,1,.16.05.17.17,0,0,1,.06.14v.12a.14.14,0,0,1-.06.12.23.23,0,0,1-.16,0H834v4.91a.18.18,0,0,1-.06.13.25.25,0,0,1-.16,0Z"/><path class="a" d="M837.41,82a.25.25,0,0,1-.16,0,.18.18,0,0,1-.06-.13v-5.2a.17.17,0,0,1,.06-.14.25.25,0,0,1,.16-.05h.23a.26.26,0,0,1,.14,0l.06.07L840,80.08l2.13-3.51.06-.07a.26.26,0,0,1,.14,0h.23a.23.23,0,0,1,.15.05.17.17,0,0,1,.06.14v5.2a.18.18,0,0,1-.06.13.22.22,0,0,1-.15,0h-.17a.21.21,0,0,1-.15,0,.18.18,0,0,1-.06-.13V77.54l-1.79,3a.32.32,0,0,1-.11.12.34.34,0,0,1-.18,0h-.21a.34.34,0,0,1-.18,0,.43.43,0,0,1-.11-.12l-1.79-3v4.31a.21.21,0,0,1,0,.13.24.24,0,0,1-.15,0Z"/>
      </g>
      <g id="a-mountain-logo">
        <path d="M129.26,693.32,22.21,919A38.67,38.67,0,0,0,19,933.43c0,7,3.19,13.16,9.59,18.4A34.23,34.23,0,0,0,51,959.7H83c10.62,0,18.9-2.39,24.77-7.22s9.29-9,10.37-12.49L235,693.32Z"/><path d="M977.77,919,573.52,66.57c-4.3-8.75-9.86-15.31-16.83-19.71S540,40.3,527.19,40.3H472.87q-19.25,0-29.58,6.56c-7,4.4-12.53,11-16.75,19.71L205.37,532.84h106L500,133.54,881.89,940c2.11,3.51,5.87,7.67,11.19,12.49s13.31,7.22,23.95,7.22h32a34.33,34.33,0,0,0,22.39-7.87c6.34-5.24,9.55-11.39,9.55-18.4A39.12,39.12,0,0,0,977.77,919Z"/>
      </g>
      <g id="instagram-icon">
        <path d="M25,6.57c6,0,6.71,0,9.09.13C40.18,7,43,9.87,43.3,15.92c.11,2.37.13,3.08.13,9.08s0,6.72-.13,9.09c-.28,6-3.12,8.93-9.21,9.21-2.38.11-3.08.13-9.09.13s-6.71,0-9.08-.13C9.81,43,7,40.12,6.7,34.08,6.59,31.71,6.57,31,6.57,25s0-6.71.13-9.08C7,9.87,9.82,7,15.92,6.7,18.29,6.59,19,6.57,25,6.57Zm0-4.05c-6.11,0-6.87,0-9.27.13C7.57,3,3,7.56,2.66,15.73c-.11,2.4-.14,3.16-.14,9.27s0,6.87.13,9.27C3,42.43,7.56,47,15.73,47.35c2.4.1,3.16.13,9.27.13s6.87,0,9.27-.13C42.43,47,47,42.44,47.34,34.27c.11-2.4.14-3.16.14-9.27s0-6.87-.13-9.27C47,7.58,42.44,3,34.27,2.66,31.87,2.55,31.11,2.52,25,2.52Zm0,10.94A11.55,11.55,0,1,0,36.54,25,11.53,11.53,0,0,0,25,13.46Zm0,19A7.49,7.49,0,1,1,32.49,25,7.49,7.49,0,0,1,25,32.49ZM37,10.3A2.7,2.7,0,1,0,39.7,13,2.7,2.7,0,0,0,37,10.3Z"/>
      </g>
      <g id="twitter-icon">
        <path d="M50,9.49a20.48,20.48,0,0,1-5.89,1.62,10.29,10.29,0,0,0,4.51-5.68A20.42,20.42,0,0,1,42.1,7.92a10.26,10.26,0,0,0-17.48,9.36A29.12,29.12,0,0,1,3.48,6.56a10.28,10.28,0,0,0,3.17,13.7A10.29,10.29,0,0,1,2,19a10.26,10.26,0,0,0,8.23,10.19,10.46,10.46,0,0,1-4.64.18,10.28,10.28,0,0,0,9.59,7.12A20.64,20.64,0,0,1,0,40.71a29,29,0,0,0,15.73,4.61c19,0,29.8-16.09,29.15-30.52A20.52,20.52,0,0,0,50,9.49Z"/>
      </g>
      <g id="youtube-icon">
        <path d="M40.86,6.15c-7.51-.51-24.23-.51-31.73,0C1.02,6.71,.06,11.61,0,24.52c.06,12.89,1.01,17.81,9.14,18.37,7.5,.51,24.22,.51,31.73,0,8.12-.55,9.08-5.46,9.14-18.37-.06-12.89-1.01-17.81-9.14-18.37Zm-22.11,26.7V16.19l16.67,8.32-16.67,8.35Z"/>
      </g>
      <g id="eco-profile-icon">
        <path d="M12.75,2.52A10.55,10.55,0,1,0,23.3,13.07,10.55,10.55,0,0,0,12.75,2.52Z"/><path d="M37.05,26.49A10.55,10.55,0,1,0,47.6,37,10.55,10.55,0,0,0,37.05,26.49Zm0,16.3A5.77,5.77,0,1,1,42.81,37h0a5.76,5.76,0,0,1-5.75,5.77h0Z"/><path d="M18.3,38.61a5.76,5.76,0,1,1,0-3.23h4.89a10.56,10.56,0,1,0,0,3.22Z"/><path d="M41.88,16.39a5.76,5.76,0,0,1-10.12-1.66H47.65a10.6,10.6,0,1,0-.43,1.66ZM37.25,7.21a5.75,5.75,0,0,1,5.12,3.12H32.12A5.77,5.77,0,0,1,37.25,7.21Z"/>
      </g>
      <g id="wdht-icon">
        <path d="M20.28,7.2a20,20,0,0,1,3.61-1.58L22,1.18a2,2,0,0,0-1.09-1,2,2,0,0,0-1.5,0,2,2,0,0,0-1,2.6Z"/><path d="M42,47.24l-1.94-4.45a19.92,19.92,0,0,1-3.61,1.57l1.94,4.46a2,2,0,0,0,1.08,1A2,2,0,0,0,42,48.75,2,2,0,0,0,42,47.24Z"/><path d="M30.17,47.31a22.32,22.32,0,1,1,8.9-42.79A1.84,1.84,0,0,1,39.7,5a1.88,1.88,0,0,1,.55,1.4,1.94,1.94,0,0,1-.16.75,1.94,1.94,0,0,1-1.09,1,1.76,1.76,0,0,1-.75.14,1.9,1.9,0,0,1-.75-.16,18.38,18.38,0,1,0,0,33.72,1.91,1.91,0,0,1,.75-.17,2,2,0,0,1,.76.14,1.93,1.93,0,0,1,.65.41,2.16,2.16,0,0,1,.44.63,2,2,0,0,1,.16.76,1.78,1.78,0,0,1-.14.75,1.93,1.93,0,0,1-.41.65,1.88,1.88,0,0,1-.64.44A22.35,22.35,0,0,1,30.17,47.31Z"/><path d="M30.17,27a2,2,0,0,1-2-2V15.5a2,2,0,0,1,3.94,0V25a2,2,0,0,1-2,2Z"/><path d="M30.17,27a2,2,0,0,1-1.08-.32,2,2,0,0,1-.73-.86l-5.19-12a2,2,0,0,1,1-2.59,2,2,0,0,1,2.59,1l5.19,12a2,2,0,0,1-1,2.59A1.91,1.91,0,0,1,30.17,27Z"/>
      </g>
      <g id="github-icon">
        <path d="M25,0C11.2,0,0,11.19,0,25c0,11.05,7.16,20.42,17.1,23.72,1.25,.23,1.65-.54,1.65-1.2v-4.65c-6.95,1.51-8.4-2.95-8.4-2.95-1.14-2.89-2.78-3.66-2.78-3.66-2.27-1.55,.17-1.52,.17-1.52,2.51,.17,3.83,2.58,3.83,2.58,2.23,3.82,5.85,2.72,7.28,2.08,.22-1.61,.87-2.72,1.59-3.34-5.55-.64-11.39-2.78-11.39-12.36,0-2.73,.98-4.96,2.57-6.71-.26-.63-1.11-3.18,.24-6.62,0,0,2.1-.67,6.88,2.56,1.99-.55,4.13-.83,6.26-.84,2.12,.01,4.26,.29,6.26,.84,4.77-3.23,6.87-2.56,6.87-2.56,1.36,3.44,.5,5.99,.25,6.62,1.6,1.75,2.57,3.98,2.57,6.71,0,9.6-5.85,11.72-11.41,12.34,.9,.77,1.71,2.3,1.71,4.63v6.86c0,.66,.4,1.45,1.67,1.2,9.93-3.31,17.08-12.68,17.08-23.72C50,11.19,38.81,0,25,0Z"/>
      </g>
      <g id="mastodon-icon">
        <path d="M47.41,11.8c-.7-5.09-5.21-9.11-10.55-9.88-.9-.13-4.32-.61-12.23-.61h-.06c-7.92,0-9.62,.48-10.52,.61C8.85,2.67,4.11,6.27,2.96,11.43c-.55,2.54-.61,5.35-.51,7.93,.15,3.7,.18,7.4,.52,11.08,.24,2.45,.65,4.88,1.23,7.27,1.09,4.42,5.53,8.09,9.87,9.59,4.65,1.56,9.65,1.82,14.43,.75,.53-.12,1.05-.26,1.56-.42,1.16-.36,2.53-.77,3.53-1.49,.01-.01,.03-.02,.03-.04,0-.01,.01-.03,.01-.05v-3.57s0-.03-.01-.05c0-.01-.02-.03-.03-.04-.01,0-.03-.02-.04-.02-.02,0-.03,0-.05,0-3.07,.72-6.21,1.08-9.37,1.08-5.43,0-6.89-2.54-7.31-3.59-.34-.91-.55-1.86-.63-2.83,0-.02,0-.03,0-.05,0-.01,.02-.03,.03-.04,.01-.01,.03-.02,.04-.02,.02,0,.03,0,.05,0,3.02,.72,6.11,1.08,9.21,1.08,.75,0,1.49,0,2.24-.02,3.12-.09,6.41-.24,9.48-.83,.08-.02,.15-.03,.22-.05,4.84-.92,9.45-3.79,9.92-11.07,.02-.29,.06-3,.06-3.3,0-1.01,.33-7.17-.05-10.95Zm-7.46,18.16h-5.09v-12.28c0-2.58-1.09-3.9-3.32-3.9-2.45,0-3.67,1.56-3.67,4.64v6.72h-5.06v-6.72c0-3.08-1.23-4.64-3.68-4.64-2.21,0-3.32,1.32-3.32,3.9v12.28h-5.09v-12.65c0-2.58,.67-4.64,2.01-6.16,1.38-1.52,3.2-2.3,5.45-2.3,2.61,0,4.58,.99,5.89,2.96l1.27,2.09,1.27-2.09c1.31-1.97,3.28-2.96,5.89-2.96,2.25,0,4.06,.78,5.45,2.3,1.34,1.52,2.01,3.57,2.01,6.16v12.65Z"/>
      </g>

      <g id="hamburger-menu-icon">
        <path d="M46.93,41.72c0-1.38-.74-2.51-1.64-2.51H4.71c-.91,0-1.64,1.12-1.64,2.51s.74,2.51,1.64,2.51H45.29c.91,0,1.64-1.12,1.64-2.51Zm0-16.72c0-1.38-.74-2.51-1.64-2.51H4.71c-.91,0-1.64,1.12-1.64,2.51s.74,2.51,1.64,2.51H45.29c.91,0,1.64-1.12,1.64-2.51Zm0-16.72c0-1.38-.74-2.51-1.64-2.51H4.71c-.91,0-1.64,1.12-1.64,2.51s.74,2.51,1.64,2.51H45.29c.91,0,1.64-1.12,1.64-2.51Z"/>
      </g>
    </defs>
  </svg>

  <header class="padded-section">
    <div class="max-width flex-container align-center">
      <div class="banner-image-container flex-width flex-container align-center">
        <a id="banner-image" href="https://terrabyte.eco" class="set-width flex-container align-center">
          <svg viewBox="0 0 850 100">
            <use href="#logo"/>
          </svg>
        </a>
      </div>
      <div class="nav-container set-width flex-container align-center">
        <div class="hamburger-menu-icon clickable" data-nav-toggle>
          <svg viewBox="0 0 50 50">
            <use href="#hamburger-menu-icon"/>
          </svg>
        </div>
        <nav data-nav class="flex-container align-center">
          <a class="nav-item-container" href="https://terrabyte.eco">
            <span>Home</span>
          </a>
          <a class="nav-item-container" href="https://terrabyte.eco#projects">
            <span>Projects</span>
          </a>
          <a class="nav-item-container" href="https://terrabyte.eco/about-us">
            <span>About Us</span>
          </a>
        </nav>
      </div>
    </div>
  </header>

  <main class="flex-height">
    <section class="padded-section">
      <div class="max-width">
        <div class="section-header">
          <h1><span class="highlight-container">That's an Error (<?php print ($error_code); ?>)</span></h1>
        </div>
        <div class="section-content">
          <p>Looks like we found a bad byte and some dead pixels. Check the URL above and try again.</p>

          <p>You can also head to the homepage (<a class="standard-link" href="<?php print ($server_url); ?>"><?php print ($server_url); ?></a>) or go directly to the <a class="standard-link" href="https://terrabyte.eco">Terrabyte homepage</a> to try to find what you were looking for there.</p>
        </div>
      </div>
    </section>
  </main>

  <a id="footer-anchor" name="footer"></a>
  <footer data-footer>

    <div id="true-footer" class="padded-section">
      <div class="footer-top-container max-width flex-container">
        <div id="footer-logo-container" class="flex-width flex-container align-center">
          <a id="footer-logo" href="https://terrabyte.eco" class="set-width flex-container align-center">
            <svg viewBox="0 0 850 100">
              <use href="#logo"/>
            </svg>
          </a>
        </div>
        
        <div id="footer-socials-container" class="set-width flex-container">
          <!-- instagram -->
          <a class="footer-social icon-container" href="https://instagram.com/terrabyte_tech" target="_blank">
            <div class="icon">
              <svg viewBox="0 0 50 50">
                <use href="#instagram-icon"/>
              </svg>
            </div>
          </a>
          <!-- twitter -->
          <!-- no longer highlighting -->
          <!-- <a class="footer-social icon-container" href="https://twitter.com/TerrabyteEco" target="_blank">
            <div class="icon">
              <svg viewBox="0 0 50 50">
                <use href="#twitter-icon"/>
              </svg>
            </div>
          </a> -->

          <!-- mastodon -->
          <!-- rel="me" on homepage -->
          <!-- <a rel="me" href="https://mastodon.eco/@terrabyte" class="footer-social icon-container" target="_blank"> -->
          <a href="https://mastodon.eco/@terrabyte" class="footer-social icon-container" target="_blank">
            <div class="icon">
              <svg viewBox="0 0 50 50">
                <use href="#mastodon-icon"/>
              </svg>
            </div>
          </a>
          <!-- github -->
          <a class="footer-social icon-container" href="https://github.com/terrabyte-tech" target="_blank">
            <div class="icon">
              <svg viewBox="0 0 50 50">
                <use href="#github-icon"/>
              </svg>
            </div>
          </a>
          <!-- we dont have time -->
          <a class="footer-social icon-container" href="https://app.wedonthavetime.org/profile/Terrabyte" target="_blank">
            <div class="icon">
              <svg viewBox="0 0 50 50">
                <use href="#wdht-icon"/>
              </svg>
            </div>
          </a>
          <!-- youtube -->
          <a class="footer-social icon-container" href="https://www.youtube.com/@TerrabyteEco" target="_blank">
            <div class="icon">
              <svg viewBox="0 0 50 50">
                <use href="#youtube-icon"/>
              </svg>
            </div>
          </a>
          <!-- dot.eco profile -->
          <a class="footer-social icon-container" href="https://profiles.eco/terrabyte" target="_blank">
            <div class="icon">
              <svg viewBox="0 0 50 50">
                <use href="#eco-profile-icon"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
      <div class="footer-cols-container max-width flex-container">
        <div class="footer-left-cols flex-container flex-width">
          <div class="footer-info-col set-width">
            <h3>Legal</h3>
            <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/legal/privacy-policy.html">Privacy Policy</a>
            </div>
            <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/legal/cookie-policy.html">Cookie Policy</a>
            </div>
          </div>
          <div class="footer-info-col set-width">
            <h3>Company</h3>
            <!-- <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/about-us">About Us</a>
            </div> -->
            <!-- <div class="footer-link-container">
              <a class="standard-link" href="https://blog.terrabyte.eco">Blog</a>
            </div> -->
            <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/index.html#faqs">FAQ<span class="force-small-text">s</span></a>
            </div>
            <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/get-involved">Get Involved</a>
            </div>
            <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/donate">Donate</a>
            </div>
            

            <!-- <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/our-work">Our Work</a>
            </div> -->
            <!-- <div class="footer-link-container">
              <a class="standard-link" href="https://terrabyte.eco/our-impact">Our Impact</a>
            </div> -->
            
          </div>
          <div class="footer-info-col set-width">
            <h3>Projects</h3>
            <div class="footer-link-container">
              <a class="standard-link" href="https://www.pixelplanettoday.com" target="_blank">Pixel Planet Today</a>
            </div>
            <div class="footer-link-container">
              <a class="standard-link" href="https://www.pinekeepers.com" target="_blank">Pinekeepers</a>
            </div>
          </div>
        </div>
        
        <div class="footer-right-col flex-width">
          <!-- newsletter -->
          <h3>Sign up for the newsletter, <span class="little-bytes-text">&lt;little-bytes&gt;</span></h3>

          <form
  action="https://buttondown.email/api/emails/embed-subscribe/terrabyte"
  method="post"
  target="popupwindow"
  onsubmit="window.open('https://buttondown.email/terrabyte', 'popupwindow')"
  class="embeddable-buttondown-form">
    <!-- <label for="bd-email">Enter your email</label> -->
    <div class="footer-form-rows flex-container">
      <div id="email-row" class="form-row set-width flex-container">
        <span class="custom-input-container flex-width">
          <input type="email" name="email" id="bd-email" placeholder="name@email.com"/>
        </span>
      </div>
    </div>

    <div class="flex-container align-center">
      <div class="form-button-container set-width">
        <input type="submit" value="Subscribe" />
        <input type="hidden" name="tag" value="Terrabyte Subscribers" />
      </div>
      <p class="flex-width">Powered by 
        <a class="standard-link" href="https://buttondown.email" target="_blank">Buttondown</a>
      </p>
    </div>
  </form>

        </div>
      </div>

      <div class="max-width">
        <hr>
      </div>
      

      <div class="footer-bottom-container max-width flex-container align-center">
        <div id="footer-bottom-info-container" class="flex-width">
          <div id="footer-copyright">
            &copy; <span id="current-year-text"></span> Terrabyte, LLC. All Rights Reserved.
          </div>
          <div id="made-by">
            <span>Website designed &amp; hosted by <a class="standard-link" href="https://www.goldenharpmedia.com" target="_blank">Golden Harp Media</a></span>
          </div>
        </div>
        

        <div class="set-width footer-badges-container flex-container align-center">
          <!-- website carbon -->
          <div class="website-carbon-badge footer-badge">
            <div id="wcb" class="carbonbadge wcb-d"></div>
            <script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
          </div>
          <!-- clean creatives -->
          <div class="clean-creatives-badge footer-badge">
            <a href="https://www.cleancreatives.org" target="_blank">
              <div id="clean-creatives-img"></div>
            </a>
            
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>