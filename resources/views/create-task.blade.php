@extends('layouts.app')

@section('content')
<div class="">
    <div class="justify-content-center todolistDiv" style="position : relative">
        <div class="d-flex flex-column" style="position : absolute; right : 0px">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button type="submit" style="background: #6d05a1 0% 0% no-repeat padding-box;" class="d-flex align-items-center justify-content-between btn btn-sm border-0 text-white font-weight-bold rounded-lg py-2 px-3 mt-2">
                    <a class="mr-2">Logout</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 20.854 17.7">
                        <path id="arrow-right-from-bracket-regular" d="M7.823,48.752a.961.961,0,0,1-.978.948H3.912A3.854,3.854,0,0,1,0,45.907V35.793A3.854,3.854,0,0,1,3.912,32H6.845a.949.949,0,1,1,0,1.9H3.912a1.932,1.932,0,0,0-1.956,1.9V45.907a1.932,1.932,0,0,0,1.956,1.9H6.845A.961.961,0,0,1,7.823,48.752ZM20.6,40.2l-5.179-5.373a1,1,0,0,0-1.382-.041.927.927,0,0,0-.042,1.34L17.618,39.9H7.461a.948.948,0,0,0,0,1.9H17.582l-3.664,3.775a.927.927,0,0,0,.042,1.34,1.163,1.163,0,0,0,.672.258.988.988,0,0,0,.712-.3L20.522,41.5A.866.866,0,0,0,20.6,40.2Z" transform="translate(0 -32)" fill="#fff"/>
                    </svg>
                </button>
            </form>
            <div class="mt-2 d-flex align-items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 19.443 22.221">
                        <path id="user-hair-long-solid" d="M4.166,5.555a5.555,5.555,0,0,1,11.11,0v.438A5.582,5.582,0,0,0,16.9,9.96l.169.169a.982.982,0,0,1-.694,1.675H3.065a.957.957,0,0,1-.694-1.675l.168-.169A5.546,5.546,0,0,0,4.127,5.994ZM12.9,4.166h-.056A2.77,2.77,0,0,1,10.659,3.1,3.469,3.469,0,0,1,7.638,4.861H6.319a3.658,3.658,0,0,0-.069.694V6.25a3.472,3.472,0,0,0,6.944,0V5.555A3.445,3.445,0,0,0,12.9,4.166Zm-.46,9.722a7,7,0,0,1,7,7,1.335,1.335,0,0,1-1.332,1.332H1.333A1.334,1.334,0,0,1,0,20.888a7,7,0,0,1,7-7Z" fill="#2d4d73"/>
                    </svg>
                </span>
                <span class="ml-2 mt-1 font-weight-bold darkBlue smallLabels">Welcome, {{ $user }}</span>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-start justify-content-md-center">
            <h1 class="text-center mb-5 darkBlue justify-content-center">
            To do list
            </h1>
        </div>
        <div class="bg-white borderRoundedXl shadow-lg p-4 mt-4">
            <div class="font-weight-bold darkBlue mb-3 ">Create Task</div>
                <form method="POST" action="/save-task">
                    @csrf
                    <div class="mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <input style="width: 70%;" id="taskInfo" type="text" name="taskInfo" value="" autofocus>
                            <input type="hidden" name="company" value="{{ $company }}">
                            <button type="submit" class="d-flex align-items-center justify-content-between btn btn-sm border-0 font-weight-bold rounded-lg py-2 px-3" style="background: #b3e824;">
                                <span class="mr-2">Save</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
