<div>
   <form wire:submit.stop="validation">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" name="username" class="form-control @if ($errors->has('username')){{'is-invalid'}} @endif" wire:model="username">
					<div class="invalid-feedback" >@error('username'){{$message}}@enderror</div>
				</div>
			</div>
			<div class="col-sm-8 offset-sm-2">
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" class="form-control @if($errors->has('password')){{'is-invalid'}} @endif" wire:model="password" >
					<div class="invalid-feedback" role="alert">@error('password'){{$message}}@enderror</div>
				</div>
			</div>
			<div class="mt-4 col-sm-12 offset-sm-5">
			<button class="btn btn-primary">Login</button>
			</div>
		</div>
   </form>
</div>
