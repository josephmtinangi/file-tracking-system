<div class="form-group">
    <label for="type_of_exam" class="col-sm-3 control-label">Type of Exam</label>
    <div class="col-sm-4">
        <select name="type_of_exam" id="type_of_exam" class="form-control">
            <option value="">-Select-</option>
            <option value="">University Exams</option>
            <option value="">Suplimentary Exams</option>
            <option value="">Special Exams</option>
            <option value="">Test</option>
        </select>
    </div>
</div>

{{-- this is for course selection --}}
<div class="form-group">
    <p><strong>Select course</strong></p>
    <table class="table table-striped">
        <thead>
        <th>Code</th>
        <th>Name</th>
        <th>Credit</th>
        <th>Select</th>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
{{-- //this is for course selection --}}


{{-- this is for year selection --}}
<div class="form-group">
    <label for="academic_year" class="col-sm-3 control-label">Academic Year</label>
    <div class="col-sm-4">
        <select name="academic_year" id="academic_year" class="form-control">
            <option value="">-Select-</option>
            <option value="">2013/2014</option>
            <option value="">2015/2016</option>
        </select>
    </div>
</div>
{{-- //this is for year selection --}}


{{-- this is for reasons --}}
<div class="form-group">
    <label for="reason" class="col-sm-3 control-label">Reason</label>
    <div class="col-sm-4">
        <textarea name="reason" id="reason" class="form-control" placeholder="please explain reasons for postponing"
                  cols="30" rows="10"></textarea>
    </div>
</div>
{{-- //this is for reasons --}}


{{-- this is for attachment --}}
<div class="form-group">
    <label for="attachment" class="col-sm-3 control-label">Attachment (Option)</label>
    <div class="col-sm-4">
        <input type="file" name="attachment" id="attachment">
    </div>
</div>
{{-- //this is for attachment --}}