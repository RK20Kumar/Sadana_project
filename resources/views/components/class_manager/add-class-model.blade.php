{{-- Add student popup model code here --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
		<form action="{{ route('dashboard.course.add') }}" method="POST">
		@csrf
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				{{-- register form data --}}
				<div class="modal-body">
					<div class="row">

						{{-- Stream details --}}
							<div class="mb-3">
							<label  class="form-label mb-2">Grade/Stream</label>
							<div class="mb-3">
							<select class="default-select wide" aria-label="Default select example" name="grade" required>
								<option selected>Select Option</option>
								<option value="after al">After A/L</option>
								<option value="a/l commerce">A/L Commerce</option>
								<option value="a/l science">A/L Science</option>
								<option value="a/l arts">A/L Arts</option>
								<option value="a/l technology">A/L Technology</option>
								<option value="o/l">O/L</option>
								<option value="grade 9">Grade 9</option>
								<option value="grade 8">Grade 8</option>
								<option value="grade 7">Grade 7</option>
								<option value="grade 6">Grade 6</option>
								<option value="grade 5 - scholarship">Grade 5 - Scholarship</option>
								<option value="other">Other</option>
								</select>
							</div>

						{{-- medium details --}}
							<div class="mb-3">
							<label  class="form-label mb-2">Medium</label>
							<div class="mb-3">
								<select class="default-select wide" aria-label="Default select example" name="medium" required>
									<option selected>Select Option</option>
									<option value="sinhala">Sinhala</option>
									<option value="english">English</option>
									<option value="other">Other</option>
								</select>
							</div>
							</div>
								
						{{-- subject name --}}
						
							<div class="mb-3">
							<label for="exampleFormControlInput4" class="form-label mb-2">Subject </label>
							<input type="text" class="form-control" id="exampleFormControlInput4" placeholder="" name="subject_name" required>
							</div>
							
						
						
			
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add Subject</button>
				</div>
			</div>
		</form>
	</div>
</div>