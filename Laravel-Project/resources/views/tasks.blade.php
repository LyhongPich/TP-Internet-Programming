@extends('layouts.app')

@section('content')

    @include('common.error');

    <form action="/task" method="POST" class="h-[258px] mt-[20px] w-[47%] mx-auto border-2 border-solid border-slate-400 rounded-[10px]">
        {{ csrf_field() }}

        <div class="h-[55px] bg-slate-200 border-b-2 border-solid border-slate-400 rounded-t-[10px]">
            <label for="new-task" class="w-[90%] mx-auto h-full flex items-center">
                New Task
            </label>
        </div>
        <div class="h-[200px] pt-[20px]">
            <div class="w-[90%] mx-auto">
                <label for="input-task" class="font-bold">
                    Task
                </label>
            </div>
            <div class="w-[90%] h-[40px] mx-auto mt-[10px] mb-[20px] rounded-[10px] border-2 border-solid border-slate-400">
                <input type="text" name="name" class="w-full pl-[2%] h-full rounded-[10px]">
            </div>
            <div class="w-[90%] h-[40px] mx-auto flex justify-between items-center">
                <button type="submit" class="flex w-[25%] rounded-[10px] h-full cursor-pointer justify-center items-center border-2 border-solid border-slate-400 ">
                    <img src="{{ asset('images/add.png') }}" class="h-[13px] mr-[10px]" alt="">
                    <span>Add Task</span>
                </button>
            </div>
        </div>
    </form>

    @if(count($tasks) > 0)
        <div class="h-[258px] w-[47%] mx-auto overflow-y-auto mt-[20px] rounded-[10px] border-2 border-solid border-slate-400">
            <div class="h-[55px] bg-slate-200 border-b-2 border-solid border-slate-400 rounded-t-[10px]">
                <label for="new-task" class="w-[90%] mx-auto h-full flex items-center">
                    Current Task
                </label>
            </div>
            <div class="h-[200px] pt-[20px]">
                <div class="w-[90%] h-[40px] flex items-center mx-auto">
                    <label for="input-task">
                        Task
                    </label>
                </div>
                <div class="w-[90%] h-0 border-2 border-solid border-slate-400 mx-auto"></div>
                <div class="w-[90%] mx-auto h-[105px] overflow-y-auto">
                    @foreach($tasks as $task)
                        <div id="task_{{ $task->id }}" class="flex w-full mx-auto items-center h-[50px]" onclick="changeColor(`task_{{ $task->id }}`)">
                            <div class="w-full h-full flex items-center">
                                <label for="">{{ $task->name }}</label>
                            </div>
                            <div class="w-full h-full flex items-center">
                                <form action="/task/{{ $task->id }}" method="POST" class="w-full h-full flex items-center">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="flex h-[80%] items-center justify-center rounded-[10px] bg-red-400 w-[30%] cursor-pointer">
                                        <img src="{{ asset('images/delete.png') }}" alt="" class="h-[25px]" style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(11deg) brightness(102%) contrast(106%);">
                                        <span class="text-white">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="w-full h-0 border-[1px] border-solid border-slate-400 mx-auto"></div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <script>
        let lastClick = null;

        function changeColor(id) {
            const blockID = document.getElementById(id);
            blockID.style.backgroundColor = 'rgb(241, 245, 249)';

            if (lastClick !== null) {
                const resetBlock = document.getElementById(lastClick);
                resetBlock.style.backgroundColor = 'white';
            }

            lastClick = id;
        }

        function resetColor(id) {
            const blockID = document.getElementById(id);
            blockID.style.backgroundColor = 'white';
        }
    </script>

@endsection
