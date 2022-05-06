@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="mt-4">
                    <div class="d-flex flex-column float-right">
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
                            <span class="ml-2 mt-1 font-weight-bold" style="font-size : 12px; color : #2d4d73">Welcome, {{ $user }}</span>
                        </div>
                    </div>
                    <h1 class="text-center mb-5" style="color: #2d4d73; font-family: 'Poppins', sans-serif;">
                    To do list
                    </h1>
                </div>
                <div class="bg-white rounded-lg shadow-lg card-body p-4 mt-4">
                    <div class="secondaryTitle mb-3" id="openTasksCount" style="font: normal normal medium 20px/30px Poppins;">{{ sizeof($openTasks) }} remaining tasks</div>
                        @foreach($openTasks as $task)
                            <div  id="{{ $task['id'] }}" class="d-flex align-items-center border rounded-lg py-1 px-3 mb-3">
                                <input type="checkbox" id="task" value="{{ $task['id'] }}" onclick="onClickHandler({{ $task['id'] }})"></input>
                                <div class="ml-2">{{ $task['info'] }}</div>
                            </div>
                        @endforeach
                    <div class="secondaryTitle mb-3 mt-4">Completed tasks</div>          
                    <div class="text-secondary">
                        <div id="completedTask1" class="d-none align-items-center border rounded-lg py-1 px-3 mb-3">
                            <svg id="Composant_2_4" data-name="Composant 2 – 4" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                <circle id="Ellipse_1" data-name="Ellipse 1" cx="8.5" cy="8.5" r="8.5" fill="#b3e824"/>
                                <path id="check-solid" d="M9.815,96.22a.714.714,0,0,1,0,1.012l-5.729,5.729a.714.714,0,0,1-1.012,0L.21,100.1a.716.716,0,1,1,1.013-1.012l2.338,2.356L8.8,96.22a.714.714,0,0,1,1.012,0Z" transform="translate(3.975 -90.608)" fill="#383c3c"/>
                            </svg>
                            <div class="d-flex align-items-center">
                                <div class="mx-2 "></div>
                                <div class="font-weight-bold" style="font-size : 10px"></div>
                            </div>
                        </div>
                        @foreach($closedTasks as $task)
                            <div id="completedTask" class="d-flex align-items-center border rounded-lg py-1 px-3 mb-3">
                                <svg id="Composant_2_4" data-name="Composant 2 – 4" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="8.5" cy="8.5" r="8.5" fill="#b3e824"/>
                                    <path id="check-solid" d="M9.815,96.22a.714.714,0,0,1,0,1.012l-5.729,5.729a.714.714,0,0,1-1.012,0L.21,100.1a.716.716,0,1,1,1.013-1.012l2.338,2.356L8.8,96.22a.714.714,0,0,1,1.012,0Z" transform="translate(3.975 -90.608)" fill="#383c3c"/>
                                </svg>
                                <div class="d-flex align-items-center">
                                    <div class="mx-2 ">{{ $task['info'] }}</div>
                                    <div class="font-weight-bold" style="font-size : 10px">completed by {{ $task['achiever'] }}</div>
                                </div>
                            </div>
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>

<script>
// Create JS variable for all company tasks, current user and open tasks
var tasks = {!! json_encode($tasks, JSON_HEX_TAG) !!};
var user = {!! json_encode($user, JSON_HEX_TAG) !!};

var openTasks = {!! json_encode($openTasks, JSON_HEX_TAG) !!};
var openTasksCount = openTasks.length;

// get selected task and change status and achiever.
function onClickHandler(value){
    var selectedTaskInfo;
    var selectedTaskAchiever;
    var selectedTask = value;

    tasks.forEach((element) => {
        if(element.id == selectedTask) {
            element.status = 'closed';
            element.achiever = user;

            // save completed task info and achiever
            selectedTaskInfo = element.info;
            selectedTaskAchiever = element.achiever;

            // update open tasks count
            openTasksCount -= 1;
            console.log(openTasksCount);
            document.getElementById('openTasksCount').textContent = openTasksCount + ' remaining tasks';
        }
    })

    // update database via axios post
    axios.post(`update-task`, {
            selectedTask: selectedTask,
            selectedTaskAchiever: selectedTaskAchiever,
        })
        .then((response) => {
            var data = response.data
            console.log(data);
        })
        .catch(error => {
            console.log(error);
        });

    // remove checked item from open tasks
    const element = document.getElementById(selectedTask);
    element.remove(); 

    // Add completed task to completed task list
    // clone existing hidden completed task div model and render it visible
    var elem = document.getElementById('completedTask1');
    var clone = elem.cloneNode(true);
    clone.classList.remove('d-none');
    clone.classList.add('d-flex');
    
    // fill model div with completed task info
    clone.id = selectedTask;
    var infoDivMain = clone.children[1];
    var infoDiv = infoDivMain.children[0];
    var achieverDiv = infoDivMain.children[1];
    infoDiv.textContent = selectedTaskInfo;
    achieverDiv.textContent = 'completed by ' + selectedTaskAchiever;
    elem.before(clone);
}
</script>
@endsection