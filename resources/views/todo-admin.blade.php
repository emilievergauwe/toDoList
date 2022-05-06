<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


        <title>Admin Task List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body class="antialiased d-flex justify-content-center">
        <div>
            <div class="mt-4">
                <div class="d-flex flex-column float-right">
                    <button type="submit" class="d-flex align-items-center justify-content-between btn btn-sm purpleBackground border-0 text-white font-weight-bold rounded-lg py-2 px-3 mt-2">
                        <span class="mr-2">Logout</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 20.854 17.7">
                            <path id="arrow-right-from-bracket-regular" d="M7.823,48.752a.961.961,0,0,1-.978.948H3.912A3.854,3.854,0,0,1,0,45.907V35.793A3.854,3.854,0,0,1,3.912,32H6.845a.949.949,0,1,1,0,1.9H3.912a1.932,1.932,0,0,0-1.956,1.9V45.907a1.932,1.932,0,0,0,1.956,1.9H6.845A.961.961,0,0,1,7.823,48.752ZM20.6,40.2l-5.179-5.373a1,1,0,0,0-1.382-.041.927.927,0,0,0-.042,1.34L17.618,39.9H7.461a.948.948,0,0,0,0,1.9H17.582l-3.664,3.775a.927.927,0,0,0,.042,1.34,1.163,1.163,0,0,0,.672.258.988.988,0,0,0,.712-.3L20.522,41.5A.866.866,0,0,0,20.6,40.2Z" transform="translate(0 -32)" fill="#fff"/>
                        </svg>
                    </button>
                    <div class="mt-2 d-flex align-items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 19.443 22.221">
                                <path id="user-hair-long-solid" d="M4.166,5.555a5.555,5.555,0,0,1,11.11,0v.438A5.582,5.582,0,0,0,16.9,9.96l.169.169a.982.982,0,0,1-.694,1.675H3.065a.957.957,0,0,1-.694-1.675l.168-.169A5.546,5.546,0,0,0,4.127,5.994ZM12.9,4.166h-.056A2.77,2.77,0,0,1,10.659,3.1,3.469,3.469,0,0,1,7.638,4.861H6.319a3.658,3.658,0,0,0-.069.694V6.25a3.472,3.472,0,0,0,6.944,0V5.555A3.445,3.445,0,0,0,12.9,4.166Zm-.46,9.722a7,7,0,0,1,7,7,1.335,1.335,0,0,1-1.332,1.332H1.333A1.334,1.334,0,0,1,0,20.888a7,7,0,0,1,7-7Z" fill="#2d4d73"/>
                            </svg>
                        </span>
                        <span class="ml-2 mt-1 font-weight-bold" style="font-size : 12px; color : #2d4d73">Welcome, {{ $user }}</span>
                    </div>
                </div>
                <h1 class="text-center darkBlue mb-5" style="font-family: 'Poppins', sans-serif;">
                To do list
                </h1>
            </div>
            <div class="toDoListDiv p-4 shadow-lg">
                <div>
                    <div class="d-flex justify-content-between align-items-center">                
                        <div id="openTasksCount" class="secondaryTitle mb-3" style="font: normal normal medium 20px/30px Poppins;">{{ sizeof($openTasks) }} remaining tasks</div>
                        <button type="submit" class="d-flex align-items-center justify-content-between btn btn-sm greenBackground border-0 font-weight-bold rounded-lg mb-3 py-2 px-3">
                            <span class="mr-2" onclick="createNewTask()">+ Add New Task</span>
                        </button>
                    </div>
                    @foreach($openTasks as $task)
                        <div id="{{ $task['id'] }}" class="d-flex justify-content-between align-items-center border rounded-lg py-1 px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" id="task" value="{{ $task['id'] }}" onclick="onClickHandler({{ $task['id'] }})"></input>
                                <div class="ml-2">{{ $task['info'] }}</div>
                            </div>
                            <div style="cursor : pointer" onclick="deleteTask({{ $task['id'] }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 20.554 23.49">
                                    <path id="trash-can-solid" d="M6.2.812A1.467,1.467,0,0,1,7.515,0h5.524a1.467,1.467,0,0,1,1.312.812l.33.657h4.4a1.468,1.468,0,1,1,0,2.936H1.468a1.468,1.468,0,0,1,0-2.936h4.4ZM1.427,5.873H19.086V20.554a2.939,2.939,0,0,1-2.936,2.936H4.363a2.964,2.964,0,0,1-2.936-2.936ZM5.1,9.543V19.82a.764.764,0,0,0,.734.734.711.711,0,0,0,.734-.734V9.543a.711.711,0,0,0-.734-.734A.764.764,0,0,0,5.1,9.543Zm4.4,0V19.82a.764.764,0,0,0,.734.734.746.746,0,0,0,.775-.734V9.543a.746.746,0,0,0-.775-.734A.764.764,0,0,0,9.5,9.543Zm4.446,0V19.82a.734.734,0,0,0,1.468,0V9.543a.734.734,0,0,0-1.468,0Z" fill="red"/>
                                </svg>
                            </div>
                        </div>
                    @endforeach
                </div> 
                <div class="secondaryTitle mb-3 mt-4">Completed tasks</div>
                
                <div class="text-secondary">  
                    <div>
                        <div id="completedTask" class="d-none justify-content-between align-items-center border rounded-lg py-1 px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <svg id="Composant_2_4" data-name="Composant 2 – 4" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="8.5" cy="8.5" r="8.5" fill="#b3e824"/>
                                    <path id="check-solid" d="M9.815,96.22a.714.714,0,0,1,0,1.012l-5.729,5.729a.714.714,0,0,1-1.012,0L.21,100.1a.716.716,0,1,1,1.013-1.012l2.338,2.356L8.8,96.22a.714.714,0,0,1,1.012,0Z" transform="translate(3.975 -90.608)" fill="#383c3c"/>
                                </svg>
                                <div class="d-flex align-items-center">
                                    <div id="taskId" class="mx-2 "></div>
                                    <div class="font-weight-bold" style="font-size : 10px"></div>
                                </div>
                            </div>
                            <div id='' style="cursor : pointer" onclick="deleteTask(id)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 20.554 23.49">
                                    <path id="trash-can-solid" d="M6.2.812A1.467,1.467,0,0,1,7.515,0h5.524a1.467,1.467,0,0,1,1.312.812l.33.657h4.4a1.468,1.468,0,1,1,0,2.936H1.468a1.468,1.468,0,0,1,0-2.936h4.4ZM1.427,5.873H19.086V20.554a2.939,2.939,0,0,1-2.936,2.936H4.363a2.964,2.964,0,0,1-2.936-2.936ZM5.1,9.543V19.82a.764.764,0,0,0,.734.734.711.711,0,0,0,.734-.734V9.543a.711.711,0,0,0-.734-.734A.764.764,0,0,0,5.1,9.543Zm4.4,0V19.82a.764.764,0,0,0,.734.734.746.746,0,0,0,.775-.734V9.543a.746.746,0,0,0-.775-.734A.764.764,0,0,0,9.5,9.543Zm4.446,0V19.82a.734.734,0,0,0,1.468,0V9.543a.734.734,0,0,0-1.468,0Z" fill="red"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    @foreach($closedTasks as $task)
                    <div id="{{ $task['id'] }}">
                        <div class="d-flex justify-content-between align-items-center border rounded-lg py-1 px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <svg id="Composant_2_4" data-name="Composant 2 – 4" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="8.5" cy="8.5" r="8.5" fill="#b3e824"/>
                                    <path id="check-solid" d="M9.815,96.22a.714.714,0,0,1,0,1.012l-5.729,5.729a.714.714,0,0,1-1.012,0L.21,100.1a.716.716,0,1,1,1.013-1.012l2.338,2.356L8.8,96.22a.714.714,0,0,1,1.012,0Z" transform="translate(3.975 -90.608)" fill="#383c3c"/>
                                </svg>
                                <div class="d-flex align-items-center">
                                    <div class="mx-2 ">{{ $task['info'] }}</div>
                                    <div class="font-weight-bold" style="font-size : 10px">completed by {{ $task['achiever'] }}</div>
                                </div>
                            </div>
                            <div style="cursor : pointer" onclick="deleteTask({{ $task['id'] }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 20.554 23.49">
                                    <path id="trash-can-solid" d="M6.2.812A1.467,1.467,0,0,1,7.515,0h5.524a1.467,1.467,0,0,1,1.312.812l.33.657h4.4a1.468,1.468,0,1,1,0,2.936H1.468a1.468,1.468,0,0,1,0-2.936h4.4ZM1.427,5.873H19.086V20.554a2.939,2.939,0,0,1-2.936,2.936H4.363a2.964,2.964,0,0,1-2.936-2.936ZM5.1,9.543V19.82a.764.764,0,0,0,.734.734.711.711,0,0,0,.734-.734V9.543a.711.711,0,0,0-.734-.734A.764.764,0,0,0,5.1,9.543Zm4.4,0V19.82a.764.764,0,0,0,.734.734.746.746,0,0,0,.775-.734V9.543a.746.746,0,0,0-.775-.734A.764.764,0,0,0,9.5,9.543Zm4.446,0V19.82a.734.734,0,0,0,1.468,0V9.543a.734.734,0,0,0-1.468,0Z" fill="red"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>
            </div>
        </div>
    </body>
