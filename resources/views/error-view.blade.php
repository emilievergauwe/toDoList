@extends('layouts.app')
@section('content')
        <div class="relative">
            <button style="left: 2%; top: 1%" type="submit" class="d-flex align-items-center justify-content-between btn btn-sm border-0 font-weight-bold rounded-lg mb-3 py-2 px-3" style="background: #b3e824;">
                <span class="mr-2" onclick="goBack()">Go Back</span>
            </button>
            <div class="justify-content-center todolistDiv" style="position : relative; top: 20vh">
                <div class="d-flex flex-column justify-content-center bg-white borderRoundedXl shadow-lg p-4 mt-4">
                       <h3>Error. You do not have the credentials to access this page.</h3>
                       <h5>Check with your administrator for further information.</h5>
                </div>
            </div>
        </div>
@endsection
<script>
function goBack() {
    window.location.href = '/error'
}
</script>