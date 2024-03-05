<div class="container py-4">
    <div class="welcome-container rounded-3 p-3">
        <h2 class="fw-bold fs-2 text-center mb-3">Sign up</h2>

        <form action="{{route('register')}}" method="post" class="w-75 mx-auto">
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control bg-transparent mb-3 text-white" id="name">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control bg-transparent mb-3 text-white" id="email">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control bg-transparent mb-3 text-white" id="password">
            <label for="password_confirmation" class="form-label">Password Confirm</label>
            <input type="password" name="password_confirmation" class="form-control bg-transparent mb-3 text-white"
                id="password_confirmation">
            <div class="text-center">
                <input type="submit" value="Signin" class="btn btn-light">
            </div>

        </form>
    </div>


</div>
