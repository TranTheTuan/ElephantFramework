<h1>Create an account</h1>
<form action="/register" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="subject">First Name</label>
                <input type="text" name="firstname" class="form-control" id="subject">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="subject">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="subject">
            </div>
        </div>
    </div>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="form-group">
    <label for="subject">Password</label>
    <input type="password" name="password" class="form-control" id="subject">
    </div>
    <div class="form-group">
    <label for="subject">Password Repeat</label>
    <input type="password" name="passwordConfirm" class="form-control" id="subject">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>