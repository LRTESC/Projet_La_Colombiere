@include('includes.head')
@include('includes.header')

<div class="register_form_wrapper">
    <form class="register_form" action="{{route('register_store')}}" method="POST">
        @csrf
        <div class="form_wrapper d-flex justify-content-evenly flex-wrap">
            <div class="w-100 d-flex flex-wrap">
                <label class="p-1 w-50" for="fname">
                    <input class="p-1 w-100" name="fname" type="text" placeholder="First Name" value="{{ old('fname') }}">
                </label>
                <label class="p-1 w-50" for="lname">
                    <input class="p-1 w-100" name="lname" type="text" placeholder="Last Name" value="{{ old('lname') }}">
                </label>
                @error('fname')
                <p class="p-1 w-50 text-danger">{{$message}}</p>
                @enderror
                @error('lname')
                <p class="p-1 w-50 text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="w-100 d-flex flex-wrap">
                <label class="p-1 w-50" for="username">
                    <input class="p-1 w-100" name="username" type="text" placeholder="Username" value="{{ old('username') }}">
                </label>
                <label class="p-1 w-50" for="mail">
                    <input class="p-1 w-100" name="mail" type="email" placeholder="E-mail" value="{{ old('mail') }}">
                </label>
                @error('username')
                <p class="p-1 w-50 text-danger">{{$message}}</p>
                @enderror
                @error('mail')
                <p class="p-1 w-50 text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="w-100 d-flex flex-wrap justify-content-center">
                <label class="p-1 w-50" for="password">
                    <input class="p-1 w-100" name="password" type="password" placeholder="password" value="{{ old('password') }}">
                </label>
            </div>
            @error('password')
            <p class="p-1 w-50 color-red text-danger">{{$message}}</p>
            @enderror
            <div class="p-1 w-100 d-flex justify-content-center">
                <button class="p-1 btn btn-primary" type="submit">Register</button>
            </div>
            <h2 class="mt-5 w-100">Optional</h2>
            <div class="w-100">
                <label class="p-1 w-50" for="phonenumber">
                    <input type="text" name="phonenumber" placeholder="Phone Number">
                </label>
                <label for="birthday">
                    Birthday
                    <input type="date" name="birthday">
                </label>
            </div>
        </div>
    </form>
</div>

@include('includes.footer')
