<div class="container py-4">
    <div class="welcome-container p-3 rounded-3">
        <h2 class="fs-2 fw-bold text-center">
            Add Project
        </h2>
        <form action="">
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control bg-transparent mb-3 text-white">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"
                class="form-control bg-transparent text-white mb-3"></textarea>

            <p>Technologies</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="technologies" value="" name="technologies[]">
                <label class="form-check-label" for="inlineCheckbox1">1</label>
            </div>
        </form>
    </div>

</div>
