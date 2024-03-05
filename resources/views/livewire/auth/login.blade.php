<div class="container py-4">
    <div class="welcome-container rounded-3 p-3">
        <h2 class="fw-bold fs-2 text-center mb-3">Sign in</h2>

        <form action="" method="post" class="w-75 mx-auto">
            @csrf

            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control bg-transparent mb-3 text-white" id="email">

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control bg-transparent mb-3 text-white" id="password">
            <div class="text-center">
                <input type="submit" value="Signin" class="btn btn-light">
            </div>

        </form>
    </div>


</div>
