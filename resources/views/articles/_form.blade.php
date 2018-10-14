<div class="form-group">
    {!! Form::label('title', 'Title: ') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body: ') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Publish on:') !!}
    {!! Form::input('date', 'published_at', isset($article)?$article->published_at->format('Y-m-d'):\Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>



{{ csrf_field() }}
<div class="form-group">
    <label>Title: </label>
    <input type="text" class="form-control" name="title" value="{{isset($article)?$article->title:''}}" >
</div>
<div class="form-group">
    <label>Body: </label>
    <textarea class="form-control" name="body" cols="50" rows="10">{{isset($article)?$article->body:''}}</textarea>
</div>

<div class="form-group">
    {!! Form::label('image', 'Article Image: ') !!}
    {!! Form::file('image', null) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags: ') !!}
    {!! Form::select('tag_list[]', $tag_list, null,
    ['multiple', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <input type="date" class="form-control" name="published_at" value="{{isset($article)?$article->published_at->format('Y-m-d'):\Carbon\Carbon::now()->format('Y-m-d') }}" >
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary form-control" value="{{$submitButtonText }}" >
</div>
