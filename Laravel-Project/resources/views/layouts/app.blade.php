<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="h-[100px] flex items-center">
        <nav class="bg-slate-200 w-[50%] px-[15px] mx-auto h-[60px] flex justify-between items-center">
              <span class="text-[1.5em] opacity-50 font-semibold">Task List</span>
              <div onclick="show()" class=" border-[1.5px] rounded-[5px] border-solid border-slate-400 w-[7%] h-[40px] flex justify-center items-center">
                <img  class="h-[35px] opacity-50" src="{{ asset('images/menu.png') }}" alt="">
              </div>
        </nav>
    </div>
    <div class="" id="showContent">
        @yield('content')
    </div>
</body>

<script>
    let toggle = true;

    function show() {
        toggle = !toggle;

        const sc = document.getElementById('showContent');
        if(toggle === true) {
            sc.style.display = 'block';
        }
        else if(toggle === false) {
            sc.style.display = 'none';
        }
    }
</script>
</html>
