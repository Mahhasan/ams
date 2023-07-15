@extends('layouts.master')
@section('content')
<script src='https://meet.jit.si/external_api.js'></script>
<script type="text/javascript">
    function codeAddress() {
        const domain = 'meet.jit.si';
        const options = {
            userInfo: {
            // email: 'naim.fgs@daffodilvarsity.edu.bd',
            displayName: 'Md. Jannat-UL Naim'
        },
            roomName: 'AmsTestMeeting',
            width: 750,
            height: 500,
            parentNode: document.querySelector('#meet'),
            lang: 'en'
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    }
    window.onload = codeAddress;
</script>

<div class="container" style="display: flex;justify-content: center;align-items: center;">
    <div  id="meet" />
</div>

@endsection