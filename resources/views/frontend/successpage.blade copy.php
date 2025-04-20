@extends('frontend.layouts.app')

@section('content-frontend')
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

    <div style="min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
        <dotlottie-player
            src="https://lottie.host/2a10e87c-b6cf-431e-a160-e4c71282dd74/rpnDy2b5Qf.lottie"
            background="transparent"
            speed="1"
            style="width: 800px; height: 800px;"
            loop autoplay>
        </dotlottie-player>
    </div>
@endsection
