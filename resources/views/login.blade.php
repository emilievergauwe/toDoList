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

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body class="antialiased d-flex justify-content-center ">
        <div class="loginMainDiv">
            <div>
                <h1 class="text-center darkBlue mb-4" style="font-family: 'Poppins', sans-serif;">
                    To do list
                </h1>
                <div class="bg-white rounded-lg shadow-lg py-4 px-5">
                    <div class="secondaryTitle mb-3">Login to your account</div>
                    <div class="pb-2" style="font-size: 12px; font: normal normal 600 13px/30px Poppins;">Your e-mail</div>
                    <input class="border p-1 mb-4" style="width : 100%" type="email">
                    <div class="pb-2" style="font-size: 12px; font: normal normal 600 13px/30px Poppins;">Password</div>
                    <input class="border p-1 mb-4" style="width : 100%" type="password">
                    <div class="d-flex justify-content-between mb-4">
                        <a class="font-weight-bold" style="color: #2d4d73; font-size: 12px">Forgot password</a>
                        <button type="submit" class="btn btn-sm purpleBackground d-flex align-items-center justify-content-between border-0 text-white font-weight-bold py-2 px-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 20.333 17.792">
                                <path id="arrow-right-to-bracket-regular" d="M20.333,35.813V45.979a3.812,3.812,0,0,1-3.813,3.813H13.662a.953.953,0,1,1,0-1.906h2.859a1.912,1.912,0,0,0,1.906-1.906V35.813a1.912,1.912,0,0,0-1.906-1.906H13.662a.953.953,0,0,1,0-1.906h2.859A3.813,3.813,0,0,1,20.333,35.813Zm-6.612,4.432-5.083-5.4a.952.952,0,1,0-1.39,1.3l3.57,3.8H.953a.953.953,0,0,0,0,1.906h9.865l-3.571,3.8a.952.952,0,0,0,.041,1.347.964.964,0,0,0,.655.259.949.949,0,0,0,.694-.3l5.083-5.4A.949.949,0,0,0,13.721,40.245Z" transform="translate(0 -32)" fill="#fff"/>
                            </svg>
                            <span class="ml-3">Login</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>
