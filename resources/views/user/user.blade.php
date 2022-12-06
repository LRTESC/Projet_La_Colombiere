@include('includes.head')
@include('includes.header')
<div class="login_form_wrapper">
    <form class="login_form" action="{{route('login_form')}}" method="POST">
        @csrf
        <div class="form_wrapper d-flex justify-content-center flex-wrap">
            <div class="w-100 d-flex justify-content-center flex-wrap">
                <label class="p-1 w-100 d-flex justify-content-center flex-wrap" for="id">
                    <input class="p-1 w-50" name="id" type="text" placeholder="Username or E-mail"
                           value="{{ old('id') }}">
                </label>
                @error('id')
                <p class="p-1 w-50 text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="w-100 d-flex flex-wrap justify-content-center">
                <label class="p-1 w-50" for="password">
                    <input class="p-1 w-100" name="password" type="password" placeholder="password">
                </label>
            </div>
            @error('password')
            <p class="p-1 w-50 color-red text-danger">{{$message}}</p>
            @enderror
            <div class="p-1 w-100 d-flex justify-content-center">
                <button class="p-1 btn btn-primary" type="submit">Login</button>
            </div>
        </div>
    </form>
</div>
@include('includes.footer')
