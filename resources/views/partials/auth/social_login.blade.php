<div class="col-md-4">
    <div class="card">
        <div class="card-header"> {{ __("Socialite") }} </div>
        <div class="card-body">
        <a href="{{ route('social_auth', ['driver' => 'github']) }}" class="btn btn-dark btn-block">
            {{  __("GitHub") }} <i class="fa fa-github"></i>
        </a>
        <a href="{{ route('social_auth', ['driver' => 'facebook']) }}" class="btn btn-primary btn-block">
            {{  __("Facebook") }} <i class="fa fa-facebook"></i>
        </a>
        </div>
    </div>
</div>