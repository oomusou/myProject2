<!-- [User_id] Form Hidden Input -->
<div class="form-group">
    {!! Form::hidden( 'user_id', 1 , ['id' => 'user_id']) !!}
</div>


<!-- [Title] Form Text Input -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Please input title']) !!}
</div>
<!-- [Body] Form Textarea Input -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Please input body']) !!}
</div>

<!-- [Published_at ] Form Text Input -->
<div class="form-group">
    {!! Form::label('published_at', 'Published On :') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>


<!-- [Add Blog] Form Submit Input -->
<div class="form-group">
    {!! Form::submit( $submitText , ['class' => 'btn btn-primary form-control']) !!}
</div>