</html>

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
    var taskToRemove = document.getElementById(selectedTask);
    taskToRemove.remove(); 

    // Add completed task to completed task list
    // clone existing hidden completed task div model and render it visible
    var elem = document.getElementById('completedTask');
    var clone = elem.cloneNode(true);
    clone.classList.remove('d-none');
    clone.classList.add('d-flex');
    
    // fill model div with completed task info
    clone.id = selectedTask;
    var infoDivMain = clone.children[0];
    var infoDivSub = infoDivMain.children[1];
    var infoDiv = infoDivSub.children[0];
    var achieverDiv = infoDivSub.children[1];
    infoDiv.textContent = selectedTaskInfo;
    achieverDiv.textContent = 'completed by ' + selectedTaskAchiever;

    // Assign task id to its trashcan div
    var trashcanDiv = clone.children[1];
    trashcanDiv.id = selectedTask;

    elem.before(clone);
}

function deleteTask(selectedTask) {
    // Remove deleted task from list
    var taskToRemove = document.getElementById(selectedTask);
    taskToRemove.remove(); 

    // Remove deleted task from database
    axios.post(`delete-task`, {
            selectedTask: selectedTask,
        })
        .then((response) => {
            var data = response.data
            console.log(data);
        })
        .catch(error => {
            console.log(error);
        });
}
</script>