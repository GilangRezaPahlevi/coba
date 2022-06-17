<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\trix.css">
    <script type="text/javascript" src="..\trix.js"></script>
    <link rel="stylesheet" href="..\coba2.css">
    <title>Web Coba | {{ $title }}</title>
    <style>
      .active{
        color: aqua !important;
      }
      .dis{
        display: none;
      }

      .dis-anim{
        animation-name: diss;
        animation-duration: 4s;
        margin-top: -10px;
      }

      .des:focus{
        border-color: black !important;
      }

      @keyframes diss {
        0% {
          margin-top: -25px;
          opacity: .5;
        }
        50% {
          margin-top: -10px;
          opacity: 1;
        }
      }
      trix-toolbar [data-trix-button-group="file-tools"]{display : none}
      /* .img-input{
        cursor: pointer;
      }
      input#file-upload-button{display: none;} */
    </style>
  </head>
  <body class="row">

    @include('admin.adminnav')
      <div class="text-center col">
        @yield('container')
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
      documen.addEventListener('trix-file-accept', function(e) {e.preventDefault();})

      function previewImg(){
        const img = document.querySelector('#img');
        const img_prev = document.querySelector('.img-preview');
        const img_name = document.querySelector('#nameimg');

        img_prev.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(img.files[0]);

        oFReader.onload = function(oFREvent){
          img_prev.src = oFREvent.target.result;
          img_name.innerHTML =  img.files[0].name;
        }
      }
    </script>
  </body>
</html>